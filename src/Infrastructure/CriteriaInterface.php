<?php

namespace PetapDomainInterface\Infrastructure;

/**
 * Interface CriteriaInterface
 * @package PetapDomainInterface\Infrastructure
 */
interface CriteriaInterface
{
    /**
     * @return string
     */
    public function getEntityName() : string;

    /**
     * @return mixed
     */
    public function getQuery();

    /**
     * @param string $attribute
     * @param bool|int|float|string $value
     * @return $this
     */
    public function equalTo(string $attribute, $value) : self;

    /**
     * @param string $attribute
     * @param bool|int|float|string $value
     * @return $this
     */
    public function notEqualTo(string $attribute, $value) : self;

    /**
     * @param string $attribute
     * @param int|float $value
     * @return $this
     */
    public function lessThan(string $attribute, $value) : self;

    /**
     * @param string $attribute
     * @param int|float $value
     * @return $this
     */
    public function greaterThan(string $attribute, $value) : self;

    /**
     * @param string $attribute
     * @param int|float $value
     * @return $this
     */
    public function greaterThanOrEqualTo(string $attribute, $value) : self;

    /**
     * @param string $attribute
     * @param int|float $value
     * @return $this
     */
    public function lessThanOrEqualTo(string $attribute, $value) : self;

    /**
     * @param string $attribute
     * @param int|float $value
     * @return $this
     */
    public function like(string $attribute, $value) : self;

    /**
     * @param string $attribute
     * @return $this
     */
    public function isNull(string $attribute) : self;

    /**
     * @param string $attribute
     * @return $this
     */
    public function isNotNull(string $attribute) : self;

    /**
     * @param string $attribute
     * @param array $values
     * @return $this
     */
    public function in(string $attribute, array $values) : self;

    /**
     * @param string $attribute
     * @param int|float|string $minValue
     * @param int|float|string $maxValue
     * @return $this
     */
    public function between(string $attribute, $minValue, $maxValue) : self;

    /**
     * @param string $attribute
     * @return $this
     */
    public function order(string $attribute) : self;

    /**
     * @param int $limit
     * @return $this
     */
    public function limit(int $limit) : self;

    /**
     * @param int $offset
     * @return $this
     */
    public function offset(int $offset) : self;

    /**
     * @param string $entityName
     * @return CriteriaInterface
     */
    public function relation(string $entityName) : CriteriaInterface;

    /**
     * @param string $attribute
     * @return string
     */
    public function getField(string $attribute) : string;
}