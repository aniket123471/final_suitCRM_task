<?php
/* Smarty version 4.5.5, created on 2025-11-21 06:05:56
  from 'C:\wamp64\www\final_test_suiteCRM\modules\Emails\templates\displayHasAttachmentField.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6920014408c2b5_21000835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66d22ed2566943fa9d7af70e755cf3b86de0cdc3' => 
    array (
      0 => 'C:\\wamp64\\www\\final_test_suiteCRM\\modules\\Emails\\templates\\displayHasAttachmentField.tpl',
      1 => 1763484801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6920014408c2b5_21000835 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\final_test_suiteCRM\\include\\Smarty\\plugins\\function.sugar_getimagepath.php','function'=>'smarty_function_sugar_getimagepath',),));
?>

<div class="email-has-attachement">
    <?php if ($_smarty_tpl->tpl_vars['bean']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['bean']->value['has_attachment']) {?>
            <div class="email-has-attachment"><span class="glyphicon"><img src="<?php echo smarty_function_sugar_getimagepath(array('directory'=>'','file_name'=>'attachment-indicator','file_extension'=>"svg",'file'=>'attachment-indicator.svg'),$_smarty_tpl);?>
"/></span></div>
        <?php }?>

    <?php }?>
</div><?php }
}
