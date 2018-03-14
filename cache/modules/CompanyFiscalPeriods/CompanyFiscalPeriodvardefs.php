<?php 
 $GLOBALS["dictionary"]["CompanyFiscalPeriod"]=array (
  'table' => 'companyfiscalperiods',
  'comment' => 'CompanyFiscalPeriods Module',
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
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'link' => true,
      'dbType' => 'varchar',
      'len' => 255,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'required' => true,
      'importable' => 'required',
      'duplicate_merge' => 'enabled',
      'merge_filter' => 'selected',
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
      'relationship' => 'companyfiscalperiods_created_by',
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
      'relationship' => 'companyfiscalperiods_modified_user',
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
      'relationship' => 'companyfiscalperiods_assigned_user',
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
    'cal_date_start' => 
    array (
      'name' => 'cal_date_start',
      'vname' => 'LBL_CAL_DATE_START',
      'type' => 'date',
      'required' => true,
      'comment' => 'common calendar date start',
    ),
    'cal_date_end' => 
    array (
      'name' => 'cal_date_end',
      'vname' => 'LBL_CAL_DATE_END',
      'type' => 'date',
      'required' => true,
      'comment' => 'common calendar date end',
    ),
    'cal_quarter' => 
    array (
      'name' => 'cal_quarter',
      'vname' => 'LBL_CAL_QUARTER',
      'type' => 'tinyint',
      'len' => 1,
      'required' => true,
      'disable_num_format' => true,
      'comment' => 'common calendar date end',
    ),
    'fiscal_date_start' => 
    array (
      'name' => 'fiscal_date_start',
      'vname' => 'LBL_FISCAL_DATE_START',
      'type' => 'date',
      'required' => true,
      'comment' => 'fiscal calendar date start',
    ),
    'fiscal_date_end' => 
    array (
      'name' => 'fiscal_date_end',
      'vname' => 'LBL_FISCAL_DATE_END',
      'type' => 'date',
      'required' => true,
      'comment' => 'fiscal calendar date end',
    ),
    'fiscal_year' => 
    array (
      'name' => 'fiscal_year',
      'vname' => 'LBL_FISCAL_YEAR',
      'type' => 'int',
      'len' => 4,
      'required' => true,
      'disable_num_format' => true,
      'comment' => 'common calendar date end',
    ),
    'fiscal_month' => 
    array (
      'name' => 'fiscal_month',
      'vname' => 'LBL_FISCAL_MONTH',
      'type' => 'tinyint',
      'len' => 2,
      'required' => true,
      'comment' => 'common calendar date end',
    ),
    'fiscal_quarter' => 
    array (
      'name' => 'fiscal_quarter',
      'vname' => 'LBL_FISCAL_QUARTER',
      'type' => 'tinyint',
      'len' => 1,
      'required' => true,
      'comment' => 'common calendar date end',
    ),
    'companycode_id' => 
    array (
      'name' => 'companycode_id',
      'vname' => 'LBL_COMPANYCODE_ID',
      'type' => 'id',
      'required' => true,
      'comment' => 'ID of company code that uses this information',
    ),
    'companycode_name' => 
    array (
      'name' => 'companycode_name',
      'vname' => 'LBL_COMPANYCODE_NAME',
      'type' => 'relate',
      'module' => 'CompanyCodes',
      'bean_name' => 'CompanyCode',
      'id_name' => 'companycode_id',
      'rname' => 'name',
      'link' => 'companycodes',
      'source' => 'non-db',
      'required' => true,
      'comment' => 'Name of company code that uses this information',
    ),
    'companycodes' => 
    array (
      'name' => 'companycodes',
      'vname' => 'LBL_COMPANYCODES',
      'type' => 'link',
      'link_type' => 'one',
      'relationship' => 'cfperiods_companycodes',
      'source' => 'non-db',
      'coment' => 'Link to CompanyCodes module',
    ),
  ),
  'relationships' => 
  array (
    'companyfiscalperiods_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'CompanyFiscalPeriods',
      'rhs_table' => 'companyfiscalperiods',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'companyfiscalperiods_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'CompanyFiscalPeriods',
      'rhs_table' => 'companyfiscalperiods',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'companyfiscalperiods_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'CompanyFiscalPeriods',
      'rhs_table' => 'companyfiscalperiods',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'cfperiods_companycodes' => 
    array (
      'lhs_module' => 'CompanyCodes',
      'lhs_table' => 'companycodes',
      'lhs_key' => 'id',
      'rhs_module' => 'CompanyFiscalPeriods',
      'rhs_table' => 'companyfiscalperiods',
      'rhs_key' => 'companycode_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'companyfiscalperiodspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    0 => 
    array (
      'name' => 'cfpid',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'companycode_id',
        1 => 'deleted',
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