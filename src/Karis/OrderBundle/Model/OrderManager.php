<?php
namespace Karis\OrderBundle\Model;
/**
 * @author Hedfi Fatma
 *
 */
abstract class OrderManager implements OrderManagerInterface {
	
/**
 * 
 * @return \Karis\OrderBundle\Model\Karis\OrderBundle\Model\OrderInterface
 */
	public function createOrder(){
	
		$order = new Karis\OrderBundle\Model\OrderInterface();
		return  $order;
	}
	
	

}
