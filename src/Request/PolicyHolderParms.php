<?php

namespace App\Request;

class PolicyHolderParms
{
    /**
     * The birthDate
     *
     * @var string
     */
    public $birthDate;
    /**
     * The city
     *
     * @var string
     */
    public $city;
    /**
     * The compName
     *
     * @var string
     */
    public $compName;
    /**
     * The country
     *
     * @var string
     */
    public $country;
    /**
     * The email
     *
     * @var string
     */
    public $email;
    /**
     * The fax
     *
     * @var string
     */
    public $fax;
    /**
     * The ico
     *
     * @var string
     */
    public $ico;
    /**
     * The name
     *
     * @var string
     */
    public $name;
    /**
     * The number
     *
     * @var string
     */
    public $number;
    /**
     * The isPerson
     *
     * @var bool
     */
    public $isPerson;
    /**
     * The personAdd
     *
     * @var PersonAddParms
     */
    public $personAdd;
    /**
     * The phone
     *
     * @var string
     */
    public $phone;
    /**
     * The pin
     *
     * @var string
     */
    public $pin;
    /**
     * The sex
     *
     * @var string
     */
    public $sex;
    /**
     * The street
     *
     * @var string
     */
    public $street;
    /**
     * The surname
     *
     * @var string
     */
    public $surname;
    /**
     * The title
     *
     * @var string
     */
    public $title;
    /**
     * The zip
     *
     * @var string
     */
    public $zip;
    /**
     * Constructor method for PolicyHolderParms
     * @uses PolicyHolderParms::setBirthDate()
     * @uses PolicyHolderParms::setCity()
     * @uses PolicyHolderParms::setCompName()
     * @uses PolicyHolderParms::setCountry()
     * @uses PolicyHolderParms::setEmail()
     * @uses PolicyHolderParms::setFax()
     * @uses PolicyHolderParms::setIco()
     * @uses PolicyHolderParms::setName()
     * @uses PolicyHolderParms::setNumber()
     * @uses PolicyHolderParms::setIsPerson()
     * @uses PolicyHolderParms::setPersonAdd()
     * @uses PolicyHolderParms::setPhone()
     * @uses PolicyHolderParms::setPin()
     * @uses PolicyHolderParms::setSex()
     * @uses PolicyHolderParms::setStreet()
     * @uses PolicyHolderParms::setSurname()
     * @uses PolicyHolderParms::setTitle()
     * @uses PolicyHolderParms::setZip()
     * @param string $birthDate
     * @param string $city
     * @param string $compName
     * @param string $country
     * @param string $email
     * @param string $fax
     * @param string $ico
     * @param string $name
     * @param string $number
     * @param bool $isPerson
     * @param PersonAddParms $personAdd
     * @param string $phone
     * @param string $pin
     * @param string $sex
     * @param string $street
     * @param string $surname
     * @param string $title
     * @param string $zip
     */
    public function __construct($birthDate = null, $name = null, $isPerson = null, PersonAddParms $personAdd = null, $phone = null, $sex = null, $surname = null)
    {
        $this
            ->setBirthDate($birthDate)
            ->setName($name)
            ->setIsPerson($isPerson)
            ->setPersonAdd($personAdd)
            ->setPhone($phone)
            ->setSex($sex)
            ->setSurname($surname)
        ;
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
     * @return PolicyHolderParms
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
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return isset($this->city) ? $this->city : null;
    }

