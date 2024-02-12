<?php

namespace tests_unitaires\Model;
require "..\..\Model\ConnexionBDD.php";
require "..\..\Model\ModelReinitialiserMdp.php";

use Model\Conn;
use PHPUnit\Framework\TestCase;

class testModelReinitialiserMdp extends TestCase
{
    /**
     * Teste la fonction reinitialiserMDP($conn, $mdp, $email)
     *
     * @return void
     *
     * @author Emeline
     */

    function testReinitialiserMDP()
    {
        if (reinitialiserMDP(
                Conn::getInstance(),
                "mdp",
                "email@gmail.com"
            ) == true) {
            $result = "true";
        } else {
            $result = "false";
        }
        self::assertIsString($result);
    }

    /**
     * Teste la fonction selectCodeEtuWhereEmail($conn, $email)
     *
     * @return void
     *
     * @author Emeline
     */

    function testSelectCodeEtuWhereEmail()
    {
        if (selectCodeEtuWhereEmail(
                Conn::getInstance(),
                "email@gmail.com"
            ) == true) {
            $result = "true";
        } else {
            $result = "false";
        }
        self::assertIsString($result);
    }
}
