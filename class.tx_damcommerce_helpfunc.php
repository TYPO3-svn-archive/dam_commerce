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
 *   43: class tx_damcommerce_helpfunc
 *   55:     function function getImage(&$marker,$thisDefault,$confArray,$uid,$table,$ident)
 *
 * TOTAL FUNCTIONS: 1
 * (This index is automatically created/updated by the extension "extdeveval")
 *
 */
class tx_damcommerce_helpfunc{
	/**
	 * get the IMG tag
	 *
	 * @param	string		marker which should be filled
	 * @param	object		$this object
	 * @param	array		typoscript configuration array for the image
	 * @param	int			element uid
	 * @param	string		database table
	 * @param	string		dam ident
	 * @return	string		IMG tag
	 */
	function getImage(&$marker,$thisDefault,$confArray,$uid,$table,$ident){
		$files=tx_dam_db::getReferencedFiles($table, $uid, $ident,'tx_dam_mm_ref','tx_dam.uid,tx_dam.'.$confArray['title.']['field'].',tx_dam.'.$confArray['alt.']['field'].',tx_dam.'.$confArray['caption.']['field'].',tx_dam.file_name,tx_dam.file_dl_name,tx_dam.file_path');
		if(count($files['rows'])>0){
			foreach($files['rows'] as $key=>$val){
				$damField=$confArray;
				$damField['file']=$val['file_path'].$val['file_name'];
				$damField['altText']=$val[$confArray['alt.']['field']];
				$damField['titleText']=$val[$confArray['title.']['field']];
				$image=$thisDefault->cObj->IMAGE($damField);
				if($confArray['caption']==1){
					$image=str_replace('###IMAGE###',$image,$confArray['caption.']['layout']);
					$image=str_replace('###CAPTION###',$val[$confArray['caption.']['field']],$image);
				}
				$marker.=$image;
			}
		}		
		return $markerArray;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/dam_commerce/class.tx_damcommerce_helpfunc.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/dam_commerce/class.tx_damcommerce_helpfunc.php']);
}

?>