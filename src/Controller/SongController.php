<?php

namespace PHPDish\DailySongPlugin\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SongController extends Controller
{
    /**
     * 获取最近的一首歌.
     *
     * @return Response
     */
    public function getSongAction()
    {
        $manager = $this->get('phpdish.manager.song');

        return $this->render('PHPDishDailySongPlugin::_daily_song.html.twig', [
            'song' => $manager->getLatestSong(),
        ]);
    }
}
