<?php 
 $GLOBALS["dictionary"]["ProjectTask"]=array (
  'audited' => true,
  'table' => 'projecttasks',
  'unified_search' => true,
  'full_text_search' => true,
  'unified_search_default_enabled' => false,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'required' => true,
      'type' => 'id',
      'reportable' => true,
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'required' => true,
      'dbType' => 'varchar',
      'type' => 'name',
      'len' => 50,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'importable' => 'required',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
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
      'required' => false,
      'type' => 'text',
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
      'relationship' => 'projecttasks_created_by',
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
      'relationship' => 'projecttasks_modified_user',
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
      'relationship' => 'projecttasks_assigned_user',
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
    'project_task_id' => 
    array (
      'name' => 'project_task_id',
      'vname' => 'LBL_PROJECT_TASK_ID',
      'required' => false,
      'type' => 'int',
      'reportable' => false,
    ),
    'status' => 
    array (
      'name' => 'status',
      'vname' => 'LBL_STATUS',
      'type' => 'enum',
      'required' => false,
      'options' => 'project_task_status_options',
      'audited' => true,
    ),
    'predecessors' => 
    array (
      'name' => 'predecessors',
      'vname' => 'LBL_PREDECESSORS',
      'required' => false,
      'type' => 'text',
    ),
    'date_start' => 
    array (
      'name' => 'date_start',
      'vname' => 'LBL_DATE_START',
      'type' => 'date',
      'validation' => 
      array (
        'type' => 'isbefore',
        'compareto' => 'date_finish',
        'blank' => true,
      ),
      'audited' => true,
      'enable_range_search' => true,
    ),
    'time_start' => 
    array (
      'name' => 'time_start',
      'vname' => 'LBL_TIME_START',
      'type' => 'int',
      'reportable' => false,
    ),
    'time_finish' => 
    array (
      'name' => 'time_finish',
      'vname' => 'LBL_TIME_FINISH',
      'type' => 'int',
      'reportable' => false,
    ),
    'date_finish' => 
    array (
      'name' => 'date_finish',
      'vname' => 'LBL_DATE_FINISH',
      'type' => 'date',
      'validation' => 
      array (
        'type' => 'isafter',
        'compareto' => 'date_start',
        'blank' => true,
      ),
      'audited' => true,
      'enable_range_search' => true,
    ),
    'duration' => 
    array (
      'name' => 'duration',
      'vname' => 'LBL_DURATION',
      'required' => false,
      'type' => 'int',
    ),
    'duration_unit' => 
    array (
      'name' => 'duration_unit',
      'vname' => 'LBL_DURATION_UNIT',
      'options' => 'project_duration_units_dom',
      'type' => 'text',
    ),
    'actual_duration' => 
    array (
      'name' => 'actual_duration',
      'vname' => 'LBL_ACTUAL_DURATION',
      'required' => false,
      'type' => 'int',
    ),
    'percent_complete' => 
    array (
      'name' => 'percent_complete',
      'vname' => 'LBL_PERCENT_COMPLETE',
      'type' => 'int',
      'required' => false,
      'audited' => true,
    ),
    'date_due' => 
    array (
      'name' => 'date_due',
      'vname' => 'LBL_DATE_DUE',
      'type' => 'date',
      'rel_field' => 'time_due',
      'audited' => true,
    ),
    'time_due' => 
    array (
      'name' => 'time_due',
      'vname' => 'LBL_TIME_DUE',
      'type' => 'time',
      'rel_field' => 'date_due',
      'audited' => true,
    ),
    'parent_task_id' => 
    array (
      'name' => 'parent_task_id',
      'vname' => 'LBL_PARENT_TASK_ID',
      'required' => false,
      'type' => 'int',
      'reportable' => true,
    ),
    'priority' => 
    array (
      'name' => 'priority',
      'vname' => 'LBL_PRIORITY',
      'type' => 'enum',
      'options' => 'project_task_priority_options',
    ),
    'milestone_flag' => 
    array (
      'name' => 'milestone_flag',
      'vname' => 'LBL_MILESTONE_FLAG',
      'type' => 'bool',
      'required' => false,
    ),
    'order_number' => 
    array (
      'name' => 'order_number',
      'vname' => 'LBL_ORDER_NUMBER',
      'required' => false,
      'type' => 'int',
      'default' => '1',
    ),
    'task_number' => 
    array (
      'name' => 'task_number',
      'vname' => 'LBL_TASK_NUMBER',
      'required' => false,
      'type' => 'int',
    ),
    'estimated_effort' => 
    array (
      'name' => 'estimated_effort',
      'vname' => 'LBL_ESTIMATED_EFFORT',
      'required' => false,
      'type' => 'int',
    ),
    'actual_effort' => 
    array (
      'name' => 'actual_effort',
      'vname' => 'LBL_ACTUAL_EFFORT',
      'required' => false,
      'type' => 'int',
    ),
    'utilization' => 
    array (
      'name' => 'utilization',
      'vname' => 'LBL_UTILIZATION',
      'required' => false,
      'type' => 'int',
      'validation' => 
      array (
        'type' => 'range',
        'min' => 0,
        'max' => 100,
      ),
      'function' => 
      array (
        'name' => 'getUtilizationDropdown',
        'returns' => 'html',
        'include' => 'modules/ProjectTasks/ProjectTask.php',
      ),
      'default' => 100,
    ),
    'project_name' => 
    array (
      'name' => 'project_name',
      'rname' => 'name',
      'id_name' => 'project_id',
      'vname' => 'LBL_PARENT_NAME',
      'type' => 'relate',
      'join_name' => 'projects',
      'table' => 'projects',
      'isnull' => 'true',
      'module' => 'Projects',
      'link' => 'project_name_link',
      'massupdate' => false,
      'source' => 'non-db',
    ),
    'project_id' => 
    array (
      'name' => 'project_id',
      'vname' => 'LBL_PROJECT_ID',
      'required' => true,
      'type' => 'id',
      'reportable' => false,
      'importable' => 'required',
    ),
    'projects' => 
    array (
      'name' => 'projects',
      'type' => 'link',
      'relationship' => 'projects_projecttasks',
      'source' => 'non-db',
      'side' => 'right',
      'vname' => 'LBL_PROJECTS',
    ),
    'notes' => 
    array (
      'name' => 'notes',
      'type' => 'link',
      'relationship' => 'project_tasks_notes',
      'source' => 'non-db',
      'vname' => 'LBL_NOTES',
    ),
    'tasks' => 
    array (
      'name' => 'tasks',
      'type' => 'link',
      'relationship' => 'project_tasks_tasks',
      'source' => 'non-db',
      'vname' => 'LBL_TASKS',
    ),
    'meetings' => 
    array (
      'name' => 'meetings',
      'type' => 'link',
      'relationship' => 'project_tasks_meetings',
      'source' => 'non-db',
      'vname' => 'LBL_MEETINGS',
    ),
    'calls' => 
    array (
      'name' => 'calls',
      'type' => 'link',
      'relationship' => 'project_tasks_calls',
      'source' => 'non-db',
      'vname' => 'LBL_CALLS',
    ),
    'emails' => 
    array (
      'name' => 'emails',
      'type' => 'link',
      'relationship' => 'emails_project_task_rel',
      'source' => 'non-db',
      'vname' => 'LBL_EMAILS',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'projecttaskspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'relationships' => 
  array (
    'projecttasks_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ProjectTasks',
      'rhs_table' => 'projecttasks',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'projecttasks_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ProjectTasks',
      'rhs_table' => 'projecttasks',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'projecttasks_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ProjectTasks',
      'rhs_table' => 'projecttasks',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
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
    'project_tasks_notes' => 
    array (
      'lhs_module' => 'ProjectTasks',
      'lhs_table' => 'projecttasks',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'ProjectTasks',
    ),
    'project_tasks_tasks' => 
    array (
      'lhs_module' => 'ProjectTasks',
      'lhs_table' => 'projecttasks',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'ProjectTasks',
    ),
    'project_tasks_meetings' => 
    array (
      'lhs_module' => 'ProjectTasks',
      'lhs_table' => 'projecttasks',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'ProjectTasks',
    ),
    'project_tasks_calls' => 
    array (
      'lhs_module' => 'ProjectTasks',
      'lhs_table' => 'projecttasks',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'ProjectTasks',
    ),
    'project_tasks_emails' => 
    array (
      'lhs_module' => 'ProjectTasks',
      'lhs_table' => 'projecttasks',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'ProjectTasks',
    ),
  ),
  'templates' => 
  array (
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);