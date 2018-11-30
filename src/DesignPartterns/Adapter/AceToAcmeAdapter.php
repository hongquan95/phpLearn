<?php
namespace  App\DesignPartterns\Adapter;

use App\DesignPartterns\Adapter\Ace;
use App\DesignPartterns\Adapter\AcmeInterface;


class AceToAcmeAdapter implements AcmeInterface
{
    /**
     * @var Ace
     */
    public $ace;
    public $firstName;
    public $lastName;

    public function __construct(Ace $ace)
    {
        $this->ace = $ace;
        $this->firstName = explode(' ', $this->ace->getName())[0];
        $this->lastName = explode(' ', $this->ace->getName())[1];
    }
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

}
