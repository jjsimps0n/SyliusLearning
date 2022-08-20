<?php

declare(strict_types=1);

namespace App\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMenuListener
{
    public function addSupplierMenu(MenuBuilderEvent $event): void 
    {
        # Gauname kategorija kurioje norime kurti naują child
        # Kategorijas galima pasitikrinti: sylius/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Menu/MainMenuBuilder.php
        $confMenu = $event->getMenu()->getChild('configuration'); 

        # Pridedame naują child
        $confMenu
            ->addChild('suppliers', ['route' => 'app_admin_supplier_index'])
            ->setLabel('app.ui.suppliers')
            ->setLabelAttribute('icon', 'adress card outline'); # icons list -> https://semantic-ui.com/elements/icon
    }
}