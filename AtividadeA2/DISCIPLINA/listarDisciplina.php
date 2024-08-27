<?php require_once "ClassDisciplina.php"; ?>
<?php require_once "ClassDisciplinaDAO.php";?>

<?php

$ClassDisciplinaDAO = new ClassDisciplinaDAO(); 
$array = $ClassDisciplinaDAO->listarDisciplina();

    echo "<center><h3> RESULTADO </h3></center>";
	echo "<center>";
    echo "<table border=1>";
    echo "  <tr>";
    echo "      <th>Id </th> ";
    echo "      <th>Nome      </th> ";
	echo "      <th>Requisito  </th> ";
    echo "      <th>Carga Horaria   </th>";
    echo "      <th>Excluir   </th> ";
    echo "      <th>Alterar   </th>";
    echo "  </tr>";
	echo "</center>";

    foreach ($array as $array){
        echo "<tr>";
        echo "<td>".$array['id']."</td>";
        echo "<td>".$array['nome']."</td>";
        echo "<td>".$array['requisito']."</td>";
        echo "<td>".$array['carga_horaria']."</td>";
        echo "<td>";
    
?>
<CENTER><form action = "excluirDisciplina.php" method = "GET" style = "position: relative; top: 8px">
    <input type = "hidden" name = "id" value = <?php echo $array['id'];?> >

    <button style = "border:none;">
        <img src='IMG/alter.png' width = "20px" height = "20px">
    </button>
</form></CENTER>

<?php
echo "</td>";
echo "<td>";
    
?>
<CENTER><form action = "alterarDisciplina.php" method = "GET" style = "position: relative; top: 8px">
    <input type = "hidden" name = "id" value = <?php echo $array['id'];?> >
    <input type = "hidden" name = "nome" value = <?php echo $array['nome'];?> >
    <input type = "hidden" name = "requisito" value = <?php echo $array['requisito'];?> >
    <input type = "hidden" name = "carga_horaria" value = <?php echo $array['carga_horaria'];?> >

    <button style = "border:none;">
        <img src='IMG/delete.png' width = "20px" height = "20px">
    </button>
</form></CENTER>

<?php
echo "</td>";
echo "</tr>";
        
    }

?>