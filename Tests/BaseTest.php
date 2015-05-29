<?php

namespace Codete\FormGeneratorBundle\Tests;

use Doctrine\Common\Annotations\AnnotationRegistry;
use Codete\FormGeneratorBundle\FormGenerator;
use Symfony\Component\Form\Forms;

abstract class BaseTest extends \PHPUnit_Framework_TestCase
{
    /** @var \Codete\FormGeneratorBundle\FormGenerator */
    protected $formGenerator;
    
    public function setUp()
    {
        $loader = require __DIR__.'/../vendor/autoload.php';
        AnnotationRegistry::registerLoader(array($loader, 'loadClass'));
        $dispatcher = $this->getMockBuilder('Symfony\Component\EventDispatcher\EventDispatcher')
            ->disableOriginalConstructor()
            ->getMock();

        $this->formGenerator = new FormGenerator(
            Forms::createFormFactoryBuilder()->getFormFactory(),
            $dispatcher
        );
    }
}
