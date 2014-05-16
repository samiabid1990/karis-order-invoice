<?php
namespace Karis\Component\Order\Model;
/**
 * @author Hedfi Fatma
 *
 */
interface OrderManagerInterface {

	/**
	 * create an empty order instance
	 * 
	 * @return orderInterface 
	 */
	public function createOrder();
}
