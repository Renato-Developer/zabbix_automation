<?php  
$connect = mysqli_connect("localhost", "root", "adm@superuser", "edd");
if(isset($_POST["submit"]))
{
	$query = "DELETE FROM hosts_temp";
	mysqli_query($connect, $query);

 if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
   $handle = fopen($_FILES['file']['tmp_name'], "r");

   while($data = fgetcsv($handle))
   {
    $item1 = mysqli_real_escape_string($connect, $data[0]);  

    $item1 = explode(';', $item1);

    $query = "INSERT into hosts_temp(cliente, circuito, ip_estacao, ip_cliente, switch, porta, vlan, estacao, tipo1, tipo2, selementid_estacao, selementid_cliente, pos_x_estacao, pos_y_estacao, pos_x_cliente, pos_y_cliente, cabo, dgo, pos, fila, fibra) values('$item1[0]','$item1[1]', '$item1[2]', '$item1[3]', '$item1[4]', '$item1[5]', '$item1[6]', '$item1[7]', '$item1[8]', '$item1[9]', '$item1[10]', '$item1[11]', '$item1[12]', '$item1[13]', '$item1[14]', '$item1[15]', '$item1[16]', '$item1[17]', '$item1[18]', '$item1[19]', '$item1[20]')";
    mysqli_query($connect, $query);

    $query = "INSERT into registro_hosts(cliente, circuito, ip_estacao, ip_cliente, switch, porta, vlan, estacao, tipo1, tipo2, selementid_estacao, selementid_cliente, pos_x_estacao, pos_y_estacao, pos_x_cliente, pos_y_cliente, cabo, dgo, pos, fila, fibra) values('$item1[0]','$item1[1]', '$item1[2]', '$item1[3]', '$item1[4]', '$item1[5]', '$item1[6]', '$item1[7]', '$item1[8]', '$item1[9]', '$item1[10]', '$item1[11]', '$item1[12]', '$item1[13]', '$item1[14]', '$item1[15]', '$item1[16]', '$item1[17]', '$item1[18]', '$item1[19]', '$item1[20]')";
    mysqli_query($connect, $query);

   }
    require "montar_xml.php"; 
    require "montar_xml_mapa.php";
    \
   fclose($handle);
   echo "<script>alert('Gere agora seu arquivo XML');</script>";
  }
 }
}

?>  