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
        $response = parent::renderResource($view, $parameters, $statusCode);

        $jsonDecoded = json_decode($response->getContent());
        $jsonEncoded = json_encode($jsonDecoded);

        return $response->setContent($jsonEncoded);
    }

}
