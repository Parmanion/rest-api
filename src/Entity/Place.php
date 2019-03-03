<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Place
 *
 * @ORM\Table(name="place")
 * @ORM\Entity
 */
class Place
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=17, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="App\Core\UuidGenerator")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="kind", type="string", length=6, nullable=false)
     */
    private $kind;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=255, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetime_start_utc", type="datetime", nullable=false)
     */
    private $datetimeStartUtc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetime_start_local", type="datetime", nullable=false)
     */
    private $datetimeStartLocal;

    /**
     * @var string
     *
     * @ORM\Column(name="timezone_start", type="string", length=50, nullable=false, options={"default"="Europe/Paris"})
     */
    private $timezoneStart = 'Europe/Paris';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetime_end_utc", type="datetime", nullable=false)
     */
    private $datetimeEndUtc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetime_end_local", type="datetime", nullable=false)
     */
    private $datetimeEndLocal;

    /**
     * @var string
     *
     * @ORM\Column(name="timezone_end", type="string", length=50, nullable=false, options={"default"="Europe/Paris"})
     */
    private $timezoneEnd = 'Europe/Paris';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $updatedAt;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getKind(): ?string
    {
        return $this->kind;
    }

    public function setKind(string $kind): self
    {
        $this->kind = $kind;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDatetimeStartUtc(): ?\DateTimeInterface
    {
        return $this->datetimeStartUtc;
    }

    public function setDatetimeStartUtc(\DateTimeInterface $datetimeStartUtc): self
    {
        $this->datetimeStartUtc = $datetimeStartUtc;

        return $this;
    }

    public function getDatetimeStartLocal(): ?\DateTimeInterface
    {
        return $this->datetimeStartLocal;
    }

    public function setDatetimeStartLocal(\DateTimeInterface $datetimeStartLocal): self
    {
        $this->datetimeStartLocal = $datetimeStartLocal;

        return $this;
    }

    public function getTimezoneStart(): ?string
    {
        return $this->timezoneStart;
    }

    public function setTimezoneStart(string $timezoneStart): self
    {
        $this->timezoneStart = $timezoneStart;

        return $this;
    }

    public function getDatetimeEndUtc(): ?\DateTimeInterface
    {
        return $this->datetimeEndUtc;
    }

    public function setDatetimeEndUtc(\DateTimeInterface $datetimeEndUtc): self
    {
        $this->datetimeEndUtc = $datetimeEndUtc;

        return $this;
    }

    public function getDatetimeEndLocal(): ?\DateTimeInterface
    {
        return $this->datetimeEndLocal;
    }

    public function setDatetimeEndLocal(\DateTimeInterface $datetimeEndLocal): self
    {
        $this->datetimeEndLocal = $datetimeEndLocal;

        return $this;
    }

    public function getTimezoneEnd(): ?string
    {
        return $this->timezoneEnd;
    }

    public function setTimezoneEnd(string $timezoneEnd): self
    {
        $this->timezoneEnd = $timezoneEnd;

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
