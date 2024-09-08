<?php

declare(strict_types=1);

namespace App\Entity\Addressing;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Addressing\Model\Country as BaseCountry;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_country")
 */
#[ORM\Entity]
#[ORM\Table(name: 'sylius_country')]
class Country extends BaseCountry
{
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $flag = null;

    public function getFlag(): ?string
    {
        return $this->flag;
    }

    public function setFlag(?string $flag): static
    {
        $this->flag = $flag;

        return $this;
    }
}
