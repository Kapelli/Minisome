
<?php

include 'database.php';

echo "Tietokantayhteys muodostettu onnistuneesti." . "<br>";

$sql = "SELECT * FROM posts";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minisome</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="postaukset">

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>

        <div class="post">

            <div class="tekija">
                <?php echo $row['author']; ?>
            </div>

            <div class="sisalto">
                <?php echo $row['content']; ?>
            </div>

            <div class="julkaisuaika">
                <?php echo $row['created_at']; ?>
            </div>

        </div>

    <?php } ?>

</div>

</body>
</html>

