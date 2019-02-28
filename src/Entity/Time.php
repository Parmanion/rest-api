<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Time
 *
 * @ORM\Table(name="time")
 * @ORM\Entity
 */
class Time
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=9, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="utc", type="datetime", nullable=false)
     */
    private $utc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="local", type="datetime", nullable=false)
     */
    private $local;

    /**
     * @var string
     *
     * @ORM\Column(name="zone", type="string", length=50, nullable=false, options={"default"="Europe/Paris"})
     */
    private $zone = 'Europe/Paris';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $updatedAt = 'CURRENT_TIMESTAMP';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getUtc(): ?\DateTimeInterface
    {
        return $this->utc;
    }

    public function setUtc(\DateTimeInterface $utc): self
    {
        $this->utc = $utc;

        return $this;
    }

    public function getLocal(): ?\DateTimeInterface
    {
        return $this->local;
    }

    public function setLocal(\DateTimeInterface $local): self
    {
        $this->local = $local;

        return $this;
    }

    public function getZone(): ?string
    {
        return $this->zone;
    }

    public function setZone(string $zone): self
    {
        $this->zone = $zone;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }


}
