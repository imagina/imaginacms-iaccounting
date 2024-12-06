<?php

namespace Modules\Iaccounting\Services;

use Mockery\CountValidator\Exception;

class WebhookService
{
  public function dispatchWebhook($body, $extraData = [])
  {
    $response = null;
    $code = 500;
    try {

      $endpoint = $extraData['url'] ?? setting("isite::n8nBaseUrl", null, false);
      $endpoint .= $extraData['extra_url'] ?? "";

      if ($endpoint) {
        $client = new \GuzzleHttp\Client();

        //Response of hook
        $responseHttp = $client->request($extraData['httpMethod'] ?? 'POST',
          $endpoint,
          [
            'body' => json_encode($body),
            'headers' => [
              'Content-Type' => 'application/json',
              'authorization' => 'test'
            ]
          ]
        );

        $response = json_decode($responseHttp->getBody()->getContents());
        $code = $responseHttp->getStatusCode();

      } else {
        throw new Exception('Url is required', 400);
      }
    } catch (\Exception $e) {
      $code = $e->getCode();
      $response = ["errors" => $e->getMessage()];
    }

    return ['response' => $response, 'code' => $code];
  }

}
