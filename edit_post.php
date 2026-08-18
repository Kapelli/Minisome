<?php

include 'database.php';

$id = $_GET["id"];

$sql = "SELECT * FROM posts WHERE id = $id";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
var_dump($row);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

                <h1>Muokkaa julkaisu</h1>

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
                        value="<?php echo htmlspecialchars($row['author']); ?>"
                    >

                    <label for="content">Julkaisu</label>

                    <textarea
                        name="content"
                        id="content"
                        placeholder="Mitä mielessä?"
                        ><?php echo htmlspecialchars($row['content']); ?></textarea>

                    <button type="submit">
                        Muokkaa
                    </button>

                </form>

            </div>

        </div>

    </div>


</body>
</html>