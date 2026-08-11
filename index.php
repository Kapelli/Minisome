<?php

include 'database.php';

echo "Tietokantayhteys muodostettu onnistuneesti." . "<br>";



// SQL-kysely, joka hakee kaikki julkaisut
$sql = "SELECT * FROM posts";

// Suoritetaan kysely
$result = mysqli_query($conn, $sql);

// Käsitellään kyselyn palauttamat rivit
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['author'] . "<br>";
    echo $row['content'] . "<br>";
    echo $row['created_at'] . "<br>";
    echo "<hr>";
}

?>