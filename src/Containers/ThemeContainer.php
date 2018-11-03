<?php
namespace Theme\Containers;

use Plenty\Plugin\Templates\Twig;

class ThemeContainer
{

    public function call(Twig $twig): string
    {
        // return '<style>
        // body {background-color: powderblue;}
        // h1 {color: blue;}
        // p {color: red;}
        // </style>';
        // return '<meta name="author" content="michael">';
        return $twig->render('Vineyard::content.Vineyard');
    }
}