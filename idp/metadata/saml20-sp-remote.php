<?php


$metadata['https://host.docker.internal:5443/public/api/metadata'] = [
    'AssertionConsumerService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://host.docker.internal:5443/public/api/acs',
            'index' => 1,
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://host.docker.internal:5443/public/api/sls',
        ],
    ],
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified',
    'validate.authnrequest' => false,
    'saml20.sign.assertion' => false,
    'url' => 'https://host.docker.internal:5443/public/api/metadata', // URL do metadado do SP
];
