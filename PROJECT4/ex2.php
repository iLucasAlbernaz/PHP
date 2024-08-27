<?php include 'index.php'?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">


</head>

<body>
<center>

<form method="POST" action="Conversao.php" >
            <p >Valor em Dólar: </p>
                <input type="text"  name="d">
			<p >Cotação do dia: </p>
 			    <input type="text"  name="c">  
<br><br>

	<button type="submit" name="operacao" value="confirmado">CONVERTER</button>
  	

	       		                    
</form>
       
</center>

</body>

</html>