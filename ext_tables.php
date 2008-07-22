<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');
$tempSetup = unserialize($TYPO3_CONF_VARS['EXT']['extConf']['dam_commerce']);
/* ------------------------------------------------------------------------------------------- */
/* categories */
t3lib_div::loadTCA('tx_commerce_categories');
$tempColumns = array (
	'tx_damcommerce_categories_images' => txdam_getMediaTCA('image_field', 'dam_commerce_cat_1')
);
$tempColumns['tx_damcommerce_categories_images']['label']=$TCA['tx_commerce_categories']['columns']['images']['label'];
t3lib_extMgm::addTCAcolumns('tx_commerce_categories',$tempColumns,1);

if ($tempSetup['add_orig_field_category_images']) {
	t3lib_extMgm::addToAllTCAtypes('tx_commerce_categories','tx_damcommerce_categories_images','','after:images');
} else {
	$TCA['tx_commerce_categories']['types']['0']['showitem'] = str_replace(', images,', ', tx_damcommerce_categories_images,', $TCA['tx_commerce_categories']['types']['0']['showitem']);
}
/* ------------------------------------------------------------------------------------------- */
/* products */
t3lib_div::loadTCA('tx_commerce_products');
$tempColumns_2 = array (
	'tx_damcommerce_prod_images' => txdam_getMediaTCA('image_field', 'dam_commerce_prod_1'),
	'tx_damcommerce_prod_teaserimages' => txdam_getMediaTCA('image_field', 'dam_commerce_prod_2')
);
$tempColumns_2['tx_damcommerce_prod_images']['label']=$TCA['tx_commerce_products']['columns']['images']['label'];
$tempColumns_2['tx_damcommerce_prod_teaserimages']['label']=$TCA['tx_commerce_products']['columns']['teaserimages']['label'];
t3lib_extMgm::addTCAcolumns('tx_commerce_products',$tempColumns_2,1);

if ($tempSetup['add_orig_field_product_images']) {
	t3lib_extMgm::addToAllTCAtypes('tx_commerce_products','tx_damcommerce_prod_images','','after:images');
} else {
	$TCA['tx_commerce_products']['types']['0']['showitem'] = str_replace(', images,', ', tx_damcommerce_prod_images,', $TCA['tx_commerce_products']['types']['0']['showitem']);
}

if ($tempSetup['add_orig_field_product_teaserimages']) {
	t3lib_extMgm::addToAllTCAtypes('tx_commerce_products','tx_damcommerce_prod_teaserimages','','after:teaserimages');
} else {
	$TCA['tx_commerce_products']['types']['0']['showitem'] = str_replace(', teaserimages,', ', tx_damcommerce_prod_teaserimages,', $TCA['tx_commerce_products']['types']['0']['showitem']);
}
/* ------------------------------------------------------------------------------------------- */
/* articles */
t3lib_div::loadTCA('tx_commerce_articles');
$tempColumns_3 = array (
	'tx_damcommerce_art_images' => txdam_getMediaTCA('image_field', 'dam_commerce_art_1')
);
$tempColumns_3['tx_damcommerce_art_images']['label']=$TCA['tx_commerce_articles']['columns']['images']['label'];
t3lib_extMgm::addTCAcolumns('tx_commerce_articles',$tempColumns_3,1);

if ($tempSetup['add_orig_field_articles_images']) {
	t3lib_extMgm::addToAllTCAtypes('tx_commerce_articles','tx_damcommerce_art_images','','after:images');
} else {
	$TCA['tx_commerce_articles']['types']['0']['showitem'] = str_replace('images', 'tx_damcommerce_art_images', $TCA['tx_commerce_articles']['types']['0']['showitem']);
}
/* ------------------------------------------------------------------------------------------- */
/* atributes */
t3lib_div::loadTCA('tx_commerce_attributes');
$tempColumns_4 = array (
	'tx_damcommerce_atrib_icon' => txdam_getMediaTCA('image_field', 'dam_commerce_atr_1')
);
$tempColumns_4['tx_damcommerce_atrib_icon']['label']=$TCA['tx_commerce_attributes']['columns']['icon']['label'];
$tempColumns_4['tx_damcommerce_atrib_icon']['config']['maxitems']=1;
$tempColumns_4['tx_damcommerce_atrib_icon']['config']['size']=2;
t3lib_extMgm::addTCAcolumns('tx_commerce_attributes',$tempColumns_4,1);

