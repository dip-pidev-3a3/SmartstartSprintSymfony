<?php

namespace BlogBundle\Repository;
use Doctrine\DBAL\DBALException;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * PostLikeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BlogProfitsRepository extends \Doctrine\ORM\EntityRepository
{
    public function findProfit($id)
    {
        $dql = $this->createQueryBuilder('BlogProfits');
        $dql->orderBy('BlogProfits.StartDate', 'DESC')->where("BlogProfits.author =".$id)->where("BlogProfits.Status= 1");
        $dql->setMaxResults(1);
        $query = $dql->getQuery();
        $query->setMaxResults(1);
        return $query->getResult();
    }
    public function findByPage($page = 1, $max = 10)
    {
        $dql = $this->createQueryBuilder('postprofits');
        $dql->orderBy('postprofits.StartDate', 'DESC');

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
    public function ChangeStatus($id,$status)
    {
        $qb = $this->createQueryBuilder('BlogProfits')
            ->update()
            ->set('BlogProfits.Status', $status)
            ->where('BlogProfits.Id=' . $id);
        return $qb->getQuery()
            ->getResult();
    }
    public function FindLastEntry($id,$status)
    {
        $dql = $this->createQueryBuilder('BlogProfits');
        $dql->orderBy('BlogProfits.StartDate', 'DESC')->where("BlogProfits.author =".$id)->where("BlogProfits.Status =".$status);
        $dql->setMaxResults(2);
        $query = $dql->getQuery();
        $query->setMaxResults(2);
        return $query->getResult();
    }
    public function FindCountCommentsByDate()
    {

        $conn = $this->getEntityManager()
            ->getConnection();
        $sql="SELECT SUM(blogprofits.post_comment_count)FROM blogprofits where blogprofits.End_date< DATE(NOW())";

        try {
            $stmt = $conn->prepare($sql);
        } catch (DBALException $e) {
        }
        $stmt->execute();
        return $stmt->fetch();
    }
    public function FindCountLikesByDate()
    {

        $conn = $this->getEntityManager()
            ->getConnection();
        $sql="SELECT SUM(blogprofits.post_likes_count)FROM blogprofits where blogprofits.End_date< DATE(NOW())";

        try {
            $stmt = $conn->prepare($sql);
        } catch (DBALException $e) {
        }
        $stmt->execute();
        return $stmt->fetch();
    }
}
