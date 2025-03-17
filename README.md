<!DOCTYPE html>
<html>
<head>
    <title>Net Income </title>
<style>

        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;

         .container {
            background: white;
            padding: 20px;
            width: 300px;
            border: 5px solid #ddd; 
            margin: 100px auto
  
        }
        p {
            margin: 5px 0;
        }
</style>
</head>
<body>

<div class="container">
        <h2>Net Income</h2>
 <?php

        $HourlyRate = 100; 
        $WorkDays = 26;
        $WorkHoursPerDay = 8;
$FullPay = $HourlyRate * $WorkHoursPerDay * $WorkDays;
        $Tax = 0; 

        if ($FullPay <= 15000) {
            $NetIncome = $FullPay;
        }
        elseif ($FullPay <= 30000) {
            $Tax = ($FullPay - 15000) * 0.05; 
            $NetIncome = $FullPay - $Tax;
        }
        else {
            $Tax = (15000 * 0.05) + (($FullPay - 30000) * 0.10); 
            $NetIncome = $FullPay - $Tax;
        }


        echo "Hourly Rate: $" . $HourlyRate . "<br>";
        echo "Full Pay: $" . $FullPay . "<br>";
        echo "Tax Deducted: $" . $Tax . "<br>"; 
        echo "Net Income: $" . $NetIncome . "<br>";
    ?>
</body>
</html>
