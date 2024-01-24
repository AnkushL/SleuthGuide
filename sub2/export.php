<?php  
//export.php  
$servername = "localhost";
    $username = "id21645467_iotuser";		//put your phpmyadmin username.(default is "root")
    $password = "#Project@6";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "id21645467_iotdata";
    $connect = new mysqli($servername, $username,$password, $dbname);

//$connect = mysqli_connect("localhost", "root", "", "testing");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM subject2";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>TIME</th>  
                         <th>Roll Number</th>  
                         
       
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["time"].'</td>  
                         <td>'.$row["rollnum"].'</td>
                         
       
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=attendance.xls');
  echo $output;
 }
}
?>