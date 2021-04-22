<?php
namespace Recados;

class Recado
{
    private $idrecados;
    private $nome;
    private $email;
    private $cidade;
    private $recado;

    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getIdrecados(): int
    {
        return $this->idrecados;
    }

    /**
     * @param int $idrecados
     */
    public function setIdrecados(int $idrecados): void
    {
        $this->idrecados = $idrecados;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getCidade(): string
    {
        return $this->cidade;
    }

    /**
     * @param string $cidade
     */
    public function setCidade(string $cidade): void
    {
        $this->cidade = $cidade;
    }

    /**
     * @return string
     */
    public function getRecado(): string
    {
        return $this->recado;
    }

    /**
     * @param string $recado
     */
    public function setRecado(string $recado): void
    {
        $this->recado = $recado;
    }

}