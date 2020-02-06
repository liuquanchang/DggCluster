<?php


namespace Cluster\lio;
use Swoft\Helper\ComposerJSON;
use Swoft\SwoftComponent;

class AutoLoader extends SwoftComponent
{

    public function enable(): bool
    {
        return true;
    }


    /**
     * @return array
     */
    public function getPrefixDirs(): array
    {
        return [
            __NAMESPACE__ => __DIR__,
        ];
    }
    /**
     * Metadata information for the component.
     *
     * @return array
     * @see ComponentInterface::getMetadata()
     */
    public function metadata(): array
    {
        $jsonFile = dirname(__DIR__) . '/composer.json';

        return ComposerJSON::open($jsonFile)->getMetadata();
    }


    public function beans(): array
    {
        return [

        ];
    }

}