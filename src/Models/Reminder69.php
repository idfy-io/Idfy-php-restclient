<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;

/**
 *Here you can setup email/sms notifications reminding the signers that they have unsigned documents.
 */
class Reminder69 implements JsonSerializable
{
    /**
     * Define a chron expression to control the interval of the reminders (Use utc time). We use quartz
     * cron expressions, read more about it here: http://www.quartz-scheduler.org/documentation/quartz-2.
     * x/tutorials/crontrigger.html.
     * @required
     * @var string $chronSchedule public property
     */
    public $chronSchedule;

    /**
     * Set the maximum number of reminders to be sent for each signer
     * @var integer|null $maxReminders public property
     */
    public $maxReminders;

    /**
     * Define your own email texts (Our default texts can be used by leaving this blank)
     * @var \IdfyLib\Models\Email[]|null $email public property
     */
    public $email;

    /**
     * Define your own sms texts (Our default texts can be used by leaving this blank)
     * @var \IdfyLib\Models\SMS[]|null $sms public property
     */
    public $sms;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $chronSchedule Initialization value for $this->chronSchedule
     * @param integer $maxReminders  Initialization value for $this->maxReminders
     * @param array   $email         Initialization value for $this->email
     * @param array   $sms           Initialization value for $this->sms
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->chronSchedule = func_get_arg(0);
            $this->maxReminders  = func_get_arg(1);
            $this->email         = func_get_arg(2);
            $this->sms           = func_get_arg(3);
        }
    }

    
    /**
     * Add an additional property to this model.
     * @param string $name  Name of property
     * @param mixed  $value Value of property
     */
    public function addAdditionalProperty($name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['chronSchedule'] = $this->chronSchedule;
        $json['maxReminders']  = $this->maxReminders;
        $json['email']         = $this->email;
        $json['sms']           = $this->sms;

        return array_merge($json, $this->additionalProperties);
    }
}
