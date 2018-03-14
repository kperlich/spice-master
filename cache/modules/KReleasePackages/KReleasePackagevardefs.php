<?php 
 $GLOBALS["dictionary"]["KReleasePackage"]=array (
  'table' => 'kreleasepackages',
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
      'relationship' => 'kreleasepackages_created_by',
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
      'relationship' => 'kreleasepackages_modified_user',
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
      'relationship' => 'kreleasepackages_assigned_user',
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
    'rpstatus' => 
    array (
      'name' => 'rpstatus',
      'vname' => 'LBL_RPSTATUS',
      'type' => 'enum',
      'len' => '10',
      'options' => 'rpstatus_dom',
    ),
    'rptype' => 
    array (
      'name' => 'rptype',
      'vname' => 'LBL_RPTYPE',
      'type' => 'enum',
      'len' => '10',
      'options' => 'rptype_dom',
    ),
    'kchangerequests' => 
    array (
      'name' => 'kchangerequests',
      'type' => 'link',
      'relationship' => 'krp_kcr',
      'module' => 'KDeploymentCRs',
      'bean_name' => 'KDeploymentCR',
      'source' => 'non-db',
      'vname' => 'LBL_KCHANGEREQUEST',
    ),
    'conflict_with' => 
    array (
      'name' => 'conflict_with',
      'vname' => 'LBL_CONFLICT_WITH',
      'type' => 'text',
      'source' => 'non-db',
    ),
    'release_date' => 
    array (
      'name' => 'release_date',
      'type' => 'datetime',
      'vname' => 'LBL_RELEASE_DATE',
    ),
    'release_version' => 
    array (
      'name' => 'release_version',
      'type' => 'varchar',
      'len' => 10,
      'vname' => 'LBL_RELEASE_VERSION',
    ),
    'set_version' => 
    array (
      'name' => 'set_version',
      'type' => 'bool',
      'vname' => 'LBL_SET_VERSION',
    ),
    'required_release_regex' => 
    array (
      'name' => 'required_release_regex',
      'type' => 'varchar',
      'len' => 100,
      'vname' => 'LBL_REQUIRED_RELEASE_REGEX',
    ),
    'package_link' => 
    array (
      'name' => 'package_link',
      'vname' => 'LBL_PACKAGE_LINK',
      'type' => 'varchar',
      'source' => 'non-db',
    ),
    'source_release_date' => 
    array (
      'name' => 'source_release_date',
      'type' => 'datetime',
      'vname' => 'LBL_SOURCE_RELEASE_DATE',
    ),
    'source_system' => 
    array (
      'name' => 'source_system',
      'type' => 'varchar',
      'len' => 36,
      'vname' => 'LBL_SOURCE_SYSTEM',
    ),
    'repairs' => 
    array (
      'name' => 'repairs',
      'vname' => 'LBL_REPAIRS',
      'type' => 'multienum',
      'options' => 'kreleasepackage_repair_dom',
    ),
    'repair_modules' => 
    array (
      'name' => 'repair_modules',
      'vname' => 'LBL_REPAIR_MODULES',
      'type' => 'multienum',
      'options' => 'kreleasepackage_repair_modules_dom',
    ),
    'software_name' => 
    array (
      'name' => 'software_name',
      'type' => 'varchar',
      'len' => 100,
      'vname' => 'LBL_SOFTWARE_NAME',
    ),
    'software_hash' => 
    array (
      'name' => 'software_hash',
      'type' => 'varchar',
      'len' => 32,
      'vname' => 'LBL_SOFTWARE_HASH',
    ),
    'software_version_major' => 
    array (
      'name' => 'software_version_major',
      'type' => 'int',
      'len' => 4,
      'vname' => 'LBL_SOFTWARE_VERSION_MAJOR',
    ),
    'software_version_minor' => 
    array (
      'name' => 'software_version_minor',
      'type' => 'int',
      'len' => 4,
      'vname' => 'LBL_SOFTWARE_VERSION_MINOR',
    ),
    'software_version_release' => 
    array (
      'name' => 'software_version_release',
      'type' => 'int',
      'len' => 4,
      'vname' => 'LBL_SOFTWARE_VERSION_RELEASE',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'kreleasepackagespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    0 => 
    array (
      'name' => 'idx_kreleasepackages_id_del',
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
    'kreleasepackages_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'KReleasePackages',
      'rhs_table' => 'kreleasepackages',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'kreleasepackages_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'KReleasePackages',
      'rhs_table' => 'kreleasepackages',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'kreleasepackages_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'KReleasePackages',
      'rhs_table' => 'kreleasepackages',
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