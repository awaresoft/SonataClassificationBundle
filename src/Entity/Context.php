<?php

namespace Awaresoft\Sonata\ClassificationBundle\Entity;

use Sonata\ClassificationBundle\Entity\BaseContext as BaseContext;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="classification__context")
 *
 * @author Bartosz Malec <b.malec@awaresoft.pl>
 */
class Context extends BaseContext
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     * @ORM\GeneratedValue(strategy="NONE")
     *
     * @var int
     */
    protected $id;

    /**
     * Get string
     *
     * @return string $id
     */
    public function getId()
    {
        return $this->id;
    }
}
