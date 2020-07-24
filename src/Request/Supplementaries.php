<?php

namespace App\Request;

/**
 * This class stands for supplementaries
 * @subpackage Structs
 */
class Supplementaries
{
    /**
     * The supplementary
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $supplementary;
    /**
     * Constructor method for supplementaries
     * @uses Supplementaries::setSupplementary()
     * @param string[] $supplementary
     */
    public function __construct(array $supplementary = array())
    {
        $this
            ->setSupplementary($supplementary);
    }
    /**
     * Get supplementary value
     * @return string[]|null
     */
    public function getSupplementary()
    {
        return $this->supplementary;
    }

    /**
     * Set supplementary value
     * @throws \InvalidArgumentException
     * @param string[] $supplementary
     * @return Supplementaries
     */
    public function setSupplementary(array $supplementary = array())
    {
        $this->supplementary = $supplementary;
        return $this;
    }
    /**
     * Add item to supplementary value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return Supplementaries
     */
    public function addToSupplementary($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The supplementary property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->supplementary[] = $item;
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
