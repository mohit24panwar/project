<?php
$connect=mysql_connect("localhost", "airline_user", "Il0vel1nux");
$db=mysql_select_db("project",$connect);
If(!$connect){
 die('Could not Connect My Sql:' .mysql_error());
}
?>

