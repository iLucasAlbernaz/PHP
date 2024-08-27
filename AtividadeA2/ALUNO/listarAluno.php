<?php require_once "ClassAluno.php"; ?>
<?php require_once "ClassAlunoDAO.php";?>

<?php

$ClassAlunoDAO = new ClassAlunoDAO(); 
$array = $ClassAlunoDAO->listarAluno();

    echo "<center><h3> RESULTADO </h3></center>";
	echo "<center>";
    echo "<table border=1>";
    echo "  <tr>";
    echo "      <th>Id </th> ";
    echo "      <th>Nome      </th> ";
	echo "      <th>Email  </th> ";
    echo "      <th>CPF   </th>";
	echo "      <th>Telefone   </th> ";
    echo "      <th>Excluir   </th> ";
    echo "      <th>Alterar   </th>";
    echo "  </tr>";
	echo "</center>";

    foreach ($array as $array){
        echo "<tr>";
        echo "<td>".$array['id']."</td>";
        echo "<td>".$array['nome']."</td>";
        echo "<td>".$array['email']."</td>";
        echo "<td>".$array['cpf']."</td>";
        echo "<td>".$array['telefone']."</td>";
        echo "<td>";
    
?>
<CENTER><form action = "excluirAluno.php" method = "GET" style = "position: relative; top: 8px">
    <input type = "hidden" name = "id" value = <?php echo $array['id'];?> >

    <button style = "border:none;">
        <img src='../IMG/alter.png' width = "20px" height = "20px">
    </button>
</form></CENTER>

<?php
echo "</td>";
echo "<td>";
    
?>
<CENTER><form action = "alterarAluno.php" method = "GET" style = "position: relative; top: 8px">
    <input type = "hidden" name = "id" value = <?php echo $array['id'];?> >
    <input type = "hidden" name = "nome" value = <?php echo $array['nome'];?> >
    <input type = "hidden" name = "email" value = <?php echo $array['email'];?> >
    <input type = "hidden" name = "cpf" value = <?php echo $array['cpf'];?> >
    <input type = "hidden" name = "telefone" value = <?php echo $array['telefone'];?> >

    <button style = "border:none;">
        <img src='../delete.png' width = "20px" height = "20px">
    </button>
</form></CENTER>

<?php
echo "</td>";
echo "</tr>";
        
    }

?>