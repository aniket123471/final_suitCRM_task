<?php
/* Smarty version 4.5.5, created on 2025-11-21 06:04:57
  from 'C:\wamp64\www\final_test_suiteCRM\cache\themes\SuiteP\modules\Leads\SearchFormFooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69200109e72238_69688929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b15daa5899f8abbee48679a2943a7f5c8246b826' => 
    array (
      0 => 'C:\\wamp64\\www\\final_test_suiteCRM\\cache\\themes\\SuiteP\\modules\\Leads\\SearchFormFooter.tpl',
      1 => 1763705097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/SearchForm/tpls/footerPopup.tpl' => 1,
  ),
),false)) {
function content_69200109e72238_69688929 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\final_test_suiteCRM\\include\\Smarty\\plugins\\function.sugar_getimagepath.php','function'=>'smarty_function_sugar_getimagepath',),1=>array('file'=>'C:\\wamp64\\www\\final_test_suiteCRM\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),));
?>

</form>

<?php echo '<script'; ?>
>
function toggleInlineSearch()
{
    if (document.getElementById('inlineSavedSearch').style.display == 'none'){
        document.getElementById('showSSDIV').value = 'yes'		
        document.getElementById('inlineSavedSearch').style.display = '';

        document.getElementById('up_down_img').src='<?php echo smarty_function_sugar_getimagepath(array('file'=>"basic_search.gif"),$_smarty_tpl);?>
';
        document.getElementById('up_down_img').setAttribute('alt',"<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_HIDE_OPTIONS'),$_smarty_tpl);?>
");

    }else{

        document.getElementById('up_down_img').src='<?php echo smarty_function_sugar_getimagepath(array('file'=>"advanced_search.gif"),$_smarty_tpl);?>
';
        document.getElementById('up_down_img').setAttribute('alt',"<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_SHOW_OPTIONS'),$_smarty_tpl);?>
");
			
        document.getElementById('showSSDIV').value = 'no';		
        document.getElementById('inlineSavedSearch').style.display = 'none';		
    }
}
<?php echo '</script'; ?>
>


<?php if ($_smarty_tpl->tpl_vars['searchFormInPopup']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:include/SearchForm/tpls/footerPopup.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php }
}
