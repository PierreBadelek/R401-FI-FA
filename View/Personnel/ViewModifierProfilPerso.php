<?php include '../../Controller/ControllerVerificationDroit.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>

    <title>Profil - <?= $perso['nom'] ?> <?= $perso['prenom'] ?></title>
    <link rel="stylesheet" type="text/css" href="../../asserts/css/ModifierProfilPerso.css">
    <link rel="stylesheet" type="text/css" href="../../asserts/css/adminMenu.css">

    <link rel="icon" href="../../asserts/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../../asserts/css/Cloche.css">
    <script src="../../asserts/js/script.js"></script>
</head>

<body>

<?php
$root = $_SERVER['DOCUMENT_ROOT'];

include $root.'/View/Main/ViewHeader.php';
?>

<div class="content">

    <div class="photo"></div>

    <div class = "container-content">
        <h1>Mon Profil</h1>

        <form method="post" action="../../Controller/Personnel/ControllerModifierProfilPerso.php">
            <div class="information">

                <div>
                    <label class="labelNom"> Nom : </label>
                    <input type="text" name="nouveau_nom" value="<?= $perso['nom'] ?>" class="editableNom">
                </div>

                <div>
                    <label class="labelPrenom"> Prénom : </label>
                    <input type="text" name="nouveau_prenom" value="<?= $perso['prenom'] ?>" class="editablePrenom">
                </div>

                <div>
                    <label class="labelFormation"> Formation : </label>
                    <select name="nouvelle_formation" class="editableFormation">
                        <option value="GEII" <?= ($perso['formation'] === 'GEII') ? 'selected' : '' ?>>GEII</option>
                        <option value="GIM" <?= ($perso['formation'] === 'GIM') ? 'selected' : '' ?>>GIM</option>
                        <option value="GMP" <?= ($perso['formation'] === 'GMP') ? 'selected' : '' ?>>GMP</option>
                        <option value="GEA" <?= ($perso['formation'] === 'GEA') ? 'selected' : '' ?>>GEA</option>
                        <option value="TCV" <?= ($perso['formation'] === 'TCV') ? 'selected' : '' ?>>TCV</option>
                        <option value="QLIQ" <?= ($perso['formation'] === 'QLIQ') ? 'selected' : '' ?>>QLIQ</option>
                        <option value="TCc" <?= ($perso['formation'] === 'TCc') ? 'selected' : '' ?>>TCc</option>
                        <option value="INFO" <?= ($perso['formation'] === 'INFO') ? 'selected' : '' ?>>INFO</option>
                        <option value="Mph" <?= ($perso['formation'] === 'Mph') ? 'selected' : '' ?>>Mph</option>
                    </select>
                </div>

                <div>
                    <label class="labelEmail"> Email : </label>
                    <input type="text" name="nouvelle_email" value="<?= $perso['email'] ?>" class="editableEmail">
                </div>

                <div>
                    <label class="labelRole"> Rôle : </label>
                    <select name="nouveau_role" class="editableRole">
                        <option value="admin" <?= ($perso['role'] === 'Admin') ? 'selected' : '' ?>>Administrateur</option>
                        <option value="rp" <?= ($perso['role'] === 'rp') ? 'selected' : '' ?>>Responsable pédagogique</option>
                        <option value="cd" <?= ($perso['role'] === 'cd') ? 'selected' : '' ?>>Chargés de développement</option>
                        <option value="rs" <?= ($perso['role'] === 'rs') ? 'selected' : '' ?>>Responsable du service</option>
                        <option value="sec" <?= ($perso['role'] === 'sec') ? 'selected' : '' ?>>Secrétaire</option>
                    </select>
                </div>
            </div>
            <div class = "information">
                <div>
                    <button type="submit" name="modifier_profil" class="transparent-button">
                        <img class="editable" id="editIcon" src="../../asserts/img/editer.png" alt="edit">
                    </button>
                </div>

            </div>
        </form>
        <?php
        if (isset($_GET['id'])) {
            ?>
            <div>
                <button type="button" onclick="window.location.href ='../../View/Connexion/ViewModifierMdp.html?id=<?php echo htmlspecialchars($_GET['id'])?>'" name="modifier_mdp" class="AjRapide"> Modifier votre mot de passe </button>
            </div>
            <?php
        }
        ?>



    </div>

</div>

</body>
</html>