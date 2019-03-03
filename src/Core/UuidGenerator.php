<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 3/1/19
 * Time: 6:26 PM
 */

declare(strict_types=1);

namespace App\Core;


use Doctrine\ORM\Id\AbstractIdGenerator;

class UuidGenerator extends AbstractIdGenerator
{
    public function generate(\Doctrine\ORM\EntityManager $em, $entity): string
    {
        $entity_name = $em->getClassMetadata(get_class($entity))->getName();
        $firstThreeChar = substr($entity_name, 0, 3);

        return uniqid(strtolower($firstThreeChar) . '_');
    }
}
