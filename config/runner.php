<?php

// Do NOT use .env variables here, just set directly

return [
    'helo'           => 'FakeSmtpServer says HI',
    'settings'       => [
        'host' => 'fake.smtp.null',
        'port' => 25255,
    ],
    'stream_context' => [
        'ssl' => [
            'local_cert'        => '/home/mailblast/ssl/Cert.crt',
            'local_pk'          => '/home/mailblast/ssl/Private.key',
            'verify_peer'       => false,
            'verify_peer_name'  => false,
            'capture_peer_cert' => false,
            'allow_self_signed' => true,
        ]
    ]
];
