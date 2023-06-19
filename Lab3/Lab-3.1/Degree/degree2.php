<?php 
    if(isset($_POST['submit'])){

        if(isset($_POST['degree'])){
            $degree = $_POST['degree'];
            echo $degree;
        }
    }
?>
<html>
    <form method="post">
        <body>
            <b>5.</b>
            <ul>
                <fieldset style="width: 280px;">
                    <legend>Degree</legend>
                    <input type="checkbox" name="degree" value="SSC">SSC
                    <input type="checkbox" name="degrre" value="HSC">HSC
                    <input type="checkbox" name="degrre" value="BSc">BSc
                    <input type="checkbox" name="degrre" value="MSc">MSc
                    <hr>
                    <input type="submit" name="submit" value="Submit">
                </fieldset>
            </ul>
        </body>
    </form>
</html>