<?php

declare(strict_types=1);

final class Cliente extends Usuario
{

    private string $dataCadastro;


	/**
	 * Get the value of dataCadastro
	 *
	 * @return  mixed
	 */
	public function getDataCadastro()
	{
		return $this->dataCadastro;
	}

	/**
	 * Set the value of dataCadastro
	 *
	 * @param   mixed  $dataCadastro  
	 *
	 * @return  self
	 */
	public function setDataCadastro($dataCadastro)
	{
		$this->dataCadastro = $dataCadastro;

		return $this;
	}
}