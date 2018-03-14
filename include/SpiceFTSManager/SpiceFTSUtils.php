<?php

class SpiceFTSUtils
{
    static $standardFields = array(
        'id' => array(
            'type' => 'string',
            'index' => 'not_analyzed'
        ),
        'summary_text' => array(
            'type' => 'string'
        ),
        'related_ids' => array(
            'type' => 'string',
            'index' => 'not_analyzed'
        ),
        'assigned_user_name' => array(
            'type' => 'string'
        ),
        'assigned_user_id' => array(
            'type' => 'string',
            'index' => 'not_analyzed'
        ),
        'modified_by_name' => array(
            'type' => 'string'
        ),
        'modified_user_id' => array(
            'type' => 'string',
            'index' => 'not_analyzed'
        ),
        'created_by_name' => array(
            'type' => 'string'
        ),
        'created_by' => array(
            'type' => 'string',
            'index' => 'not_analyzed'
        ),
        'date_entered' => array(
            'type' => 'date',
            'index' => 'not_analyzed',
            'format' => 'yyyy-MM-dd HH:mm:ss||yyyy-MM-dd||epoch_millis'
        ),
        'date_modified' => array(
            'type' => 'date',
            'index' => 'not_analyzed',
            'format' => 'yyyy-MM-dd HH:mm:ss||yyyy-MM-dd||epoch_millis'
        ));

    static function getBeanIndexProperties($module)
    {
        global $db;
        //catch installation process and abort. table sysfts will not exist at the point during installation
        if($GLOBALS['installing'] === true)
            return false;

        $moduleProperties = $db->fetchByAssoc($db->query("SELECT * FROM sysfts WHERE module = '$module'"));
        if ($moduleProperties) {
            $modulePropertiesarray = json_decode(html_entity_decode($moduleProperties['ftsfields']), true);
            $seed = BeanFactory::getBean($module);
            foreach ($modulePropertiesarray as $modulePropertyIndex => $moduleProperty) {
                $modulePropertiesarray[$modulePropertyIndex]['indexfieldname'] = isset($moduleProperty['indexedname']) ? $moduleProperty['indexedname'] : SpiceFTSUtils::getFieldIndexName($seed, $moduleProperty['path']);
                $modulePropertiesarray[$modulePropertyIndex]['metadata'] = SpiceFTSUtils::getFieldIndexParams($seed, $moduleProperty['path']);
            }

            $seed = BeanFactory::getBean($module);
            if(method_exists($seed, 'add_fts_metadata')){
                $addFields = $seed->add_fts_metadata();
                foreach($addFields as $addFieldName => $addField){
                    $modulePropertiesarray[] = array(
                        'fieldid' =>  create_guid(),
                        'fieldname' =>  $addFieldName,
                        'indexfieldname' =>  $addFieldName,
                        'search' =>  $addField['search'],
                        'indextype' =>  $addField['type'],
                        'aggregate' =>  $addField['aggregate'],
                        'aggregatesize' =>  $addField['aggregatesize']
                    );
                }
            }

            return $modulePropertiesarray;
        }

        return false;
    }

    static function getBeanIndexSettings($module)
    {
        global $db;

        $moduleProperties = $db->fetchByAssoc($db->query("SELECT * FROM sysfts WHERE module = '$module'"));
        if ($moduleProperties) {
            return json_decode(html_entity_decode($moduleProperties['settings']), true);
        }

        return false;
    }

    static function getFieldIndexName($bean, $path)
    {
        $pathRecords = explode('::', $path);
        $valueBean = null;
        $fieldName = '';
        foreach ($pathRecords as $pathRecord) {
            $pathRecordDetails = explode(':', $pathRecord);
            switch ($pathRecordDetails[0]) {
                case 'root':
                    $valueBean = $bean;
                    break;
                case 'link':
                    $fieldName = !empty($fieldName) ? $fieldName . '->' . $pathRecordDetails[2] : $pathRecordDetails[2];
                    if($valueBean) {
                        $valueBean->load_relationship($pathRecordDetails[2]);
                        $valueBean = BeanFactory::getBean($valueBean->{$pathRecordDetails[2]}->getRelatedModuleName());
                    }
                    break;
                case 'field':
                    $fieldName = !empty($fieldName) ? $fieldName . '->' . $pathRecordDetails[1] : $pathRecordDetails[1];
                    break;
            }
        }
        return $fieldName;
    }

    static function getFieldIndexParams($bean, $path)
    {
        $pathRecords = explode('::', $path);
        $valueBean = null;
        $fieldData = array();
        foreach ($pathRecords as $pathRecord) {
            $pathRecordDetails = explode(':', $pathRecord);
            switch ($pathRecordDetails[0]) {
                case 'root':
                    if (!$bean)
                        $valueBean = BeanFactory::getBean($pathRecordDetails[1]);
                    else
                        $valueBean = $bean;
                    break;
                case 'link':
                    $valueBean->load_relationship($pathRecordDetails[2]);
                    $valueBean = BeanFactory::getBean($valueBean->{$pathRecordDetails[2]}->getRelatedModuleName());
                    break;
                case 'field':
                    $fieldData = $valueBean->field_name_map[$pathRecordDetails[1]];
                    break;
            }
        }
        return $fieldData;
    }
}