<?php

namespace tests_unitaires\Model;
require "..\..\Model\ConnexionBDD.php";
require "..\..\Model\ModelConnexionAdmin.php";

use Model\Conn;
use PHPUnit\Framework\TestCase;

class testModelConexionAdmin extends TestCase
{
    function testselectEmailMDPRoleAdmin()
    {
        $result = selectEmailMDPRoleAdmin(Conn::getInstance());
        self::assertIsArray($result);
    }
}
