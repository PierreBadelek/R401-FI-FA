<?php
$root = basename($_SERVER['DOCUMENT_ROOT']);
?>

<link rel="stylesheet" href="/<?php echo $root ?>/asserts/css/footer.css">

<footer class="footer" id="footer">
    <div class="footer-content">
        <div class="footer-section about">
            <h2>À propos de nous</h2>
            <p>Le Gestionnaire des Apprentis est une plateforme dédiée à la gestion des étudiants, des offres et des entreprises pour les programmes d'apprentissage.</p>
        </div>

        <div class="footer-section contact">
            <h2>Contactez-nous</h2>
            <p>Email : communication@uphf.fr</p>
            <p> Université Polytechnique Hauts-de-France - Campus Mont Houy - 59313 Valenciennes Cedex 9 | +33 (0)3 27 51 12 34</p>
        </div>

        <div class="footer-section links">
            <h2>Liens rapides</h2>
            <ul>
                <li><a href="/<?php echo $root ?>/View/Main/View<?php echo $_SESSION['role'] ?>Main.php">Accueil</a></li>
                <li><a href="/<?php echo $root ?>/Etudiant/View<?php echo $_SESSION['role'] ?>Etu.php">Etudiant</a></li>
                <li><a href="/<?php echo $root ?>/Entreprise/View<?php echo $_SESSION['role'] ?>Entreprise.php">Entreprise</a></li>
                <?php
                if ($_SESSION['role'] === 'admin') {
                    echo '<li><a href="/' . $root . '/Personnel/ViewAdminAdministration.php">Administration</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2023 Gestionnaire des Apprentis | Tous droits réservés</p>
    </div>
</footer>
