<?php

namespace Brightmarch\RestEasy\Controller\Mixin;

trait HttpJsonMiddlewareMixin
{

    /**
     * This middleware method takes content from a Symfony\Component\HttpFoundation\Response object
     * and compresses the JSON by decoding and then encoding it.
     *
     * @param string $view
     * @param array $parameters
     * @param integer $statusCode
     * @return Symfony\Component\HttpFoundation\Response
     */
    public function renderResource($view, array $parameters=[], $statusCode=200)
    {
        $jsonHeader = 'application/json';
        $response = parent::renderResource($view, $parameters, $statusCode);

        // Only do this if they are actually sending JSON.
        if (false !== stripos($response->headers->get('content-type'), $jsonHeader)) {
            $jsonDecoded = json_decode($response->getContent());
            $jsonEncoded = json_encode($jsonDecoded, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

            return $response->setContent($jsonEncoded);
        } else {
            return $response;
        }
    }

}
