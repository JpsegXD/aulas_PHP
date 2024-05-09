<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="">
coloque seu nome:<input type="text" name="nome"></br>
coloque seu peso:<input type="text" name = "peso"></br>
coloque sua altura:<input type="text" name="altura"></br>
<input type="submit" value="verificar">

   </form>
</body>
</html>

<?php
 $peso = $_GET['peso'];
 $nome = $_GET['nome'];
 $altura = $_GET['altura'];
 $imc = $peso / ($altura * $altura);
 $imc = number_format($imc, 2);

echo "Seu nome: $nome </br>";
echo "Seu peso: $peso </br>";
echo "Sua altura: $altura </br>"; 
echo "Seu IMC: $imc <br>"; 

if ($imc >=17 && $imc <=18.4){
    echo "Seu IMC e: Abaixo do peso </br>";
}
else if($imc >=18.5 && $imc <= 24.9){
    echo "Seu IMC e: Peso normal";
}
else if($imc >= 25&& $imc <= 29.9){
    echo "Seu IMC e: Acima do peso";
}
else if($imc >= 30&& $imc <= 34.9){
    echo "Seu IMC e: Obesidade de grau |";
}
else if($imc >= 35&& $imc <= 40){
    echo "Seu IMC e: Obesidade de grau ||";
}
else if($imc > 40){
    echo "Seu IMC e: Obesidade de grau |||";
}
else{
    echo "Seu IMC e: Muito abaixo do peso";
}
?>