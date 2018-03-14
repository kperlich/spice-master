<?php 
 $GLOBALS["dictionary"]["Mailbox"]=array (
  'table' => 'mailboxes',
  'audited' => true,
  'unified_search' => true,
  'full_text_search' => true,
  'unified_search_default_enabled' => true,
  'duplicate_merge' => false,
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
      'comment' => 'Mailbox name',
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
      'type' => 'varchar',
      'comment' => 'Mailbox description',
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
      'relationship' => 'mailboxes_created_by',
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
      'relationship' => 'mailboxes_modified_user',
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
      'relationship' => 'mailboxes_assigned_user',
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
    'imap_pop3_host' => 
    array (
      'name' => 'imap_pop3_host',
      'vname' => 'LBL_HOST_IMAP_POP3',
      'type' => 'varchar',
      'comment' => 'imap / pop3 host',
    ),
    'imap_pop3_port' => 
    array (
      'name' => 'imap_pop3_port',
      'vname' => 'LBL_PORT_IMAP_POP3',
      'type' => 'int',
      'comment' => 'imap / pop3 port',
    ),
    'imap_pop3_data_valid' => 
    array (
      'name' => 'imap_pop3_data_valid',
      'vname' => 'LBL_IPDV',
      'type' => 'bool',
      'value' => 'false',
      'hidden' => 'true',
      'comment' => 'imap_pop3_data_valid validation',
    ),
    'imap_pop3_protocol_type' => 
    array (
      'name' => 'imap_pop3_protocol_type',
      'vname' => 'LBL_PROTOCOL_TYPE',
      'type' => 'enum',
      'options' => 'mailboxes_imap_pop3_protocol_dom',
      'comment' => 'imap_pop_dropdown_to_choose',
    ),
    'imap_pop3_encryption' => 
    array (
      'name' => 'imap_pop3_encryption',
      'vname' => 'LBL_ENCRYPTION',
      'type' => 'enum',
      'options' => 'mailboxes_imap_pop3_encryption_dom',
      'comment' => 'imap_pop_encryption_set',
    ),
    'imap_pop3_username' => 
    array (
      'name' => 'imap_pop3_username',
      'vname' => 'LBL_USERNAME_IMAP_POP3',
      'type' => 'varchar',
      'comment' => 'username',
    ),
    'imap_pop3_password' => 
    array (
      'name' => 'imap_pop3_password',
      'vname' => 'LBL_PASSWORD_IMAP_POP3',
      'type' => 'varchar',
      'comment' => 'password',
    ),
    'smtp_host' => 
    array (
      'name' => 'smtp_host',
      'vname' => 'LBL_HOST_SMTP',
      'type' => 'varchar',
      'comment' => 'smtp host',
    ),
    'smtp_port' => 
    array (
      'name' => 'smtp_port',
      'vname' => 'LBL_PORT_SMTP',
      'type' => 'int',
      'comment' => 'smtp port',
      'default' => 25,
    ),
    'smtp_debug' => 
    array (
      'name' => 'smtp_debug',
      'vname' => 'LBL_DEBUG',
      'type' => 'int',
      'comment' => 'smtp debug information',
      'default' => 0,
    ),
    'smtp_auth' => 
    array (
      'name' => 'smtp_auth',
      'vname' => 'LBL_AUTH_ENABLED',
      'type' => 'bool',
      'comment' => 'smtp authentication enabled',
      'default' => 0,
    ),
    'smtp_username' => 
    array (
      'name' => 'smtp_username',
      'vname' => 'LBL_USERNAME_SMTP',
      'type' => 'varchar',
      'comment' => 'username',
    ),
    'smtp_password' => 
    array (
      'name' => 'smtp_password',
      'vname' => 'LBL_PASSWORD_SMTP',
      'type' => 'varchar',
      'comment' => 'password',
    ),
    'smtp_auth_type' => 
    array (
      'name' => 'smtp_auth_type',
      'vname' => 'LBL_AUTH_TYPE',
      'type' => 'enum',
      'options' => 'smtp_authentication_types',
      'comment' => 'authentication type',
    ),
    'imap_inbox_dir' => 
    array (
      'name' => 'imap_inbox_dir',
      'vname' => 'LBL_IMAP_INBOX_DIR',
      'value' => 'No Files',
      'type' => 'text',
      'comment' => 'imap_inbox_dir popup window to choose directory of imap',
    ),
    'emails' => 
    array (
      'name' => 'emails',
      'vname' => 'LBL_EMAILS_LINK',
      'type' => 'link',
      'relationship' => 'mailboxes_emails_rel',
      'link_type' => 'one',
      'source' => 'non-db',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
      'module' => 'Emails',
      'bean_name' => 'Email',
    ),
    'sysmailrelais_id' => 
    array (
      'name' => 'sysmailrelais_id',
      'vname' => 'LBL_SYSMAILRELAIS_ID',
      'type' => 'varchar',
      'comment' => 'FK to SYSMAILRELAIS',
    ),
    'campaigns' => 
    array (
      'name' => 'campaigns',
      'vname' => 'LBL_CAMPAIGNS_LINK',
      'type' => 'link',
      'relationship' => 'campaigns_mailboxes_rel',
      'link_type' => 'one',
      'source' => 'non-db',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
    ),
  ),
  'relationships' => 
  array (
    'mailboxes_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Mailboxes',
      'rhs_table' => 'mailboxes',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'mailboxes_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Mailboxes',
      'rhs_table' => 'mailboxes',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'mailboxes_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Mailboxes',
      'rhs_table' => 'mailboxes',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'mailboxes_emails_rel' => 
    array (
      'lhs_module' => 'Mailboxes',
      'lhs_table' => 'mailboxes',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
      'rhs_key' => 'mailbox_id',
      'relationship_type' => 'one-to-many',
    ),
    'campaigns_mailboxes_rel' => 
    array (
      'lhs_module' => 'Mailboxes',
      'lhs_table' => 'mailboxes',
      'lhs_key' => 'id',
      'rhs_module' => 'Campaigns',
      'rhs_table' => 'campaigns',
      'rhs_key' => 'mailbox_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'mailboxespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'optimistic_locking' => true,
  'templates' => 
  array (
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);