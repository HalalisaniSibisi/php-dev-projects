<?php
include "menu.inc";
?>

<br><br>

<!DOCTYPE html>
<hr>
<br>


<h2 style="text-align: center; font-size: 2rem;">Task 3(a) - String Manipulation/ Functions</h2>

<?php

// 1. strrev() function - This function is used when you want to reverse a string.
$word = "Functionalities";
echo "<p><strong>strrev():</strong> The reverse word for the <span style='color: orangered'>$word</span> to '<span style='color: red; font-weight: bold'>" . strrev($word) . "</span>'.</p> <br>";


//2.strlen() function -  This function returns the length of the string
$sentence = "I want to wake up tomorrow and code with php";
echo "<p><strong>strlen():</strong> The length of the <span style='color: green'>$sentence</span>is '<span style='color: green; font-weight: bold'>" . strlen($sentence) . "</span>'.</p> <br>";

//3. strtolower() function - this converts any string to lowercase.
$loud = "THABO, GRANDMOTHER SAYS YOU SHOULD BE BACK HOME BY 4PM!!!";
echo "<p><strong>strtolower():</strong> <span style='color: mediumpurple'>' $loud '</span> becomes <span style='font-weight: bold; color: darkmagenta'>" . strtolower($loud) . "</span></p> <br>";

//4. explode() - The explode function is used to split a string into an array by a delimiter.
$languages = "CSS HTML PHP Java JavaScript";
$languagesArray = explode(" ", $languages);
echo "<p><strong>explode: </strong> This splits <span style='color: darkslategrey; border: 1px solid black;'>$languages</span> by a commas, resulting in: ";
echo implode(" | ", $languagesArray);
echo "</p> <br>";

//5. str_repeat() function - This function used to repeat a string multiple times, which depends on how many times you want to repeat it;
$password = "01234_Apple";
echo  "<p><strong>str_repeat():</strong> This is the repeated <span style='color: darkmagenta'>$password</span> when repeated 4 times: <span style='color: mediumpurple'> " . str_repeat($password, 4) . "</span</p><br>";

?>

<br><br>
<hr>

<h2 style="text-align: center; font-size: 2rem;">Task 3(b) - DateTime Functionalities</h2>

<?php

$current = new DateTime();

//The code displays the week number, week, day, month, year
echo "<p>Week number of the year: <span style='color: red'> ". $current->format('W') . " </span></p> <br>";
echo "<p>The day of the week: <span style='color: red'> ". $current->format('l') . "</span></p> <br>";
echo "<p>The current month: <span style='color: red'> ". $current->format('F') . "</span></p> <br>";
echo "<p>The current year: <span style='color: red'> ". $current->format('Y') . "</span></p> <br>";

$date_till_Christmas = new DateTime("25-12-2025");
$interval = $date_till_Christmas->diff($current);
echo "<p> The days left till Christmas: <span style='color: red'> ". $interval->days . " days.</span></p> <br>";

?>

<br><br>
<hr>

<br><br>

<h2 style="font-size: 2rem; text-align: center">Task 3(c) - Array Manipulation - SADC  </h2>

<?php

$countries = [
        "South Africa", "Botswana", "Angola", "Democratic Republic of Congo", "Zambia", "Zimbabwe", "Namibia", "Tanzania", "Eswatini", "Mauritius"
];

echo "<p style='font-size: 1.3rem'><strong>countries:</strong> ";
foreach ($countries as $country) {
    echo "<span style='color: magenta; font-size: 1.2rem;'> " . $country . "</span> <br> ";

}

//To sort in reverse order, the list we use the rsort()function
rsort($countries);

echo "<p style='font-size: 1.3rem'><strong>countries:</strong> ";
foreach ($countries as $country) {
    echo "<span style='color: magenta; font-size: 1.2rem;'> " . $country . "</span> <br> ";
}

?>


<br><br>
<hr>
<br><br>

<h2 style="text-align: center; font-size: 2rem;">Task 3(c) - Southern African Development Community - Capitals</h2>

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

        <input type="submit" name="submit_d" value="Submit" style="text-align: center; margin-bottom: 20px; margin-left: 5px; padding: 1rem 4rem; border-radius: 7px; cursor: pointer; border: none; background-color: darkcyan; color: white;" >
    </div>
</form>

<?php

if (isset($_GET['submit_d'])) {
    $country = $_GET['country'];

    $capitalCities = [
            "Angola" => "Luanda",
            "Botswana" => "Gaborone",
            "Democratic Republic of Congo" => "Kinshasa",
            "Eswatini" => "Mbabane",
            "Mauritius" => "Port Louis",
            "Namibia" => "Windhoek",
            "South Africa" => "Bloemfontein",
            "Tanzania" => "Dodoma",
            "Zambia" => "Lusaka",
            "Zimbabwe" => "Harare"
    ];

    if (array_key_exists($country, $capitalCities)) {
        echo "<p style='text-align: center; font-weight: 400; font-size: 1.5rem; background-color: darkolivegreen; padding: 2rem; color: white;'>The Capital of $country is ". $capitalCities[$country] . "</p> <br>";
    }else {
        echo "<p>Please select a valid country</p> <br>";
    }


}


?>

<br><br>

<div class="iframe" style="text-align: center; margin-top: 30px">
    <iframe width="400" height="1200" src="task3.txt">
        Your browser doesn't support iframes.
    </iframe>
</div>

<br><br>
<br><br>
<br><br>
<br><br>
