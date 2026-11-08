<?php
require_once ('connect.php');
$sql = "SELECT * FROM couth";
$result = mysqli_query($db_con, $sql);
$output ='<table>
<tr>
<th align = "center">id</th>
<th align = "center">Name</th>
<th align = "center">salary</th>
<th align = "center">club</th>
</tr>';
while ($excel = mysqli_fetch_assoc($result)) 
{
    $output.='<tr>
    <th align = "center">'.$excel['id'].'</th>
    <th align = "center">'.$excel['name'].'</th>
    <th align = "center">'.$excel['salary'].'</th>
    <th align = "center">'.$excel['club'].'</th>
    </tr>';
}
$output.='</table>';
header('Content-Type:aplication/xls');
header('Content-Disposition:attachment;filename=excelcouth.xls');
echo $output;
?>