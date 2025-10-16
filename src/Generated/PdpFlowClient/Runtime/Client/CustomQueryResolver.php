<?php

namespace PdpLibre\Generated\PdpFlowClient\Runtime\Client;

use Symfony\Component\OptionsResolver\Options;
interface CustomQueryResolver
{
    public function __invoke(Options $options, $value);
}