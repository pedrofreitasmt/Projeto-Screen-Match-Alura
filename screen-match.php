<?php

function exibeMensagemLancamento(int $ano): void {
    if ($ano > 2022) {
        echo "Esse filme é um lançamento.\n";
    } elseif ($ano > 2020 && $ano <= 2022) {
        echo "Esse filme ainda é novo\n";
    } else {
        echo "Esse filme não é um lançamento.\n";
    }
}

function incluidoNoPlano(bool $planoPrime, int $anoLancamento): bool {
    return $planoPrime || $anoLancamento < 2020;
}

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022;
$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;


echo "Bem-vindo(a) ao screen match!\n";
echo "Nome do filme: $nomeFilme\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok"=> "super-herói",
    "Se beber não case"=> "comédia",
    default => "Gênero não encontrado.",
};

echo "O gênero do filme é: $genero\n";

$filme = ["nome" => "Thor: Ragnarok", "ano" => 2021, "nota" => 7.8, "genero" => "super-herói"];

