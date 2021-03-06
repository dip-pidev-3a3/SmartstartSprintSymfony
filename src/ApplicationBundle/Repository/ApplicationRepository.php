<?php

namespace ApplicationBundle\Repository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * ApplicationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ApplicationRepository extends \Doctrine\ORM\EntityRepository

{


    public function nbAPP(){
        return 1941;

    }
    public function userOpps($idFreelancer){
        $query=$this->getEntityManager()
            ->createQuery("select e from AppBundle:Application e where e.idFreelancer='$idFreelancer'   ");
        return $query->getResult();

    }

    public function hasApplied($OpportunityId,$idFreelancer){
        $query=$this->getEntityManager()
            ->createQuery("select e from AppBundle:Application e where e.idOpportunity='$OpportunityId' AND e.idFreelancer='$idFreelancer'   ");
        return $query->getResult();
    }


    public function findEntitiesByString($str){
        return $this->getEntityManager()
            ->createQuery(
                'SELECT e
                FROM AppBundle:Entity e
                WHERE e.foo LIKE :str'
            )
            ->setParameter('str', '%'.$str.'%')
            ->getResult();
    }


    public function chercher($cat,$wage){

        if($cat=="")
        {

            $query=$this->getEntityManager()
                ->createQuery("select m from AppBundle:Opportunity m where    (m.budget>='$wage')   ");
            return $query->getResult();
        }
        $query=$this->getEntityManager()
            ->createQuery("select m from AppBundle:Opportunity m where   (m.jobTitle='$cat') OR (m.jobCategory='$cat') AND (m.budget>='$wage')   ");
        return $query->getResult();
    }


    public function findByPage($page = 1, $max = 10)
    {
        $dql = $this->createQueryBuilder('blogpost');


        $firstResult = ($page - 1) * $max;

        $query = $dql->getQuery();
        $query->setFirstResult($firstResult);
        $query->setMaxResults($max);

        $paginator = new Paginator($query);

        if (($paginator->count() <= $firstResult) && $page != 1) {
            throw new NotFoundHttpException('Page not found');
        }

        return $paginator;
    }




}
