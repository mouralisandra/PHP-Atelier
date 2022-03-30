<?php
$type = ucfirst($_GET["type"]);
$avec_mayonnaise = isset($_GET["mayonnaise"]);
$avec_salade = isset($_GET["salade"]);
$avec_harissa = isset($_GET["harissa"]);
$id = uniqid();
$nom = ucfirst($_GET["nom"]);
$prenom = ucfirst($_GET["prenom"]);
$nombre = $_GET["nombre"];
$adresse = $_GET["adresse"];
$cin = $_GET["cin"];
$remise = 0;
$prix_total = $nombre * 4;
$prix_final = $prix_total;
if ($nombre > 10) {
    $remise = $prix_total * 0.1;
    $prix_final = $prix_total - $remise;
}
?>

<html>

<body>
    <section class="register-photo">
        <div class="form-container">
            <div class="image-holder" style="background: url(&quot;assets/img/original.png&quot;);"></div>
            <form method="post">
                <h2 class="text-center"><strong>Le recap de votre commande</strong></h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sandwich:</th>
                                <th>Choix: </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ID de la commander</td>
                                <td><?= $id ?></td>
                            </tr>
                            <tr>
                            <td>Prenom:</td>
                            <td ><?= $prenom ?></td>
                            </tr>
                            <tr>
                                <td>CIN</td>
                                <td><?= $cin ?></td>
                            </tr>
                            <tr>
                            <td>No. de sandwichs</td>
                            <td><?= $nombre ?></td>
                            </tr>
                            <tr>
                                <td>Type du Sandwich</td>
                                <td><?= $type ?></td>
                            </tr>
                            <tr>
                                <td>Ingredients du Sandwich</td>
                                <td><?php
                                                                if ($avec_mayonnaise == FALSE && $avec_harissa == FALSE && $avec_salade == FALSE) {
                                                                    echo "Vous n'aimez pas Ketchup Mayonnaise Harissa?";
                                                                } else if ($avec_harissa == TRUE) {
                                                                    echo " Harissa\n";
                                                                }
                                                                if ($avec_mayonnaise == TRUE) {
                                                                    echo " Mayonnaise\n";
                                                                }
                                                                if ($avec_salade == TRUE) {
                                                                    echo " Salade\n";
                                                                }
                                                                ?> </td>
                            </tr>
                            <tr>
                                <td>Montant à payer</td>
                                <td><?= "${prix_total} £" ?></td>
                            </tr>
                            <?php
                            if ($nombre > 10) {
                                echo "<tr>
            <td >Discount:</td>
			<td>${remise} £</td>
		</tr>";
                                echo "<tr>
        <td >Prix après Remise</td>
        <td>${prix_final} £</td>
    </tr>";
                            } ?>
                        </tbody>
                    </table>
                </div><a class="already" href="#">Ketchup Mayonnaise Harisa</a>
            </form>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
