<?php
namespace Karis\Component\Order\Model;
/**
 * @author Hedfi Fatma <fatmahedfi@gmail.com>
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
