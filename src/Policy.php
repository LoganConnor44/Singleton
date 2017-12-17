<?php
namespace Singleton;

public class Policy {

	/**
	 * @var int
	 */
	private $id;

	/**
	 * @var string
	 */
	private $insured;

	/**
	 * Sets object properties.
	 */
	public function __construct(int $id, string $nameOfInsured) {
		$this->id = $id;
		$this->insured = $nameOfInsured;
	}

	/**
	 * Returns the name of the insured.
	 */
	public function getInsuredName() : string {
		return $this->insured;
	}

}