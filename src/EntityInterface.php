<?php

namespace PetapDomainInterface;

/**
 * Interface EntityInterface
 * @package PetapDomainInterface
 */
interface EntityInterface
{
    /**
     * @return mixed
     */
    public function getId();

    /**
     * @param array $properties
     * @return array
     */
    public function extract(array $properties = []) : array;

    /**
     * @param array $array
     * @return self
     */
    public function populate(array $array = []) : self;
}

