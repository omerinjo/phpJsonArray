<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP CRUD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="container">
<?php   
 $jsonData = file_get_contents('data.json');
 $json= json_decode($jsonData, true);
 $output = "<table class='table table-bordered'><tbody><tr>  <tr>
 <th scope='col'>id</th>
 <th scope='col'>First</th>
 <th scope='col'>Last</th>
 <th scope='col'>Email</th>
</tr>";
  foreach($json['users'] as $user){
     $output .="<tr><td>".$user['id']."</td>";
     $output .="<td>".$user['fname']."</td>";
     $output .="<td>".$user['lname']."</td>";
     $output .="<td>".$user['email']."</tr></td>";
    }
   $output .='</tr></tbody></table>';
   echo $output;
?>

</div>
</body>
</html>