<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Weather
 *
 * @ORM\Table(name="weather")
 * @ORM\Entity
 */
class Weather
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }


}
