<?php
require_once ('connect.php');
$sql = "SELECT * FROM player";
$result = mysqli_query($db_con, $sql);
$output ='<table>
<tr>
<th align = "center">id</th>
<th align = "center">Name</th>
<th align = "center">country</th>
<th align = "center">Age</th>
</tr>';
while ($excel = mysqli_fetch_assoc($result)) 
{
    $output.='<tr>
    <th align = "center">'.$excel['id'].'</th>
    <th align = "center">'.$excel['name'].'</th>
    <th align = "center">'.$excel['country'].'</th>
    <th align = "center">'.$excel['age'].'</th>
    </tr>';
}
$output.='</table>';
header('Content-Type:aplication/xls');
header('Content-Disposition:attachment;filename=excelplayer.xls');
echo $output;
?>