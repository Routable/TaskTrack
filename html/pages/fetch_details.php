<?php
  session_start();
  $servername = "localhost"; 
  $username = "root";
  $password = "6SZP)}+33Ez&^Uqt";
  $mysqli = mysqli_connect($servername, $username, $password, "COSCPROJECT"); 
  
  if (mysqli_connect_errno()) {
    printf ("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
    } else {
  $tuseremail = $_SESSION["user"];
  $columnName = $_POST['columnName'];
  $sort = $_POST['sort'];

  $select_query = "SELECT * FROM TASKS where user_email='$tuseremail' AND status = 'Open' order by ".$columnName." ".$sort." ";
  $result = mysqli_query($mysqli, $select_query);
 

  $html = '';
  while($row = mysqli_fetch_array($result)){
    $task_id = $row['task_id'];
     $taskname = $row['task_name'];
       $description = $row['description'];
       $datecreated = $row['date_created'];
       $priority = $row['priority'];
 
$html .= "<tr>
   <td><a href='viewtask.php?tID=$task_id'>".$task_id."</a></td>
   <td>".$taskname."</td>
   <td>".$description."</td>
   <td>".$datecreated."</td>
   <td>".$priority."</td>
   </tr>";
}
  
echo $html;
}

?>