<?php

return [
    'mapping' => [
        __DIR__ . '/../../AFNOR-Flow_Service-1.0.2-swagger.json' => [
            'namespace' => 'App\Generated\PdpFlowClient',
            'directory' => __DIR__ . '/../../src/Generated/PdpFlowClient',
        ],
        __DIR__ . '/../../AFNOR-Directory_Service-1.0.0-swagger.json' => [
            'namespace' => 'App\Generated\PdpDirectoryClient',
            'directory' => __DIR__ . '/../../src/Generated/PdpDirectoryClient',
        ],
    ],
];
