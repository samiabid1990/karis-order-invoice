<?php
namespace Karis\Component\Order\Model;
/**
 * @author Hedfi Fatma <fatmahedfi@gmail.com>
 *
 */
use Karis\Component\Order\Model\OrderManagerInterface;

abstract class OrderManager implements OrderManagerInterface {
	
/**
 * 
 * @return \Karis\OrderBundle\Model\Karis\OrderBundle\Model\OrderInterface
 */
	public function createOrder(){
	
		$order = new Karis\Component\Order\Model\OrderInterface();
		return  $order;
	}
	
	

}
