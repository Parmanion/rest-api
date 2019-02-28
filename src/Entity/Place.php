<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Place
 *
 * @ORM\Table(name="place", indexes={@ORM\Index(name="date_end", columns={"date_end"}), @ORM\Index(name="date_start", columns={"date_start"})})
 * @ORM\Entity
 */
class Place
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
     * @ORM\Column(name="created_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $updatedAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \Time
     *
     * @ORM\ManyToOne(targetEntity="Time")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="date_end", referencedColumnName="id")
     * })
     */
    private $dateEnd;

    /**
     * @var \Time
     *
     * @ORM\ManyToOne(targetEntity="Time")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="date_start", referencedColumnName="id")
     * })
     */
    private $dateStart;

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

    public function getDateEnd(): ?Time
    {
        return $this->dateEnd;
    }

    public function setDateEnd(?Time $dateEnd): self
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    public function getDateStart(): ?Time
    {
        return $this->dateStart;
    }

    public function setDateStart(?Time $dateStart): self
    {
        $this->dateStart = $dateStart;

        return $this;
    }


}
