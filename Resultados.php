<?php
    $nome = $_GET["nome"];
    $idade = $_POST["idade"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];

    class Aluno {
        public $nome;
        public $idade;
        public $notas = array();
        public function exibir(){
            echo "Nome: " . $this->nome . "<br>";
            echo "Idade: " . $this->idade . "<br>";
        }

        public function __construct($nome, $idade, $nota1, $nota2, $nota3) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->notas = array($nota1, $nota2, $nota3);
        }

        public function calcularMedia() {
            $soma = array_sum($this->notas);
            return $soma / count($this->notas);
        }
    }

    $aluno = new Aluno($nome, $idade, $nota1, $nota2, $nota3);  
    echo "<h1>Resultado do aluno</h1>";
    $aluno->exibir();
    $media = $aluno->calcularMedia();

    if ($media >=7) {
        echo "Aprovado com média: " . $media;
    } elseif ($media >=5 && $media < 7) {
        echo "Recuperação com média: " . $media;
    } elseif ($media < 5) {
        echo "Reprovado com média: " . $media;
    } else {
        echo "Média inválida.";
    }
?>

