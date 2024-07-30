<?php

return [
    'show_warnings' => false,
    'public_path' => null,
    'convert_entities' => true,

    'options' => [
        'font_dir' => storage_path('fonts'),
        'font_cache' => storage_path('fonts'),
        'temp_dir' => storage_path('app/tmp'),
        'chroot' => realpath(base_path()),

        'default_media_type' => 'screen',
        'default_paper_size' => 'a4',
        'default_font' => 'notokufiarabic',

        'fonts' => [
            'notokufiarabic' => [
                'R' => 'NotoKufiArabic-Regular.ttf',
                'B' => 'NotoKufiArabic-Bold.ttf',
            ],
        ],

        'dpi' => 96,
        'enable_php' => false,
        'enable_javascript' => true,
        'enable_remote' => true,
        'font_height_ratio' => 1.1,
        'enable_html5_parser' => true,
        'enable_font_subsetting' => true,
    ],
];

