<?php

declare(strict_types=1);

abstract class Usuario
{
    private string $nome;
    private string $email;
    private string $senha;
    private string $cpf;

    public function __construct(string $email, string $senha)
    {
        $this->email=$email;
        $this->senha=$senha;
    }

    /**
	 * Get the value of nome
	 *
	 * @return  mixed
	 */
	public function getNome()
	{
		return $this->nome;
	}


	/**
	 * Set the value of nome
	 *
	 * @param   mixed  $nome  
	 *
	 * @return  self
	 */
	public function setNome($nome)
	{
		$this->nome = $nome;

		return $this;
	}

	/**
	 * Get the value of email
	 *
	 * @return  mixed
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Set the value of email
	 *
	 * @param   mixed  $email  
	 *
	 * @return  self
	 */
	public function setEmail($email)
	{
		$this->email = $email;

		return $this;
	}

	/**
	 * Get the value of senha
	 *
	 * @return  mixed
	 */
	public function getSenha()
	{
		return $this->senha;
	}

	/**
	 * Set the value of senha
	 *
	 * @param   mixed  $senha  
	 *
	 * @return  self
	 */
	public function setSenha($senha)
	{
		$this->senha = $senha;

		return $this;
	}

	/**
	 * Get the value of cpf
	 *
	 * @return  mixed
	 */
	public function getCpf()
	{
		return $this->cpf;
	}

	/**
	 * Set the value of cpf
	 *
	 * @param   mixed  $cpf  
	 *
	 * @return  self
	 */
	public function setCpf($cpf)
	{
		$this->cpf = $cpf;

		return $this;
	}

}