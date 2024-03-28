<?php
$root = basename($_SERVER['DOCUMENT_ROOT']);
?>

<link rel="stylesheet" href="/<?php echo $root ?>/asserts/css/footer.css">

<footer class="footer" id="footer">
    <div class="footer-content">
        <div class="footer-section about">
            <h2>About us</h2>
            <p>The Apprentice Manager is a platform dedicated to the management of students, offers, and companies for apprentice programs.</p>
        </div>

        <div class="footer-section contact">
            <h2>Contact us</h2>
            <p>Email : communication@uphf.fr</p>
            <p> Université Polytechnique Hauts-de-France - Campus Mont Houy - 59313 Valenciennes Cedex 9 | +33 (0)3 27 51 12 34</p>
        </div>

        <div class="footer-section links">
            <h2>Quick links</h2>
            <ul>
                <li><a href="/<?php echo $root ?>/english/View/ViewAdminMainEn.php">Homepage</a></li>
                <li><a href="/<?php echo $root ?>/english/View/ViewAdminEtuEn.php">Students</a></li>
                <li><a href="/<?php echo $root ?>/english/View/ViewAdminEntrepriseEn.php">Companies</a></li>
                <li><a href="/<?php echo $root ?>/english/View/ViewAdminAdministrationEn.php">Administration</a></li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2023 Apprentice Manager | All rights reserved</p>
    </div>
</footer>
