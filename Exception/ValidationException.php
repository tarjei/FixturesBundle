<?php

namespace DavidBadura\FixturesBundle\Exception;

use Symfony\Component\Validator\ConstraintViolationList;

/**
 *
 * @author David Badura <d.badura@gmx.de>
 */
class ValidationException extends RuntimeException
{

    /**
     *
     * @var ConstraintViolationList
     */
    protected $violationList;

    /**
     *
     * @param ConstraintViolationList $violationList
     */
    public function __construct($name, $key, ConstraintViolationList $violationList)
    {
        parent::__construct($name, $key, sprintf('%s: %s. By fixture data %s:%s',
            $violationList[0]->getPropertyPath(),
            $violationList[0]->getMessage(),
            $name, $key));

        $this->violationList = $violationList;
    }

    /**
     *
     * @return ConstraintViolationList
     */
    public function getViolationList()
    {
        return $this->violationList;
    }

}