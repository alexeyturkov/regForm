<?php
$filename = "reg.txt"; 
$arr = file($filename);

$filename1 = "log.txt"; 
$date = date("d.m.Y H:i:s");
$log = fopen($filename1, "a");


if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['surname']) || empty($_POST['psw']) || empty($_POST['rpsw'])) { 

    $result = array(
      'msg' => "Registration is not complete. Not all fields are filled.",
      'status' => "error" 
  );
    

    $log = fopen($filename1, "a");
    fwrite($log, $date."  error\r\n");
    fclose($log);


} elseif (($_POST['psw'] != $_POST['rpsw'])) {
     $result = array(
      'msg' => "Registration is not complete. Passwords must match.",
      'status' => "error" 
  );
} else { 
  
  if(!preg_match("|^[0-9a-z_-]+@[0-9a-z_^\.]+\.[a-z]{2,6}$|i", $_POST['email'])){
     
      
     $result = array(
      'msg' => "Registration is not complete. The 'E-mail' field must match the format somebody@somewhere.ru.",
     'status' => "error" 
  );
} else {
   
     foreach($arr as $line) {
          $data = explode("::",$line);
          $temp[] = $data[3];
        }  
       
      if(in_array($_POST['email'], $temp)) {
   
         
    $result = array(
      'msg' => "This E-mail is already registered.",
      'status' => "error" 
  );
    fwrite($log, $date."  error\r\n");
    fclose($log);

} else {
   
              $fd = fopen($filename, "a");
              $str = $_POST['name']."::".
              $_POST['surname']."::".
              $_POST['psw']."::".
              $_POST['email']."::"."\r\n";
              
              
              fwrite($fd,$str);
              fclose($fd);

              $result = array(
      'msg' => "Successful!",
      'status' => "success" 
  );
    
              
              fwrite($log, $date."  success\r\n");
              fclose($log);
}
}
} 
 echo json_encode($result); 


?>
