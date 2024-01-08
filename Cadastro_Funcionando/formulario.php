<?php

include_once('config.php');

$nome = $_POST['nome'];
$rate = $_POST['rate'];

$sql = "INSERT INTO carro(nome,raridade) VALUES('$nome', '$rate')";

$rs = mysqli_query($con, $sql);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | CDC</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 30%;
        }
        fieldset{
            border: 3px solid dodgerblue;
            border-radius: 5px;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            background-color: dodgerblue;
            border-radius: 5px;
        }
        .inputBox{
            position: relative;
        }
        .inputName{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputName:focus ~ .labelInput,
        .inputName:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
            font-size: 15px;
        }
        #submit{
            background-color: dodgerblue;
            color: white;
            border: none;
            width: 100%;
            height: 30px;
            border-radius: 15px;
            cursor: pointer;
        }
        #submit:hover{
            background-color: rgb(21, 87, 153);
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Carrinhos</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputName" required>
                    <label for="nome" class="labelInput">Nome do Carro</label>
                </div>
                <br><br>
                <p>Raridade</p>
                <input type="radio" name="rate" id="SS" value="SS" required>
                <label for="SS">SS</label>
                <input type="radio" name="rate" id="S" value="S" required>
                <label for="S">S</label>
                <input type="radio" name="rate"e id="A" value="A" required>
                <label for="A">A</label>
                <input type="radio" name="rate" id="B" value="B" required>
                <label for="B">B</label>
                <input type="radio" name="rate" id="C" value="C" required>
                <label for="C">C</label>
                <br><br>
                <button type="submit" id="submit" name="submit">Submit</button>
            </fieldset>
        </form>
    </div>
</body>
</html>