<?php

include 'database.php';

$id = $_GET["id"];

$sql = "SELECT * FROM posts WHERE id = $id";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["id"];

    $sql = "DELETE FROM posts
            WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        $message = "Julkaisu poistettu onnistuneesti.";
        $message_class = "Onnstui_message";
    } else {
        $message = "Julkaisun poistaminen epäonnistui.";
        $message_class = "Epaonnstui_message";
    }
}

?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poista julkaisu</title>
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

            <h1>Poista julkaisu</h1>

            <?php if (!empty($message)) { ?>
                <div class="<?php echo $message_class; ?>">
                    <?php echo $message; ?>
                </div>
            <?php } ?>

            <p>Haluatko varmasti poistaa tämän julkaisun?</p>

            <p>
                <strong><?php echo htmlspecialchars($row['author']); ?></strong>
            </p>

            <p>
                <?php echo htmlspecialchars($row['content']); ?>
            </p>

            <form method="POST">

                <input
                    type="hidden"
                    name="id"
                    value="<?php echo $row['id']; ?>"
                >

                <button type="submit">
                    Poista
                </button>

            </form>

        </div>

    </div>

</div>

</body>
</html>