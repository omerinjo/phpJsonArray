<?php   
 $jsonData = file_get_contents('data.json');
 $json= json_decode($jsonData, true);
 $output = "<ul>";
 foreach($json['users'] as $user){
    $output .="<h3>".$user['id']."</h3>";
    $output .="<h3>".$user['fname']."</h3>";
    $output .="<h3>".$user['lname']."</h3>";
    $output .="<h3>".$user['email']."</h3>";
    }
   $output .='</ul>';
   echo $output;
?>