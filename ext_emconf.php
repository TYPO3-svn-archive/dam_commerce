<?php

########################################################################
# Extension Manager/Repository config file for ext: "dam_commerce"
#
# Auto generated 11-08-2008 21:31
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Commerce DAM connector',
	'description' => 'Extends the commerce extension with the possibility to use DAM for images.',
	'category' => 'fe',
	'shy' => 0,
	'version' => '0.1.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'alpha',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'tx_commerce_categories,tx_commerce_products,tx_commerce_articles,tx_commerce_attributes,tx_commerce_manufacturer,tx_commerce_supplier,tx_commerce_attribute_values',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Juraj Sulek',
	'author_email' => 'juraj@sulek.sk',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:16:{s:9:"ChangeLog";s:4:"090a";s:10:"README.txt";s:4:"3e9a";s:33:"class.tx_damcommerce_articles.php";s:4:"b88e";s:35:"class.tx_damcommerce_categories.php";s:4:"7623";s:33:"class.tx_damcommerce_helpfunc.php";s:4:"8586";s:33:"class.tx_damcommerce_products.php";s:4:"dda9";s:21:"ext_conf_template.txt";s:4:"248d";s:12:"ext_icon.gif";s:4:"3dec";s:17:"ext_localconf.php";s:4:"f321";s:14:"ext_tables.php";s:4:"a257";s:14:"ext_tables.sql";s:4:"31f5";s:16:"locallang_db.xml";s:4:"8c98";s:14:"doc/manual.sxw";s:4:"a0aa";s:19:"doc/wizard_form.dat";s:4:"ee90";s:20:"doc/wizard_form.html";s:4:"635e";s:16:"static/setup.txt";s:4:"fc3f";}',
	'suggests' => array(
	),
);

?>