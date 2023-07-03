<?php
session_start();

$email = $_SESSION['email'];

$conn = mysqli_connect('localhost', 'root', '', 'Patient');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM Patient WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    $firstName = $row['fname'];
    $lastName = $row['lname'];
    $gender = $row['gender'];
    $dob = $row['dob'];
    $bloodGroup = $row['bg'];
    $address = $row['address'];

    echo "Welcome, $firstName $lastName!<br>";
    echo "Gender: $gender<br>";
    echo "Date of Birth: $dob<br>";
    echo "Blood Group: $bloodGroup<br>";
    echo "Address: $address<br>";
} else {
    echo "Error: Patient not found.";
}

mysqli_close($conn);
?>

<html>
    <body>
        <a herf="logout.php">
            <input type="submit" name="submit" value="Logout">
        </a>
    </body>
</html>