<?php
/**
 * Created by PhpStorm.
 * User: acmou
 * Date: 3/11/2019
 * Time: 5:01 PM
 */

namespace FeedbackBundle\Repository;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class FeedbackRepository extends EntityRepository
{
    public function findByPage($page = 1, $max = 10, $id)
    {
        $dql = $this->createQueryBuilder('feedback')->where('feedback.idUser ='.$id);

        $dql->orderBy('feedback.addedDate', 'DESC');

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


    public function GetFeedback($idu,$idapp)
    {
        return $this->getEntityManager()
            ->createQuery('SELECT F FROM AppBundle:feedback F WHERE ((F.idUser=:val) AND (F.idApplication=:val1))')
            ->setParameter('val',$idu)
            ->setParameter('val1',$idapp)
            ->getResult();
    }
}