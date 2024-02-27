<?php
include "config.php";

$nim = 0;
if(isset($_POST['nim'])){
    $userid = mysqli_real_escape_string($con,$_POST['nim']);
}
$sql = "select * from no_va where nim=".$userid;
$result = mysqli_query($con,$sql);

$response = "<table border='0' width='100%'>";
while( $row = mysqli_fetch_array($result) ){
    $nim = $row['nim'];
    $nama = $row['nama'];
    $jurusan = $row['jurusan'];
    $nilai = $row['nilai'];
    $va = $row['va'];  
 
    $response .= "<tr>";
    $response .= "<td>Name : </td><td>".$emp_name."</td>";
    $response .= "</tr>";

    $response .= "<tr>";
    $response .= "<td>Salary : </td><td>".$salary."</td>";
    $response .= "</tr>";

    $response .= "<tr>";
    $response .= "<td>Gender : </td><td>".$gender."</td>";
    $response .= "</tr>";

    $response .= "<tr>";
    $response .= "<td>City : </td><td>".$city."</td>";
    $response .= "</tr>";

    $response .= "<tr>"; 
    $response .= "<td>Email : </td><td>".$email."</td>"; 
    $response .= "</tr>";

}
$response .= "</table>";

echo $response;
exit;