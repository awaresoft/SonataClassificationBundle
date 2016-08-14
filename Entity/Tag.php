<?php

namespace Awaresoft\Sonata\ClassificationBundle\Entity;

use Sonata\ClassificationBundle\Entity\BaseTag as BaseTag;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="classification__tag")
 * @ORM\Entity(repositoryClass="Awaresoft\Sonata\ClassificationBundle\Entity\TagRepository")
 *
 * @author Bartosz Malec <b.malec@awaresoft.pl>
 */
class Tag extends BaseTag
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }
}