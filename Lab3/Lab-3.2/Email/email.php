<?php 
    if(isset($_POST['submit'])){
        $email = $_POST['email'];

        if($email == "")
        {
            echo 'Field empty';
        }
        else{
            $flag = 0;

            for($i=0; $i<strlen($email); $i++)
            {
                if($email[$i] === '@')
                {
                    $flag = 1;
                    break;
                }
            }

            if($flag==0)
            {
                echo 'Invalid mail';
            }
            else
            {
                echo 'Email valid';
            }

        }
        


    }
?>

<html>
    <form method="post">
        <body>
            <b>2.</b>
            <ul>
                <fieldset style="width: 250px">
                <legend>Email</legend><br>
                    <input type="text" name="email" value="<?php if(isset($_POST['submit'])){echo $email;} ?>"><br><br>
                    <hr>   
                    <input type="submit" name="submit" value="Submit">
                </fieldset>
            </ul>
        </body>
    </form>
</html>