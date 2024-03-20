<?php

/**
 * Récuperer de la base de donnée, les emails, mot de passes et roles de toutes les personnes de l'administration
 *
 * @param PDO $conn sert à se connecter à la base de donnée
 * @param String $email
 *
 * @return array $result
 */
function selectEmailMDPRoleAdmin($conn, $email){
    $req = "SELECT email, motdepasse, role FROM Administration WHERE email = ?";
    $req2 = $conn->prepare($req);
    $req2->execute(array($email));
    $result = $req2->fetch(PDO::FETCH_ASSOC);

    return $result;
}

function selectEmailMDPRoleAdminid($conn, $id){
    $req = "SELECT email, motdepasse, role FROM Administration WHERE idprofil = ?";
    $req2 = $conn->prepare($req);
    $req2->execute(array($id));
    $result = $req2->fetch(PDO::FETCH_ASSOC);

    return $result;
}

/**
 * Vérifier si les identifiants correspondent à une personne de la base de donnée
 *
 * @param array $user liste de tous les utilisateurs de la base de donnée
 * @param string $email sert à chercher cette email dans la base de donnée
 * @param string $motDePasse sert à vérifier si ce mot de passe correspond à cet email dans la base de donnée
 *
 * @return bool
 */
function authenticatedAdmin ($user,$email,$motDePasse)
{
    return $user['email'] === $email && password_verify($motDePasse, $user['motdepasse']);
}

/**
 * Rediriger vers la bonne page selon le role
 *
 * @param array $user liste des informations d'un utilisateur
 *
 * @return void
 */
function role($user) {
    $_SESSION['email'] = $user['email'];
    $_SESSION['role'] = $user['role'];

    switch ($user['role']) {
        case 'cd': //Si l'utilisateur est un chargé de développement
            header('Location: ../../View/Main/ViewCdMain.php');
            exit;
        case 'rp': //Si l'utilisateur est un responsable pédagogique
            header('Location: ../../View/Main/ViewSecMain.php');
            exit;
        case 'sec': //Si l'utilisateur est une secretaire
            header('Location: ../../View/Main/ViewSecMain.php');
            exit;
        case 'admin': //Si l'utilisateur est un administrateur
            header('Location: ../../View/Main/ViewAdminMain.php');
            exit;
        case 'rs': //Si l'utilisateur est un responsable du service
            header('Location: ../../View/Main/ViewRsMain.php');
            exit;
        default:
            echo $user['role'];
    }
}

/**
 * Récuperer de la base de donnée, les email et mot de passes de l'étudiant ayant cet email
 *
 * @param PDO $conn sert à se connecter à la base de donnée
 * @param PDO $email
 *
 * @return array $result
 */
function selectEmailMDPEtu($conn,$email){
    $req = "SELECT email, motdepasse FROM Etudiant where email = ?";
    $req2 = $conn->prepare($req);
    $req2->execute(array($email));
    $result = $req2->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}

/**
 * Vérifier si les identifiants correspondent à un étudiant de la base de donnée
 *
 * @param array $etudiants liste de tous les étudiants de la base de donnée
 * @param string $email sert à chercher cet email dans la base de donnée
 * @param string $motDePasse sert à vérifier si ce mot de passe correspond à cette email dans la base de donnée
 *
 * @return boolean true si le mot de passe et l'email sont associé à un étudiant, sinon false
 */
function authenticatedEtu($etudiants,$email,$motDePasse){
    foreach ($etudiants as $etudiant) {
        if ($etudiant['email'] === $email && password_verify($motDePasse,$etudiant['motdepasse'])) {
            return true;
        }

    }
    return false;
}

/**
 * Bloquer le brut force en donnant un nombre d'essais maximal au bout duquel la connexion est bloquée
 *
 * @param PDO $essaiMaximal sert à donner un nombre d'essais maximal
 *
 * @return array $result
 */
function attente($essaiMaximal){
    if ($_SESSION['essai'] >= $essaiMaximal) {
        // L'utilisateur a dépassé le nombre maximal d'échecs de connexion
        // Enregistre l'heure de début de l'attente dans la session
        if (!isset($_SESSION['temps'])) {
            $_SESSION['temps'] = time();
        }

        $temps = 300; // 5 minutes en secondes (5 minutes * 60 secondes)
        $tempsEcoule = time() - $_SESSION['temps'];

        // Vérifiez si l'utilisateur a attendu suffisamment longtemps
        if ($tempsEcoule < $temps) {
            // L'utilisateur doit encore attendre
            echo "Vous devez attendre " . ($temps - $tempsEcoule) . " secondes avant de réessayer.";
            exit;
        } else {
            // Réinitialisez les tentatives de connexion et l'heure de début d'attente
            $_SESSION['essai'] = 0;
            unset($_SESSION['temps']);
            return true;
        }
    }
}

/**
 * Selectionner la formation dont s'occupe l'utilisateur
 *
 * @param PDO $conn sert à se connecter à la base de donnée
 * @param string $email sert à chercher cet email dans la base de donnée
 *
 * @return String $result['formation']
 */
function selectFormationAdmin($conn, $email)
{
    $req = "SELECT formation FROM Administration where email = ?";
    $req2 = $conn->prepare($req);
    $req2->execute(array($email));
    $result = $req2->fetch(PDO::FETCH_ASSOC);
    return $result['formation'];
}

?>