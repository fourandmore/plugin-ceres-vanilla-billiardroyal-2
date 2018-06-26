<?php

namespace CeresVanillaBilliard\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresVanillaBilliardItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CeresVanillaBilliard::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}