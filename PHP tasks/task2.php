<?php
include "menu.inc";
?>

<br><br>

<!DOCTYPE html>
<hr>
<br><br>
<h2 style="text-align: center; font-size: 2rem;">Task 2(a) - Positive integer(n)</h2>

    <form method="GET" action="" style="text-align: center; margin-bottom: 20px;">
        <label for="number">Enter a positive number(integer): </label>
        <input type="number" id="number" name="number" min="1" value="?php echo isset($_GET['number']) ? htmlspecialchars($_GET['number'] : ''; ?>" style="margin-bottom: 20px; padding: 0.6rem;" required>
        <br>

        <input type="submit" name="submit_a" value="Submit" style="text-align: center; margin-bottom: 20px; padding: 1rem 4rem; color: white; background-color: darkmagenta; border: none; border-radius: 8px; cursor: pointer; "><br>

    </form>


<?php
if (isset($_GET['submit_a'])) {
    $num = intval($_GET['number']);

    if ($num <= 0) {
        echo "<p style='color: orangered; text-align: center;'>Please enter a positive number greater than zero.</p>";
    }else {

        $numbers = [];

        $sum = 0;
        for ($i = 1; $i <= $num; $i++) {
            $numbers[] = $i;
            $sum += $i;

        }

        $ave = $sum / $num;
    }

    echo "<p style='text-align:center;'><strong>Numbers:</strong> " . implode(", ", $numbers) . " ($num numbers)</p>";
    echo "<p style='text-align:center;'><strong>Sum:</strong> $sum</p>";
    echo "<p style='text-align:center;'><strong>Average</strong> " . number_format($ave, 2) . "</p>";

}

?>

<hr>

<br><br>
<h2 style="text-align: center; font-size: 2rem;">Task 2(b) - Final Mark Calculator</h2>

<?php

//Function to calculate the final mark
    function calculateFinalMark($examMark, $yearMark) {
        $finalMark = ($examMark < 40) ? $examMark : (0.75 * $examMark + 0.25 * $yearMark);
        echo "<p style='text-align:center;'>Exam Mark: $finalMark, Year Mark: $yearMark - Final Mark: " . number_format($finalMark, 2) . "</p>";
    }

    echo "<h3 style='text-align: center; color: darkcyan'>Final Mark Calculations</h3>";
    calculateFinalMark(35, 50);
    calculateFinalMark(40, 55);
    calculateFinalMark(55, 60);

    ?>

<br><br>
<hr>
<br><br>

<h2 style="text-align: center; font-size: 2rem;">Task 2(c) - Southern African Development Community - Capitals</h2>

<form method="GET" action="" style="text-align: center; margin-bottom: 20px;">
    <label for="country" style=" font-size: 1.2rem;">Select a SADC country:</label>
    <div class="country_container" style="margin-top: 2rem;">
        <select name="country" id="country" required style="padding: 1rem 2rem">
            <option value="Angola">Angola</option>
            <option value="Botswana">Botswana</option>
            <option value="Democratic Republic of Congo">Democratic Republic of Congo</option>
            <option value="Eswatini">Eswatini</option>
            <option value="Mauritius">Mauritius</option>
            <option value="Namibia">Namibia</option>
            <option value="South Africa">South Africa</option>
            <option value="Tanzania">Tanzania</option>
            <option value="Zambia">Zambia</option>
            <option value="Zimbabwe">Zimbabwe</option>
        </select>

        <input type="submit" name="submit_c" value="Submit" style="text-align: center; margin-bottom: 20px; margin-left: 5px; padding: 1rem 4rem; border-radius: 7px; cursor: pointer; border: none; background-color: darkcyan; color: white;" >
    </div>
</form>

<?php

if (isset($_GET['submit_c'])) {
    $country = $_GET['country'];

    echo "<p style='text-align: center; font-weight: 400; font-size: 1.5rem; background-color: cornflowerblue; padding: 2rem; color: white;' >";

    switch ($country) {
        case "Angola":
            echo " The Capital of Angola is Luanda";
            break;
        case "Botswana":
            echo " The Capital of Botswana is Gaborone";
            break;
        case "Democratic Republic of Congo":
            echo "The Capital of Democratic Republic is Kinshasa";
            break;
        case "Eswatini":
            echo "The Capital of Eswatini is Mbabane";
            break;
        case "Mauritius":
            echo "The Capital of Mauritius is Port Louis";
            break;
        case "Namibia":
            echo "The Capital of Namibia is Windhoek";
            break;
        case "South Africa":
            echo "The Capital of South Africa is Bloemfontein";
            break;
        case "Tanzania":
            echo "The Capital of Tanzania is Dodoma";
            break;
        case "Zambia":
            echo "The Capital of Zambia is Lusaka";
            break;
        case "Zimbabwe":
            echo "The Capital of Zimbabwe is Harare";
            break;
    }

    echo "</p>";
}



?>

<div class="iframe" style="text-align: center; margin-top: 30px">
    <iframe width="400" height="1200" src="task2.txt">
        Your browser doesn't support iframes.
    </iframe>
</div>

<br><br>
<br><br>
<br><br>
<br><br>
