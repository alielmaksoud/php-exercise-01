<html>
<head>
<meta charset="UTF-8">
<title>Tax calculator</title>
</head>
<style>
body{
    background:url(https://bsmedia.business-standard.com/_media/bs/img/article/2018-07/26/full/1532608444-5258.jpg);
    background-position: center;
    background-size: cover;
    color: black;
    font-weight: bold;
}

</style>

<body>
<div class="main-container"></div>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<fieldset>
    <legend>Income Tax Calculator</legend>


<div class="container" class="first">
    <label for="salary"><b>Salary in usd</b></label>
    <input type="number" placeholder="Enter your salary in usd" name="salary" required>
    <p>please select option</p>
    <input type="radio" id="option1" name="option" value="Monthly" checked>
    <label for="option1"> Monthly</label>
    <input type="radio" id="option2" name="option" value="Yearly" checked>
    <label for="option2"> Yearly</label>
    <label for="taxfree"><b> Tax free allowance in usd</b></label>
    <input type="number" placeholder="Enter tax free allowance in usd" name="taxfree" required>
    <button name="calculateSubmit" type="submit"><b>Calculate</b></button>

</div>
</fieldset>
</form>



<?php
$salary = $option = $taxFree = $MsocialSecFee = $MtaxAmount = $Msalary = $Ysalary = $YsocialSecFee = $YtaxAmount = $MSalaryWithFreeTax = $YSalaryWithFreeTax = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

 $salary = test_input( $_POST['salary']);
 $option = test_input( $_POST['option']);
 $taxFree = test_input( $_POST['taxFree']);

 $MsocialSecFee = $MtaxAmount = $Msalary = $Ysalary = $YsocialSecFee = $YtaxAmount = $MSalaryWithFreeTax = $YSalaryWithFreeTax = 0;

  if(strcasecmp($option, "monthly")==0){

    $Ysalary = $salary*12;
    $Msalary = $salary;
 } else{
    $Msalary = $salary/12;
    $Ysalary = $salary;
  }

 if($Ysalary > 10000){
    $MsocialSecFee = $Msalary *0.04;
    $YsocialSecFee = $Ysalary *0.04;
 }

 if($ysalary >= 10000 && $Ysalary <25000) {
    $MtaxAmount = $Msalary*0.11;
    $YtaxAmount = $Ysalary*0.11;

    $Msalary = $Msalary - $MtaxAmount;
    $Ysalary = $Ysalary - $YtaxAmount;
 }

 else if ($ysalary >= 25000 && $Ysalary <50000) {
    $MtaxAmount = $Msalary*0.3;
    $YtaxAmount = $Ysalary*0.3;

    $Msalary = $Msalary - $MtaxAmount;
    $Ysalary = $Ysalary - $YtaxAmount;
 }
 
 else if ($Ysalary <25000) {
    $MtaxAmount = $Msalary*0.45;
    $YtaxAmount = $Ysalary*0.45;

    $Msalary = $Msalary - $MtaxAmount;
    $Ysalary = $Ysalary - $YtaxAmount;
 }

 $MSalaryWithFreeTax = $Msalary +($taxFree/12);
 $YSalaryWithFreeTax = $Ysalary +$taxFree;
}
 
?>
<div>
<h1 class="second">Result</h1>
<table>
<tr>
    <th></th>
    <th>Monthly</th>
    <th>Yearly</th>
</tr>
<tr>
   <td>Total Salary</td>
   <td> <?php echo $Msalary ?> </td>
   <td> <?php echo $Ysalary ?> </td>
</tr>
<tr>
   <td>Tax Amount</td>
   <td> <?php echo $MtaxAmount ?> </td>
   <td> <?php echo $YtaxAmount ?> </td>
</tr>
<tr>
   <td>Social Security Tax Amount</td>
   <td> <?php echo $MsocialSecFee ?> </td>
   <td> <?php echo $YsocialSecFee ?> </td>
</tr>
<tr>
   <td>Salary after Tax</td>
   <td> <?php echo $MSalaryWithFreeTax ?> </td>
   <td> <?php echo $YSalaryWithFreeTax ?> </td>
</tr>

</table>

</div>
</body>
</html>