<?php
namespace Karis\OrderBundle\Model;
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
