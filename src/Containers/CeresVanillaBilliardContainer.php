<?php

namespace CeresVanillaBilliard\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresVanillaBilliardContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresVanillaBilliard::Stylesheet');
    }
}