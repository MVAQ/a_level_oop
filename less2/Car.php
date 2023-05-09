<?php

class Car {

	public string $mark;
	public string $model;
	public string $year;
	public string $engineType;
	public string $fuelType;
	public float $fuelCapacity;
	public float $consumption;
	public float $actualFuel;

	public function drive( float $distance ) {

		$this->actualFuel -= $distance * $this->consumption / 100;

		return $this;
	}

	public function chargeToTop( float $fuel ) {

		$this->actualFuel += $fuel;

		return $this;
	}

	public function fuelStatus(): Car {
		echo 'Количество топлива в баке :' . $this->actualFuel . '<br>';

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getMark() {
		return $this->mark;
	}

	/**
	 * @param mixed $mark
	 */
	public function setMark( $mark ): Car {
		$this->mark = $mark;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getModel() {
		return $this->model;

	}

	/**
	 * @param mixed $model
	 */
	public function setModel( $model ): Car {
		$this->model = $model;

		return $this;
	}

	/**
	 * @param float $consumption
	 */
	public function setConsumption( float $consumption ): Car {
		$this->consumption = $consumption;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getYear() {
		return $this->year;
	}

	/**
	 * @param mixed $year
	 */
	public function setYear( $year ): Car {
		$this->year = $year;

		return $this;
	}

	/**
	 * @return float
	 */
	public function getFuelCapacity(): float {
		return $this->fuelCapacity;
	}

	/**
	 * @param float $fuelCapacity
	 */
	public function setFuelCapacity( float $fuelCapacity ): Car {
		$this->fuelCapacity = $fuelCapacity;

		return $this;
	}
}