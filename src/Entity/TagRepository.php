<?php

namespace Awaresoft\Sonata\ClassificationBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Class FaqRepository
 *
 * @author Bartosz Malec <b.malec@awaresoft.pl>
 */
class TagRepository extends EntityRepository
{
    /**
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function queryFindEnabledTags()
    {
        return $this->createQueryBuilder('t')
            ->where('t.enabled = :enabled')
            ->setParameter('enabled', true);
    }
}
