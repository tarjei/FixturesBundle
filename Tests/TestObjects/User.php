<?php

namespace DavidBadura\FixturesBundle\Tests\TestObjects;

/**
 * @author David Badura <d.badura@gmx.de>
 */
class User
{

    /**
     *
     * @var string
     */
    private $name;

    /**
     *
     * @var string
     */
    private $email;

    /**
     *
     * @var array
     */
    private $roles = array();

    /**
     *
     * @var array
     */
    private $groups = array();

    /**
     *
     * @param string $name
     * @param string $email
     */
    function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getRoles()
    {
        return $this->roles;
    }

    public function setRoles(array $roles)
    {
        $this->roles = $roles;
        return $this;
    }

    public function getGroups()
    {
        return $this->groups;
    }

    public function setGroups(array $groups)
    {
        $this->groups = $groups;
        return $this;
    }

}