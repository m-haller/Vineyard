<?php
namespace Vineyard\Containers;

use Plenty\Plugin\Templates\Twig;

class VineyardContainer
{

    public function call(Twig $twig):string
    {
        return $twig->render('Vineyard::content.Vineyard');
    }
}