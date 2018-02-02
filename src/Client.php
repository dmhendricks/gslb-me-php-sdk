<?php
namespace CloudVerve\GslbMe;

class Client
{
    protected $accountEmail;
    protected $authKey;
    protected $client;
    protected $zone;
    protected $headers;
    protected $apiUrl = 'https://api.gslb.me/';

    /**
     * Client constructor. Accepts the account e-mail and password.
     *
     * @param $accountEmail
     * @param $accountPassword
     */
    public function __construct( $accountEmail, $accountPassword, $zone )
    {

        $this->accountEmail = $accountEmail;
        $this->authKey     = base64_encode( $accountEmail . ':' . $accountPassword );
        $this->zone         = $zone;
        $this->client       = new GuzzleHttp\Client();
        $this->headers      = [ 'headers' => [ 'Authorization' => 'Basic ' . $this->authKey ] ];

    }

    /**
     * Get API URL
     *
     * @return string
     */
    public function getApiUrl()
    {

      return $this->apiUrl;

    }

    /**
     * Set API URL
     *
     * @return string
     */
    public function setApiUrl( $url )
    {

      $this->apiUrl = $this->addTrailingSlash( $url );

    }

    /**
     * Add a trailing slash to a URL
     *
     * @return string
     */
    private function addTrailingSlash( $url ) {

      return trim( $url, '/' ) . '/';

    }

}
