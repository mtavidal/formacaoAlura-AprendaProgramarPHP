<?php
namespace Alura\Banco\Modelo;
final class Endereco
{
    use AcessoPropriedades;
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperaCidade(): string
    {
        return $this->cidade;
    }
    public function alteraCidade(string $cidade): string
    {
        return $this->cidade = $cidade;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
    }
    public function alteraBairro(string $bairro): string
    {
        return $this->bairro = $bairro;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }
    public function alteraRua(string $rua): string
    {
        return $this->rua = $rua;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }
    public function alteraNumero(string $numero): string
    {
        return $this->numero = $numero;
    }
    public function __toString(): string
{
    return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
}   
    public function __set(string $nomeAtributo, $valor)
    {
        $metodo = 'altera' . ucfirst($nomeAtributo);
        return $this->$metodo($valor);
    }

}