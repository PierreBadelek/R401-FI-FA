<?php

/**
 * Changer le mot de passe d'un étudiant dans la base de donnée
 *
 * @param PDO $conn sert à se connecter à la base de donnée
 * @param String $mdp sert à modifier le mot de passe de l'étudiant
 * @param String $email sert à rechercher l'étudiant ayant cette adresse email
 *
 * @return void
 */
function reinitialiserMDP($conn, $mdp, $email): void
{
    $reqEtudiant = "SELECT COUNT(*) AS count FROM Etudiant WHERE email = ?";
    $stmtEtudiant = $conn->prepare($reqEtudiant);
    $stmtEtudiant->execute([$email]);
    $resultEtudiant = $stmtEtudiant->fetch(PDO::FETCH_ASSOC);
    $countEtudiant = $resultEtudiant['count'];

    $reqAdmin = "SELECT COUNT(*) AS count FROM Administration WHERE email = ?";
    $stmtAdmin = $conn->prepare($reqAdmin);
    $stmtAdmin->execute([$email]);
    $resultAdmin = $stmtAdmin->fetch(PDO::FETCH_ASSOC);
    $countAdmin = $resultAdmin['count'];

    if ($countEtudiant > 0) {
        $reqUpdate = "UPDATE Etudiant SET motDePasse = ? WHERE email = ?";
        $stmtUpdate = $conn->prepare($reqUpdate);
        $stmtUpdate->execute([$mdp, $email]);
    }
    elseif ($countAdmin > 0) {
        $reqUpdate = "UPDATE Administration SET motDePasse = ? WHERE email = ?";
        $stmtUpdate = $conn->prepare($reqUpdate);
        $stmtUpdate->execute([$mdp, $email]);
    }
    // Si l'email n'est pas trouvé dans aucune des deux tables
    else {
        // Gérer l'erreur ou afficher un message approprié
        // Par exemple :
        throw new Exception("L'email n'existe dans aucune des deux tables.");
    }
}


/**
 * Récuperer de la base de donnée, le code de confirmation de l'étudiant ayant cette adresse email
 *
 * @param PDO $conn sert à se connecter à la base de donnée
 * @param String $email sert à rechercher l'étudiant ayant cette adresse email
 *
 * @return array $result
 */
function selectCodeEtuWhereEmail($conn, $email){
    $req = "SELECT CodeMail from Etudiant where email = ?";
    $req2 = $conn->prepare($req);
    $req2->execute(array($email));
    $result = $req2->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}
?>