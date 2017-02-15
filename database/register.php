<?php
include('dbconnect.php');

if(isset($_POST['btn']))
{
$name=trim($_POST['name']);
$age=trim($_POST['age']);
$guardian=trim($_POST['gname']);
$email=trim($_POST['email']);
$addr=trim($_POST['addr']);
$phoneo=trim($_POST['phoneo']);
$phoneh=trim($_POST['phoneh']);




//Checking If the email exits,Check me daddy!
$do=mysql_query("select * from chess where EMAIL='$email'");
    $count=mysql_num_rows($do);

//The insertion Part
if($count=='0'){
        $do1=mysql_query("insert into chess (UID,NAME,AGE,GUARDIAN_NAME,EMAIL,ADDRESS,PHONE_O,PHONE_H) Values ('','$name','$age','$guardian','$email','$addr','$phoneo','$phoneh
')"); //chess is a tablename in the Database 'dbtest'
mail($email,Hi ,"Hello $name, You have been Sucessfully Registered");

$errmsg="Sucessfully Registered And Email Sent";
    }
else{

  $errmsg="Sory Email Id exits";
}

    if ( !$do1 ) {
$errmsg="Registration Failed,Try again";
die("Connection failed : " . mysql_error());
 }

}

?>
//Insert your own form here but don't change the 'names'
<form method="post">
  NAME :
  <input type="text" name="name"></input> <br>
AGE :
  <input type="text" name="age"></input><br>
  GUARDIAN NAME:
  <input type="text" name="gname"></input><br>
  Email :
  <input type="text" name="email"></input><br>
ADDRESS:
  <input type="text" name="addr"></input><br>
Phone Office:
  <input type="text" name="phoneo"></input><br>
  Phone Home:
  <input type="text" name="phoneh"></input><br>
  <button type="submit" name="btn">Submit !</button>
  </form>
//To display the message
<?php echo $errmsg;?>
