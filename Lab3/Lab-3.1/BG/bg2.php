<?php
    if(isset($_POST['submit'])){
        if(isset($_POST['bg'])){
            $bg = $_POST['bg']; 
            echo $bg;
        }
    }
?>

<html>
    <form method="post">
        <body>
            <b>6.</b>
            <ul>
                <fieldset style="width: 200px;">
                <legend>Blood Group</legend>
                
                    <select name="bg">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB-">AB-</option>
                        <option value="AB+">AB+</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                    </select>
                    <br>
                    <hr>
                    <input type="submit" name="submit" value="submit">
                <br>
                </fieldset>
            </ul>
        </body>
    </form>
</html>