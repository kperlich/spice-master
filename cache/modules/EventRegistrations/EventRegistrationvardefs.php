<?php 
 $GLOBALS["dictionary"]["EventRegistration"]=array (
  'table' => 'eventregistrations',
  'comment' => 'EventRegistrations Module',
  'audited' => false,
  'duplicate_merge' => false,
  'unified_search' => false,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'comment' => 'Unique identifier',
    ),
    'name' => 
    array (
      'name' => 'name',
      'type' => 'varchar',
      'len' => 50,
      'required' => false,
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'date_indexed' => 
    array (
      'name' => 'date_indexed',
      'vname' => 'LBL_DATE_INDEXED',
      'type' => 'datetime',
      'comment' => 'Date record last indexed',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
      'massupdate' => false,
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
      'massupdate' => false,
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
      'massupdate' => false,
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => 6,
      'cols' => 80,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'tags' => 
    array (
      'name' => 'tags',
      'vname' => 'LBL_TAGS',
      'type' => 'tags',
      'dbType' => 'text',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'eventregistrations_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'recover' => false,
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'eventregistrations_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'recover' => false,
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'rname' => 'user_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'eventregistrations_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
      'recover' => false,
    ),
    'registration_status' => 
    array (
      'name' => 'registration_status',
      'vname' => 'LBL_REGISTRATION_STATUS',
      'type' => 'enum',
      'options' => 'eventregistration_status_dom',
      'len' => 16,
      'comment' => 'registration state: registered|canceled|attended|notattended',
    ),
    'campaign_id' => 
    array (
      'name' => 'campaign_id',
      'vname' => 'LBL_CAMPAIGN_ID',
      'type' => 'id',
      'comment' => 'Campaign identifier',
      'reportable' => false,
    ),
    'campaign_name' => 
    array (
      'name' => 'campaign_name',
      'rname' => 'name',
      'id_name' => 'campaign_id',
      'vname' => 'LBL_CAMPAIGN_NAME',
      'type' => 'relate',
      'table' => 'campaigns',
      'isnull' => 'true',
      'module' => 'Campaigns',
      'dbType' => 'varchar',
      'link' => 'campaign_link',
      'len' => '255',
      'source' => 'non-db',
    ),
    'campaign_link' => 
    array (
      'name' => 'campaign_link',
      'vname' => 'LBL_CAMPAIGN_LINK',
      'type' => 'link',
      'relationship' => 'eventregistration_campaign_rel',
      'source' => 'non-db',
    ),
    'contact_id' => 
    array (
      'name' => 'contact_id',
      'vname' => 'LBL_CONTACT_ID',
      'type' => 'id',
      'comment' => 'Contact identifier',
      'reportable' => false,
    ),
    'contact_name' => 
    array (
      'name' => 'contact_name',
      'rname' => 'name',
      'id_name' => 'contact_id',
      'vname' => 'LBL_CONTACT_NAME',
      'type' => 'relate',
      'table' => 'contacts',
      'isnull' => 'true',
      'module' => 'Contacts',
      'dbType' => 'varchar',
      'link' => 'contact_link',
      'len' => '255',
      'source' => 'non-db',
    ),
    'contact_link' => 
    array (
      'name' => 'contact_link',
      'vname' => 'LBL_CONTACT_LINK',
      'type' => 'link',
      'relationship' => 'eventregistration_contact_rel',
      'source' => 'non-db',
    ),
  ),
  'relationships' => 
  array (
    'eventregistrations_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'EventRegistrations',
      'rhs_table' => 'eventregistrations',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'eventregistrations_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'EventRegistrations',
      'rhs_table' => 'eventregistrations',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'eventregistrations_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'EventRegistrations',
      'rhs_table' => 'eventregistrations',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'eventregistration_campaign_rel' => 
    array (
      'lhs_module' => 'Campaigns',
      'lhs_table' => 'campaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'EventRegistrations',
      'rhs_table' => 'eventregistrations',
      'rhs_key' => 'campaign_id',
      'relationship_type' => 'one-to-many',
    ),
    'eventregistration_contact_rel' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'EventRegistrations',
      'rhs_table' => 'eventregistrations',
      'rhs_key' => 'contact_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'eventregistrationspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    0 => 
    array (
      'name' => 'idx_regcamp_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'campaign_id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_regctid',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'contact_id',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_regcampctid',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'campaign_id',
        1 => 'contact_id',
        2 => 'deleted',
      ),
    ),
  ),
  'templates' => 
  array (
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);