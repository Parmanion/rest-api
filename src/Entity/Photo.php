<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 *
 * @ORM\Table(name="photo", indexes={@ORM\Index(name="place", columns={"place"})})
 * @ORM\Entity
 */
class Photo
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
     * @ORM\Column(name="datetime_utc", type="datetime", nullable=false)
     */
    private $datetimeUtc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetime_local", type="datetime", nullable=false)
     */
    private $datetimeLocal;

    /**
     * @var string
     *
     * @ORM\Column(name="timezone", type="string", length=50, nullable=false, options={"default"="Europe/Paris"})
     */
    private $timezone = 'Europe/Paris';

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

    /**
     * @var \Place
     *
     * @ORM\ManyToOne(targetEntity="Place")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place", referencedColumnName="id")
     * })
     */
    private $place;

    public function getId(): ?string
    {
        return $this->id;
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

    public function getDatetimeUtc(): ?\DateTimeInterface
    {
        return $this->datetimeUtc;
    }

    public function setDatetimeUtc(\DateTimeInterface $datetimeUtc): self
    {
        $this->datetimeUtc = $datetimeUtc;

        return $this;
    }

    public function getDatetimeLocal(): ?\DateTimeInterface
    {
        return $this->datetimeLocal;
    }

    public function setDatetimeLocal(\DateTimeInterface $datetimeLocal): self
    {
        $this->datetimeLocal = $datetimeLocal;

        return $this;
    }

    public function getTimezone(): ?string
    {
        return $this->timezone;
    }

    public function setTimezone(string $timezone): self
    {
        $this->timezone = $timezone;

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

    public function getPlace(): ?Place
    {
        return $this->place;
    }

    public function setPlace(?Place $place): self
    {
        $this->place = $place;

        return $this;
    }


}
