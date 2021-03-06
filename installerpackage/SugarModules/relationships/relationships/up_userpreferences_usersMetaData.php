<?php
// created: 2013-08-15 08:48:59
$dictionary["up_userpreferences_users"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'up_userpreferences_users' => 
    array (
      'lhs_module' => 'up_UserPreferences',
      'lhs_table' => 'up_userpreferences',
      'lhs_key' => 'id',
      'rhs_module' => 'Users',
      'rhs_table' => 'users',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'up_userpreferences_users_c',
      'join_key_lhs' => 'up_userpreferences_usersup_userpreferences_ida',
      'join_key_rhs' => 'up_userpreferences_usersusers_idb',
    ),
  ),
  'table' => 'up_userpreferences_users_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'up_userpreferences_usersup_userpreferences_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'up_userpreferences_usersusers_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'up_userpreferences_usersspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'up_userpreferences_users_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'up_userpreferences_usersup_userpreferences_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'up_userpreferences_users_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'up_userpreferences_usersusers_idb',
      ),
    ),
  ),
);