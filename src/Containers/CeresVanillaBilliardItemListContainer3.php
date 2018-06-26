<?php

namespace CeresVanillaBilliard\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresVanillaBilliardItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CeresVanillaBilliard::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}