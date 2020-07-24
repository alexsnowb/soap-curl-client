<?php

namespace App\Request;

/**
 * This class stands for InsuredPersonParms
 *
 */
class InsuredPersonParms
{
    /**
     * The birthDate
     *
     * @var string
     */
    public $birthDate;
    /**
     * The cancellationAmount
     *
     * @var float
     */
    public $cancellationAmount;
    /**
     * The currency
     *
     * @var string
     */
    public $currency;
    /**
     * The name
     *
     * @var string
     */
    public $name;
    /**
     * The personAdd
     *
     * @var PersonAddParms
     */
    public $personAdd;
    /**
     * The sex
     *
     * @var string
     */
    public $sex;
    /**
     * The supplementaries
     *
     * @var Supplementaries
     */
    //public $supplementaries;
    /**
     * The surname
     *
     * @var string
     */
    public $surname;
    /**
     * The tariff
     *
     * @var string
     */
    public $tariff;
    /**
     * Constructor method for InsuredPersonParms
     * @uses InsuredPersonParms::setBirthDate()
     * @uses InsuredPersonParms::setCancellationAmount()
     * @uses InsuredPersonParms::setCurrency()
     * @uses InsuredPersonParms::setItemDescription()
     * @uses InsuredPersonParms::setItemId()
     * @uses InsuredPersonParms::setItemName()
     * @uses InsuredPersonParms::setName()
     * @uses InsuredPersonParms::setPersonAdd()
     * @uses InsuredPersonParms::setPin()
     * @uses InsuredPersonParms::setSex()
     * @uses InsuredPersonParms::setSupplementaries()
     * @uses InsuredPersonParms::setSurname()
     * @uses InsuredPersonParms::setTariff()
     * @param string $birthDate
     * @param float $cancellationAmount
     * @param string $currency
     * @param string $name
     * @param PersonAddParms $personAdd
     * @param string $sex
     * @param string $surname
     * @param string $tariff
     */
    public function __construct($birthDate = null, $cancellationAmount = null, $currency = null, $name = null, PersonAddParms $personAdd = null, $sex = null,  $surname = null, $tariff = null)
    {
        $this
            ->setBirthDate($birthDate)
            ->setCancellationAmount($cancellationAmount)
            ->setCurrency($currency)
            ->setName($name)
            ->setPersonAdd($personAdd)
            ->setSex($sex)
            ->setSurname($surname)
            ->setTariff($tariff);
    }
    /**
     * Get birthDate value
     * @return string|null
     */
    public function getBirthDate()
    {
        return isset($this->birthDate) ? $this->birthDate : null;
    }

