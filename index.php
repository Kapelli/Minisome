<?php

include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $content = trim($_POST["content"]);

    if (empty($content)) {
        echo "Kirjoita jotain ennen julkaisemista.";
    } else {

        $author = "#";

        $sql = "INSERT INTO posts (author, content, created_at)
            VALUES ('$author', '$content', NOW())";

        if (mysqli_query($conn, $sql)) {
            echo "Postaus lisätty onnistuneesti.";
        } else {
            echo "Postauksen lisääminen epäonnistui.";
        }
    }
}

// echo "Tietokantayhteys muodostettu onnistuneesti." . "<br>";

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
    <div class="layout">
        <aside>
            <img src="logo.png" alt="LOGO">
        </aside>

        <div class="some">
            <nav>
                <a href="index.php">Sinulle</a>
                <a href="add_post.php">Lisää Julkaisu</a>
            </nav>
            <div class="lisaa-post">
                <a href="add_post.php" class="lisaa-postaus">+ Lisää julkaisu</a>
            </div>
            <div class="postaukset">

                <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                <div class="post">
                    <div class="tekija-julkaisuaika">
                        <div class="tekija">
                            <?php echo htmlspecialchars($row['author']); ?>
                        </div>

                        <div class="julkaisuaika">
                            <?php echo $row['created_at']; ?>
                        </div>
                    </div>
                    <div class="sisalto">
                        <?php echo htmlspecialchars($row['content']); ?>
                    </div>
                    <div class="post-footer">
                        <div class="muokkaa">
                            <a href="edit_post.php?id=<?php echo $row['id']; ?>">
                                Muokkaa
                            </a>
                        </div>
                        <div class="poista">
                            <a href="delete_post.php?id=<?php echo $row['id']; ?>">
                                Poista
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>