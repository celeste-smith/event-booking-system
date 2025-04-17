<?php

use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testWebUIButton()
    {
        $factory = new WebUIFactory();
        $button = $factory->createButton();
        $this->assertInstanceOf(WebButton::class, $button);
    }

    public function testMobileUIButton()
    {
        $factory = new MobileUIFactory();
        $button = $factory->createButton();
        $this->assertInstanceOf(MobileButton::class, $button);
    }

    public function testWebUIForm()
    {
        $factory = new WebUIFactory();
        $form = $factory->createForm();
        $this->assertInstanceOf(WebForm::class, $form);
    }

    public function testMobileUIForm()
    {
        $factory = new MobileUIFactory();
        $form = $factory->createForm();
        $this->assertInstanceOf(MobileForm::class, $form);
    }
}
