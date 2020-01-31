<?php
    include ("./index.html");

    if ($_POST) {
        $valor = $_POST['valor'];
        $tipo = $_POST['tipo'];

        if ($tipo == 'caminhao') {
            $total = $valor * 0.015;
           echo "<script>alert('O Valor do IPVA é: $total')</script>";
        }  elseif ($tipo == '') {
           echo "<script>alert('Escolha um valor válido')</script>";
        } else {
            $total = $valor * 0.02;
           echo "<script>alert('O Valor do IPVA é: $total')</script>";
        }
    }
?>