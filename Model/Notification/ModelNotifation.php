<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
function semaineinsert($conn){
    $req = "insert into notification ( idetudiant, date,texte) select idetudiant, current_timestamp,'Cet étudiant n''a pas de réponse de la part de son entreprise depuis 7 jours' from recrute where current_timestamp >= recrute.date + integer '7' except select idetudiant,current_timestamp,'Cet étudiant n''a pas de réponse de la part de son entreprise depuis 7 jours' from notification;";
    $req2 = $conn->prepare($req);
    $req2->execute();
    $req2->fetchAll(PDO::FETCH_ASSOC);
    return $req2;
}
function sdf($conn){
    $text = "Cet étudiant n'a pas d'entreprise";
    $req = "insert into notification ( idetudiant, date,texte) select idetudiant, current_timestamp,'Cet étudiant n''a pas d''entreprise' from etudiant except select idetudiant,current_timestamp,'Cet étudiant n''a pas d''entreprise' from postule except select  idetudiant,current_timestamp,'Cet étudiant n''a pas d''entreprise'    from notification;";
    $req2 = $conn->prepare($req);
    $req2->execute();
    $req2->fetchAll(PDO::FETCH_ASSOC);
    return $req2;
}

function notif($conn){
    $req = "SELECT etudiant.nom as em,etudiant.prenom as ep ,offre.nom as om, offre.visible,entreprise.nom, idetudiant, idoffre, lu, idnotif, rappel , TO_CHAR(notification.date, 'MM') AS mois,
       TO_CHAR(notification.date, 'YYYY') AS annee,
       TO_CHAR(notification.date, 'DD') AS jour,
       TO_CHAR(notification.date, 'MI') AS minutes,
       TO_CHAR(notification.date, 'HH24') AS heure, notification.texte as texte From notification  left JOIN etudiant using (idetudiant)  left join postule using(idetudiant) left join poste using (idoffre) left join entreprise using (identreprise) left join offre using (idoffre)";
    $req2 = $conn->prepare($req);
    $req2->execute();
    $res = $req2->fetchall(PDO::FETCH_ASSOC);
    return $res;
}

function nbnotif($conn){
    $req = "select  count(*) as nb from notification where lu = false ;";
    $req2 = $conn->prepare($req);
    $req2->execute();
    $result = $req2->fetch(PDO::FETCH_ASSOC);


    return $result['nb'];
}

function semaine($conn, $idnotif, $idetudiant, $lu, $rappel)
{
    $req = "UPDATE notification SET lu = ?, rappel = ? WHERE idnotif = ? AND idetudiant = ?";
    $req2 = $conn->prepare($req);
    $req2->execute(array($lu,$rappel,$idnotif, $idetudiant ));
}

function verifdate($conn)
{
    $req = "Update notification set lu = ?, rappel = ? where rappel <= current_date ; ";
    $req2 = $conn->prepare($req);
    $req2->execute(array('false', null));
}
?>