<?php
namespace Karis\Component\Order\Model;
/**
 * @author Hedfi Fatma <fatmahedfi@gmail.com>
 *
 */

interface OrderInterface {

	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId();
	
	/**
	 * Set reference
	 *
	 * @param string $reference
	 * @return Order
	 */
	public function setReference($reference);
	
	/**
	 * Get reference
	 *
	 * @return string
	 */
	public function getReference();
		
	/**
	 * Set name
	 *
	 * @param string $name
	 * @return Order
	 */
	public function setName($name);
	
	/**
	 * Get name
	 *
	 * @return string
	 */
	public function getName();
	
	/**
	 * Set function
	 *
	 * @param string $function
	 * @return Order
	 */
	public function setFunction($function);
	
	/**
	 * Get function
	 *
	 * @return string
	 */
	public function getFunction();
	
	/**
	 * Set date
	 *
	 * @param \DateTime $date
	 * @return Order
	 */
	public function setDate($date);
	
	/**
	 * Get date
	 *
	 * @return \DateTime
	 */
	public function getDate();

}
