<?php

// Initialize empty movies array
$instruments = array();

// 1. Connect to my DB
$conn = mysqli_connect('localhost', 'root', '', 'music_shop');

// Did I connect successfully ? 
if ($conn) {
    $query = 'SELECT * FROM instruments';

    // 2. Prepare the query
    if (isset($_POST['searchBox'])) {
        $mySearch = $_POST['searchBox'];
   
        $query = "SELECT * FROM instruments WHERE name LIKE '%$mySearch%'";
    }

    // 3. Executing the query (send the query to the DB)
    $results = mysqli_query($conn, $query);

    // 4. Fetch the results in a associative array
    $instruments = mysqli_fetch_all($results, MYSQLI_ASSOC);
} else {
    echo 'Pb with connection !';
}

// Close the connection (you can close anywhere in the file)
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSTRUMENTS PAGE</title>
</head>

<body>
    

    <h2>INSTRUMENTS list</h2>

    <h4>Search for an INSTRUMENT : </h4>
    <form action="" method="post">
        <input type="text" name="searchBox" placeholder="Start typing name">
        <input type="submit" name="searchBtn" value="Search">
    </form>

    <?php foreach ($instruments as $instrument) : ?>
        <hr>
        
        <p>
            <strong>Name :</strong>
            <!-- Same thing as echo -->
            <?= $instrument['name']; ?>
        </p>


        <p>
            <strong> Brand name:</strong>
            <?php echo $instrument['brand_name']; ?>
        </p>

        <p>
            <strong> Price:</strong>
            <?php echo $instrument['price']; ?>
        </p>

        <p>
            <strong> Photo:</strong>
            <img src="<?= $instrument['photo']; ?>" alt="" width="100px">
        </p>
        
        <p>
            <strong> Type:</strong>
            <?php echo $instrument['type']; ?>
        </p>
        <p>
            <strong> Description:</strong>
            <?php echo substr($instrument['description'],0,19).' ...'; ?>
        </p>
        <!-- Link to 'Instrument detail' page, URL needs the id of the movie -->
        <a href="instrument.php?id=<?= $instrument['id']; ?>">Instrument page</a>

        
        
    <?php endforeach; ?>
</body>

</html>