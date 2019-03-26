<?php
/**
 * Created by PhpStorm.
 * User: acmou
 * Date: 3/12/2019
 * Time: 1:49 AM
 */

namespace BlogBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CommentsRepository extends EntityRepository
{
    public function findByPageComments($page = 1, $max = 10)
    {
        $dql = $this->createQueryBuilder('comments');
        $dql->orderBy('comments.commentDate', 'DESC');

        $firstResult = ($page - 1) * $max;

        $query = $dql->getQuery();
        $query->setFirstResult($firstResult);
        $query->setMaxResults($max);

        $paginator = new Paginator($query);

        if(($paginator->count() <=  $firstResult) && $page != 1) {
            throw new NotFoundHttpException('Page not found');
        }

        return $paginator;
    }



}