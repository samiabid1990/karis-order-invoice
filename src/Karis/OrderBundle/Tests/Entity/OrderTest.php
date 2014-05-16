<?php
namespace Karis\OrderBundle\Tests\Entity;
/**
 * @author Hedfi Fatma
 *
 */
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Karis\OrderBundle\Entity\Order;

class OrderTest extends WebTestCase {

	protected $order;
	protected $em;
	
	public function setUp()
	{
		static::$kernel = static::createKernel();
		static::$kernel->boot();
		$this->em = static::$kernel->getContainer()
		->get('doctrine')
		->getManager()
		;
		$this->order = new Order();
	}
	
/**
 * test the getReference method
 */	
	public function testGetReference()
	{
		$reference = 'xxxxxx';
	
		$this->order->setReference($reference);
	
		$this->assertEquals($reference, $this->order->getReference());
	}
	
/**
 * test if order are generated correctly
 */	
	public function testGenerateOrder()
	{
		
		$date = date('Y-m-d');
		$this->order->setDate(new \DateTime($date));
		$this->order->setFunction("aaaaa");
		$this->order->setName("name");
		$this->order->setReference("xxxxxx");
		
		$this->em->persist($this->order);
		$this->em->flush();
		
		$this->assertEquals("name", $this->order->getName());
		
	}
}
