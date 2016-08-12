<?php /*%%SmartyHeaderCode:1285757adec46e96976-36297035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6bcb0d64f23d6f5814c5af38b0c5aa80d86153d' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\default-bootstrap\\modules\\blockspecials\\blockspecials.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1285757adec46e96976-36297035',
  'variables' => 
  array (
    'link' => 0,
    'special' => 0,
    'PS_CATALOG_MODE' => 0,
    'priceDisplay' => 0,
    'specific_prices' => 0,
    'priceWithoutReduction_tax_excl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57adec470f00c5_83088773',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57adec470f00c5_83088773')) {function content_57adec470f00c5_83088773($_smarty_tpl) {?>
<!-- MODULE Block specials -->
<div id="special_block_right" class="block">
	<p class="title_block">
        <a href="http://localhost/prestashop/index.php?controller=prices-drop" title="Promociones especiales">
            Promociones especiales
        </a>
    </p>
	<div class="block_content products-block">
    		<ul>
        	<li class="clearfix">
            	<a class="products-block-image" href="http://localhost/prestashop/index.php?id_product=7&amp;controller=product">
                    <img 
                    class="replace-2x img-responsive" 
                    src="http://localhost/prestashop/img/p/2/0/20-small_default.jpg" 
                    alt="" 
                    title="Vestido de gasa estampado" />
                </a>
                <div class="product-content">
                	<h5>
                        <a class="product-name" href="http://localhost/prestashop/index.php?id_product=7&amp;controller=product" title="Vestido de gasa estampado">
                            Vestido de gasa estampado
                        </a>
                    </h5>
                                        	<p class="product-description">
                            Vestido sin mangas hasta la rodilla,...
                        </p>
                                        <div class="price-box">
                    	                        	<span class="price special-price">
                                                                    19,03 $                            </span>
                                                                                                                                 <span class="price-percent-reduction">-20%</span>
                                                                                         <span class="old-price">
                                                                    23,78 $                            </span>
                            
                                            </div>
                </div>
            </li>
		</ul>
		<div>
			<a 
            class="btn btn-default button button-small" 
            href="http://localhost/prestashop/index.php?controller=prices-drop" 
            title="Todas los promociones especiales">
                <span>Todas los promociones especiales<i class="icon-chevron-right right"></i></span>
            </a>
		</div>
    	</div>
</div>
<!-- /MODULE Block specials -->
<?php }} ?>
