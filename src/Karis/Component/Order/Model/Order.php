<?php
namespace Karis\Component\Order\Model;
/**
 * @author Hedfi Fatma <fatmahedfi@gmail.com>
 *
 */
use Karis\Component\Order\Model\OrderInterface;

abstract class Order implements OrderInterface
{

    /**
	 * @var integer
	 */
	private $id;

	/**
	 * @var string
	 */
	private $reference;
	
	/**
	 * @var string
	 */
	private $name;
	
	/**
	 * @var string
	 */
	private $function;
	
	/**
	 * @var \DateTime
	 */
	private $date;
	
	
	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId()
	{
		return $this->id;
	}
	
	/**
	 * Set reference
	 *
	 * @param string $reference
	 * @return Order
	 */
	public function setReference($reference)
	{
		$this->reference = $reference;
	
		return $this;
	}
	
	/**
	 * Get reference
	 *
	 * @return string
	 */
	public function getReference()
	{
		return $this->reference;
	}
	
	/**
	 * Set name
	 *
	 * @param string $name
	 * @return Order
	 */
	public function setName($name)
	{
		$this->name = $name;
	
		return $this;
	}
	
	/**
	 * Get name
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}
	
	/**
	 * Set function
	 *
	 * @param string $function
	 * @return Order
	 */
	public function setFunction($function)
	{
		$this->function = $function;
	
		return $this;
	}
	
	/**
	 * Get function
	 *
	 * @return string
	 */
	public function getFunction()
	{
		return $this->function;
	}
	
	/**
	 * Set date
	 *
	 * @param \DateTime $date
	 * @return Order
	 */
	public function setDate($date)
	{
		$this->date = $date;
	
		return $this;
	}
	
	/**
	 * Get date
	 *
	 * @return \DateTime
	 */
	public function getDate()
	{
		return $this->date;
	}
}
