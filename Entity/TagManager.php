<?php

namespace Awaresoft\Sonata\ClassificationBundle\Entity;

use Sonata\ClassificationBundle\Entity\TagManager as BaseTagManager;

class TagManager extends BaseTagManager
{
    /**
     * @param array $tags
     * @param null  $limit
     *
     * @return array|void
     */
    public function addTagsByString(array $tags, $limit = null)
    {
        $output = [];
        $em = $this->getEntityManager();
        $i = 0;

        foreach ($tags as $tag) {
            if ($limit && $limit == $i) {
                return;
            }

            if ((int)$tag === 0) {
                $tag = strtolower($tag);
                $existTag = $this->getRepository()->findOneBy(array('name' => $tag));
                if (!$existTag) {
                    $newTag = new Tag();
                    $newTag->setName($tag);
                    $newTag->setEnabled(true);
                    $em->persist($newTag);
                    $em->flush();
                    $output[] = $newTag->getId();
                }
            } else {
                $output[] = (int)$tag;
            }

            $i++;
        }

        return $output;
    }

    /**
     * Block tag
     *
     * @param Tag $tag
     * @param bool $flush
     */
    public function blockTag(Tag $tag, $flush = true)
    {
        $tag->setEnabled(false);

        if ($flush) {
            $this->getEntityManager()->flush($tag);
        }
    }
}
