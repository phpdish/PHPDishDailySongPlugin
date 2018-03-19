<?php

declare(strict_types=1);

namespace PHPDish\DailySongPlugin\Twig;

use PHPDish\DailySongPlugin\Service\SongManagerInterface;

class SongExtension extends \Twig_Extension
{
    /**
     * @var SongManagerInterface
     */
    protected $songManager;

    public function __construct(SongManagerInterface $songManager)
    {
        $this->songManager = $songManager;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('get_latest_song', [$this->songManager, 'getLatestSong']),
        ];
    }
}