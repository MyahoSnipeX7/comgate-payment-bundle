<?php


namespace Mysho\ComgateBundle\Service;

use GuzzleHttp\Client;
use Mysho\ComgateBundle\Helper\CreatePaymentResponse;
use Mysho\ComgateBundle\Helper\RequestInterface;
use Mysho\ComgateBundle\Helper\StatusPaymentResponse;

class ComgateConnector
{
    private $params;

    /**
     * @var Client
     */
    private $client;

    public function __construct(array $params)
    {
        $this->params = $params;
        $this->client = new Client([
            'base_uri' => 'https://payments.comgate.cz/v1.0/'
        ]);
    }

    /**
     * @param Client $client
     * @return ComgateConnector
     */
    public function setClient(Client $client): ComgateConnector
    {
        $this->client = $client;
        return $this;
    }


    /**
     * @param RequestInterface $request
     * @param StatusPaymentResponse|CreatePaymentResponse $response
     */
    public function send(RequestInterface $request) : StatusPaymentResponse|CreatePaymentResponse
    {
        $baseParams = [
            'merchant' => $this->params["merchant"],
            'test' => $this->params["test"] ? 'true' : 'false',
            'secret' => $this->params["secret"]
        ];

        if ($request->isPost()) {
            $response = $this->client->request('POST', $request->getEndPoint(), [
                'form_params' => $baseParams + $request->getData()
            ]);
        } else {
            $response = $this->client->request('GET', $request->getEndPoint(), [
                'query' => $baseParams + $request->getData()
            ]);
        }

        $body = (string)$response->getBody();
        parse_str($body, $data);
        $responseClass = $request->getResponseClass();

        return new $responseClass($data);
    }

    /**
     * @param bool $test
     * @return void
     */
    public function setTest(bool $test) 
    {
      $this->params['test'] = $test;
    }

    /**
     * @param string $secret
     * @return void
     */
    public function setSecret(string $secret) 
    {
      $this->params['secret'] = $secret;
    }

    /**
     * @param string $merchant
     * @return void
     */
    public function setMerchant(string $merchant) 
    {
      $this->params['secret'] = $merchant;
    }

}