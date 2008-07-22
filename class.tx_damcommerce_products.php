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
 *   43: class tx_damcommerce_products
 *   53:     function postProcessLinkArray($markerArray,$element,$this_default)
 *
 * TOTAL FUNCTIONS: 1
 * (This index is automatically created/updated by the extension "extdeveval")
 *
 */
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
			$files_images=tx_dam_db::getReferencedFiles('tx_commerce_products', $uid, 'dam_commerce_prod_1');
			if(count($files_images['files'])>0){
				foreach($files_images['files'] as $key=>$val){
					$damField=$this_default->conf['listView.']['products.']['fields.']['DAM_images.'];
					$damField['file']=$val;
					$markerArray['###PRODUCT_IMAGES###'].=$this_default->cObj->IMAGE($damField);
				};
			};
		}
		
		/* product teaser images */
		if($this_default->conf['listView.']['products.']['fields.']['DAM_teaserimages.']['disable']!=1){
			if(!$tempSetup['add_orig_field_product_teaserimages']) {
				$markerArray['###PRODUCT_TEASERIMAGES###']='';
			};
			$files_teaser=tx_dam_db::getReferencedFiles('tx_commerce_products', $uid, 'dam_commerce_prod_2');
			if(count($files_teaser['files'])>0){
				foreach($files_teaser['files'] as $key=>$val){
					$damField=$this_default->conf['listView.']['products.']['fields.']['DAM_teaserimages.'];
					$damField['file']=$val;
					$markerArray['###PRODUCT_TEASERIMAGES###'].=$this_default->cObj->IMAGE($damField);
				};
			};
		}
		
		/* product manufacturers logo */
		if($this_default->conf['listView.']['manufacturers.']['fields.']['DAM_logo.']['disable']!=1){
			//if(!$tempSetup['add_orig_field_manufacturers_logo']) {
				$markerArray['###PRODUCT_MANUFACTURERLOGO###']='';
			//};
			$files_manufa=tx_dam_db::getReferencedFiles('tx_commerce_manufacturer', $element->manufacturer_uid, 'dam_commerce_man_1');
			if(count($files_manufa['files'])>0){
				foreach($files_manufa['files'] as $key=>$val){
					$damField=$this_default->conf['listView.']['manufacturers.']['fields.']['DAM_logo.'];
					$damField['file']=$val;
					$markerArray['###PRODUCT_MANUFACTURERLOGO###'].=$this_default->cObj->IMAGE($damField);
				};
			};
		}
		return $markerArray;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/dam_commerce/class.tx_damcommerce_products.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/dam_commerce/class.tx_damcommerce_products.php']);
}

?>