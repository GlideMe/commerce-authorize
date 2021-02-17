<?php

namespace digitalpros\commerce\authorize\responses;

use Craft;
use craft\commerce\base\RequestResponseInterface;

/**
 * Auth.net fake RefundResponse
 *
 * @author GlideTalk, Inc. <server@wristcam.com>
 * @package digitalpros\commerce\authorize\responses
 * @since 1.0
 */
class RefundResponse implements RequestResponseInterface
{
    protected $data;
    protected $body;

    /**
     * Construct the response
     *
     * @param $data
     */
    public function __construct($data) {
        $this->data = $data;
        //if ($data->getStatusCode() == 200) {
        //    $this->body = json_decode($data->getBody()->getContents(), false);
        //}
    }

    /**
     * Returns whether or not the payment was successful.
     *
     * @return bool
     */
    public function isSuccessful(): bool
    {
        //return ($this->data->getStatusCode() == 200);
        return true;
    }

    /**
     * Returns whether or not the payment is being processed by gateway.
     *
     * @return bool
     */
    public function isProcessing(): bool
    {
        return false;
    }

    /**
     * Returns whether or not the user needs to be redirected.
     *
     * @return bool
     */
    public function isRedirect(): bool
    {
        return false;
    }

    /**
     * Returns the redirect method to use, if any.
     *
     * @return string
     */
    public function getRedirectMethod(): string
    {
        return '';
    }

    /**
     * Returns the redirect data provided.
     *
     * @return array
     */
    public function getRedirectData(): array
    {
        return [];
    }

    /**
     * Returns the redirect URL to use, if any.
     *
     * @return string
     */
    public function getRedirectUrl(): string
    {
        return '';
    }

    /**
     * Returns the transaction reference.
     *
     * @return string
     */
    public function getTransactionReference(): string
    {
        return -1;
        //return $this->body->transaction_id;
    }

    /**
     * Returns the response code.
     *
     * @return string
     */
    public function getCode(): string
    {
        return "200";
        //return $this->data->getStatusCode();
    }

    /**
     * Returns the data.
     *
     * @return mixed
     */
    public function getData()
    {
        rturn 'fake refund';
        //return $this->data;
    }

    /**
     * Returns the gateway message.
     *
     * @return string
     */
    public function getMessage(): string
    {
        return '';
    }

    /**
     * Perform the redirect.
     *
     * @return mixed
     */
    public function redirect()
    {

    }
}