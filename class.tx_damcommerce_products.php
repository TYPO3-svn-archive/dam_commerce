<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2007 Juraj Sulek (juraj@sulek.sk)
*  All rights reserved
*
*  This script is part of the Typo3 project. The Typo3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * Part of the "Commerce DAM connector" extension.
 *
 * @author	Juraj Sulek <juraj@sulek.sk>
 * @package commerce DAM connector
 * @subpackage
 */
/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 *
 *
 *   45: class tx_damcommerce_products
 *   55:     function postProcessLinkArray($markerArray,$element,$this_default)
 *
 * TOTAL FUNCTIONS: 1
 * (This index is automatically created/updated by the extension "extdeveval")
 *
 */
require_once(t3lib_extMgm::extPath('dam_commerce').'class.tx_damcommerce_helpfunc.php');

class tx_damcommerce_products{

	/**
	 * Add DAM elements to products-markers
	 *
	 * @param	array		$markerArray: array with processed markers
	 * @param	object		$element: object with data about product
	 * @param	object		$this_default: this object
	 * @return	array		a array with filled DAM markers
	 */
	function postProcessLinkArray($markerArray,$element,$this_default){
		/* products */
		$uid=$element->_LOCALIZED_UID ? $element->_LOCALIZED_UID : $element->uid;
		$tempSetup = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['dam_commerce']);
		
		/* product images */
		if($this_default->conf['listView.']['products.']['fields.']['DAM_images.']['disable']!=1){
			if(!$tempSetup['add_orig_field_product_images']) {
				$markerArray['###PRODUCT_IMAGES###']='';
			};
			tx_damcommerce_helpfunc::getImage($markerArray['###PRODUCT_IMAGES###'],$this_default,$this_default->conf['listView.']['products.']['fields.']['DAM_images.'],$uid,'tx_commerce_products','dam_commerce_prod_1');
		}
		
		/* product teaser images */
		if($this_default->conf['listView.']['products.']['fields.']['DAM_teaserimages.']['disable']!=1){
			if(!$tempSetup['add_orig_field_product_teaserimages']) {
				$markerArray['###PRODUCT_TEASERIMAGES###']='';
			};
			tx_damcommerce_helpfunc::getImage($markerArray['###PRODUCT_TEASERIMAGES###'],$this_default,$this_default->conf['listView.']['products.']['fields.']['DAM_teaserimages.'],$uid,'tx_commerce_products','dam_commerce_prod_2');
		}
		
		/* product manufacturers logo */
		if($this_default->conf['listView.']['manufacturers.']['fields.']['DAM_logo.']['disable']!=1){
			//if(!$tempSetup['add_orig_field_manufacturers_logo']) {
				$markerArray['###PRODUCT_MANUFACTURERLOGO###']='';
			//};
			
			tx_damcommerce_helpfunc::getImage($markerArray['###PRODUCT_MANUFACTURERLOGO###'],$this_default,$this_default->conf['listView.']['manufacturers.']['fields.']['DAM_logo.'],$element->manufacturer_uid,'tx_commerce_manufacturer','dam_commerce_man_1');
		}
		return $markerArray;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/dam_commerce/class.tx_damcommerce_products.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/dam_commerce/class.tx_damcommerce_products.php']);
}

?>