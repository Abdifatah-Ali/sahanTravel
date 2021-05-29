<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connection</title>
</head>
<body>
<?php
class contactus{
private $host="localhost";
private $user="root";
private $pass="";
private $db="contact";
public $mysqli;

public function _construct(){
    return $this->$mysqli=new mysqli($this->$host,$this->$user,$this->$pass,$this->$db,);

}
public function contact_us($data){
    $username=$data['Name'];
    $email=$data['Email'];
    $phone=$data['Phone'];
    $message=$data['Message'];
    $sql="insert into contact set Username=$username,Email=$email,Mobile=$phone,Message=$message";
    return $this->mysqli->query($sql);
}

}



?>

</body>
</html>