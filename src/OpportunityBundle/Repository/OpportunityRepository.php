<?php
/**
 * Created by PhpStorm.
 * User: acmou
 * Date: 3/11/2019
 * Time: 5:01 PM
 */

namespace OpportunityBundle\Repository;
use Doctrine\DBAL\DBALException;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class OpportunityRepository extends EntityRepository
{
    public function chercher($opp )
    {
    $query=$this->getEntityManager()
        ->createQuery("select m from AppBundle:Opportunity m where (m.jobTitle='$opp')   ");
        return $query->getResult();
    }
    public function accept($idap)
    {
        $query=$this->getEntityManager()
            ->createQuery("UPDATE a from AppBundle:Application SET `state`= 'ACCEPTED' WHERE (m.idApplication='$idap') ");
        return $query->getResult();
    }

    public function findByPage($page = 1, $max = 4)
    {
        $dql = $this->createQueryBuilder('Opportunity');

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
    public function findsearched($page = 1, $max = 4,$opp)
    {
        $query=$this->getEntityManager()
            ->createQuery("select m from AppBundle:Opportunity m where (m.jobTitle='$opp')   ");

        $query->getResult();

        $firstResult = ($page - 1) * $max;

        $query->setFirstResult($firstResult);
        $query->setMaxResults($max);

        $paginator = new Paginator($query);

        if(($paginator->count() <=  $firstResult) && $page != 1) {
            throw new NotFoundHttpException('Page not found');
        }

        return $paginator;
    }

}