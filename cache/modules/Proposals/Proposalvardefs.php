<?php 
 $GLOBALS["dictionary"]["Proposal"]=array (
  'table' => 'proposals',
  'comment' => 'Competitor Assessments Module',
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
      'type' => 'varchar',
      'len' => '32',
      'required' => true,
      'massupdate' => false,
      'comment' => 'proposal number',
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
      'relationship' => 'proposals_created_by',
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
      'relationship' => 'proposals_modified_user',
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
      'relationship' => 'proposals_assigned_user',
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
    'proposalstatus' => 
    array (
      'name' => 'proposalstatus',
      'type' => 'enum',
      'options' => 'proposalstatus_dom',
      'len' => '16',
      'vname' => 'LBL_PROPOSALSTATUS',
      'massupdate' => false,
      'comment' => 'Status: draft|submitted|accepted|rejected',
    ),
    'amount' => 
    array (
      'name' => 'amount',
      'vname' => 'LBL_AMOUNT',
      'type' => 'currency',
      'dbType' => 'double',
      'importable' => 'required',
      'duplicate_merge' => '1',
      'required' => true,
      'options' => 'numeric_range_search_dom',
      'enable_range_search' => true,
      'comment' => 'Unconverted amount of the opportunity',
    ),
    'currency_id' => 
    array (
      'name' => 'currency_id',
      'type' => 'id',
      'group' => 'currency_id',
      'vname' => 'LBL_CURRENCY',
      'function' => 
      array (
        'name' => 'getCurrencyDropDown',
        'returns' => 'html',
      ),
      'reportable' => false,
      'comment' => 'Currency used for display purposes',
    ),
    'currency_name' => 
    array (
      'name' => 'currency_name',
      'rname' => 'name',
      'id_name' => 'currency_id',
      'vname' => 'LBL_CURRENCY_NAME',
      'type' => 'relate',
      'isnull' => 'true',
      'table' => 'currencies',
      'module' => 'Currencies',
      'source' => 'non-db',
      'function' => 
      array (
        'name' => 'getCurrencyNameDropDown',
        'returns' => 'html',
      ),
      'studio' => 'false',
      'duplicate_merge' => 'disabled',
    ),
    'currency_symbol' => 
    array (
      'name' => 'currency_symbol',
      'rname' => 'symbol',
      'id_name' => 'currency_id',
      'vname' => 'LBL_CURRENCY_SYMBOL',
      'type' => 'relate',
      'isnull' => 'true',
      'table' => 'currencies',
      'module' => 'Currencies',
      'source' => 'non-db',
      'function' => 
      array (
        'name' => 'getCurrencySymbolDropDown',
        'returns' => 'html',
      ),
      'studio' => 'false',
      'duplicate_merge' => 'disabled',
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
      'relationship' => 'accounts_proposals_rel',
      'link_type' => 'one',
      'source' => 'non-db',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
    ),
    'opportunity_id' => 
    array (
      'name' => 'opportunity_id',
      'vname' => 'LBL_OPPORTUNITY_ID',
      'type' => 'id',
      'reportable' => false,
      'massupdate' => false,
      'duplicate_merge' => 'disabled',
    ),
    'opportunity_name' => 
    array (
      'name' => 'opportunity_name',
      'rname' => 'name',
      'id_name' => 'opportunity_id',
      'vname' => 'LBL_OPPORTUNITY_NAME',
      'join_name' => 'opportunities',
      'type' => 'relate',
      'link' => 'opportunities',
      'table' => 'opportunities',
      'isnull' => 'true',
      'module' => 'Opportunities',
      'dbType' => 'varchar',
      'len' => '255',
      'source' => 'non-db',
      'unified_search' => true,
      'massupdate' => false,
    ),
    'opportunities' => 
    array (
      'name' => 'opportunities',
      'vname' => 'LBL_OPPORTUNITIES_LINK',
      'type' => 'link',
      'relationship' => 'opportunities_proposals_rel',
      'link_type' => 'one',
      'source' => 'non-db',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
    ),
    'file1name' => 
    array (
      'name' => 'file1name',
      'vname' => 'LBL_FILE1NAME',
      'type' => 'varchar',
      'len' => '255',
      'reportable' => true,
      'massupdate' => false,
      'comment' => 'File name associated with the note (attachment)',
    ),
    'file1id' => 
    array (
      'name' => 'file1id',
      'type' => 'id',
    ),
    'file1exists' => 
    array (
      'name' => 'file1exists',
      'vname' => 'LBL_FILE1EXISTS',
      'type' => 'bool',
      'source' => 'non-db',
      'massupdate' => false,
    ),
    'file1link' => 
    array (
      'name' => 'file1link',
      'vname' => 'LBL_FILE1EXISTS',
      'type' => 'varchar',
      'source' => 'non-db',
      'massupdate' => false,
    ),
    'file1_mime_type' => 
    array (
      'name' => 'file1_mime_type',
      'vname' => 'LBL_FILE1_MIME_TYPE',
      'type' => 'varchar',
      'len' => '100',
      'massupdate' => false,
      'comment' => 'Attachment MIME type',
    ),
    'file1_url' => 
    array (
      'name' => 'file1_url',
      'vname' => 'LBL_FILE1_URL',
      'type' => 'function',
      'function_require' => 'include/upload_file.php',
      'function_class' => 'UploadFile',
      'function_name' => 'get_url',
      'function_params' => 
      array (
        0 => 'filename',
        1 => 'id',
      ),
      'source' => 'function',
      'reportable' => false,
      'massupdate' => false,
      'comment' => 'Path to file (can be URL)',
    ),
    'file2name' => 
    array (
      'name' => 'file2name',
      'vname' => 'LBL_FILE2NAME',
      'type' => 'varchar',
      'len' => '255',
      'reportable' => true,
      'massupdate' => false,
      'comment' => 'File name associated with the note (attachment)',
    ),
    'file2exists' => 
    array (
      'name' => 'file2exists',
      'vname' => 'LBL_FILE2EXISTS',
      'type' => 'bool',
      'source' => 'non-db',
      'massupdate' => false,
    ),
    'file2link' => 
    array (
      'name' => 'file2link',
      'vname' => 'LBL_FILE2EXISTS',
      'type' => 'varchar',
      'source' => 'non-db',
      'massupdate' => false,
    ),
    'file2id' => 
    array (
      'name' => 'file2id',
      'type' => 'id',
    ),
    'file2_mime_type' => 
    array (
      'name' => 'file2_mime_type',
      'vname' => 'LBL_FILE2_MIME_TYPE',
      'type' => 'varchar',
      'len' => '100',
      'massupdate' => false,
      'comment' => 'Attachment MIME type',
    ),
    'file2_url' => 
    array (
      'name' => 'file2_url',
      'vname' => 'LBL_FILE_URL',
      'type' => 'function',
      'function_require' => 'include/upload_file.php',
      'function_class' => 'UploadFile',
      'function_name' => 'get_url',
      'function_params' => 
      array (
        0 => 'file2name',
        1 => 'id',
      ),
      'source' => 'function',
      'reportable' => false,
      'massupdate' => false,
      'comment' => 'Path to file (can be URL)',
    ),
    'file3name' => 
    array (
      'name' => 'file3name',
      'vname' => 'LBL_FILE3NAME',
      'type' => 'varchar',
      'len' => '255',
      'reportable' => true,
      'massupdate' => false,
      'comment' => 'File name associated with the note (attachment)',
    ),
    'file3exists' => 
    array (
      'name' => 'file3exists',
      'vname' => 'LBL_FILE3EXISTS',
      'type' => 'bool',
      'source' => 'non-db',
      'massupdate' => false,
    ),
    'file3link' => 
    array (
      'name' => 'file3link',
      'vname' => 'LBL_FILE3EXISTS',
      'type' => 'varchar',
      'source' => 'non-db',
      'massupdate' => false,
    ),
    'file3id' => 
    array (
      'name' => 'file3id',
      'type' => 'id',
    ),
    'file3_mime_type' => 
    array (
      'name' => 'file3_mime_type',
      'vname' => 'LBL_FILE3_MIME_TYPE',
      'type' => 'varchar',
      'len' => '100',
      'massupdate' => false,
      'comment' => 'Attachment MIME type',
    ),
    'file3_url' => 
    array (
      'name' => 'file3_url',
      'vname' => 'LBL_FILE_URL',
      'type' => 'function',
      'function_require' => 'include/upload_file.php',
      'function_class' => 'UploadFile',
      'function_name' => 'get_url',
      'function_params' => 
      array (
        0 => 'file2name',
        1 => 'id',
      ),
      'source' => 'function',
      'reportable' => false,
      'massupdate' => false,
      'comment' => 'Path to file (can be URL)',
    ),
    'proposal_notes_link' => 
    array (
      'name' => 'proposal_notes_link',
      'type' => 'link',
      'relationship' => 'proposal_notes_rel',
      'source' => 'non-db',
      'vname' => 'LBL_PROPOSAL_NOTES_LINK',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'proposalspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    0 => 
    array (
      'name' => 'idx_acc',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'account_id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_opp',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'opportunity_id',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_accoppdel',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'account_id',
        1 => 'opportunity_id',
        2 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'idx_stadel',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'proposalstatus',
        1 => 'deleted',
      ),
    ),
  ),
  'relationships' => 
  array (
    'proposals_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Proposals',
      'rhs_table' => 'proposals',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'proposals_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Proposals',
      'rhs_table' => 'proposals',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'proposals_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Proposals',
      'rhs_table' => 'proposals',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'accounts_proposals_rel' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'Proposals',
      'rhs_table' => 'proposals',
      'rhs_key' => 'account_id',
      'relationship_type' => 'one-to-many',
    ),
    'opportunities_proposals_rel' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Proposals',
      'rhs_table' => 'proposals',
      'rhs_key' => 'opportunity_id',
      'relationship_type' => 'one-to-many',
    ),
    'proposal_notes_rel' => 
    array (
      'lhs_module' => 'Proposals',
      'lhs_table' => 'proposals',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Proposals',
    ),
  ),
  'templates' => 
  array (
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);