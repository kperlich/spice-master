<?php 
 $GLOBALS["dictionary"]["CompanyCode"]=array (
  'table' => 'companycodes',
  'audited' => true,
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
      'relationship' => 'companycodes_created_by',
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
      'relationship' => 'companycodes_modified_user',
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
      'relationship' => 'companycodes_assigned_user',
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
    'vatid' => 
    array (
      'name' => 'vatid',
      'vname' => 'LBL_VATID',
      'type' => 'varchar',
      'len' => 40,
      'required' => false,
      'reportable' => true,
      'massupdate' => false,
    ),
    'company_address_street' => 
    array (
      'name' => 'company_address_street',
      'vname' => 'LBL_COMPANY_ADDRESS_STREET',
      'type' => 'varchar',
      'len' => '150',
      'group' => 'company_address',
    ),
    'company_address_city' => 
    array (
      'name' => 'company_address_city',
      'vname' => 'LBL_COMPANY_ADDRESS_CITY',
      'type' => 'varchar',
      'len' => '100',
      'group' => 'company_address',
    ),
    'company_address_state' => 
    array (
      'name' => 'company_address_state',
      'vname' => 'LBL_COMPANY_ADDRESS_STATE',
      'type' => 'varchar',
      'len' => '100',
      'group' => 'company_address',
    ),
    'company_address_postalcode' => 
    array (
      'name' => 'company_address_postalcode',
      'vname' => 'LBL_COMPANY_ADDRESS_POSTALCODE',
      'type' => 'varchar',
      'len' => '20',
      'group' => 'company_address',
    ),
    'company_address_country' => 
    array (
      'name' => 'company_address_country',
      'vname' => 'LBL_COMPANY_ADDRESS_COUNTRY',
      'type' => 'enum',
      'options' => 'countries_dom',
      'group' => 'company_address',
    ),
    'header_from' => 
    array (
      'name' => 'header_from',
      'vname' => 'LBL_HEADER_FROM',
      'type' => 'varchar',
      'len' => 255,
    ),
    'footer_1' => 
    array (
      'name' => 'footer_1',
      'vname' => 'LBL_FOOTER1',
      'type' => 'varchar',
      'len' => 255,
      'required' => false,
      'reportable' => true,
      'massupdate' => false,
    ),
    'footer_2' => 
    array (
      'name' => 'footer_2',
      'vname' => 'LBL_FOOTER2',
      'type' => 'varchar',
      'len' => 255,
      'required' => false,
      'reportable' => true,
      'massupdate' => false,
    ),
    'footer_3' => 
    array (
      'name' => 'footer_3',
      'vname' => 'LBL_FOOTER3',
      'type' => 'varchar',
      'len' => 255,
      'required' => false,
      'reportable' => true,
      'massupdate' => false,
    ),
    'companyfiscalperiods' => 
    array (
      'name' => 'companyfiscalperiods',
      'vname' => 'LBL_COMPANYFISCALPERIODS',
      'type' => 'link',
      'link_type' => 'one',
      'relationship' => 'cfperiods_companycodes',
      'source' => 'non-db',
      'coment' => 'Link to CompanyFiscalPeriods module',
    ),
    'companycode' => 
    array (
      'name' => 'companycode',
      'vname' => 'LBL_COMPANYCODE',
      'type' => 'varchar',
      'len' => 12,
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'companycodespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    0 => 
    array (
      'name' => 'idx_companycodes_id_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'id',
        1 => 'deleted',
      ),
    ),
  ),
  'relationships' => 
  array (
    'companycodes_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'CompanyCodes',
      'rhs_table' => 'companycodes',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'companycodes_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'CompanyCodes',
      'rhs_table' => 'companycodes',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'companycodes_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'CompanyCodes',
      'rhs_table' => 'companycodes',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'optimistic_lock' => true,
  'templates' => 
  array (
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);