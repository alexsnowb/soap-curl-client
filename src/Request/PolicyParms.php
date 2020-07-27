<?php


namespace App\Request;


class PolicyParms
{
    /**
     * The destination
     *
     * @var string
     */
    public $destination;
    /**
     * The insureds
     *
     * @var InsuredListParms
     */
    public $insureds;
    /**
     * The issuedOn
     *
     * @var string
     */
    public $issuedOn;
    /**
     * The lastDay
     *
     * @var string
     */
    public $lastDay;
    /**
     * The officeID
     *
     * @var string
     */
    public $officeID;
    /**
     * The organized
     *
     * @var bool
     */
    public $organized;
    /**
     * The policyHolder
     *
     * @var PolicyHolderParms
     */
    public $policyHolder;
    /**
     * The productCode
     *
     * @var string
     */
    public $productCode;
    /**
     * The regionCode
     *
     * @var string
     */
    public $regionCode;
    /**
     * The seller
     *
     * @var string
     */
    public $seller;
    /**
     * The startDay
     *
     * @var string
     */
    public $startDay;
    /**
     * The totalDays
     *
     * @var int
     */
    public $totalDays;
    /**
     * The transport
     *
     * @var string
     */
    public $transport;

    /**
     * Constructor method for PolicyParms
     *
     * @param  string  $destination
     * @param  InsuredListParms  $insureds
     * @param  string  $issuedOn
     * @param  string  $lastDay
     * @param  string  $officeID
     * @param  bool  $organized
     * @param  PolicyHolderParms  $policyHolder
     * @param  string  $productCode
     * @param  string  $regionCode
     * @param  string  $startDay
     * @param  int  $totalDays
     * @param  string  $transport
     *
     * @uses PolicyParms::setDestination()
     * @uses PolicyParms::setInsureds()
     * @uses PolicyParms::setIssuedOn()
     * @uses PolicyParms::setLastDay()
     * @uses PolicyParms::setOfficeID()
     * @uses PolicyParms::setOrganized()
     * @uses PolicyParms::setPolicyHolder()
     * @uses PolicyParms::setProductCode()
     * @uses PolicyParms::setRegionCode()
     * @uses PolicyParms::setSeller()
     * @uses PolicyParms::setStartDay()
     * @uses PolicyParms::setTotalDays()
     * @uses PolicyParms::setTransport()
     */
    public function __construct(
        $destination = null,
        InsuredListParms $insureds = null,
        $issuedOn = null,
        $lastDay = null,
        $officeID = null,
        $organized = null,
        PolicyHolderParms $policyHolder = null,
        $productCode = null,
        $regionCode = null,
        $startDay = null,
        $totalDays = null,
        $transport = null
    ) {
        $this
            ->setDestination($destination)
            ->setInsureds($insureds)
            ->setIssuedOn($issuedOn)
            ->setLastDay($lastDay)
            ->setOfficeID($officeID)
            ->setOrganized($organized)
            ->setPolicyHolder($policyHolder)
            ->setProductCode($productCode)
            ->setRegionCode($regionCode)
            ->setStartDay($startDay)
            ->setTotalDays($totalDays)
            ->setTransport($transport);
    }

    /**
     * Get destination value
     * @return string|null
     */
    public function getDestination()
    {
        return isset($this->destination) ? $this->destination : null;
    }

