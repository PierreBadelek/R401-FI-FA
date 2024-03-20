<?php

namespace tests_unitaires\Model;
require "..\..\Model\ConnexionBDD.php";
require "..\..\Model\ModelMdpEtu.php";

use Model\Connexion\Conn;
use PHPUnit\Framework\TestCase;

class testModelMdpEtu extends TestCase
{
    function testRecuptoken()
    {
        $result = recuptoken(
            Conn::getInstance(),
            "test@gmail.com"
        );
        self::assertIsString($result);
    }
}
