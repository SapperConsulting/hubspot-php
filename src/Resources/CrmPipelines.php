<?php

namespace SevenShores\Hubspot\Resources;

class CrmPipelines extends Resource
{
    const CRM_PIPELINE_TYPE_TICKET = 'TICKET';
    const CRM_PIPELINE_TYPE_DEAL = 'DEAL';

    public function get(string $objectType, array $params = [])
    {
        $endpoint = "https://api.hubapi.com/crm-pipelines/v1/pipelines/{$objectType}";
        if ($params) {
            $endpoint .= '?'.http_build_query($params);
        }
        return $this->client->request('get', $endpoint);
    }
}
