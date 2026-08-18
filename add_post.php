<?php

include 'database.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $author = trim($_POST["author"]);
    $content = trim($_POST["content"]);

    if (empty($author) || empty($content)) {

        $message = "Täytä kaikki kentät.";

    } else {

        $sql = "INSERT INTO posts (author, content, created_at)
                VALUES ('$author', '$content', NOW())";

        if (mysqli_query($conn, $sql)) {
            $message = "Julkaisu lisättiin onnistuneesti.";
        } else {
            $message = "Julkaisun lisääminen epäonnistui.";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="fi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lisää julkaisu - MiniSome</title>
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

            <div class="add-post">

                <h1>Lisää julkaisu</h1>

                <?php if (!empty($message)) { ?>
                    <div class="message">
                        <?php echo $message; ?>
                    </div>
                <?php } ?>

                <form method="POST">

                    <label for="author">Nimimerkki</label>

                    <input
                        type="text"
                        name="author"
                        id="author"
                        placeholder="Nimimerkkisi"
                    >

                    <label for="content">Julkaisu</label>

                    <textarea
                        name="content"
                        id="content"
                        placeholder="Mitä mielessä?"
                    ></textarea>

                    <button type="submit">
                        Julkaise
                    </button>

                </form>

            </div>

        </div>

    </div>

</body>

</html>