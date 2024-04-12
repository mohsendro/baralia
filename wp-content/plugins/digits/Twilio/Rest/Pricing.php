<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest;

use Twilio\Domain;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Rest\Pricing\V1;
use Twilio\Rest\Pricing\V1\MessagingList;
use Twilio\Rest\Pricing\V1\PhoneNumberList;
use Twilio\Rest\Pricing\V2;
use Twilio\Rest\Pricing\V2\VoiceList;
use Twilio\Version;

/**
 * @property V1 v1
 * @property V2 v2
 * @property MessagingList messaging
 * @property PhoneNumberList phoneNumbers
 * @property VoiceList voice
 */
class Pricing extends Domain {
    protected $_v1 = null;
    protected $_v2 = null;

    /**
     * Construct the Pricing Domain
     * 
     * @param Client $client Twilio\Rest\Client to communicate with
     *                                    Twilio
     * @return Pricing Domain for Pricing
     */
    public function __construct(Client $client) {
        parent::__construct($client);

        $this->baseUrl = 'https://pricing.twilio.com';
    }

    /**
     * Magic getter to lazy load version
     *
     * @param string $name Version to return
     *
     * @return Version The requested version
     * @throws TwilioException For unknown versions
     */
    public function __get($name) {
        $method = 'get' . ucfirst($name);
        if (method_exists($this, $method)) {
            return $this->$method();
        }

        throw new TwilioException('Unknown version ' . $name);
    }

    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     *
     * @return InstanceContext The requested resource context
     * @throws TwilioException For unknown resource
     */
    public function __call($name, $arguments) {
        $method = 'context' . ucfirst($name);
        if (method_exists($this, $method)) {
            return call_user_func_array(array($this, $method), $arguments);
        }

        throw new TwilioException('Unknown context ' . $name);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Pricing]';
    }

    /**
     * @return V1 Version v1 of pricing
     */
    protected function getV1() {
        if (!$this->_v1) {
            $this->_v1 = new V1($this);
        }
        return $this->_v1;
    }

    /**
     * @return V2 Version v2 of pricing
     */
    protected function getV2() {
        if (!$this->_v2) {
            $this->_v2 = new V2($this);
        }
        return $this->_v2;
    }

    /**
     * @return MessagingList
     */
    protected function getMessaging() {
        return $this->v1->messaging;
    }

    /**
     * @return PhoneNumberList
     */
    protected function getPhoneNumbers() {
        return $this->v1->phoneNumbers;
    }

    /**
     * @return VoiceList
     */
    protected function getVoice() {
        return $this->v2->voice;
    }
}