<!-- listarProfessor.php -->
<?php require_once "ClassProfessor.php"; ?>
<?php require_once "ClassProfessorDAO.php";?>

<?php

$ClassProfessorDAO = new ClassProfessorDAO(); 
$array = $ClassProfessorDAO->listarProfessor();

    echo "<center><h3>RESULTADO </h3></center>";
	echo "<center>";
    echo "<table border=1>";
    echo "  <tr>";
    echo "      <th>Id </th> ";
    echo "      <th>Nome      </th> ";
	echo "      <th>Email  </th> ";
    echo "      <th>Salário   </th>";
	echo "      <th>Nível   </th> ";
    echo "      <th>Excluir   </th> ";
    echo "      <th>Alterar   </th>";
    echo "  </tr>";
	echo "</center>";

    foreach ($array as $array){
        echo "<tr>";
        echo "<td>".$array['id']."</td>";
        echo "<td>".$array['nome']."</td>";
        echo "<td>".$array['email']."</td>";
        echo "<td>".$array['salario']."</td>";
        echo "<td>".$array['nivel']."</td>";
        echo "<td>";
    
?>
<CENTER><form action = "excluirProfessor.php" method = "GET" style = "position: relative; top: 8px">
    <input type = "hidden" name = "id" value = <?php echo $array['id'];?> >

    <button style = "border:none;">
        <img src='IMG/alter.png' width = "20px" height = "20px">
    </button>
</form></CENTER>

<?php
echo "</td>";
echo "<td>";
    
?>
<CENTER><form action = "alterarProfessor.php" method = "GET" style = "position: relative; top: 8px">
    <input type = "hidden" name = "id" value = <?php echo $array['id'];?> >
    <input type = "hidden" name = "nome" value = <?php echo $array['nome'];?> >
    <input type = "hidden" name = "email" value = <?php echo $array['email'];?> >
    <input type = "hidden" name = "salario" value = <?php echo $array['salario'];?> >
    <input type = "hidden" name = "nivel" value = <?php echo $array['nivel'];?> >

    <button style = "border:none;">
        <img src='IMG/delete.png' width = "20px" height = "20px">
    </button>
</form></CENTER>

<?php
echo "</td>";
echo "</tr>";
        
    }

?>






