<?php
/* Smarty version 4.5.5, created on 2025-11-21 06:05:55
  from 'C:\wamp64\www\final_test_suiteCRM\modules\Emails\templates\displaySubjectField.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69200143a5cb35_58724063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41442871f35d00856fdf94b0da613580b43dff03' => 
    array (
      0 => 'C:\\wamp64\\www\\final_test_suiteCRM\\modules\\Emails\\templates\\displaySubjectField.tpl',
      1 => 1763484801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69200143a5cb35_58724063 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="email-subject">
    <?php if ($_smarty_tpl->tpl_vars['bean']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['bean']->value['name'] == '') {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'subject', 'subject', null);
echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NO_SUBJECT'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php } else { ?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'subject', 'subject', null);
echo $_smarty_tpl->tpl_vars['bean']->value['name'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php }?>

                <?php if (!empty($_smarty_tpl->tpl_vars['bean']->value['id']) && $_smarty_tpl->tpl_vars['bean']->value['status'] == $_smarty_tpl->tpl_vars['APP_LIST_STRINGS']->value['dom_email_status']['draft']) {?>
            <a href="index.php?module=Emails&action=DetailDraftView&record=<?php echo $_smarty_tpl->tpl_vars['bean']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
</a>
        <?php } elseif (!empty($_smarty_tpl->tpl_vars['bean']->value['id']) && $_smarty_tpl->tpl_vars['bean']->value['status'] != $_smarty_tpl->tpl_vars['APP_LIST_STRINGS']->value['dom_email_status']['draft']) {?>
            <a href="index.php?module=Emails&action=DetailView&record=<?php echo $_smarty_tpl->tpl_vars['bean']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
</a>
        <?php } else { ?>
            <a href="index.php?module=Emails&action=DisplayDetailView&folder_name=<?php echo $_smarty_tpl->tpl_vars['bean']->value['folder'];?>
&folder=<?php echo $_smarty_tpl->tpl_vars['bean']->value['folder_type'];?>
&inbound_email_record=<?php echo $_smarty_tpl->tpl_vars['bean']->value['inbound_email_record'];?>
&uid=<?php echo $_smarty_tpl->tpl_vars['bean']->value['uid'];?>
&msgno=<?php echo $_smarty_tpl->tpl_vars['bean']->value['msgno'];?>
"><?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
</a>
        <?php }?>
    <?php }?>
</div><?php }
}
