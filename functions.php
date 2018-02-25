<?php

/**
 * Get some assets path.
 * @param string $file
 * @return null|string
 */
function webpack(string $file): ?string
{
    static $manifest;
    if ($manifest === null) {
        $manifest = json_decode(file_get_contents(PUBLIC_ROOT . 'build/manifest.json'));
    }

    return $manifest->$file ?? null;
}

/**
 * Get series sample data
 * @return array
 */
function get_series(): array
{
    return [
        [
            'poster'  => 'https://www.thetvdb.com/banners/posters/260449-3.jpg',
            'title'   => 'Vikings',
            'episode' => 'S05E04',
        ],
        [
            'poster'  => 'https://www.thetvdb.com/banners/posters/289590-1.jpg',
            'title'   => 'Mr. Robot',
            'episode' => 'S04E07',
        ],
        [
            'poster'  => 'https://www.thetvdb.com/banners/posters/153021-6.jpg',
            'title'   => 'The Walking Dead',
            'episode' => 'S08E09',
        ],
        [
            'poster'  => 'https://www.thetvdb.com/banners/posters/314995-1.jpg',
            'title'   => 'Berlin Station',
            'episode' => 'S02E10',
        ],
        [
            'poster'  => 'https://www.thetvdb.com/banners/posters/161511-6.jpg',
            'title'   => 'Shameless',
            'episode' => 'S08E06',
        ],
    ];
}