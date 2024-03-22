<?php

use Model\Conn;

session_start();

include_once '../Model/ConnexionBDD.php';

$conn = Conn::getInstance();
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['BoutonRetour'])) {
    header('Location: ../View/ViewAfficherPlusOffre.php');
    exit();
}

// Initialize la variable de session si elle n'existe pas
if (!isset($_SESSION['selectedStudents'])) {
    $_SESSION['selectedStudents'] = array();

}


$idOffre = isset($_GET['idOffre']) ? intval($_GET['idOffre']) : null;

if ($idOffre == null) {
    echo "Erreur : Nom de l'offre introuvable.";
    exit;
}

$_SESSION['selectedOffer'] = $idOffre;

$requetePostulants = "SELECT * FROM Etudiant JOIN Postule USING(idetudiant) WHERE idoffre = ?";
$query = $conn->prepare($requetePostulants);
$query->execute(array($idOffre));
$etudiants = $query->fetchAll();
        ?>
        <head>
            <link rel="stylesheet" type="text/css" href="../asserts/css/AjoutEtudiantOffre.css">
        </head>

        <script src="../asserts/js/Cdselec.js"></script>

        <body>


        <form action="ControlleurCdSelectionEtu.php?idOffre=<?php echo $idOffre; ?>" method="post">
            <h1>Liste des étudiants</h1>
            
            <table id="dataTable" style="width: 100%">
                <thead>
                    <tr>
                        <th class="colonne">Nom</th>
                        <th class="colonne">Prénom</th>
                        <th class="colonne">INE</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($etudiants as $etu) {
                    ?>
                    <tr>
                        <th class="colonne"><?= $etu["nom"] ?></th>
                        <th class="colonne"><?= $etu["prenom"] ?></th>
                        <th class="colonne"><?= $etu["ine"] ?></th>
                        <th class="colonne">
                            <input type="checkbox" name="<?= $etu["idetudiant"] ?>">
                        </th>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <br>
            <input type="submit" name="buttonValider" value="Valider">
            <input type="submit" name="BoutonRetour" value="Retour aux offres">
            <input type="hidden" name="selectedOffer" value="<?php echo $idOffre; ?>">
            <input type="hidden" name="nomOffre" value="<?php echo $idOffre; ?>">
        </form>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['buttonValider'])) {
    if (isset($_POST['selectedStudents']) && is_array($_POST['selectedStudents'])) {
        foreach ($_POST['selectedStudents'] as $selectedStudentId) {
            $sqlEtudiant = $conn->prepare('SELECT idetudiant FROM Etudiant WHERE ine = :ine');
            $sqlEtudiant->bindParam(':ine', $selectedStudentIne, PDO::PARAM_STR);

            if ($sqlEtudiant->execute()) {
                $selectedStudentData = $sqlEtudiant->fetch(PDO::FETCH_ASSOC);


                // Récupérer le nom et prénom de l'étudiant depuis la base de données
                $sqlEtudiant = $conn->prepare('SELECT nom, prenom FROM Etudiant WHERE idetudiant = :id');
                $sqlEtudiant->bindParam(':id', $selectedStudentId, PDO::PARAM_INT);

                if ($sqlEtudiant->execute()) {
                    $etudiant = $sqlEtudiant->fetch(PDO::FETCH_ASSOC);

                    if ($etudiant) {

                        $sqlRecherceID = $conn->prepare('SELECT identreprise FROM Offre join poste using (idoffre) WHERE idoffre = :id');
                        $sqlRecherceID->bindParam(':id', $idOffre);
                        if ($sqlRecherceID->execute()) {
                            $resultatSelect = $sqlRecherceID->fetch(PDO::FETCH_ASSOC);
                            if (isset($resultatSelect['identreprise'])) {
                                $identreprise = $resultatSelect['identreprise'];
                            } else {
                                echo "Aucun résultat trouvé pour 'L entreprise + $resultatSelect";
                            }
                        } else {
                            echo "Erreur lors de l'exécution de la requête SQL pour rechercher l'ID de l'offre : " . $sqlRecherceID->errorInfo()[2];
                        }


                        // Ajouter le nom et prénom de l'étudiant à la variable de session
                        echo "<br>" . 'Le résumé de l\'élève ou des élèves choisis :' . "<br>";
                        $_SESSION['selectedStudents'][] = $etudiant['nom'] . ' ' . $etudiant['prenom'];
                        echo "-" . $etudiant['nom'] . ' ' . $etudiant['prenom'] . "<br>" ;
                        $sqlInsert = $conn->prepare('insert into recrute values (:idetudiant,:identreprise, current_date)');
                        $sqlInsert->bindParam(':idetudiant', $selectedStudentId, PDO::PARAM_INT);
                        $sqlInsert->bindParam(':identreprise', $identreprise, PDO::PARAM_INT);

                        $sqlInsert->execute();

                        $sqlInsert = $conn->prepare('UPDATE offre SET visible = false where idoffre = :idoffre');
                        $sqlInsert->bindParam(':idoffre', $idOffre, PDO::PARAM_INT);
                        $sqlInsert->execute();

                    } else {
                        echo "Étudiant non trouvé.";
                    }
                } else {
                    echo "Erreur lors de l'exécution de la requête SQL pour l'étudiant : " . $sqlEtudiant->errorInfo()[2];
                }
            } else {
                echo 'Aucun étudiant sélectionné.';
            }
        }
    }
}
