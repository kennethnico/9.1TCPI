<?php
require 'base.php';
$records1 = $conn->prepare('SELECT COUNT(*) AS num FROM tcpi_nueve');
$records1->execute();
$valids = $records1->fetch(PDO::FETCH_ASSOC);
echo "<tr>
<th scope='row'>Total</td>
<td>de</td>
<td>usuarios</td>
<td>validados:</td>
<td>".$valids['num']."</td>
</tr>";
$records = $conn->prepare('SELECT * FROM tcpi_ocho');
$records->execute();
$results = $records->fetchAll(PDO::FETCH_OBJ);
if($records -> rowCount() > 0){
    foreach($results as $result){
        echo "<tr>
<th scope='row'>".$result -> id."</td>
<td>".$result -> nombre."</td>
<td>".$result -> email."</td>
<td>".$result -> ubicacion."</td>
<td>".$result -> mesa."</td>
</tr>";
    }
}
?>