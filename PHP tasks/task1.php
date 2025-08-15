<?php
include 'menu.inc';
?>
<br><br>

<!DOCTYPE html>
<hr>
<br><br>

<h2 style="text-align: center; font-size: 2rem;">Customer Feedback Form</h2>

<form method="GET" action="" style="display: flex; flex-direction: column; align-items: center; justify-content: space-around; border: 1px solid black; padding: 5px; width: 50%;margin: auto;  height:40vh;">

    <div class="container">

        <!-- This is where our shop code begins -->
        <label for="shop" id="shop" style="color: black; margin-left: 1rem;">Choose Shop:</label>
        <select name="shop" id="shop" style="color: black; margin-left: 1rem;">
            <option value="">Select the Branch</option>
            <option value="Newcastle">Newcastle</option>
            <option value="eMondlo">eMondlo</option>
            <option value="Vryheid">Vryheid</option>
            <option value="Ladysmith">Ladysmith</option>
        </select>

        <br><br>

        <!--Customer's Name located here-->
        <label for="name" id="name" style="color: black; margin-left: 1rem;">Name:</label>
        <input type="text" name="name" id="name" placeholder="Enter your name" style="width: 100%; padding:10px 15px; margin-top: 5px;" required>
        <br><br>

        <!--Customer's Email located here-->
        <label for="email" id="email" style="color: black; margin-left: 1rem;">Email:</label>
        <input type="email" name="email" id="email" placeholder="Enter your email"  style="width: 100%; padding:10px 15px; margin-top: 5px; opacity: 50%" required>
        <br><br>

        <!--Customer's Rating of the branch located here-->
        <label for="rating" id="rating" style="color: black; ">Rating: 1 = Poor, 5 = Excellent: </label>
        <input type="radio" id="rating1" name="rating" value="1"><label for="rating1">1</label>
        <input type="radio" id="rating2" name="rating" value="2"><label for="rating2">2</label>
        <input type="radio" id="rating3" name="rating" value="3"><label for="rating3">3</label>
        <input type="radio" id="rating4" name="rating" value="4"><label for="rating4">4</label>
        <input type="radio" id="rating5" name="rating" value="5"><label for="rating5">5</label>
        <br><br>

        <!--Customer's comment to justify their rating located here-->
        <label for="comments" id="comments" style="color: black; margin-left: 1rem;">Justify Rating: </label>
        <textarea name="comments" id="comments" cols="30" rows="5"></textarea>
        <br><br>

        <!--Submission Button-->
        <input type="submit" value="Submit Feedback" style="padding: 10px 15px; background-color: cornflowerblue; border: none ;border-radius: 9px; color: white; outline: transparent; cursor: pointer;">

    </div>

</form>


<?php



    if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
        $shop = $_GET["shop"];
        $name = $_GET["name"];
        $email = $_GET["email"];
        $rating = $_GET["rating"];
        $comments = $_GET["comments"];

        $inputAlerts = [];

        if (trim($shop)  === "") {
            $inputAlerts[] = "Please select a shop.";
        }

        if ($name == "" ) {
            $inputAlerts[] = "Please enter your name.";

        }

        if ($email == "" ) {
            $inputAlerts[] = "Please enter your email address.";
        }

        if ($rating == "" ) {
            $inputAlerts[] = "Please select a rating.";
        }

        if (!empty($inputAlerts)) {
            echo "<p style='color:red;'><strong>Incomplete form:</strong><br>".implode("<br>", $inputAlerts)."</p>";
        }else {
            echo "<h3>Feedback Summary: </h3>";
            echo "<p><strong>Shop: </strong>$shop</p>";
            echo "<p><strong>Name: </strong>$name</p>";
            echo "<p><strong>Email: </strong>$email</p>";
            echo "<p><strong>Rating: </strong>$rating</p>";

            if ($comments !== "") {
                echo "<p><strong>Comments: </strong>. htmlspecialchars($comments) .</p>";

            }else {
                echo "<p><strong>Comments: </strong>No comment provided.</p>";
            }

        }

    }

    ?>
<br><br>
<br><br>
<br><br>
<br><br>

<div class="iframe" style="text-align: center; margin-top: 30px">
    <iframe width=400 height="1200" src="task1.txt">
        Your browser doesn't support iframes.
        </iframe>
</div>
