<?php
/* Smarty version 4.5.5, created on 2025-11-21 06:05:03
  from 'C:\wamp64\www\final_test_suiteCRM\include\ListView\ListViewColumnsFilterLink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6920010f6eb6f9_84241568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b133acf25cfe09e0c50c2d01e0c83421d8a88568' => 
    array (
      0 => 'C:\\wamp64\\www\\final_test_suiteCRM\\include\\ListView\\ListViewColumnsFilterLink.tpl',
      1 => 1763484853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6920010f6eb6f9_84241568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\final_test_suiteCRM\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),));
?>
<ul class="clickMenu selectmenu SugarActionMenu columnsFilterLink listViewLinkButton listViewLinkButton_<?php echo $_smarty_tpl->tpl_vars['action_menu_location']->value;?>
" onclick="columnsFilter.onOpen();">
    <li class="sugar_action_button">
        <a href="#" class="glyphicon glyphicon-th-list" data-toggle="modal" data-target=".modal-columns-filter" title='<?php echo smarty_function_sugar_translate(array('label'=>"LBL_COLUMN_CHOOSER"),$_smarty_tpl);?>
'></a>
    </li>
</ul>
<?php }
}
