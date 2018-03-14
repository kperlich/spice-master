<?php 
 $GLOBALS["dictionary"]["Project"]=array (
  'table' => 'projects',
  'unified_search' => true,
  'full_text_search' => true,
  'unified_search_default_enabled' => false,
  'comment' => 'Projects',
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
      'relationship' => 'projects_created_by',
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
      'relationship' => 'projects_modified_user',
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
      'relationship' => 'projects_assigned_user',
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
    'estimated_start_date' => 
    array (
      'name' => 'estimated_start_date',
      'vname' => 'LBL_DATE_START',
      'required' => true,
      'validation' => 
      array (
        'type' => 'isbefore',
        'compareto' => 'estimated_end_date',
        'blank' => true,
      ),
      'type' => 'date',
      'importable' => 'required',
      'enable_range_search' => true,
    ),
    'estimated_end_date' => 
    array (
      'name' => 'estimated_end_date',
      'vname' => 'LBL_DATE_END',
      'required' => true,
      'type' => 'date',
      'importable' => 'required',
      'enable_range_search' => true,
    ),
    'status' => 
    array (
      'name' => 'status',
      'vname' => 'LBL_STATUS',
      'type' => 'enum',
      'options' => 'project_status_dom',
    ),
    'priority' => 
    array (
      'name' => 'priority',
      'vname' => 'LBL_PRIORITY',
      'type' => 'enum',
      'options' => 'projects_priority_options',
    ),
    'total_estimated_effort' => 
    array (
      'name' => 'total_estimated_effort',
      'type' => 'int',
      'source' => 'non-db',
      'vname' => 'LBL_LIST_TOTAL_ESTIMATED_EFFORT',
    ),
    'total_actual_effort' => 
    array (
      'name' => 'total_actual_effort',
      'type' => 'int',
      'source' => 'non-db',
      'vname' => 'LBL_LIST_TOTAL_ACTUAL_EFFORT',
    ),
    'accounts' => 
    array (
      'name' => 'accounts',
      'type' => 'link',
      'module' => 'Accounts',
      'relationship' => 'projects_accounts',
      'source' => 'non-db',
      'ignore_role' => true,
      'vname' => 'LBL_ACCOUNTS',
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
    ),
    'account_id' => 
    array (
      'name' => 'account_id',
      'rname' => 'id',
      'id_name' => 'account_id',
      'vname' => 'LBL_ACCOUNT_ID',
      'type' => 'relate',
      'table' => 'accounts',
      'isnull' => 'true',
      'module' => 'Accounts',
      'dbType' => 'id',
      'reportable' => false,
      'source' => 'non-db',
      'massupdate' => false,
      'duplicate_merge' => 'disabled',
      'hideacl' => true,
    ),
    'contacts' => 
    array (
      'name' => 'contacts',
      'type' => 'link',
      'relationship' => 'projects_contacts',
      'source' => 'non-db',
      'ignore_role' => true,
      'vname' => 'LBL_CONTACTS',
    ),
    'opportunities' => 
    array (
      'name' => 'opportunities',
      'type' => 'link',
      'relationship' => 'projects_opportunities',
      'source' => 'non-db',
      'ignore_role' => true,
      'vname' => 'LBL_OPPORTUNITIES',
    ),
    'notes' => 
    array (
      'name' => 'notes',
      'type' => 'link',
      'relationship' => 'projects_notes',
      'source' => 'non-db',
      'vname' => 'LBL_NOTES',
    ),
    'tasks' => 
    array (
      'name' => 'tasks',
      'type' => 'link',
      'relationship' => 'projects_tasks',
      'source' => 'non-db',
      'vname' => 'LBL_TASKS',
    ),
    'meetings' => 
    array (
      'name' => 'meetings',
      'type' => 'link',
      'relationship' => 'projects_meetings',
      'source' => 'non-db',
      'vname' => 'LBL_MEETINGS',
    ),
    'calls' => 
    array (
      'name' => 'calls',
      'type' => 'link',
      'relationship' => 'projects_calls',
      'source' => 'non-db',
      'vname' => 'LBL_CALLS',
      'join_name' => 'calls',
    ),
    'emails' => 
    array (
      'name' => 'emails',
      'type' => 'link',
      'relationship' => 'emails_projects_rel',
      'source' => 'non-db',
      'vname' => 'LBL_EMAILS',
    ),
    'projecttasks' => 
    array (
      'name' => 'projecttasks',
      'type' => 'link',
      'relationship' => 'projects_projecttasks',
      'source' => 'non-db',
      'vname' => 'LBL_PROJECT_TASKS',
    ),
    'cases' => 
    array (
      'name' => 'cases',
      'type' => 'link',
      'relationship' => 'projects_cases',
      'side' => 'right',
      'source' => 'non-db',
      'vname' => 'LBL_CASES',
    ),
    'bugs' => 
    array (
      'name' => 'bugs',
      'type' => 'link',
      'relationship' => 'projects_bugs',
      'side' => 'right',
      'source' => 'non-db',
      'vname' => 'LBL_BUGS',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'projectspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'relationships' => 
  array (
    'projects_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Projects',
      'rhs_table' => 'projects',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'projects_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Projects',
      'rhs_table' => 'projects',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'projects_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Projects',
      'rhs_table' => 'projects',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'projects_notes' => 
    array (
      'lhs_module' => 'Projects',
      'lhs_table' => 'projects',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Projects',
    ),
    'projects_tasks' => 
    array (
      'lhs_module' => 'Projects',
      'lhs_table' => 'projects',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Projects',
    ),
    'projects_meetings' => 
    array (
      'lhs_module' => 'Projects',
      'lhs_table' => 'projects',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Projects',
    ),
    'projects_calls' => 
    array (
      'lhs_module' => 'Projects',
      'lhs_table' => 'projects',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Projects',
    ),
    'projects_emails' => 
    array (
      'lhs_module' => 'Projects',
      'lhs_table' => 'projects',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Projects',
    ),
    'projects_projecttasks' => 
    array (
      'lhs_module' => 'Projects',
      'lhs_table' => 'projects',
      'lhs_key' => 'id',
      'rhs_module' => 'ProjectTasks',
      'rhs_table' => 'projecttasks',
      'rhs_key' => 'project_id',
      'relationship_type' => 'one-to-many',
    ),
    'projects_projectactivities' => 
    array (
      'lhs_module' => 'Projects',
      'lhs_table' => 'projects',
      'lhs_key' => 'id',
      'rhs_module' => 'ProjectActivities',
      'rhs_table' => 'projectactivities',
      'rhs_key' => 'projectwbs_id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'projectwbss',
      'join_key_lhs' => 'project_id',
      'join_key_rhs' => 'id',
    ),
    'projects_projectwbss' => 
    array (
      'lhs_module' => 'Projects',
      'lhs_table' => 'projects',
      'lhs_key' => 'id',
      'rhs_module' => 'ProjectWBSs',
      'rhs_table' => 'projectwbss',
      'rhs_key' => 'project_id',
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