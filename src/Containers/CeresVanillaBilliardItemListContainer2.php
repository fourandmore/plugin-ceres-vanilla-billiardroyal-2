<?php

namespace CeresVanillaBilliard\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresVanillaBilliardItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CeresVanillaBilliard::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}