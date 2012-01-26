<?php

require_once 'PHPUnit/Extensions/SeleniumTestCase.php';

class TestPage extends PHPUnit_Extensions_SeleniumTestCase {

    function setUp() {
        $this->setBrowser("*firefox");
        $this->setBrowserUrl("http://www.appcelerator.com/");
    }

    function testMyTestCase() {
        $this->open("/");
        $this->assertElementPresent("link=Products");
        $this->assertElementPresent("link=Services");
        $this->assertElementPresent("link=Partners");
        $this->assertElementPresent("link=Showcase");
        $this->assertElementPresent("link=Company");
        $this->assertElementPresent("link=Developer Center");

    }

}

?>