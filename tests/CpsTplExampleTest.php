<?php

namespace Xsplus\CpsTpl\Tests;

use PHPUnit\Framework\TestCase;
use Xsplus\CpsTpl\CpsTplExample;

final class CpsTplExampleTest extends TestCase
{
    public function testShow()
    {
        $example = new CpsTplExample();
        $this->expectOutputString("Hi I'm xsplus, this is my template of composer project!");
        echo $example->show();
    }
}
