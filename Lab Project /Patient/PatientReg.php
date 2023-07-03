<html>
    <head>
        <title>Patient Registration</title>
    </head>
    <body>
        <form method="post">
            <fieldset>
                <legend><h1>Sign Up</h1></legend>
                <table>
                    <tr>
                        <td>First name</td>
                        <td><input style="width: 200px;" type="text" name="firstname" value=""></td>
                    </tr>
                    <tr>
                        <td>Last name</td>
                        <td><input style="width: 200px;" type="text" name="lastname" value=""></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>
                            <input type="radio" name="gender" value="male">Male<br>
                            <input type="radio" name="gender" value="female">Female<br>
                            <input type="radio" name="gender" value="other">Other
                        </td>
                    </tr>
                    <tr>
                        <td>Date of birth</td>
                        <td><input type="date" name="dob" value=""></td>
                    </tr>
                    <tr>
                        <td>Blood Group</td>
                        <td>
                            <select name="bg">
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input style="width: 200px;" type="text" name="email" value=""></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><input style="height: 80px; width: 200px;" type="text" name="address" value=""></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value=""></td>
                    </tr>
                    <tr>
                        <td>C_Password</td>
                        <td><input type="password" name="cpassword" value=""></td>
                    </tr>
                </table>
                <input type="checkbox" name="TC" value="">I have read terms and conditions.<br>
                <input type="submit" name="submit" value="Submit">
                <a href="Patientlog.php"><input type="button" name="back" value="Back"></a>
            </fieldset>
        </form>
        <?php
        if(isset($_POST['submit'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $gender = $_POST['gender'];
            $dob = $_POST['dob'];
            $bg = $_POST['bg'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];

            $conn = mysqli_connect('localhost', 'root', '', 'Patient');

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "INSERT INTO Patient (fname, lname, gender, dob, bg, email, address, pass) 
                    VALUES ('$firstname', '$lastname', '$gender', '$dob', '$bg', '$email', '$address', '$password')";

            if (mysqli_query($conn, $sql)) {
                echo "Registration successful!";
            } else {
                echo "Error occured ";
            }

            mysqli_close($conn);
        }
        ?>
    </body>
</html>
