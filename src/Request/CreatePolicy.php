<?php

namespace App\Request;



class CreatePolicy
{
    /**
     * The uniqueId
     * @var string
     */
    public $uniqueId;
    /**
     * The policyParms
     * @var PolicyParms
     */
    public $policyParms;
    /**
     * The activate
     * @var bool
     */
    public $activate;
    /**
     * The currency
     * @var string
     */
    public $currency;
    /**
     * Constructor method for createPolicy
     * @uses CreatePolicy::setUniqueId()
     * @uses CreatePolicy::setPolicyParms()
     * @uses CreatePolicy::setActivate()
     * @uses CreatePolicy::setCurrency()
     * @param string $uniqueId
     * @param PolicyParms $policyParms
     * @param bool $activate
     * @param string $currency
     */
    public function __construct($uniqueId = null, PolicyParms $policyParms = null, $activate = null, $currency = null)
    {
        $this
            ->setUniqueId($uniqueId)
            ->setPolicyParms($policyParms)
            ->setActivate($activate)
            ->setCurrency($currency);
    }
    /**
     * Get uniqueId value
     * @return string|null
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }
    /**
     * Set uniqueId value
     * @param string $uniqueId
     * @return \App\Request\CreatePolicy
     */
    public function setUniqueId($uniqueId = null)
    {
        // validation for constraint: string
        if (!is_null($uniqueId) && !is_string($uniqueId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uniqueId, true), gettype($uniqueId)), __LINE__);
        }
        $this->uniqueId = $uniqueId;
        return $this;
    }
    /**
     * Get policyParms value
     * @return PolicyParms|null
     */
    public function getPolicyParms()
    {
        return $this->policyParms;
    }
    /**
     * Set policyParms value
     *
     * @param  PolicyParms  $policyParms
     *
     * @return \App\Request\CreatePolicy
     */
    public function setPolicyParms(PolicyParms $policyParms = null)
    {
        $this->policyParms = $policyParms;
        return $this;
    }
    /**
     * Get activate value
     * @return bool|null
     */
    public function getActivate()
    {
        return $this->activate;
    }
    /**
     * Set activate value
     * @param bool $activate
     * @return \App\Request\CreatePolicy
     */
    public function setActivate($activate = null)
    {
        // validation for constraint: boolean
        if (!is_null($activate) && !is_bool($activate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($activate, true), gettype($activate)), __LINE__);
        }
        $this->activate = $activate;
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \App\Request\CreatePolicy
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        return $this;
    }

    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
