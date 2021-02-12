<?php

namespace PetapDomainInterface;

/**
 * Interface EntityFactoryInterface
 * @package PetapDomainInterface
 */
interface EntityFactoryInterface
{
    /**
     * @param array $data
     * @return EntityInterface
     */
    public function create(array $data) : EntityInterface;

    /**
     * @param array $data
     * @return mixed
     */
    public function createCollection(array $data);
}
