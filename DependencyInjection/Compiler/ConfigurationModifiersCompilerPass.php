<?php

namespace Codete\FormGeneratorBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

/**
 * @author Maciej Malarz <malarzm@gmail.com>
 */
class ConfigurationModifiersCompilerPass implements CompilerPassInterface {

    /**
     * {@inheritDoc}
     */
    public function process(ContainerBuilder $container) 
    {
        $tags = $container->findTaggedServiceIds('form_generator.configuration_modifier');
        if (count($tags) > 0 && $container->hasDefinition('form_generator')) {
            $formGenerator = $container->getDefinition('form_generator');
            foreach ($tags as $id => $tag) {
                $formGenerator->addMethodCall('addFormConfigurationModifier', array(new Reference($id)));
            }
        }
    }
}
