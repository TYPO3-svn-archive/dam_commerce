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
 *   43: class tx_damcommerce_categories
 *   53:     function additionalMarkerElement($markerArray,$element,$this_default)
 *
 * TOTAL FUNCTIONS: 1
 * (This index is automatically created/updated by the extension "extdeveval")
 *
 */
class tx_damcommerce_categories{

	/**
	 * Add DAM elements to category-markers
	 *
	 * @param	array		$markerArray: array with processed markers
	 * @param	object		$element: object with data about category
	 * @param	object		$this_default: this object
	 * @return	array		a array with filled DAM markers
	 */
	function additionalMarkerElement($markerArray,$element,$this_default){
		/* categories - list */
		$uid=$element->_LOCALIZED_UID ? $element->_LOCALIZED_UID : $element->uid;
		$tempSetup = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['dam_commerce']);
		/* category images */
		if($this_default->conf['categoryListView.']['categories.']['fields.']['DAM_images.']['disable']!=1){
			if(!$tempSetup['add_orig_field_category_images']) {
				$markerArray['IMAGES']='';
			};
	
			$files=tx_dam_db::getReferencedFiles('tx_commerce_categories', $uid, 'dam_commerce_cat_1');
			if(count($files['files'])>0){
				foreach($files['files'] as $key=>$val){
					$damField=$this_default->conf['categoryListView.']['categories.']['fields.']['DAM_images.'];
					$damField['file']=$val;
					$markerArray['IMAGES'].=$this_default->cObj->IMAGE($damField);
				}
			}
		}
		return $markerArray;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/dam_commerce/class.tx_damcommerce_categories.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/dam_commerce/class.tx_damcommerce_categories.php']);
}

?>