<!DOCTYPE html>
<html>
<head>
	
</head>

<?php
$results_ert = $Result = '';
if (isset($_POST['Unit-Submit'])) {
    $Units = $_POST['Units'];
    if (!empty($Units)) {
        $Result = Calculate_Bill($Units);
        $results_ert = 'Total amount of ' . $Units . ' - ' . $Result;
    }
}

function Calculate_Bill($Units) {
    $Unit_cost_first = 3.50;
    $Unit_cost_second = 4.00;
    $Unit_cost_third = 5.20;
    $Unit_cost_fourth = 6.50;

    if($Units <= 50) {
        $Bill = $Units * $Unit_cost_first;
    }
    else if($Units > 51 && $Units <= 100) {
        $Temp = 50 * $Unit_cost_first;
        $Remaining_Units = $Units - 50;
        $Bill = $Temp + ($Remaining_Units * $Unit_cost_second);
    }
    else if($Units > 101 && $Units <= 150) {
        $Temp = (50 * 3.5) + (100 * $Unit_cost_second);
        $Remaining_Units = $Units - 150;
        $Bill = $Temp + ($Remaining_Units * $Unit_cost_third);
    }
    else {
        $Temp = (50 * 3.5) + (100 * $Unit_cost_second) + (150 * $Unit_cost_third);
        $Remaining_Units = $Units - 250;
        $Bill = $Temp + ($Remaining_Units * $Unit_cost_fourth);
    }
    return number_format((float)$Bill, 2, '.', '');
}

?>

<body>
	<div id="page-wrap">
		<h1>Calculate Electricity Bill</h1>

		<form action="" method="post" id="Quizform">
            	<input type="number" name="Units" id="units" placeholder="Enter no. of Units">
            	<input type="submit" name="Unit-Submit" id="unit-submit" value="Submit">
		</form>

		<div>
		    <?php echo '<br>' . $results_ert; ?>
		</div>
	</div>
</body>
</html>