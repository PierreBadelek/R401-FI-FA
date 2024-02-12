<?php

namespace tests_unitaires\Model;
require "..\..\Model\ConnexionBDD.php";
require "..\..\Model\ModelModifierProfilEtu.php";

use Model\Conn;
use PHPUnit\Framework\TestCase;

class testModelModifierProfilEtu extends TestCase
{
    /**
     * Teste la fonction updateEtu()
     *
     * @return void
     * @author Emeline
     *
     */
    function testUpdateEtu()
    {
        if (updateEtu(
                Conn::getInstance(),
                "NOM",
                "Prenom",
                "Adresse",
                "Ville",
                59720,
                2,
                "BUT Info Parcours A",
                "test@gmail.com",
                1
            ) == true) {
            $result = "true";
        } else {
            $result = "false";
        }
        self::assertIsString($result);
    }


    /**
     * Teste la fonction updateNomEtu()
     *
     * @return void
     * @author Emeline
     *
     */
    function testUpdateNomEtu()
    {
        if (updateNomEtu(
                Conn::getInstance(),
                "NOM",
                1
            ) == true) {
            $result = "true";
        } else {
            $result = "false";
        }
        self::assertIsString($result);
    }


    /**
     * Teste la fonction updatePrenomEtu()
     *
     * @return void
     * @author Emeline
     *
     */
    function testUpdatePrenomEtu()
    {
        if (updatePrenomEtu(
                Conn::getInstance(),
                "Prenom",
                1
            ) == true) {
            $result = "true";
        } else {
            $result = "false";
        }
        self::assertIsString($result);
    }


    /**
     * Teste la fonction updateDateEtu()
     *
     * @return void
     * @author Emeline
     *
     */
    function testUpdateDateEtu()
    {
        if (updateDateEtu(
                Conn::getInstance(),
                "2001-01-01",
                1
            ) == true) {
            $result = "true";
        } else {
            $result = "false";
        }
        self::assertIsString($result);
    }


    /**
     * Teste la fonction updateAdresseEtu()
     *
     * @return void
     * @author Emeline
     *
     */
    function testUpdateAdresseEtu()
    {
        if (updateAdresseEtu(
                Conn::getInstance(),
                "Adresse",
                1
            ) == true) {
            $result = "true";
        } else {
            $result = "false";
        }
        self::assertIsString($result);
    }


    /**
     * Teste la fonction updateVilleEtu()
     *
     * @return void
     * @author Emeline
     *
     */
    function testUpdateVilleEtu()
    {
        if (updateVilleEtu(
                Conn::getInstance(),
                "Ville",
                1
            ) == true) {
            $result = "true";
        } else {
            $result = "false";
        }
        self::assertIsString($result);
    }


    /**
     * Teste la fonction updateCpEtu()
     *
     * @return void
     * @author Emeline
     *
     */
    function testUpdateCpEtu()
    {
        if (updateCpEtu(
                Conn::getInstance(),
                59720,
                1
            ) == true) {
            $result = "true";
        } else {
            $result = "false";
        }
        self::assertIsString($result);
    }


    /**
     * Teste la fonction updateAnneeEtudeEtu()
     *
     * @return void
     * @author Emeline
     *
     */
    function testUpdateAnneeEtudeEtu()
    {
        if (updateAnneeEtudeEtu(
                Conn::getInstance(),
                2,
                1
            ) == true) {
            $result = "true";
        } else {
            $result = "false";
        }
        self::assertIsString($result);
    }


    /**
     * Teste la fonction updateFormationEtu()
     *
     * @return void
     * @author Emeline
     *
     */
    function testUpdateFormationEtu()
    {
        if (updateFormationEtu(
                Conn::getInstance(),
                "BUT Info Parcours A",
                1
            ) == true) {
            $result = "true";
        } else {
            $result = "false";
        }
        self::assertIsString($result);
    }


    /**
     * Teste la fonction updateEmailEtu()
     *
     * @return void
     * @author Emeline
     *
     */
    function testUpdateEmailEtu()
    {
        if (updateEmailEtu(
                Conn::getInstance(),
                "test@gmail.com",
                1
            ) == true) {
            $result = "true";
        } else {
            $result = "false";
        }
        self::assertIsString($result);
    }


    /**
     * Teste la fonction updateTypeEntrepriseEtu()
     *
     * @return void
     * @author Emeline
     *
     */
    function testUpdateTypeEntrepriseEtu()
    {
        if (updateTypeEntrepriseEtu(
                Conn::getInstance(),
                "Type d'entreprise",
                1
            ) == true) {
            $result = "true";
        } else {
            $result = "false";
        }
        self::assertIsString($result);
    }


    /**
     * Teste la fonction updateTypeMissionEtu()
     *
     * @return void
     * @author Emeline
     *
     */
    function testUpdateTypeMissionEtu()
    {
        if (updateTypeMissionEtu(
                Conn::getInstance(),
                "Type de missions",
                1
            ) == true) {
            $result = "true";
        } else {
            $result = "false";
        }
        self::assertIsString($result);
    }


    /**
     * Teste la fonction updateMobile()
     *
     * @return void
     * @author Emeline
     *
     */
    function testUpdateMobile()
    {
        if (updateMobile(
                Conn::getInstance(),
                True,
                1
            ) == true) {
            $result = "true";
        } else {
            $result = "false";
        }
        self::assertIsString($result);
    }


    /**
     * Teste la fonction updateActif()
     *
     * @return void
     * @author Emeline
     *
     */
    function testUpdateActif()
    {
        if (updateActif(
                Conn::getInstance(),
                1
            ) == true) {
            $result = "true";
        } else {
            $result = "false";
        }
        self::assertIsString($result);
    }


    /**
     * Teste la fonction updateInactif()
     *
     * @return void
     * @author Emeline
     *
     */
    function testUpdateInactif()
    {
        if (updateInactif(
                Conn::getInstance(),
                1
            ) == true) {
            $result = "true";
        } else {
            $result = "false";
        }
        self::assertIsString($result);
    }


    /**
     * Teste la fonction selectEtudiant()
     *
     * @return void
     * @author Emeline
     *
     */
    function testSelectEtudiant()
    {
        $result = selectEtudiant(
            Conn::getInstance(),
            1
        );
        self::assertIsArray($result);
    }
}