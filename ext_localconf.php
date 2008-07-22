<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

//categories - listview
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['commerce/lib/class.tx_commerce_pibase.php']['generalElement'][]="EXT:dam_commerce/class.tx_damcommerce_categories.php:&tx_damcommerce_categories";

//products - listview
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['commerce/lib/class.tx_commerce_pibase.php']['product'][]="EXT:dam_commerce/class.tx_damcommerce_products.php:&tx_damcommerce_products";

//article
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['commerce/lib/class.tx_commerce_pibase.php']['articleMarker'][]="EXT:dam_commerce/class.tx_damcommerce_articles.php:&tx_damcommerce_articles";
?>