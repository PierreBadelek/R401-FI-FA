<?php

namespace tests_unitaires\Model;
require "..\..\Model\ConnexionBDD.php";
require "..\..\Model\ModelAjout.php ";

use Model\Connexion\Conn;
use PHPUnit\Framework\TestCase;

class testModelAjout extends TestCase
{
    function testAjoutAdministration()
    {
        $result = ajoutAdministration(
            Conn::getInstance(),
            "testNom",
            "testPrenom",
            "testFormation",
            "test@gmail.com",
            "testMotdepasse",
            "testRole"
        );
        self::assertIsArray($result);
    }

    function testSelectEtuWhereEmail()
    {
        $result = selectEtuWhereEmail(Conn::getInstance(), "test@gmail.com");
        self::assertIsArray($result);
    }
}
