<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Instrument</title>
</head>
<body>
    <h2>Add Instrument</h2>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Name"><br>
        <input type="text" name="brand_name" placeholder="Brand Name"><br>
        <input type="number" name="price" placeholder="Price"><br>
        <input type="text" name="photo" placeholder="Photo"><br>
        <select name="type" id="type">
            <option value="guitar">Guitar</option>
            <option value="drum">Drum</option>
            <option value="bass">Bass</option>
        </select>
        <br>
        
        <textarea name="description" id="" cols="30" rows="10" placeholder="Description"></textarea>

        <input type="submit" name="registerBtn" value="Add instrument">
    </form>

    <?php

// Register only when form is submitted
if (isset($_POST['registerBtn'])) {
    // by default, no errors
    $errors = false;

    // Grab data while cleaning it
    $name = strip_tags(trim($_POST['name']));
    $brand_name = strip_tags(trim($_POST['brand_name']));
    $price = $_POST['price'];
    $photo = strip_tags(trim($_POST['photo']));
    $type = strip_tags(trim($_POST['type']));
    $description = strip_tags(trim($_POST['description']));
   

    // name, brand name, price and type must not be empty !
    if (empty($name)) {
        echo 'name is mandatory<br>';
        $errors = true;
    }
    if (empty($brand_name)) {
        echo 'brand name is mandatory<br>';
        $errors = true;
    }

    if (empty($price)) {
        echo 'price is mandatory<br>';
        $errors = true;
    }

    if (empty($type)) {
        echo 'Type is mandatory<br>';
        $errors = true;
    }
    if (is_nan($price)) {
        echo 'price must be a number<br>';
        $errors = true;
    }
    

    // Insert only if no errors
    if ($errors == false) {

        

        // 1. Connect to my DB
        $conn = mysqli_connect('localhost', 'root', '', 'music_shop');
        $query = "INSERT INTO instruments(name, brand_name, price, photo, type, description)
        VALUES('$name', '$brand_name', '$price', '$photo', '$type', '$description')";

        // 2. Execute the query
        $result = mysqli_query($conn, $query);

        // INSERT/UPDATE/DELETE returns true OR false
        if ($result)
            echo '<p style="color:green">Successfully inserted in the DB</p>';
        else
            echo '<p style="color:red">Problem inserting in the DB</p>';
    }
}

/* 
Here we are saving the name of the file (not the full path).
We need to take care of this when showing the image later on.
Ex: <img src="uploads/<?= $user['poster']?>" alt="">
*/
?>


    
</body>
</html>