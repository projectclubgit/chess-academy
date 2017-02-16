<?php
include_once '../dbconnect.php';   //use your connectivity file here

   
   if(isset($_POST['btn']))
   
   {
   
   //matching the username and password from the input and if all good then proceed
   $uid=$_POST['uid'];
   $key=$_POST['key'];
   if($uid=="abc" && $key=="def")
   
   
   
   {
   
   
   
   
$sql = "Select * from chess";  //insert yours table in place of chess
   
//execute query 
$result = @mysql_query($sql) or die("Couldn't execute query:<br>" . mysql_error(). "<br>" . mysql_errno());    
$file_ending = ".xls";
$dates=date("d/m/Y"); //reverse the format if you want
header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=Chess_Academy.$dates.xls");  //You can change the attachment name later
header("Pragma: no-cache"); 
header("Expires: 0");
$sep = "\t"; //tabbed character

//fetching
for ($i = 0; $i < mysql_num_fields($result); $i++) {
echo mysql_field_name($result,$i) . "\t";
}
print("\n");    

//more fetching
    while($row = mysql_fetch_row($result))
    {
        $schema_insert = "";
        for($j=0; $j<mysql_num_fields($result);$j++)
        {
            if(!isset($row[$j]))
                $schema_insert .= "NULL".$sep;
            elseif ($row[$j] != "")
                $schema_insert .= "$row[$j]".$sep;
            else
                $schema_insert .= "".$sep;
        }
        $schema_insert = str_replace($sep."$", "", $schema_insert);
        $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
        $schema_insert .= "\t";
        print(trim($schema_insert));
            print "\n";
    }   
   }

exit();
   }



?>


<form method="post">
   UID: <input type="text" name="uid"> <br>
   PASSWORD: <input type="password" name="key"> <br>
   <button type="submit" name="btn"> SUBMIT</button>
    </form>
