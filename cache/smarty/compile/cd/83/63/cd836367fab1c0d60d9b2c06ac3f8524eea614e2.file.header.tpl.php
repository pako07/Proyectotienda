<?php /* Smarty version Smarty-3.1.19, created on 2016-08-12 12:00:01
         compiled from "C:\wamp\www\prestashop\modules\paypal\\views\templates\admin\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1365057ae00910c24d7-26789595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd836367fab1c0d60d9b2c06ac3f8524eea614e2' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\paypal\\\\views\\templates\\admin\\header.tpl',
      1 => 1471021185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1365057ae00910c24d7-26789595',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PayPal_WPS' => 0,
    'PayPal_HSS' => 0,
    'PayPal_ECS' => 0,
    'PayPal_PPP' => 0,
    'PayPal_module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ae00911165f9_17994151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ae00911165f9_17994151')) {function content_57ae00911165f9_17994151($_smarty_tpl) {?>

<script type="text/javascript">
	var PayPal_WPS = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_WPS']->value);?>
';
	var PayPal_HSS = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_HSS']->value);?>
';
	var PayPal_ECS = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_ECS']->value);?>
';
	var PayPal_PPP = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_PPP']->value);?>
';
</script>

<script type="text/javascript" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/views/js/back_office.js"></script><?php }} ?>
