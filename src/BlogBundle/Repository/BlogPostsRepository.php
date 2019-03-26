<?php
/**
 * Created by PhpStorm.
 * User: acmou
 * Date: 3/11/2019
 * Time: 5:01 PM
 */

namespace BlogBundle\Repository;
use Doctrine\DBAL\DBALException;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class BlogPostsRepository extends EntityRepository
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

        if (($paginator->count() <= $firstResult) && $page != 1) {
            throw new NotFoundHttpException('Page not found');
        }

        return $paginator;
    }

    public function ComsCountAdd($id)
    {
        $qb = $this->createQueryBuilder('blogpost')
            ->update()
            ->set('blogpost.postCommentCount', 'blogpost.postCommentCount + 1')
            ->where('blogpost.postId=' . $id);
        echo $qb;
        return $qb->getQuery()
            ->getResult();
    }

    public function ComsCountReduce($id)
    {
        $qb = $this->createQueryBuilder('blogpost')
            ->update()
            ->set('blogpost.postCommentCount', 'blogpost.postCommentCount - 1')
            ->where('blogpost.postId=' . $id);
        echo $qb;
        return $qb->getQuery()
            ->getResult();
    }

    public function LikeCountAdd($id)
    {
        $qb = $this->createQueryBuilder('blogpost')
            ->update()
            ->set('blogpost.postLikesCount', 'blogpost.postLikesCount  + 1')
            ->where('blogpost.postId=' . $id);

        return $qb->getQuery()
            ->getResult();
    }

    public function LikeCountReduce($id)
    {
        $qb = $this->createQueryBuilder('blogpost')
            ->update()
            ->set('blogpost.postLikesCount', 'blogpost.postLikesCount - 1')
            ->where('blogpost.postId=' . $id);

        return $qb->getQuery()
            ->getResult();
    }

    public function findEntitiesByString($str)
    {
        return $this->getEntityManager()->createQuery('SELECT e
                FROM AppBundle:Blogposts e
                WHERE e.foo LIKE :str')
            ->setParameter('str', '%' . $str . '%')
            ->getResult();
    }


    public function findMostPopularPosts($max)
    {
        $dql = $this->createQueryBuilder('blogpost');
        $dql->orderBy('blogpost.postLikesCount', 'DESC');
        $query = $dql->getQuery();
        $query->setMaxResults($max);
        return $query->getResult();
    }
    public function findMostPopularByCat($cat)
    {
        $dql = $this->createQueryBuilder('blogpost')->where("blogpost.postType ="."'". $cat."'");
        $dql->orderBy('blogpost.postLikesCount', 'DESC');
        $query = $dql->getQuery();
        $query->setMaxResults(10);
        return $query->getResult();
    }
    public function findByCat($page = 1, $max = 10,$cat)
    {
        $dql = $this->createQueryBuilder('blogpost')->where("blogpost.postType ="."'". $cat."'");
        $dql->orderBy('blogpost.postDate', 'DESC');

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


    public function findmostpopularAuthor()
    {
        $conn = $this->getEntityManager()
            ->getConnection();
        $sql = 'select fos_user.username from fos_user 
      where fos_user.id=(SELECT blogposts.Author_id FROM `blogposts` 
      WHERE post_likes_count=(SELECT MAX(post_likes_count) FROM blogposts))';
        try {
            $stmt = $conn->prepare($sql);
        } catch (DBALException $e) {
        }
        $stmt->execute();
        return $stmt->fetch();

    }
    public function findMostPopularPostsByUser($max,$user)
    {
        $dql = $this->createQueryBuilder('blogpost')->where('blogpost.author='.$user);
        $dql->orderBy('blogpost.postLikesCount', 'DESC');
        $query = $dql->getQuery();
        $query->setMaxResults($max);
        return $query->getResult();
    }
}