<?php

namespace PetapDomainInterface\Infrastructure;

use PetapDomainInterface\EntityInterface;

/**
 * Interface RepositoryInterface
 * @package PetapDomainInterface\Infrastructure
 */
interface RepositoryInterface
{
    /**
     * @param EntityInterface $entity
     * @return EntityInterface|int|null
     */
    public function add(EntityInterface $entity);

    /**
     * @param EntityInterface $entity
     * @return void
     */
    public function remove(EntityInterface $entity) : void;

    /**
     * @param mixed $criteria
     * @return EntityInterface|null
     */
    public function find($criteria) : ?EntityInterface;

    /**
     * @param mixed $criteria
     * @return EntityInterface[]
     */
    public function findMany($criteria) : array;

    /**
     * @param mixed $id
     * @return EntityInterface|null
     */
    public function findById($id) : ?EntityInterface;

    /**
     * @param mixed $criteria
     * @return int
     */
    public function count($criteria) : int;

    /**
     * @param array $filter
     * @return CriteriaInterface
     */
    public function createCriteria(array $filter = []) : CriteriaInterface;
}
