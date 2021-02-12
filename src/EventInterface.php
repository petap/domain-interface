<?php

namespace PetapDomainInterface;

/**
 * Interface EventInterface
 * @package PetapDomainInterface
 */
interface EventInterface
{
    /**
     * @return string
     */
    public function getName() : string;

    /**
     * @return EntityInterface
     */
    public function getEntity() : EntityInterface;

    /**
     * @return mixed
     */
    public function getData();

    /**
     * @return mixed
     */
    public function getValidData();

    /**
     * @return mixed
     */
    public function getErrors();

    /**
     * @param array $errors
     * @return mixed
     */
    public function setErrors(array $errors);
}
