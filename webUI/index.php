<!DOCTYPE html>
<?php require('header.php');  ?>

<div class="fields">

<form  action="index.php" method="POST">
<label>AirLine List</label>
  <select name="AirLine" id="AirLine" >
    <option value="">Select an AirLine</option>
    <option value="AirIndia">AirIndia</option>
    <option value="BritishAirway">BritishAirway</option>
    <option value="AirFrance">AirFrance</option>
    <option value="Spicejet">Spicejet</option>
  </select>

<label>Type List</label>
  <select name="DocumentType" id="DocumentType" >
    <option value="0" selected>Select a Document Type</option>
    <option value="Invoice">Invoice</option>
    <option value="DebitNote">DebitNote</option>
    <option value="CreditNote">CreditNote</option>
  </select>

From: <input type="date" name="from" id="from"> 
To: <input type="date" name="to" id ="to" >

<input type="submit" name="submit" value="Submit" >
</div>
<br>
<form>
<?php
include 'dbconnect.php';
session_start(); 
$Airline = $_POST['AirLine'];
$Type = $_POST['DocumentType'];
$fromDate = date('Y-m-d', strtotime($_POST['from']));
$toDate = date('Y-m-d', strtotime($_POST['to']));
#echo $Airline $Typ $fromDate $toDate;

if (isset($_POST["submit"])) {
$_SESSION['AN'] = $Airline;
$_SESSION['DT'] = $Type;
$_SESSION['FD'] = $fromDate;
$_SESSION['TD'] = $toDate;

#echo "$Airline $Type $fromDate $toDate";
#echo $_SESSION['TD'];
#echo "$fromDate  $toDate";

//echo "<div class='export' align='center'> <input type='submit' name='export' value='Export'></div> <br>";
echo "<div class='export' align='center'> <a class='button' href='export.php'>Export To Excel</a></div> <br>";
//echo "</form>";

#$query = "select * from testAirline where Airline = '".$Airline."' and Type = '".$Type."'";
$query = "select * from testAirline where Airline = '".$Airline."' and Type = '".$Type."' and Date_of_Invoice between '".$fromDate."' and '".$toDate."'";
#echo $query;
$result= mysql_query($query);
If($result){
echo "<table width ='100%' align='center' border =1 id='testTable'>";
$i=0;
    If(mysql_num_rows($result)>0)
    {
         //here you fetch the data from the database and print it in the respective columns   
        while($i<mysql_num_fields($result))
        {    
             echo "<th>".mysql_field_name($result, $i)."</th>";
             $i++;
        }
        #echo "</tr>";

        $color=1;

        while($rows=mysql_fetch_array($result, MYSQL_ASSOC))
        {    
            If ($color==1){
                echo "<tr color='#'#cccccc'>";

                foreach ($rows as $data){
                    echo "<td align='center'>".$data. "</td>";
                }

                $color=2;
            }
            $color=1;
        }
     } 
     else {
        echo"no results found";
        echo "</table>";
    } } 
?>
<script type="text/javascript">
  document.getElementById('AirLine').value = "<?php echo $_POST['AirLine'];?>";
  document.getElementById('DocumentType').value = "<?php echo $_POST['DocumentType'];?>";
  document.getElementById('from').value = "<?php echo $_POST['from'];?>";
  document.getElementById('to').value = "<?php echo $_POST['to'];?>";
</script>

<?php } require('footer.php');
?>
