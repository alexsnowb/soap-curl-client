<?php

namespace App\Request;

/**
 * This class stands for PersonAddParms
 */
class PersonAddParms
{

    /**
     * The address
     *
     * @var string
     */
    public $address;

    /**
     * The passport
     *
     * @var Passport
     */
    public $passport;

    /**
     * Constructor method for PersonAddParms
     *
     * @uses PersonAddParms::setAddress()
     * @uses PersonAddParms::setPassport()
     * @param string $address
     * @param Passport $passport
     */
    public function __construct($address = null, Passport $passport = null)
    {
        $this
            ->setAddress($address)
            ->setPassport($passport);
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
     * @return PersonAddParms
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
     * Get firstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return isset($this->firstName) ? $this->firstName : null;
    }
    /**
     * Set firstName value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $firstName
     * @return PersonAddParms
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        if (is_null($firstName) || (is_array($firstName) && empty($firstName))) {
            unset($this->firstName);
        } else {
            $this->firstName = $firstName;
        }
        return $this;
    }
    /**
     * Get middleName value
     * @return string|null
     */
    public function getMiddleName()
    {
        return isset($this->middleName) ? $this->middleName : null;
    }
    /**
     * Set middleName value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $middleName
     * @return PersonAddParms
     */
    public function setMiddleName($middleName = null)
    {
        // validation for constraint: string
        if (!is_null($middleName) && !is_string($middleName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($middleName, true), gettype($middleName)), __LINE__);
        }
        if (is_null($middleName) || (is_array($middleName) && empty($middleName))) {
            unset($this->middleName);
        } else {
            $this->middleName = $middleName;
        }
        return $this;
    }
    /**
     * Get birthPlace value
     * @return string|null
     */
    public function getBirthPlace()
    {
        return isset($this->birthPlace) ? $this->birthPlace : null;
    }
    /**
     * Set birthPlace value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $birthPlace
     * @return PersonAddParms
     */
    public function setBirthPlace($birthPlace = null)
    {
        // validation for constraint: string
        if (!is_null($birthPlace) && !is_string($birthPlace)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthPlace, true), gettype($birthPlace)), __LINE__);
        }
        if (is_null($birthPlace) || (is_array($birthPlace) && empty($birthPlace))) {
            unset($this->birthPlace);
        } else {
            $this->birthPlace = $birthPlace;
        }
        return $this;
    }
    /**
     * Get taxId value
     * @return string|null
     */
    public function getTaxId()
    {
        return isset($this->taxId) ? $this->taxId : null;
    }
    /**
     * Set taxId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $taxId
     * @return PersonAddParms
     */
    public function setTaxId($taxId = null)
    {
        // validation for constraint: string
        if (!is_null($taxId) && !is_string($taxId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxId, true), gettype($taxId)), __LINE__);
        }
        if (is_null($taxId) || (is_array($taxId) && empty($taxId))) {
            unset($this->taxId);
        } else {
            $this->taxId = $taxId;
        }
        return $this;
    }
    /**
     * Get insuranceId value
     * @return string|null
     */
    public function getInsuranceId()
    {
        return isset($this->insuranceId) ? $this->insuranceId : null;
    }

    /**
     * Set insuranceId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $insuranceId
     * @return PersonAddParms
     */
    public function setInsuranceId($insuranceId = null)
    {
        // validation for constraint: string
        if (!is_null($insuranceId) && !is_string($insuranceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insuranceId, true), gettype($insuranceId)), __LINE__);
        }
        if (is_null($insuranceId) || (is_array($insuranceId) && empty($insuranceId))) {
            unset($this->insuranceId);
        } else {
            $this->insuranceId = $insuranceId;
        }
        return $this;
    }
    /**
     * Get address value
     * @return string|null
     */
    public function getAddress()
    {
        return isset($this->address) ? $this->address : null;
    }

    /**
     * Set address value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $address
     * @return PersonAddParms
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->address);
        } else {
            $this->address = $address;
        }
        return $this;
    }
    /**
     * Get citizenship value
     * @return string|null
     */
    public function getCitizenship()
    {
        return isset($this->citizenship) ? $this->citizenship : null;
    }

    /**
     * Set citizenship value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $citizenship
     * @return PersonAddParms
     */
    public function setCitizenship($citizenship = null)
    {
        // validation for constraint: string
        if (!is_null($citizenship) && !is_string($citizenship)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($citizenship, true), gettype($citizenship)), __LINE__);
        }
        if (is_null($citizenship) || (is_array($citizenship) && empty($citizenship))) {
            unset($this->citizenship);
        } else {
            $this->citizenship = $citizenship;
        }
        return $this;
    }
    /**
     * Get passport value
     * @return Passport|null
     */
    public function getPassport()
    {
        return isset($this->passport) ? $this->passport : null;
    }

    /**
     * Set passport value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param Passport $passport
     * @return PersonAddParms
     */
    public function setPassport(Passport $passport = null)
    {
        if (is_null($passport) || (is_array($passport) && empty($passport))) {
            unset($this->passport);
        } else {
            $this->passport = $passport;
        }
        return $this;
    }
    /**
     * Get otherDocument value
     * @return OtherDocument|null
     */
    public function getOtherDocument()
    {
        return isset($this->otherDocument) ? $this->otherDocument : null;
    }

    /**
     * Set otherDocument value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param OtherDocument $otherDocument
     * @return PersonAddParms
     */
    public function setOtherDocument(OtherDocument $otherDocument = null)
    {
        if (is_null($otherDocument) || (is_array($otherDocument) && empty($otherDocument))) {
            unset($this->otherDocument);
        } else {
            $this->otherDocument = $otherDocument;
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
