<?php
namespace Vineyard\Containers;

use Plenty\Plugin\Templates\Twig;

class VineyardContainer
{

    public function call(Twig $twig):string
    {
        return '<meta name="author" content="michael">';
        return $twig->render('Vineyard::content.Vineyard');
    }
}