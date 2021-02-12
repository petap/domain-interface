<?php

namespace PetapDomainInterface;

/**
 * Interface ServiceInterface
 * @package PetapDomainInterface
 */
interface ServiceInterface {

    /**
     * @param mixed $criteria
     * @param mixed $changes
     * @return mixed
     */
    public function handle($criteria, $changes);

}
