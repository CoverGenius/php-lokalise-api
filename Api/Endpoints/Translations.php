<?php

namespace Lokalise\Endpoints;

use \Lokalise\LokaliseApiResponse;
use \Lokalise\Exceptions\LokaliseApiException;
use \Lokalise\Exceptions\LokaliseResponseException;

/**
 * Class Translations
 * @package Lokalise\Endpoints]
 * @link https://app.lokalise.com/api2docs/curl/#resource-translations
 */
class Translations extends Endpoint implements EndpointInterface
{

    /**
     * @link https://app.lokalise.com/api2docs/curl/#transition-list-all-translations-get
     *
     * @param string $projectId
     * @param array $queryParams
     *
     * @return LokaliseApiResponse
     *
     * @throws LokaliseApiException
     * @throws LokaliseResponseException
     */
    public function list($projectId, $queryParams = [])
    {
        return $this->request(
            'GET',
            "projects/$projectId/translations",
            $queryParams
        );
    }

    /**
     * @link https://app.lokalise.com/api2docs/curl/#transition-list-all-translations-get
     *
     * @param string $projectId
     *
     * @return LokaliseApiResponse
     *
     * @throws LokaliseApiException
     * @throws LokaliseResponseException
     */
    public function fetchAll($projectId)
    {
        return $this->requestAll(
            'GET',
            "projects/$projectId/translations",
            [],
            [],
            'translations'
        );
    }

    /**
     * @link https://app.lokalise.com/api2docs/curl/#transition-retrieve-a-translation-get
     *
     * @param string $projectId
     * @param int $translationId
     *
     * @return LokaliseApiResponse
     *
     * @throws LokaliseApiException
     * @throws LokaliseResponseException
     */
    public function retrieve($projectId, $translationId)
    {
        return $this->request(
            'GET',
            "projects/$projectId/translations/$translationId"
        );
    }

    /**
     * @link https://app.lokalise.com/api2docs/curl/#transition-update-a-translation-put
     *
     * @param string $projectId
     * @param int $translationId
     * @param array $body
     *
     * @return LokaliseApiResponse
     *
     * @throws LokaliseApiException
     * @throws LokaliseResponseException
     */
    public function update($projectId, $translationId, $body)
    {
        return $this->request(
            'PUT',
            "projects/$projectId/translations/$translationId",
            [],
            $body
        );
    }
}
