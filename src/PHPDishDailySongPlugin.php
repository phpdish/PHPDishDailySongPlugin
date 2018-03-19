<?php

declare(strict_types=1);

namespace PHPDish\DailySongPlugin;

use PHPDish\Bundle\CoreBundle\Plugin\PHPDishPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class PHPDishDailySongPlugin extends Bundle
{
    use PHPDishPluginTrait;
}
