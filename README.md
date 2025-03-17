<!DOCTYPE html>
<html>
<head>
    <title>Net Income </title>
</head>
<body>
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
