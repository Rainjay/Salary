<!DOCTYPE html>
<html>
<head>
    <title>Net Income</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        .container {
            background: white;
            padding: 20px;
            width: 350px;
            border: 5px solid #ddd; 
            margin: 100px auto;
        }
        p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Net Income Calculation</h2>

    <?php
        $HourlyRate = 100; 
        $WorkDays = 26;
        $WorkHoursPerDay = 8;
        $FullPay = $HourlyRate * $WorkHoursPerDay * $WorkDays; 
        $Tax = 0;

        if ($FullPay > 15000 && $FullPay <= 30000) {
            $Tax = ($FullPay - 15000) * 0.05;
        }
        elseif ($FullPay > 30000) {
            $Tax = (15000 * 0.05) + (($FullPay - 30000) * 0.10);
        }


        $TotalWithTax = $FullPay + $Tax; 

        echo "<p><strong>Hourly Rate:</strong> $" . number_format($HourlyRate, 2) . "</p>";
        echo "<p><strong>Full Pay (before tax):</strong> $" . number_format($FullPay, 2) . "</p>";
        echo "<p><strong>Tax Added:</strong> $" . number_format($Tax, 2) . "</p>"; 
        echo "<p><strong>Total (Income + Tax):</strong> $" . number_format($TotalWithTax, 2) . "</p>";
    ?>

</div>

</body>
</html>
