<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background: var(--bs-purple);">
    <section class="login-dark" style="background: var(--bs-purple);">
        <form method="post" style="width: 40%;">
            <h2 class="visually-hidden">Login Form</h2>
            <div class="illustration" style="background: url(&quot;assets/img/0d7f5d0b702b7e228f7151dbd46224d3.png&quot;);width: 100%;height: 100%;background-size: 100%;padding: 100px;"></div>
            <h1>Le cours PHP:</h1>
        </form>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <?php
    session_start();
    for ($i = 0; $i < 50; $i++) {
        if (!isset($_SESSION["title{$i}"]) && isset($_POST['title'])) {
            $_SESSION["title{$i}"] = $_POST['title'];
            $_SESSION["textarea{$i}"] = $_POST['textarea'];
            break;
        }
    }
    echo '<body><div style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap;">';
    for ($i = 0; $i < 50; $i++) {
        if (isset($_SESSION["title{$i}"])) {
            echo "<div style='margin:5px; border:2px solid black;padding:1 10px;' name='{$_SESSION["title{$i}"]}'>";
            echo "<h3> <font color= red><u> {$_SESSION["title{$i}"]}</u></font></h3><p>{$_SESSION["textarea{$i}"]} </p><br></div>";
        }
    };
    echo "</div></body>";

    echo "<br><br>";
    echo '<a href="addNote.php">Ajouter une note.</a><br><br>';
    echo '<a href="restartSession.php">Quitter votre session.</a>';
    ?>

</body>

</html>