<?php 
 $GLOBALS["dictionary"]["AccountCCDetail"]=array (
  'table' => 'accountccdetails',
  'audited' => false,
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
      'relationship' => 'accountccdetails_created_by',
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
      'relationship' => 'accountccdetails_modified_user',
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
      'relationship' => 'accountccdetails_assigned_user',
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
    'account_id' => 
    array (
      'name' => 'account_id',
      'vname' => 'LBL_ACCOUNT_ID',
      'type' => 'id',
      'reportable' => false,
      'massupdate' => false,
      'duplicate_merge' => 'disabled',
    ),
    'account_name' => 
    array (
      'name' => 'account_name',
      'rname' => 'name',
      'id_name' => 'account_id',
      'vname' => 'LBL_ACCOUNT_NAME',
      'join_name' => 'accounts',
      'type' => 'relate',
      'link' => 'accounts',
      'table' => 'accounts',
      'isnull' => 'true',
      'module' => 'Accounts',
      'dbType' => 'varchar',
      'len' => '255',
      'source' => 'non-db',
      'unified_search' => true,
      'massupdate' => false,
    ),
    'accounts' => 
    array (
      'name' => 'accounts',
      'vname' => 'LBL_ACCOUNTS_LINK',
      'type' => 'link',
      'relationship' => 'accounts_accountccdetails',
      'link_type' => 'one',
      'source' => 'non-db',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
    ),
    'companycode_id' => 
    array (
      'name' => 'companycode_id',
      'type' => 'id',
      'required' => true,
    ),
    'companycode_name' => 
    array (
      'name' => 'companycode_name',
      'rname' => 'name',
      'id_name' => 'companycode_id',
      'vname' => 'LBL_COMPANYCODE_NAME',
      'join_name' => 'companycodes',
      'type' => 'relate',
      'link' => 'companycodes',
      'table' => 'companycodes',
      'isnull' => 'true',
      'module' => 'CompanyCodes',
      'dbType' => 'varchar',
      'len' => '12',
      'source' => 'non-db',
      'unified_search' => true,
      'massupdate' => false,
    ),
    'companycodes' => 
    array (
      'name' => 'companycodes',
      'vname' => 'LBL_COMPANYCODES_LINK',
      'type' => 'link',
      'relationship' => 'companycodes_accountccdetails',
      'link_type' => 'one',
      'source' => 'non-db',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
    ),
    'abccategory' => 
    array (
      'name' => 'abccategory',
      'type' => 'enum',
      'len' => 1,
      'options' => 'abccategory_dom',
      'vname' => 'LBL_ABCCATEGORY',
    ),
    'paymentterms' => 
    array (
      'name' => 'paymentterms',
      'type' => 'varchar',
      'len' => 50,
      'vname' => 'LBL_PAYMENTTERMS',
    ),
    'incoterm1' => 
    array (
      'name' => 'incoterm1',
      'type' => 'varchar',
      'len' => 20,
      'vname' => 'LBL_INCOTERM1',
    ),
    'incoterm2' => 
    array (
      'name' => 'incoterm2',
      'type' => 'varchar',
      'len' => 20,
      'vname' => 'LBL_INCOTERM2',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'accountccdetailspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    0 => 
    array (
      'name' => 'idx_accountccdetails_id_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'id',
        1 => 'deleted',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_accountccdetails_companycode_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'companycode_id',
      ),
    ),
  ),
  'relationships' => 
  array (
    'accountccdetails_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'AccountCCDetails',
      'rhs_table' => 'accountccdetails',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'accountccdetails_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'AccountCCDetails',
      'rhs_table' => 'accountccdetails',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'accountccdetails_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'AccountCCDetails',
      'rhs_table' => 'accountccdetails',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'accounts_accountccdetails' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'AccountCCDetails',
      'rhs_table' => 'accountccdetails',
      'rhs_key' => 'account_id',
      'relationship_type' => 'one-to-many',
    ),
    'companycodes_accountccdetails' => 
    array (
      'lhs_module' => 'CompanyCodes',
      'lhs_table' => 'companycodes',
      'lhs_key' => 'id',
      'rhs_module' => 'AccountCCDetails',
      'rhs_table' => 'accountccdetails',
      'rhs_key' => 'companycode_id',
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