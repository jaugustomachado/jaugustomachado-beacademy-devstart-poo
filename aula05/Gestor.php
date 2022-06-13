<?php

declare(strict_types=1);

class Gestor extends Usuario
{
    private float $salario;
    private string $horario;

	public function __construct(string $email, string $senha, float $salario)
    {
        //parent::$email=$email;
		parent::setEmail($email);
        //parent::$senha=$senha;
		parent::setSenha($senha);
		$this->salario=$salario;
    }

	/**
	 * Get the value of salario
	 *
	 * @return  mixed
	 */
	public function getSalario()
	{
		return $this->salario;
	}

	/**
	 * Set the value of salario
	 *
	 * @param   mixed  $salario  
	 *
	 * @return  self
	 */
	public function setSalario($salario)
	{
		$this->salario = $salario;

		return $this;
	}

	/**
	 * Get the value of horario
	 *
	 * @return  mixed
	 */
	public function getHorario()
	{
		return $this->horario;
	}

	/**
	 * Set the value of horario
	 *
	 * @param   mixed  $horario  
	 *
	 * @return  self
	 */
	public function setHorario($horario)
	{
		$this->horario = $horario;

		return $this;
	}
}