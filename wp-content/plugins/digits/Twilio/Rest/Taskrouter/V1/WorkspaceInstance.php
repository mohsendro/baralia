<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Taskrouter\V1;

use DateTime;
use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Rest\Taskrouter\V1\Workspace\ActivityList;
use Twilio\Rest\Taskrouter\V1\Workspace\EventList;
use Twilio\Rest\Taskrouter\V1\Workspace\TaskChannelList;
use Twilio\Rest\Taskrouter\V1\Workspace\TaskList;
use Twilio\Rest\Taskrouter\V1\Workspace\TaskQueueList;
use Twilio\Rest\Taskrouter\V1\Workspace\WorkerList;
use Twilio\Rest\Taskrouter\V1\Workspace\WorkflowList;
use Twilio\Rest\Taskrouter\V1\Workspace\WorkspaceCumulativeStatisticsList;
use Twilio\Rest\Taskrouter\V1\Workspace\WorkspaceRealTimeStatisticsList;
use Twilio\Rest\Taskrouter\V1\Workspace\WorkspaceStatisticsList;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string accountSid
 * @property DateTime dateCreated
 * @property DateTime dateUpdated
 * @property string defaultActivityName
 * @property string defaultActivitySid
 * @property string eventCallbackUrl
 * @property string eventsFilter
 * @property string friendlyName
 * @property boolean multiTaskEnabled
 * @property string sid
 * @property string timeoutActivityName
 * @property string timeoutActivitySid
 * @property string prioritizeQueueOrder
 * @property string url
 * @property array links
 */
class WorkspaceInstance extends InstanceResource {
    protected $_activities = null;
    protected $_events = null;
    protected $_tasks = null;
    protected $_taskQueues = null;
    protected $_workers = null;
    protected $_workflows = null;
    protected $_statistics = null;
    protected $_realTimeStatistics = null;
    protected $_cumulativeStatistics = null;
    protected $_taskChannels = null;

    /**
     * Initialize the WorkspaceInstance
     * 
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid The sid
     * @return WorkspaceInstance
     */
    public function __construct(Version $version, array $payload, $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = array(
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'defaultActivityName' => Values::array_get($payload, 'default_activity_name'),
            'defaultActivitySid' => Values::array_get($payload, 'default_activity_sid'),
            'eventCallbackUrl' => Values::array_get($payload, 'event_callback_url'),
            'eventsFilter' => Values::array_get($payload, 'events_filter'),
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'multiTaskEnabled' => Values::array_get($payload, 'multi_task_enabled'),
            'sid' => Values::array_get($payload, 'sid'),
            'timeoutActivityName' => Values::array_get($payload, 'timeout_activity_name'),
            'timeoutActivitySid' => Values::array_get($payload, 'timeout_activity_sid'),
            'prioritizeQueueOrder' => Values::array_get($payload, 'prioritize_queue_order'),
            'url' => Values::array_get($payload, 'url'),
            'links' => Values::array_get($payload, 'links'),
        );

        $this->solution = array('sid' => $sid ?: $this->properties['sid'], );
    }

    /**
     * Fetch a WorkspaceInstance
     *
     * @return WorkspaceInstance Fetched WorkspaceInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        return $this->proxy()->fetch();
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return WorkspaceContext Context for this
     *                                                     WorkspaceInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new WorkspaceContext($this->version, $this->solution['sid']);
        }

        return $this->context;
    }

    /**
     * Update the WorkspaceInstance
     * 
     * @param array|Options $options Optional Arguments
     * @return WorkspaceInstance Updated WorkspaceInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update($options = array()) {
        return $this->proxy()->update($options);
    }

    /**
     * Deletes the WorkspaceInstance
     * 
     * @return boolean True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() {
        return $this->proxy()->delete();
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get($name) {
        if (array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (property_exists($this, '_' . $name)) {
            $method = 'get' . ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Taskrouter.V1.WorkspaceInstance ' . implode(' ', $context) . ']';
    }

    /**
     * Access the activities
     *
     * @return ActivityList
     */
    protected function getActivities() {
        return $this->proxy()->activities;
    }

    /**
     * Access the events
     *
     * @return EventList
     */
    protected function getEvents() {
        return $this->proxy()->events;
    }

    /**
     * Access the tasks
     *
     * @return TaskList
     */
    protected function getTasks() {
        return $this->proxy()->tasks;
    }

    /**
     * Access the taskQueues
     *
     * @return TaskQueueList
     */
    protected function getTaskQueues() {
        return $this->proxy()->taskQueues;
    }

    /**
     * Access the workers
     *
     * @return WorkerList
     */
    protected function getWorkers() {
        return $this->proxy()->workers;
    }

    /**
     * Access the workflows
     *
     * @return WorkflowList
     */
    protected function getWorkflows() {
        return $this->proxy()->workflows;
    }

    /**
     * Access the statistics
     *
     * @return WorkspaceStatisticsList
     */
    protected function getStatistics() {
        return $this->proxy()->statistics;
    }

    /**
     * Access the realTimeStatistics
     *
     * @return WorkspaceRealTimeStatisticsList
     */
    protected function getRealTimeStatistics() {
        return $this->proxy()->realTimeStatistics;
    }

    /**
     * Access the cumulativeStatistics
     *
     * @return WorkspaceCumulativeStatisticsList
     */
    protected function getCumulativeStatistics() {
        return $this->proxy()->cumulativeStatistics;
    }

    /**
     * Access the taskChannels
     *
     * @return TaskChannelList
     */
    protected function getTaskChannels() {
        return $this->proxy()->taskChannels;
    }
}