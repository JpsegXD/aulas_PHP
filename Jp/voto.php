<?php 
   $idade = $_GET['idade'];
   $nome = $_GET['nome'];
?>

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
coloque sua idade:<input type="text" name = "idade"></br>
<input type="submit" value="verificar">

   </form>
</body>
</html>

<?php
$idade = $_GET['idade'];
 if  (($idade >=16 && $idade < 18) || $idade >= 70){
 echo "Olá {$nome}, sua idade é {$idade} anos, portanto seu voto é facultativo, é opicional seu  voto.";
 }
 else if ($idade >=18 && $idade < 70){
 echo "Olá {$nome}, sua idade é {$idade} anos, portanto seu voto e obrigadorio.";
 }
else {
    echo "Olá {$nome}, sua idade é {$idade} anos, portanto voçê não vota.";
}
?>