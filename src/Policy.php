<?php
namespace Singleton;

/**
 *
 */
class Policy {

	/**
	 * @var integer
	 */
	private $id;

	/**
	 * @var string
	 */
	private $insured;

	/**
	 * Sets object properties.
	 *
	 * @param integer $id            The id of the insured.
	 * @param string  $nameOfInsured The name of the insured.
	 */
	public function __construct(int $id, string $nameOfInsured) {
		$this->id = $id;
		$this->insured = $nameOfInsured;
	}

	/**
	 * Returns the name of the insured.
	 *
	 * @return string
	 */
	public function getInsuredName() : string {
		return $this->insured;
	}

}