    /**
     * Set birthDate value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $birthDate
     * @return InsuredPersonParms
     */
    public function setBirthDate($birthDate = null)
    {
        // validation for constraint: string
        if (!is_null($birthDate) && !is_string($birthDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthDate, true), gettype($birthDate)), __LINE__);
        }
        if (is_null($birthDate) || (is_array($birthDate) && empty($birthDate))) {
            unset($this->birthDate);
        } else {
            $this->birthDate = $birthDate;
        }
        return $this;
    }
    /**
     * Get cancellationAmount value
     * @return float|null
     */
    public function getCancellationAmount()
    {
        return isset($this->cancellationAmount) ? $this->cancellationAmount : null;
    }


    /**
     * Set cancellationAmount value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param float $cancellationAmount
     * @return InsuredPersonParms
     */
    public function setCancellationAmount($cancellationAmount = null)
    {
        // validation for constraint: float
        if (!is_null($cancellationAmount) && !(is_float($cancellationAmount) || is_numeric($cancellationAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($cancellationAmount, true), gettype($cancellationAmount)), __LINE__);
        }
        if (is_null($cancellationAmount) || (is_array($cancellationAmount) && empty($cancellationAmount))) {
            unset($this->cancellationAmount);
        } else {
            $this->cancellationAmount = $cancellationAmount;
        }
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return isset($this->currency) ? $this->currency : null;
    }


    /**
     * Set currency value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $currency
     * @return InsuredPersonParms
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        if (is_null($currency) || (is_array($currency) && empty($currency))) {
            unset($this->currency);
        } else {
            $this->currency = $currency;
        }
        return $this;
    }
    /**
     * Get itemDescription value
     * @return string|null
     */
    public function getItemDescription()
    {
        return isset($this->itemDescription) ? $this->itemDescription : null;
    }


    /**
     * Set itemDescription value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $itemDescription
     * @return InsuredPersonParms
     */
    public function setItemDescription($itemDescription = null)
    {
        // validation for constraint: string
        if (!is_null($itemDescription) && !is_string($itemDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemDescription, true), gettype($itemDescription)), __LINE__);
        }
        if (is_null($itemDescription) || (is_array($itemDescription) && empty($itemDescription))) {
            unset($this->itemDescription);
        } else {
            $this->itemDescription = $itemDescription;
        }
        return $this;
    }
    /**
     * Get itemId value
     * @return string|null
     */
    public function getItemId()
    {
        return isset($this->itemId) ? $this->itemId : null;
    }


    /**
     * Set itemId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $itemId
     * @return InsuredPersonParms
     */
    public function setItemId($itemId = null)
    {
        // validation for constraint: string
        if (!is_null($itemId) && !is_string($itemId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        if (is_null($itemId) || (is_array($itemId) && empty($itemId))) {
            unset($this->itemId);
        } else {
            $this->itemId = $itemId;
        }
        return $this;
    }
    /**
     * Get itemName value
     * @return string|null
     */
    public function getItemName()
    {
        return isset($this->itemName) ? $this->itemName : null;
    }


    /**
     * Set itemName value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $itemName
     * @return InsuredPersonParms
     */
    public function setItemName($itemName = null)
    {
        // validation for constraint: string
        if (!is_null($itemName) && !is_string($itemName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemName, true), gettype($itemName)), __LINE__);
        }
        if (is_null($itemName) || (is_array($itemName) && empty($itemName))) {
            unset($this->itemName);
        } else {
            $this->itemName = $itemName;
        }
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : null;
    }


    /**
     * Set name value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $name
     * @return InsuredPersonParms
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->name);
        } else {
            $this->name = $name;
        }
        return $this;
    }
    /**
     * Get personAdd value
     * @return PersonAddParms|null
     */
    public function getPersonAdd()
    {
        return isset($this->personAdd) ? $this->personAdd : null;
    }

    /**
     * Set personAdd value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param PersonAddParms $personAdd
     * @return InsuredPersonParms
     */
    public function setPersonAdd(PersonAddParms $personAdd = null)
    {
        if (is_null($personAdd) || (is_array($personAdd) && empty($personAdd))) {
            unset($this->personAdd);
        } else {
            $this->personAdd = $personAdd;
        }
        return $this;
    }
    /**
     * Get pin value
     * @return string|null
     */
    public function getPin()
    {
        return isset($this->pin) ? $this->pin : null;
    }


    /**
     * Set pin value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $pin
     * @return InsuredPersonParms
     */
    public function setPin($pin = null)
    {
        // validation for constraint: string
        if (!is_null($pin) && !is_string($pin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pin, true), gettype($pin)), __LINE__);
        }
        if (is_null($pin) || (is_array($pin) && empty($pin))) {
            unset($this->pin);
        } else {
            $this->pin = $pin;
        }
        return $this;
    }
    /**
     * Get sex value
     * @return string|null
     */
    public function getSex()
    {
        return isset($this->sex) ? $this->sex : null;
    }


    /**
     * Set sex value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $sex
     * @return InsuredPersonParms
     */
    public function setSex($sex = null)
    {
        // validation for constraint: string
        if (!is_null($sex) && !is_string($sex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sex, true), gettype($sex)), __LINE__);
        }
        if (is_null($sex) || (is_array($sex) && empty($sex))) {
            unset($this->sex);
        } else {
            $this->sex = $sex;
        }
        return $this;
    }
    /**
     * Get supplementaries value
     * @return Supplementaries|null
     */
    public function getSupplementaries()
    {
        return isset($this->supplementaries) ? $this->supplementaries : null;
    }

    /**
     * Set supplementaries value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param Supplementaries $supplementaries
     * @return InsuredPersonParms
     */
    public function setSupplementaries(Supplementaries $supplementaries = null)
    {
        if (is_null($supplementaries) || (is_array($supplementaries) && empty($supplementaries))) {
            unset($this->supplementaries);
        } else {
            $this->supplementaries = $supplementaries;
        }
        return $this;
    }
    /**
     * Get surname value
     * @return string|null
     */
    public function getSurname()
    {
        return isset($this->surname) ? $this->surname : null;
    }


    /**
     * Set surname value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $surname
     * @return InsuredPersonParms
     */
    public function setSurname($surname = null)
    {
        // validation for constraint: string
        if (!is_null($surname) && !is_string($surname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($surname, true), gettype($surname)), __LINE__);
        }
        if (is_null($surname) || (is_array($surname) && empty($surname))) {
            unset($this->surname);
        } else {
            $this->surname = $surname;
        }
        return $this;
    }
    /**
     * Get tariff value
     * @return string|null
     */
    public function getTariff()
    {
        return isset($this->tariff) ? $this->tariff : null;
    }

    /**
     * Set tariff value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $tariff
     * @return InsuredPersonParms
     */
    public function setTariff($tariff = null)
    {
        // validation for constraint: string
        if (!is_null($tariff) && !is_string($tariff)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tariff, true), gettype($tariff)), __LINE__);
        }
        if (is_null($tariff) || (is_array($tariff) && empty($tariff))) {
            unset($this->tariff);
        } else {
            $this->tariff = $tariff;
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
