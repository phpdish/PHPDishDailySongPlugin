<?php

namespace PHPDish\DailySongPlugin\Service;

use PHPDish\DailySongPlugin\Model\SongInterface;

interface SongManagerInterface
{
    /**
     * 获取最近的一首歌曲
     * @return SongInterface
     */
    public function getLatestSong();
}