<?php 
    if(isset($_POST['submit'])){
        $dob = $_POST['dob'];
        echo $dob;
    }
?>
<html>
    <form method="post">
        <body>
            <b>4.</b>
                <ul>
                    <fieldset style="width: 150px;">
                        <legend><b>Date of birth </b> </legend>
                            <input type="date" name="dob" value="">
                            <hr>
                            <input type="submit" name="submt" value="Submit">
                    </fieldset>
                    <hr>
                </ul>
        </body>
    </form>
</html>
