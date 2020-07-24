<?php

namespace App\Request;

/**
 * This class stands for Passport
 */
class Passport
{
    /**
     * The series
     *
     * @var string
     */
    public $series;
    /**
     * The number
     *
     * @var string
     */
    public $number;

    /**
     * The issueDate
     *
     * - minOccurs: 0
     * @var string
     */
    public $issueDate;
    /**
     * Constructor method for Passport
     * @uses Passport::setSeries()
     * @uses Passport::setNumber()
     * @uses Passport::setIssueDate()
     * @param string $series
     * @param string $number
     * @param string $issueDate
     */
    public function __construct($series = null, $number = null, $issueDate = null)
    {
        $this
            ->setSeries($series)
            ->setNumber($number)
            ->setIssueDate($issueDate);
    }
    /**
     * Get series value
     * @return string|null
     */
    public function getSeries()
    {
        return isset($this->series) ? $this->series : null;
    }
    /**
     * Set series value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $series
     * @return Passport
     */
    public function setSeries($series = null)
    {
        // validation for constraint: string
        if (!is_null($series) && !is_string($series)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($series, true), gettype($series)), __LINE__);
        }

        if (is_null($series) || (is_array($series) && empty($series))) {
            unset($this->series);
        } else {
            $this->series = $series;
        }
        return $this;
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber()
    {
        return isset($this->number) ? $this->number : null;
    }
    /**
     * Set number value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $number
     * @return Passport
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }

        if (is_null($number) || (is_array($number) && empty($number))) {
            unset($this->number);
        } else {
            $this->number = $number;
        }
        return $this;
    }
    /**
     * Get subcode value
     * @return string|null
     */
    public function getSubcode()
    {
        return isset($this->subcode) ? $this->subcode : null;
    }

    /**
     * Set subcode value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $subcode
     * @return Passport
     */
    public function setSubcode($subcode = null)
    {
        // validation for constraint: string
        if (!is_null($subcode) && !is_string($subcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subcode, true), gettype($subcode)), __LINE__);
        }

        if (is_null($subcode) || (is_array($subcode) && empty($subcode))) {
            unset($this->subcode);
        } else {
            $this->subcode = $subcode;
        }
        return $this;
    }
    /**
     * Get issuePlace value
     * @return string|null
     */
    public function getIssuePlace()
    {
        return isset($this->issuePlace) ? $this->issuePlace : null;
    }
    /**
     * Set issuePlace value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $issuePlace
     * @return Passport
     */
    public function setIssuePlace($issuePlace = null)
    {
        // validation for constraint: string
        if (!is_null($issuePlace) && !is_string($issuePlace)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issuePlace, true), gettype($issuePlace)), __LINE__);
        }

        if (is_null($issuePlace) || (is_array($issuePlace) && empty($issuePlace))) {
            unset($this->issuePlace);
        } else {
            $this->issuePlace = $issuePlace;
        }
        return $this;
    }
    /**
     * Get issueDate value
     * @return string|null
     */
    public function getIssueDate()
    {
        return isset($this->issueDate) ? $this->issueDate : null;
    }
    /**
     * Set issueDate value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $issueDate
     * @return Passport
     */
    public function setIssueDate($issueDate = null)
    {
        // validation for constraint: string
        if (!is_null($issueDate) && !is_string($issueDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issueDate, true), gettype($issueDate)), __LINE__);
        }

        if (is_null($issueDate) || (is_array($issueDate) && empty($issueDate))) {
            unset($this->issueDate);
        } else {
            $this->issueDate = $issueDate;
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
