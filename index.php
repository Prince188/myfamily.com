<?php

if (isset($_POST['name'])) {

    $conn = new mysqli('localhost', 'root', '', 'family');

    if ($conn->connect_error) {
        die("Could not connect to db" . $conn->connect_error);
    }
    //echo "connected";

    $name = $_POST['name'];
    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    $education = $_POST['education'];
    $blood = $_POST['blood'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $address = $_POST['address'];

    $sql = "INSERT INTO `family`(`name`, `fathername`, `mothername`, `mobile`, `dob`, `education`, `blood`, `height`, `weight`, `address`) VALUES ('$name','$fathername','$mothername','$mobile','$dob','$education','$blood','$height','$weight','$address');";

    //echo $sql;

    // if($conn->query($sql) == true){
    //     echo "inserted";
    // }
    // else{
    //     echo "ERROR: . $sql <br> $conn->error";
    // }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mobile.css">
    <title>Family</title>
</head>

<body>
    <div class="main">
        <nav>
            <ul>
                <li class="item item-active">Home</li>
                <li class="item">Jayntibhai</li>
                <li class="item">Nareshbhai</li>
                <li class="item">Mukeshbhai</li>
            </ul>
        </nav>
        <form action="./index.php" method="post">
            <h4>Please Fill The Information</h4>
            <div class="in">
                <div class="pn">
                    <label for="name">Name:</label>
                    <input type="text" name="name">
                </div>
                <div class="fn">
                    <label for="name">Father Name:</label>
                    <input type="text" name="fathername">
                </div>
            </div>
            <div class="in">
                <div class="pn">
                    <label for="name">Mother Name:</label>
                    <input type="text" name="mothername">
                </div>
                <div class="fn">
                    <label for="name">Mobile No:</label>
                    <input type="tel" name="mobile">
                </div>
            </div>
            <div class="in">
                <div class="birth">
                    <label for="dob">DOB:</label>
                    <input type="date" name="dob">
                </div>
                <div class="age">
                    <label for="age">Age:</label>
                    <input type="number" name="age" readonly>
                </div>
            </div>
            <div class="in">
                <div class="edu">
                    <label for="edu">Education:</label>
                    <input type="text" name="education">
                </div>
                <div class="blood">
                    <label for="bood">Blood Group:</label>
                    <input type="text" name="blood">
                </div>
            </div>
            <div class="in">
                <div class="height">
                    <label for="height">Height:</label>
                    <input type="text" name="height">
                </div>
                <div class="weight">
                    <label for="weight">Weight:</label>
                    <input type="number" name="weight">
                </div>
            </div>
            <div class="in">
                <div class="add">
                    <label for="add">Address:</label>
                    <textarea name="address" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="in">
                <div class="sub-btn">
                    <button type="submit">SUBMIT</button>
                </div>
                <div class="reset-btn">
                    <button type="reset">RESET</button>
                </div>
            </div>
        </form>
        <footer>
            <div class="creator">
                Created by Prince Patel
            </div>
        </footer>
    </div>
</body>

</html>