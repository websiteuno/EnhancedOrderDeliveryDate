<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category   Softprodigy
 * @package    Softprodigy_Deliverydate
 * @copyright  Copyright (c) 2014 SoftProdigy <magento@softprodigy.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
 
class Softprodigy_Deliverydate_Model_Config_Dayoff extends Mage_Core_Model_Config_Data
{

	/**
	* Get possible sharing configuration options
	*
	* @return array
	*/
	public function toOptionArray()
	{
		$test_array[7] = array(
			'value' => '',
			'label' => Mage::helper('deliverydate')->__('No Day'),
		);
		$test_array[0] = array(
			'value' => 0,
			'label' => Mage::helper('deliverydate')->__('Sunday'),
		);
		$test_array[1] = array(
			'value' => 1,
			'label' => Mage::helper('deliverydate')->__('Monday'),
		);
		$test_array[2] = array(
			'value' => 2,
			'label' => Mage::helper('deliverydate')->__('Tuesday'),
		);
		$test_array[3] = array(
			'value' => 3,
			'label' => Mage::helper('deliverydate')->__('Wedenesday'),
		);
		$test_array[4] = array(
			'value' => 4,
			'label' => Mage::helper('deliverydate')->__('Thursday'),
		);
		$test_array[5] = array(
			'value' => 5,
			'label' => Mage::helper('deliverydate')->__('Friday'),
		);
		$test_array[6] = array(
			'value' => 6,
			'label' => Mage::helper('deliverydate')->__('Saturday'),
		);
		
		return $test_array;
	}

}
