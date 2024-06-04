<?php
return [
    'api_site_key'      => env('RECAPTCHA_SITE_KEY'),
    'api_secret_key'    => env('RECAPTCHA_SECRET_KEY'),

    // Default reCAPTCHA version
    'version'           => 'v3',

    // Default reCAPTCHA language code
    'default_language'  => null,

    // Default score threshold (0.0 - 1.0)
    'score_threshold'   => 0.5,
];
