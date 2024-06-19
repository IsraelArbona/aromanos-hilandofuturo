<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Snappy PDF / Image Configuration
    |--------------------------------------------------------------------------
    |
    | This option contains settings for PDF generation.
    |
    | Enabled:
    |
    |    Whether to load PDF / Image generation.
    |
    | Binary:
    |
    |    The file path of the wkhtmltopdf / wkhtmltoimage executable.
    |
    | Timout:
    |
    |    The amount of time to wait (in seconds) before PDF / Image generation is stopped.
    |    Setting this to false disables the timeout (unlimited processing time).
    |
    | Options:
    |
    |    The wkhtmltopdf command options. These are passed directly to wkhtmltopdf.
    |    See https://wkhtmltopdf.org/usage/wkhtmltopdf.txt for all options.
    |
    | Env:
    |
    |    The environment variables to set while running the wkhtmltopdf process.
    |
    */

    'pdf' => [
        'enabled' => true,
        //'binary' => '/app/bin/wkhtmltopdf',
        'binary' => '/usr/local/bin/wkhtmltopdf',  // mac
        // 'binary' => '/usr/local/bin/wkhtmltopdf-amd64',
        //'binary'  => base_path('vendor/bin/wkhtmltopdf-amd64'), // Digital Ocean
        'timeout' => false,
        'options' => [],
        'env'     => [],
    ],

    'image' => [
        'enabled' => true,
        // 'binary' => '/app/bin/wkhtmltoimage',
        'binary' => '/usr/local/bin/wkhtmltoimage',  //mac
        // 'binary' => '/usr/local/bin/wkhtmltoimage-amd64',
        // 'binary'  => base_path('vendor/bin/wkhtmltoimage-amd64'), // Digital Ocean
        'timeout' => false,
        'options' => [],
        'env'     => [],
    ],

];
