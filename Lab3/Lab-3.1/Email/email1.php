<?php 
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        echo $email;
    }
?>
<html>
    <form method="post">
        <body>
            <b>2.</b>
            <ul>
                <fieldset style="width: 250px">
                    Email<br>
                    <input type="text" name="email" value=""><br><br>
                    <input type="submit" name="submit" value="Submit">
                </fieldset>
            </ul>
        </body>
    </form>
</html>