    /**
     * Set city value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $city
     * @return PolicyHolderParms
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        if (is_null($city) || (is_array($city) && empty($city))) {
            unset($this->city);
        } else {
            $this->city = $city;
        }
        return $this;
    }
    /**
     * Get compName value
     * @return string|null
     */
    public function getCompName()
    {
        return isset($this->compName) ? $this->compName : null;
    }
    /**
     * Set compName value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $compName
     * @return PolicyHolderParms
     */
    public function setCompName($compName = null)
    {
        // validation for constraint: string
        if (!is_null($compName) && !is_string($compName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($compName, true), gettype($compName)), __LINE__);
        }
        if (is_null($compName) || (is_array($compName) && empty($compName))) {
            unset($this->compName);
        } else {
            $this->compName = $compName;
        }
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return isset($this->country) ? $this->country : null;
    }
    /**
     * Set country value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $country
     * @return PolicyHolderParms
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        if (is_null($country) || (is_array($country) && empty($country))) {
            unset($this->country);
        } else {
            $this->country = $country;
        }
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return isset($this->email) ? $this->email : null;
    }
    /**
     * Set email value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $email
     * @return PolicyHolderParms
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        if (is_null($email) || (is_array($email) && empty($email))) {
            unset($this->email);
        } else {
            $this->email = $email;
        }
        return $this;
    }
    /**
     * Get fax value
     * @return string|null
     */
    public function getFax()
    {
        return isset($this->fax) ? $this->fax : null;
    }
    /**
     * Set fax value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $fax
     * @return PolicyHolderParms
     */
    public function setFax($fax = null)
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fax, true), gettype($fax)), __LINE__);
        }
        if (is_null($fax) || (is_array($fax) && empty($fax))) {
            unset($this->fax);
        } else {
            $this->fax = $fax;
        }
        return $this;
    }
    /**
     * Get ico value
     * @return string|null
     */
    public function getIco()
    {
        return isset($this->ico) ? $this->ico : null;
    }
    /**
     * Set ico value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $ico
     * @return PolicyHolderParms
     */
    public function setIco($ico = null)
    {
        // validation for constraint: string
        if (!is_null($ico) && !is_string($ico)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ico, true), gettype($ico)), __LINE__);
        }
        if (is_null($ico) || (is_array($ico) && empty($ico))) {
            unset($this->ico);
        } else {
            $this->ico = $ico;
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
     *
     * @throws \InvalidArgumentException
     * @param string $name
     * @return PolicyHolderParms
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
     * @return PolicyHolderParms
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
     * Get isPerson value
     * @return bool|null
     */
    public function getIsPerson()
    {
        return isset($this->isPerson) ? $this->isPerson : null;
    }
    /**
     * Set isPerson value
     *
     * @throws \InvalidArgumentException
     * @param bool $isPerson
     * @return PolicyHolderParms
     */
    public function setIsPerson($isPerson = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPerson) && !is_bool($isPerson)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPerson, true), gettype($isPerson)), __LINE__);
        }
        if (is_null($isPerson) || (is_array($isPerson) && empty($isPerson))) {
            unset($this->isPerson);
        } else {
            $this->isPerson = $isPerson;
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
     *
     * @throws \InvalidArgumentException
     * @param PersonAddParms $personAdd
     * @return PolicyHolderParms
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
     * Get phone value
     * @return string|null
     */
    public function getPhone()
    {
        return isset($this->phone) ? $this->phone : null;
    }

    /**
     * Set phone value
     *
     * @throws \InvalidArgumentException
     * @param string $phone
     * @return PolicyHolderParms
     */
    public function setPhone($phone = null)
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        if (is_null($phone) || (is_array($phone) && empty($phone))) {
            unset($this->phone);
        } else {
            $this->phone = $phone;
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
     * @return PolicyHolderParms
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
     * @return PolicyHolderParms
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
     * Get street value
     * @return string|null
     */
    public function getStreet()
    {
        return isset($this->street) ? $this->street : null;
    }
    /**
     * Set street value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $street
     * @return PolicyHolderParms
     */
    public function setStreet($street = null)
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        if (is_null($street) || (is_array($street) && empty($street))) {
            unset($this->street);
        } else {
            $this->street = $street;
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
     * @return PolicyHolderParms
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
     * Get title value
     * @return string|null
     */
    public function getTitle()
    {
        return isset($this->title) ? $this->title : null;
    }

    /**
     * Set title value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $title
     * @return PolicyHolderParms
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        if (is_null($title) || (is_array($title) && empty($title))) {
            unset($this->title);
        } else {
            $this->title = $title;
        }
        return $this;
    }
    /**
     * Get zip value
     * @return string|null
     */
    public function getZip()
    {
        return isset($this->zip) ? $this->zip : null;
    }
    /**
     * Set zip value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $zip
     * @return PolicyHolderParms
     */
    public function setZip($zip = null)
    {
        // validation for constraint: string
        if (!is_null($zip) && !is_string($zip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zip, true), gettype($zip)), __LINE__);
        }
        if (is_null($zip) || (is_array($zip) && empty($zip))) {
            unset($this->zip);
        } else {
            $this->zip = $zip;
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
