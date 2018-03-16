<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

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
    private $id_user;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     * @Assert\Email()")
     */
    private $username;

    /**
     * @ORM\GeneratedValue()
     * @ORM\Column(type="string")
     * @Assert\Length(max=4096)
     */
    private $password;

    /**
     * @ORM\GeneratedValue()
     *  @ORM\Column(type="string", length=64)
     */
    private $mail_user;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @ORM\GeneratedValue()
     * @ORM\Column(type="blob")
     */
    private $photo_user;
}
