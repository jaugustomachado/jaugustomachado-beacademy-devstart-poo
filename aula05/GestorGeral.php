<?php

declare(strict_types=1);

class GestorGeral extends Gestor
{
    private float $bonusAnual;
    

	/**
	 * Get the value of bonusAnual
	 *
	 * @return  mixed
	 */
	public function getBonusAnual()
	{
		return $this->bonusAnual;
	}

	/**
	 * Set the value of bonusAnual
	 *
	 * @param   mixed  $bonusAnual  
	 *
	 * @return  self
	 */
	public function setBonusAnual($bonusAnual)
	{
		$this->bonusAnual = $bonusAnual;

		return $this;
	}
}