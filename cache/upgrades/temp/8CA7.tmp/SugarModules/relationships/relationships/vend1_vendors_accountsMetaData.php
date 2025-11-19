<?php
// created: 2025-11-11 17:39:28
$dictionary["vend1_vendors_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'vend1_vendors_accounts' => 
    array (
      'lhs_module' => 'vend1_Vendors',
      'lhs_table' => 'vend1_vendors',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'vend1_vendors_accounts_c',
      'join_key_lhs' => 'vend1_vendors_accountsvend1_vendors_ida',
      'join_key_rhs' => 'vend1_vendors_accountsaccounts_idb',
    ),
  ),
  'table' => 'vend1_vendors_accounts_c',
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
      'name' => 'vend1_vendors_accountsvend1_vendors_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'vend1_vendors_accountsaccounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'vend1_vendors_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'vend1_vendors_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'vend1_vendors_accountsvend1_vendors_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'vend1_vendors_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'vend1_vendors_accountsaccounts_idb',
      ),
    ),
  ),
);