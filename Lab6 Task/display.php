<?php
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "CRUD";

    
    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM Mobile WHERE display = 'on'";
    $result = mysqli_query($conn, $sql);
    ?>
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Profit</td>
            <td colspan="2"></td>
        </tr>
    <?php

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $buyingprice = $row['buyingprice'];
            $sellingprice = $row['sellingprice'];
            $display = $row['display'];

            $profit = $sellingprice - $buyingprice;
            if ($display === "on") {
                ?>
                <tr>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $profit; ?></td>
                    <td><a href="editProduct.php">edit</a></td>
                    <td><a href="deleteProduct.php">delete</a></td>
                </tr>
                <?php
            }
        }
    }
?>
</table>
