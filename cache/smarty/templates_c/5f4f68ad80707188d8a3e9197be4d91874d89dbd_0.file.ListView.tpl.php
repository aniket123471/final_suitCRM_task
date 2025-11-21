<?php
/* Smarty version 4.5.5, created on 2025-11-21 06:05:03
  from 'C:\wamp64\www\final_test_suiteCRM\include\SugarFields\Fields\Base\ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6920010f878064_19329160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f4f68ad80707188d8a3e9197be4d91874d89dbd' => 
    array (
      0 => 'C:\\wamp64\\www\\final_test_suiteCRM\\include\\SugarFields\\Fields\\Base\\ListView.tpl',
      1 => 1763484852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6920010f878064_19329160 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\final_test_suiteCRM\\include\\Smarty\\plugins\\function.sugar_fetch.php','function'=>'smarty_function_sugar_fetch',),));
?>

<?php echo smarty_function_sugar_fetch(array('object'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value,'key'=>$_smarty_tpl->tpl_vars['col']->value),$_smarty_tpl);?>

<?php }
}
