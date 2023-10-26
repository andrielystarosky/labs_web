<?php
    require_once "pessoa.php";

    $oPessoa = new pessoa();

    $nomeCompleto = $oPessoa->getNomeCompleto("Andriely", "Starosky");

    echo $nomeCompleto;

?>