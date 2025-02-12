<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
class Contribution 
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Member::class, inversedBy: 'contributions')]
    private Member $member;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    private float $amount;

    #[ORM\Column(type: 'datetime')]
    private \DateTimeInterface $contributionDate;

    public function __construct()
    {
        $this->contributionDate = new \DateTimeImmutable();
    }

    // Getters and setters
}