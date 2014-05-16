<?php
namespace Karis\OrderBundle\Manager;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * @author Hedfi Fatma
 *
 */
use Karis\Component\Order\Model\OrderManager as baseOrder;

class OrderManager extends baseOrder{
	
	protected $objectManager;
	protected $repository;
	
	/**
	 * 
	 * @param ObjectManager $om
	 */
	
	public function __construct(ObjectManager $om)
	{
		$this->objectManager = $om;
		$this->repository = $om->getRepository("KarisOrderBundle:Order");
	}

}
