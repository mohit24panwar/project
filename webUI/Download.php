<?php require('header.php');  
$directory_path = "../backEND/Airline";
$sub_directories = array_map('basename',glob($directory_path . '/*', GLOB_ONLYDIR));
$Doc_Type = array('Invoices', 'DebitNote', 'CreditNote', 'Refund');
$Year = array('2017-18', '2018-19', '2019-20');
$Month = array('JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC');
?>
<div class="fields">

<form  action="" method="POST">
<label>AirLine List</label>
<select name="AirLine" id="AirLine" >
<option value="">Select an AirLine</option>
<?php
foreach($sub_directories as $item){
?>
    <option value="<?php echo $item; ?>"><?php echo $item; ?></option>
<?php } ?>
</select>

<label>Type List</label>
  <select name="DocumentType" id="DocumentType" >
    <option value="0" selected>Select a Document Type</option>
<?php
foreach($Doc_Type as $item){
?>
    <option value="<?php echo $item; ?>"><?php echo $item; ?></option>
<?php } ?> 
 </select>
<label> Year</label>
  <select name="Year" id="Year" >
    <option value="0" selected>Select Financial Year</option>
<?php
foreach($Year as $item){
?>
    <option value="<?php echo $item; ?>"><?php echo $item; ?></option>
<?php } ?>  
</select>
<label> Month</label>
  <select name="Month" id="Month" >
    <option value="0" selected>Select Month</option>
<?php
foreach($Month as $item){
?>
    <option value="<?php echo $item; ?>"><?php echo $item; ?></option>
<?php } ?>
</select>
<input type="submit" name="submit" value="Submit" >
</div>
<?php

if (isset($_POST["submit"])) {

$Airline = $_POST['AirLine'];
$DocType = $_POST['DocumentType'];
$YEAR = $_POST['Year'];
$MONTH = $_POST['Month'];
$directory = "../backEND/Airline/$Airline/$DocType/$YEAR/$MONTH/";

$phpfiles = array_map('basename',glob($directory . "*.pdf"));

foreach($phpfiles as $phpfile)
{
echo "<a href=$directory/$phpfile>".basename($phpfile)."</a> </br>";
}
}
?>
<?php require('footer.php');  ?>
