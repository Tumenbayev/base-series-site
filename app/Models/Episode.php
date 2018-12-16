<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    /**
     * Основные поля для заполнения информации о сериале
     *
     * @var array
     */
    protected $fillable = [
        'season_id',
        'series_id',
        'episode_name',
        'original_name',
        'description',
        'published_date',
        'poster',
        'overlay_img'
    ];

    /**
     * Возвращает серию в разных озвучках
     *
     * @return array
     */
    public function getVideos()
    {
        return [];
    }

    /**
     * Возвращает видео эпизод сериала в нужной озвучке
     *
     * @param int $voiceId
     * @return string
     */
    public function getVideo(int $voiceId = 0): string
    {
        $availableVoices = $this->getVideos();

        if (!empty($availableVoices) && isset($availableVoices[$voiceId])) {
            return $availableVoices[$voiceId];
        }

        return null;
    }

    /**
     * Возвращает трейлер к эпизоду, если не нашел, отдаёт трейлер сезона
     *
     * @return null
     */
    public function getTrailer()
    {


        return null;
    }
}