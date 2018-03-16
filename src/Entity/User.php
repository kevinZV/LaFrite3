<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id_user;


    /**
     * @ORM\GeneratedValue()
     * @ORM\Column(type="string")
     */
    protected $username;

    /**
     * @ORM\GeneratedValue()
     * @ORM\Column(type="string")
     */
    protected $password;

    /**
     * @ORM\GeneratedValue()
     * @ORM\Column(type="string")
     */
    protected $mail_user;

    /**
     * @ORM\GeneratedValue()
     * @ORM\Column(type="blob")
     */
    protected $photo_user;



    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getEmail()
    {
        return $this->mail_user;
    }

    public function setEmail($mail_user)
    {
        $this->mail_user = $mail_user;
    }
}
nmlkhpi