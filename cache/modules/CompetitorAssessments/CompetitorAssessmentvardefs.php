<?php 
 $GLOBALS["dictionary"]["CompetitorAssessment"]=array (
  'table' => 'competitorassessments',
  'comment' => 'Competitor Assessments Module',
  'audited' => false,
  'duplicate_merge' => false,
  'unified_search' => false,
  'optimistic_locking' => true,
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
      'vname' => 'LBL_COMPETITOR',
      'type' => 'varchar',
      'len' => 150,
      'audited' => false,
      'required' => true,
      'comment' => 'competitor name',
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
      'relationship' => 'competitorassessments_created_by',
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
      'relationship' => 'competitorassessments_modified_user',
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
      'relationship' => 'competitorassessments_assigned_user',
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
    'products' => 
    array (
      'name' => 'products',
      'vname' => 'LBL_PRODUCTS',
      'type' => 'text',
      'required' => false,
      'massupdate' => false,
      'audited' => false,
    ),
    'differentitation' => 
    array (
      'name' => 'differentitation',
      'vname' => 'LBL_DIFFERENTIATION',
      'type' => 'text',
      'required' => false,
      'massupdate' => false,
      'audited' => false,
    ),
    'weaknesses' => 
    array (
      'name' => 'weaknesses',
      'vname' => 'LBL_WEAKNESSES',
      'type' => 'text',
      'required' => false,
      'massupdate' => false,
      'audited' => false,
    ),
    'strengths' => 
    array (
      'name' => 'strengths',
      'vname' => 'LBL_STRENGTHS',
      'type' => 'text',
      'required' => false,
      'massupdate' => false,
      'audited' => false,
    ),
    'competitive_threat' => 
    array (
      'name' => 'competitive_threat',
      'vname' => 'LBL_COMPETITIVE_THREAT',
      'type' => 'enum',
      'options' => 'competitive_threat_dom',
      'len' => 10,
      'required' => false,
      'massupdate' => false,
      'audited' => false,
    ),
    'competitive_status' => 
    array (
      'name' => 'competitive_status',
      'vname' => 'LBL_COMPETITIVE_STATUS',
      'type' => 'enum',
      'options' => 'competitive_status_dom',
      'len' => 10,
      'required' => false,
      'massupdate' => false,
      'audited' => false,
    ),
    'opportunity_id' => 
    array (
      'name' => 'opportunity_id',
      'vname' => 'LBL_OPPORTUNITY_ID',
      'type' => 'id',
      'audited' => false,
      'required' => true,
      'comment' => '',
    ),
    'opportunity_name' => 
    array (
      'name' => 'opportunity_name',
      'rname' => 'name',
      'vname' => 'LBL_OPPORTUNITY_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'opportunities',
      'id_name' => 'opportunity_id',
      'link' => 'opportunities',
      'module' => 'Opportunities',
      'duplicate_merge' => 'disabled',
      'comment' => 'Name of related opportunity',
    ),
    'opportunities' => 
    array (
      'name' => 'opportunities',
      'vname' => 'LBL_OPPORTUNITIES',
      'type' => 'link',
      'relationship' => 'competitorassessments_opportunities',
      'link_type' => 'one',
      'side' => 'right',
      'source' => 'non-db',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'competitorassessmentspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    0 => 
    array (
      'name' => 'idx_compass_opp',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'opportunity_id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_compass_oppdel',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'opportunity_id',
        1 => 'deleted',
      ),
    ),
  ),
  'relationships' => 
  array (
    'competitorassessments_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'CompetitorAssessments',
      'rhs_table' => 'competitorassessments',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'competitorassessments_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'CompetitorAssessments',
      'rhs_table' => 'competitorassessments',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'competitorassessments_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'CompetitorAssessments',
      'rhs_table' => 'competitorassessments',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'competitorassessments_opportunities' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'CompetitorAssessments',
      'rhs_table' => 'competitorassessments',
      'rhs_key' => 'opportunity_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'templates' => 
  array (
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);