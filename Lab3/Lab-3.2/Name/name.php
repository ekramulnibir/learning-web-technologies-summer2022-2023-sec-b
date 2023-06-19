<?php 
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        //echo $name;
        $firstletter = substr($name, 0, 1);

        if($name=="")
        {
            echo 'Field empty';
        }
        else if(!ctype_alpha($firstletter))
        {
            echo 'Name must start with letter';
        }

        else{
            echo 'Name available ' . $name;
        }


    }
?>

<html>
    <form method="post">
        <body>
            <b>1.</b>
            <ul>
                <fieldset>
                    <legend><b>Name</b></legend>
                    <input type="text" name="name" value=""><br>
                    <br><hr>
                    <input type="submit" name="submit" value="Submit">
                </fieldset>
            </ul>
        </body>
    </form>
</html>