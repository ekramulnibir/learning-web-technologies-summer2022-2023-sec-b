<?php
session_start();

// if ($_SERVER['REQUEST_METHOD'] === 'POST') 
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = mysqli_connect('localhost', 'root', '', 'Patient');

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM Patient WHERE email = '$email' AND pass = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $_SESSION['email'] = $email;
        mysqli_close($conn);
        header('Location: viewProfile.php');
    } else {
        $error = "Invalid email or password.";
        mysqli_close($conn);
    }
}
?>

<html>
<head>
    <title>Patient Login</title>
</head>
<body>
    <form method="post">
        <fieldset style="width: 600px;">
            <legend><h1>Patient Login</h1></legend>
            <table>
                <tr>
                    <td><label>Email:</label></td>
                    <td><input style="width: 200px;" type="text" name="email" value=""></td>
                </tr>
                <tr>
                    <td><label>Password:</label></td>
                    <td><input style="width: 200px;" type="password" name="password" value=""></td>
                </tr>
                <tr>
                    <td colspan="2" align="right">
                        <a href="forget_password.html">Forget Password?</a>
                        <input type="submit" name="submit" value="Login">
                    </td>
                </tr>
            </table>
            <br>
            Don't have an account? <a href="PatientReg.php">Create one!</a>
        </fieldset>
    </form>
</body>
</html>
