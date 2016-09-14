<?php

declare(strict_types = 1);

namespace YuriVecchi\Wordpress\Plugin;


/**
 * {@inheritDoc}
 */
class BoilerplateTest extends \PHPUnit_Framework_TestCase
{
    public function testSimonSaysNothing() {
        $boilerplate = new Boilerplate();
        $this->assertNull($boilerplate->simonSays());
    }
}