    /**
     * Set destination value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     *
     * @param  string  $destination
     *
     * @return PolicyParms
     * @throws \InvalidArgumentException
     */
    public function setDestination($destination = null)
    {
        // validation for constraint: string
        if ( ! is_null($destination) && ! is_string($destination)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given',
                var_export($destination, true), gettype($destination)), __LINE__);
        }
        if (is_null($destination) || (is_array($destination) && empty($destination))) {
            unset($this->destination);
        } else {
            $this->destination = $destination;
        }

        return $this;
    }

    /**
     * Get insureds value
     * @return InsuredListParms|null
     */
    public function getInsureds()
    {
        return isset($this->insureds) ? $this->insureds : null;
    }

    /**
     * Set insureds value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     *
     * @param  InsuredListParms  $insureds
     *
     * @return PolicyParms
     * @throws \InvalidArgumentException
     */
    public function setInsureds(InsuredListParms $insureds = null)
    {
        $this->insureds = $insureds;

        return $this;
    }

    /**
     * Get issuedOn value
     * @return string|null
     */
    public function getIssuedOn()
    {
        return isset($this->issuedOn) ? $this->issuedOn : null;
    }

    /**
     * Set issuedOn value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     *
     * @param  string  $issuedOn
     *
     * @return PolicyParms
     * @throws \InvalidArgumentException
     */
    public function setIssuedOn($issuedOn = null)
    {
        // validation for constraint: string
        if ( ! is_null($issuedOn) && ! is_string($issuedOn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given',
                var_export($issuedOn, true), gettype($issuedOn)), __LINE__);
        }
        if (is_null($issuedOn) || (is_array($issuedOn) && empty($issuedOn))) {
            unset($this->issuedOn);
        } else {
            $this->issuedOn = $issuedOn;
        }

        return $this;
    }

    /**
     * Get lastDay value
     * @return string|null
     */
    public function getLastDay()
    {
        return isset($this->lastDay) ? $this->lastDay : null;
    }

    /**
     * Set lastDay value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     *
     * @param  string  $lastDay
     *
     * @return PolicyParms
     * @throws \InvalidArgumentException
     */
    public function setLastDay($lastDay = null)
    {
        // validation for constraint: string
        if ( ! is_null($lastDay) && ! is_string($lastDay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given',
                var_export($lastDay, true), gettype($lastDay)), __LINE__);
        }
        if (is_null($lastDay) || (is_array($lastDay) && empty($lastDay))) {
            unset($this->lastDay);
        } else {
            $this->lastDay = $lastDay;
        }

        return $this;
    }

    /**
     * Get officeID value
     * @return string|null
     */
    public function getOfficeID()
    {
        return isset($this->officeID) ? $this->officeID : null;
    }

    /**
     * Set officeID value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     *
     * @param  string  $officeID
     *
     * @return PolicyParms
     * @throws \InvalidArgumentException
     */
    public function setOfficeID($officeID = null)
    {
        // validation for constraint: string
        if ( ! is_null($officeID) && ! is_string($officeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given',
                var_export($officeID, true), gettype($officeID)), __LINE__);
        }
        if (is_null($officeID) || (is_array($officeID) && empty($officeID))) {
            unset($this->officeID);
        } else {
            $this->officeID = $officeID;
        }

        return $this;
    }

    /**
     * Get organized value
     * @return bool|null
     */
    public function getOrganized()
    {
        return isset($this->organized) ? $this->organized : null;
    }

    /**
     * Set organized value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     *
     * @param  bool  $organized
     *
     * @return PolicyParms
     * @throws \InvalidArgumentException
     */
    public function setOrganized($organized = null)
    {
        // validation for constraint: boolean
        if ( ! is_null($organized) && ! is_bool($organized)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given',
                var_export($organized, true), gettype($organized)), __LINE__);
        }
        if (is_null($organized) || (is_array($organized) && empty($organized))) {
            unset($this->organized);
        } else {
            $this->organized = $organized;
        }

        return $this;
    }

    /**
     * Get policyHolder value
     * @return PolicyHolderParms|null
     */
    public function getPolicyHolder()
    {
        return isset($this->policyHolder) ? $this->policyHolder : null;
    }

    /**
     * Set policyHolder value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     *
     * @param  PolicyHolderParms  $policyHolder
     *
     * @return PolicyParms
     * @throws \InvalidArgumentException
     */
    public function setPolicyHolder(PolicyHolderParms $policyHolder = null)
    {
        if (is_null($policyHolder) || (is_array($policyHolder) && empty($policyHolder))) {
            unset($this->policyHolder);
        } else {
            $this->policyHolder = $policyHolder;
        }

        return $this;
    }

    /**
     * Get productCode value
     * @return string|null
     */
    public function getProductCode()
    {
        return isset($this->productCode) ? $this->productCode : null;
    }

    /**
     * Set productCode value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     *
     * @param  string  $productCode
     *
     * @return PolicyParms
     * @throws \InvalidArgumentException
     */
    public function setProductCode($productCode = null)
    {
        // validation for constraint: string
        if ( ! is_null($productCode) && ! is_string($productCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given',
                var_export($productCode, true), gettype($productCode)), __LINE__);
        }
        if (is_null($productCode) || (is_array($productCode) && empty($productCode))) {
            unset($this->productCode);
        } else {
            $this->productCode = $productCode;
        }

        return $this;
    }

    /**
     * Get regionCode value
     * @return string|null
     */
    public function getRegionCode()
    {
        return isset($this->regionCode) ? $this->regionCode : null;
    }

    /**
     * Set regionCode value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     *
     * @param  string  $regionCode
     *
     * @return PolicyParms
     * @throws \InvalidArgumentException
     */
    public function setRegionCode($regionCode = null)
    {
        // validation for constraint: string
        if ( ! is_null($regionCode) && ! is_string($regionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given',
                var_export($regionCode, true), gettype($regionCode)), __LINE__);
        }
        if (is_null($regionCode) || (is_array($regionCode) && empty($regionCode))) {
            unset($this->regionCode);
        } else {
            $this->regionCode = $regionCode;
        }

        return $this;
    }

    /**
     * Get seller value
     * @return string|null
     */
    public function getSeller()
    {
        return isset($this->seller) ? $this->seller : null;
    }

    /**
     * Set seller value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     *
     * @param  string  $seller
     *
     * @return PolicyParms
     * @throws \InvalidArgumentException
     */
    public function setSeller($seller = null)
    {
        // validation for constraint: string
        if ( ! is_null($seller) && ! is_string($seller)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given',
                var_export($seller, true), gettype($seller)), __LINE__);
        }
        if (is_null($seller) || (is_array($seller) && empty($seller))) {
            unset($this->seller);
        } else {
            $this->seller = $seller;
        }

        return $this;
    }

    /**
     * Get startDay value
     * @return string|null
     */
    public function getStartDay()
    {
        return isset($this->startDay) ? $this->startDay : null;
    }

    /**
     * Set startDay value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     *
     * @param  string  $startDay
     *
     * @return PolicyParms
     * @throws \InvalidArgumentException
     */
    public function setStartDay($startDay = null)
    {
        // validation for constraint: string
        if ( ! is_null($startDay) && ! is_string($startDay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given',
                var_export($startDay, true), gettype($startDay)), __LINE__);
        }
        if (is_null($startDay) || (is_array($startDay) && empty($startDay))) {
            unset($this->startDay);
        } else {
            $this->startDay = $startDay;
        }

        return $this;
    }

    /**
     * Get totalDays value
     * @return int|null
     */
    public function getTotalDays()
    {
        return isset($this->totalDays) ? $this->totalDays : null;
    }

    /**
     * Set totalDays value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     *
     * @param  int  $totalDays
     *
     * @return PolicyParms
     * @throws \InvalidArgumentException
     */
    public function setTotalDays($totalDays = null)
    {
        // validation for constraint: int
        if ( ! is_null($totalDays) && ! (is_int($totalDays) || ctype_digit($totalDays))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given',
                var_export($totalDays, true), gettype($totalDays)), __LINE__);
        }
        if (is_null($totalDays) || (is_array($totalDays) && empty($totalDays))) {
            unset($this->totalDays);
        } else {
            $this->totalDays = $totalDays;
        }

        return $this;
    }

    /**
     * Get transport value
     * @return string|null
     */
    public function getTransport()
    {
        return isset($this->transport) ? $this->transport : null;
    }

    /**
     * Set transport value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     *
     * @param  string  $transport
     *
     * @return PolicyParms
     * @throws \InvalidArgumentException
     */
    public function setTransport($transport = null)
    {
        // validation for constraint: string
        if ( ! is_null($transport) && ! is_string($transport)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given',
                var_export($transport, true), gettype($transport)), __LINE__);
        }
        if (is_null($transport) || (is_array($transport) && empty($transport))) {
            unset($this->transport);
        } else {
            $this->transport = $transport;
        }

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
