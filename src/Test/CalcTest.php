<?php
/**
 * Created by PhpStorm.
 * User: mrarm
 * Date: 2/25/18
 * Time: 6:27 PM
 */

namespace mrarm\UDID\Test;

require("src/Tools.php");


use \mrarm\UDID\Tools;
use PHPUnit\Framework\TestCase;

class CalcTest extends TestCase
{
    public function testCorrectOutput()
    {
        $test = Tools::CalculateUDID("DMPPF84LFK11", "6552664192520", "5c:f5:da:98:fc:e4", "5c:f5:da:98:fc:e5");
        $this->assertEquals("efe72ce274fb3deaea3568544e510b182f4a8b85", $test);
    }
}
