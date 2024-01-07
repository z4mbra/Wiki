<?php


    $Host = 'localhost';
    $Name = 'carros';
    $Username = 'root';
    $Password = '';

    $con = new mysqli($Host, $Username, $Password, $Name);

    if(isset($_POST['subit']))
    {
        $nome = $_POST['nome'];
        $rate = $_POST['rate'];
    }
    
    $sql = "INSERT INTO carro(nome,raridade) VALUES('$nome', '$rate')";

    $rs = mysqli_query($con, $sql);

    if($rs){
        echo "Carrinho Cadastrado";
    }

    ?>