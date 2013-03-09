<?php

namespace Brightmarch\RestEasy\Controller\Mixin;

trait HttpAuthorizationMixin
{

    /** @var array */
    private $authorizationHeader = [];

    /** @var string */
    private $authorizationHeaderRaw = '';

    private function parseAuthorizationHeader()
    {
        // Parses the Authorization header for authenticating the current request.
        $this->findAuthorizationHeader()
            ->splitAuthorizationHeader();

        return true;
    }

    private function findAuthorizationHeader()
    {
        // Grab the raw Authorization header to find the username and password.
        $this->authorizationHeaderRaw = $this->getRequest()
            ->headers
            ->get('authorization');

        // Strip off the Basic: prefix.
        $this->authorizationHeaderRaw = substr($this->authorizationHeaderRaw, 6);

        return $this;
    }

    private function splitAuthorizationHeader()
    {
        // Split the actual Authorization header into the username and apiKey parts.
        $username = $apiKey = '';

        // Authorization headers are base64 encoded.
        $authorizationHeader = explode(':', base64_decode($this->authorizationHeaderRaw));
        if (2 == count($authorizationHeader)) {
            $username = strtolower($authorizationHeader[0]);
            $apiKey = $authorizationHeader[1];
        }

        $this->authorizationHeader = ['username' => $username, 'apiKey' => $apiKey];

        return $this;
    }

    private function getAuthorizationHeaderKey($key)
    {
        // Two valid keys of the authorization header array are 'username' and 'apiKey'.
        $authorizationHeaderValue = null;

        if (array_key_exists($key, $this->authorizationHeader)) {
            $authorizationHeaderValue = $this->authorizationHeader[$key];
        }

        return $authorizationHeaderValue;
    }

}
