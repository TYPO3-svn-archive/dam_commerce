#
# Table structure for table 'tx_commerce_categories'
#
CREATE TABLE tx_commerce_categories (
	tx_damcommerce_categories_images int(11) unsigned DEFAULT '0' NOT NULL
);

#
# Table structure for table 'tx_commerce_products'
#
CREATE TABLE tx_commerce_products (
	tx_damcommerce_prod_images int(11) unsigned DEFAULT '0' NOT NULL,
	tx_damcommerce_prod_teaserimages int(11) unsigned DEFAULT '0' NOT NULL
);

#
# Table structure for table 'tx_commerce_articles'
#
CREATE TABLE tx_commerce_articles (
	tx_damcommerce_art_images int(11) unsigned DEFAULT '0' NOT NULL
);

#
# Table structure for table 'tx_commerce_attributes'
#
CREATE TABLE tx_commerce_attributes (
	tx_damcommerce_atrib_icon int(11) unsigned DEFAULT '0' NOT NULL
);

#
# Table structure for table 'tx_commerce_manufacturer'
#
CREATE TABLE tx_commerce_manufacturer (
	tx_damcommerce_manufac_logo int(11) unsigned DEFAULT '0' NOT NULL
);

#
# Table structure for table 'tx_commerce_supplier'
#
CREATE TABLE tx_commerce_supplier (
	tx_damcommerce_supl_logo int(11) unsigned DEFAULT '0' NOT NULL
);

#
# Table structure for table 'tx_commerce_attribute_values'
#
CREATE TABLE tx_commerce_attribute_values (
	tx_damcommerce_atr_val_icon int(11) unsigned DEFAULT '0' NOT NULL
);