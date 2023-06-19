<?php 
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        echo $name;

    }
?>

<html>
    <form method="post">
        <body>
            <b>1.</b>
            <ul>
                Name<br>
                <input type="text" name="name" value="<?php if(isset($_POST['submit'])){echo $name;} ?>"><br>
                <br>
                <input type="submit" name="submit" value="Submit">
                <hr>
            </ul>
        </body>
    </form>
</html>