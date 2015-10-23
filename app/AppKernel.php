<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
			
			new Braincrafted\Bundle\BootstrapBundle\BraincraftedBootstrapBundle(),
			new JMS\I18nRoutingBundle\JMSI18nRoutingBundle(),
            new JMS\TranslationBundle\JMSTranslationBundle(),
            new FOS\UserBundle\FOSUserBundle(),
			new FOS\JsRoutingBundle\FOSJsRoutingBundle(),
			new Knp\Bundle\MenuBundle\KnpMenuBundle(),
			new Mopa\Bundle\BootstrapBundle\MopaBootstrapBundle(),
			new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
        	new Craue\FormFlowBundle\CraueFormFlowBundle(),
			new JMS\DiExtraBundle\JMSDiExtraBundle($this),
			new JMS\AopBundle\JMSAopBundle(),

			new A2lix\I18nDoctrineBundle\A2lixI18nDoctrineBundle(),
			new Lexik\Bundle\TranslationBundle\LexikTranslationBundle(),
			new A2lix\TranslationFormBundle\A2lixTranslationFormBundle(),
			
			new ne0shad0w\ZephyrAdminCoreBundle\ZephyrAdminCoreBundle\ZephyrAdminCoreBundle() ,
			new ne0shad0w\MembreBundle\MembreBundle\MembreBundle() ,
			new ne0shad0w\GapiBundle\GapiBundle\GapiBundle() ,
			new ne0shad0w\PageBundle\PageBundle\PageBundle() ,
			new ne0shad0w\FrontBundle\FrontBundle\FrontBundle() ,


        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
