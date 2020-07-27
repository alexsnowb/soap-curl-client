<?php

namespace App\Request;

/**
 * This class stands for insureds
 *
 */
class InsuredListParms
{
    /**
     * The insured
     * @var InsuredPersonParms[]
     */
    public $insured;
    /**
     * Constructor method for insureds
     *
     * @param  InsuredPersonParms[] $insured
     *
     *@uses InsuredListParms::setInsured()
     */
    public function __construct(array $insured = array())
    {
        $this
            ->setInsured($insured);
    }
    /**
     * Get insured value
     * @return InsuredPersonParms[]|null
     */
    public function getInsured()
    {
        return $this->insured;
    }

    /**
     * Set insured value
     *
     * @param InsuredPersonParms[] $insured
     *
     * @return InsuredListParms
     * @throws \InvalidArgumentException
     */
    public function setInsured(array $insured = array())
    {

        $this->insured = $insured;
        return $this;
    }
    /**
     * Add item to insured value
     *
     * @param InsuredPersonParms $item
     *
     * @return InsuredListParms
     * @throws \InvalidArgumentException
     */
    public function addToInsured(InsuredPersonParms $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof InsuredPersonParms) {
            throw new \InvalidArgumentException(sprintf('The insured property can only contain items of type \StructType\InsuredPersonParms, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->insured[] = $item;
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
