<?php
/**
 * Created by PhpStorm.
 * User: shpits
 * Date: 14.11.13
 * Time: 19:16
 */

namespace Acme\HelloBundle\Controller;

class CountryModel
{
    public $name;
    public $capital;
    public $president;
    private $description;

    public function  setName($name)
    {
        $this->name = $name;
    }

    public function setCapital($capital)
    {
        $this->capital = $capital;
    }

    public function setPresident($president)
    {
        $this->president = $president;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function  getName()
    {
        return $this->name;
    }

    public function getCapital()
    {
        return $this->capital;
    }

    public function getPresident()
    {
        return $this->president;
    }

    public function getDescription()
    {
        return $this->description;
    }
} 