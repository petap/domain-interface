<?php

namespace PetapDomainInterface;

/**
 * Interface ErrorAwareInterface
 * @package PetapDomainInterface
 */
interface ErrorAwareInterface
{
    /**
     * @param array $errors
     */
    public function setErrors(array $errors);

    /**
     * @return array
     */
    public function getErrors() : array;

    /**
     * @return bool
     */
    public function hasErrors() : bool;
}