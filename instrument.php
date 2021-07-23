<?php

// GET the id of the movie (coming from the URL)
$id = $_GET['id'];

// 1. Connect to my DB
$conn = mysqli_connect('localhost', 'root', '', 'music_shop');

// 2. Prepare the query
$query = 'SELECT * 
FROM instruments
WHERE id = ' . $id;
// To see how your query looks like : echo $query;

// 3. Executing the query (send the query to the DB)
$results = mysqli_query($conn, $query);

// 4. Fetch only one result
$instrument = mysqli_fetch_assoc($results);

echo '<img src="' . $instrument['photo'] . '" width="100px">';
echo 'Name : ' . $instrument['name'] . '<br>';
echo 'Brand Name : ' . $instrument['brand_name'] . '<br>';
echo 'Price : ' . $instrument['price'] . '<br>';
echo 'Type : ' . $instrument['type'] . '<br>';
echo 'Description : ' . $instrument['description'] . '<br>';
