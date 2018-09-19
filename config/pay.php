<?php

return [
    'alipay' => [
        'app_id'         => '2016091400509972',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAq9PR7ym7ihVC3xc5/ZrxAd6Xi90BpNG5ZCY+XNpzYqgNf3n3xNkKzQ7QXz4mL/QhxwOv3t02BaU3LvarJ0qAAe5WPqe2fgP5nqxRZUiwbhBwxzrecwmYzr4Kv3hQ7eb1P9j7AwlMgriufE9RBcayuWkJSjk/Psc24nJUY1P88kqAukl69bRXvK4pgtIe09QA7ZqJErZo8H6vy23aT4MSl5ECzmnorjcU9ey4qPIiZiU3AxmnicSi9lcobihdM9GyJ6IptpczcGX60lPt2u5QmNfh4Gckkt+NX3tKV+tN+s7nKy2WCFfmmtDkuI7c1TeI0rjcxOr0QvqjsPA/44uYnwIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAxEUJloPqJ140+iQEOQpTagsuaLpNuA9m2tMcoaNkxgk+tX2a2KK1kMMyKc+D6tSG1uRJ5NYr/l21FEq3BXjcG6afdB+D34Vxc6QN6g+Ufxyb6HabUq+JjF8QTzv1KxalJD0cIslLbcDq5z28+wFM/B6obBZ1+UzjxNtxnPJkUKJxVroZBf6yB+SH1lQEh5RQcQ0eO+2/V0KOVJew3ZUPRuL7amXt2vzlNbU7dJrYS5JtyBW+i9u+fprbajszUzLLxAKgUFvNc0/wsu2z10skmCDdJncQVVbdnMO8CV/1PcqrnoiVQM+hv3U3+PtUR70I0Gc3o/51oqPMmOsKQ19cGQIDAQABAoIBAGe+3myTWihpIbO/agQEs0bwlh2BrSdH7ORqh03hopkTtfQVas5sY3Eb3N5A9MgigwwALBcsJqEUQ21weQIJer+a+dpV9k0mqmuoIjrA9YujQb5FQ6EXbKuobGSVmuil1bEsJD03Dgn72a9V8Rj0/Q6f3gMUdFPNEvCx1oJRljkQVyhhfzqpQc4Z2i+ttQDB3fJXVufg2myFay/s844sEDSBcC3IrBFKV0+P6kiEfKM/PmqeqepjeQ7VkgkiE/t2usHgTny7b0KyBueAyc18xKm2hxSAZmE6DAbFiKoLbtOSU8osK4GNAzYlqIzi2zn7MhQuvCPEQbWsr4KmjGKrUwECgYEA8MR5RCS7e1Oqglqvi2X4PjYeqwZmo3USM1CocKdMx5by5voMyYF01hiNA/Mp7+sur8g0y8NvOD6n3N9wr0nLUJYLjHc8qjfV/5ZrpqPkBZs29WE2y29uOnglvBs9Zlwx+oHO93uAeGyptlU786FUdImqqB0fJzVKM78GzvFwzakCgYEA0K/d9TtME/26lpvZLDbMITcfoLjCSOhDuBpiTNruebouzM6i/1s2nkGnbV/mbX/qavA4DmYClle5pHgbz5gcuTw4QOdmQgC3oq3AOGZjg4Be6Sb2u76qVNV5kmLGqn9F5oH7PaFrj/1gWRwLWDgpy11ycBYsfXTxoKjlb53XwPECgYEAzCPaKgP3Do8W4GWht9DilWTvxdSsi+VEZEv8NWA0gnojQ+I5m1TvSmQQlIvFQA4pTJO06Buxnn/JdkXhVk58W7yM2DF1N2IWSRox9l25hWNgStd9TSoSzPJ4FDEIc1Syb5NGd6G4gOKpVtaX+W8Nm63qC5Z9hpHxc0SBsk8WdNkCgYEAiCZFFApkvyIpirsQ/ASgNwdkrhH8R16pV8J24ZdwQKCUifBCbYEP6D4DQptvlX7/7Fbe653oEDgZmND3q/+ctckxFj8h+uvG4u6i2ukKAbBNu6U9Eg35yLEhyLyCypeQfivNQ08+AsoXAuwGBr9VnSVRVQlSa2NRhTTLw39iVLECgYBc4neveMiDyPo5Q/Mjxx54lZ5u2DklzGlJ+IBkfgSdyC3hGlTW+1sA4bgy26jYosy/ZpfGyIvBWVfjCd4aks8VZllwPFEIZ8GK4fn3zAsorM5kUPg0friJD1jkukBeHwfwnL+Jjd8WDQOKM+tDsSi7IOHIgDnndB1fKQRKaZFOcA==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];