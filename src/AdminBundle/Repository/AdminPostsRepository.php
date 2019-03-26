<?php
/**
 * Created by PhpStorm.
 * User: acmou
 * Date: 3/11/2019
 * Time: 5:01 PM
 */

namespace AdminBundle\Controller;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class AdminPostsRepository extends EntityRepository
{
    public function findByPage($page = 1, $max = 10)
    {
        $dql = $this->createQueryBuilder('blogpost');
        $dql->orderBy('blogpost.postDate', 'DESC');

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