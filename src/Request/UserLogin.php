<?php

namespace App\Request;


class UserLogin
{
    /**
     * The agentCode
     * @var string
     */
    public $agentCode;
    /**
     * The userName
     * @var string
     */
    public $userName;
    /**
     * The userPasswd
     * @var string
     */
    public $userPasswd;
    /**
     * Constructor method for userLogin
     * @uses UserLogin::setAgentCode()
     * @uses UserLogin::setUserName()
     * @uses UserLogin::setUserPasswd()
     * @param string $agentCode
     * @param string $userName
     * @param string $userPasswd
     */
    public function __construct($agentCode = null, $userName = null, $userPasswd = null)
    {
        $this
            ->setAgentCode($agentCode)
            ->setUserName($userName)
            ->setUserPasswd($userPasswd);
    }
    /**
     * Get agentCode value
     * @return string|null
     */
    public function getAgentCode()
    {
        return $this->agentCode;
    }

    /**
     * Set agentCode value
     *
     * @param  string  $agentCode
     *
     * @return UserLogin
     */
    public function setAgentCode($agentCode = null)
    {
        // validation for constraint: string
        if (!is_null($agentCode) && !is_string($agentCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agentCode, true), gettype($agentCode)), __LINE__);
        }
        $this->agentCode = $agentCode;
        return $this;
    }
    /**
     * Get userName value
     * @return string|null
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set userName value
     *
     * @param  string  $userName
     *
     * @return UserLogin
     */
    public function setUserName($userName = null)
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        $this->userName = $userName;
        return $this;
    }
    /**
     * Get userPasswd value
     * @return string|null
     */
    public function getUserPasswd()
    {
        return $this->userPasswd;
    }

    /**
     * Set userPasswd value
     *
     * @param  string  $userPasswd
     *
     * @return UserLogin
     */
    public function setUserPasswd($userPasswd = null)
    {
        // validation for constraint: string
        if (!is_null($userPasswd) && !is_string($userPasswd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userPasswd, true), gettype($userPasswd)), __LINE__);
        }
        $this->userPasswd = $userPasswd;
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
