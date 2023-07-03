<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add product</title>
    </head>
    <body>
        <form method="post" novalidate>
        <fieldset style="width: 400px;">
        <legend>ADD PRODUCT</legend>
        <table>
            <tr>
                <td><label for="name">Name</label><br>
                <input type="text" name="name" id="name">
                </td>
            </tr>
            <tr>
                <td><label for="buy">Buying Price</label><br>
                <input type="text" name="buy" id="buy">
                </td>
            </tr>
            <tr>
                <td><label for="sell">Selling Price</label><br>
                <input type="text" name="sell" id="sell">
                </td>
            </tr>
            <tr>
                <td>
                <input type="checkbox" name="display" id="display">
                <label for="display">Display</label><br>
                </td>
            </tr>
        </table>
        <hr>
        <input type="submit" name="save" value="SAVE">
        </fieldset>
    </form>
<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $name = $_POST['name'];
    $buy = $_POST['buy'];
    $sell = $_POST['sell'];
    $display = isset($_POST['display']) ? $_POST['display'] : '';

    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "CRUD";

    // Create connection
    $conn = mysqli_connect('localhost', 'root', '', 'webtech');
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO Mobile (name, buyingprice, sellingprice, display) VALUES ('$name', '$buy', '$sell', '$display')";

    $update = mysqli_query($conn, $sql);

    mysqli_close($conn);
}
?>
</body>
</html>
