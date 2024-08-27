<?php include 'index.php'?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">


</head>

<body>
<center>

<form method="POST" action="Poupanca.php" >
            <p >Valor Inicial: </p>
                <input type="text"  name="r">

                <br>

            <p >Porcentagem do juros ao mês:</p>
                <select name="j" id="idJuros">
                    <option value="j">0.70%</option>> </select>
<br><br>

	<button type="submit" name="operacao" value="calcular">CALCULAR RENDIMENTO </button>
  	

	       		                    
</form>
       
</center>

</body>

</html>