if ($tempSetup['add_orig_field_atributes_icon']) {
	t3lib_extMgm::addToAllTCAtypes('tx_commerce_attributes','tx_damcommerce_atrib_icon','','after:icon');
} else {
	$TCA['tx_commerce_attributes']['types']['0']['showitem'] = str_replace(', icon;', ', tx_damcommerce_atrib_icon;', $TCA['tx_commerce_attributes']['types']['0']['showitem']);
}
/* ------------------------------------------------------------------------------------------- */
/* tx_commerce_manufacturer */
t3lib_div::loadTCA('tx_commerce_manufacturer');
$tempColumns_5 = array (
	'tx_damcommerce_manufac_logo' => txdam_getMediaTCA('image_field', 'dam_commerce_man_1')
);
$tempColumns_5['tx_damcommerce_manufac_logo']['label']=$TCA['tx_commerce_manufacturer']['columns']['logo']['label'];
$tempColumns_5['tx_damcommerce_manufac_logo']['config']['maxitems']=1;
$tempColumns_5['tx_damcommerce_manufac_logo']['config']['size']=2;
t3lib_extMgm::addTCAcolumns('tx_commerce_manufacturer',$tempColumns_5,1);

if ($tempSetup['add_orig_field_manufacturers_logo']) {
	t3lib_extMgm::addToAllTCAtypes('tx_commerce_manufacturer','tx_damcommerce_manufac_logo','','after:logo');
} else {
	$TCA['tx_commerce_manufacturer']['types']['0']['showitem'] = str_replace('logo;', 'tx_damcommerce_manufac_logo;', $TCA['tx_commerce_manufacturer']['types']['0']['showitem']);
}
/* ------------------------------------------------------------------------------------------- */
/* tx_commerce_supplier */
t3lib_div::loadTCA('tx_commerce_supplier');
$tempColumns_6 = array (
	'tx_damcommerce_supl_logo' => txdam_getMediaTCA('image_field', 'dam_commerce_sup_1')
);
$tempColumns_6['tx_damcommerce_supl_logo']['label']=$TCA['tx_commerce_supplier']['columns']['logo']['label'];
$tempColumns_6['tx_damcommerce_supl_logo']['config']['maxitems']=1;
$tempColumns_6['tx_damcommerce_supl_logo']['config']['size']=2;
t3lib_extMgm::addTCAcolumns('tx_commerce_supplier',$tempColumns_6,1);

if ($tempSetup['add_orig_field_suplier_logo']) {
	t3lib_extMgm::addToAllTCAtypes('tx_commerce_supplier','tx_damcommerce_supl_logo','','after:logo');
} else {
	$TCA['tx_commerce_supplier']['types']['0']['showitem'] = str_replace('logo;', 'tx_damcommerce_supl_logo;', $TCA['tx_commerce_supplier']['types']['0']['showitem']);
}
/* ------------------------------------------------------------------------------------------- */
/* tx_commerce_attribute_values */
t3lib_div::loadTCA('tx_commerce_attribute_values');
$tempColumns_7 = array (
	'tx_damcommerce_atr_val_icon' => txdam_getMediaTCA('image_field', 'dam_commerce_atrval_1')
);
$tempColumns_7['tx_damcommerce_atr_val_icon']['label']=$TCA['tx_commerce_attribute_values']['columns']['icon']['label'];
$tempColumns_7['tx_damcommerce_atr_val_icon']['config']['maxitems']=1;
$tempColumns_7['tx_damcommerce_atr_val_icon']['config']['size']=2;
t3lib_extMgm::addTCAcolumns('tx_commerce_attribute_values',$tempColumns_7,1);

if ($tempSetup['add_orig_field_atrval_icon']) {
	t3lib_extMgm::addToAllTCAtypes('tx_commerce_attribute_values','tx_damcommerce_atr_val_icon','','after:icon');
} else {
	$TCA['tx_commerce_attribute_values']['types']['0']['showitem'] = str_replace(', icon,', ', tx_damcommerce_atr_val_icon;', $TCA['tx_commerce_attribute_values']['types']['0']['showitem']);
}

/* ------------------------------------------------------------------------------------------- */
/* static template */

t3lib_extMgm::addStaticFile($_EXTKEY,'static/','DAM COMMERCE');
?>