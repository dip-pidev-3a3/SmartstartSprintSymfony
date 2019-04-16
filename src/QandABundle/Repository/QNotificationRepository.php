<?php


namespace QandABundle\Repository;


use Doctrine\ORM\EntityRepository;

class QNotificationRepository extends EntityRepository
{
public function NotViewedNotif($idu){
    $query=$this->getEntityManager()->createQuery("SELECT r FROM AppBundle:QReply r,AppBundle:QNotification n WHERE r.id=n.idtype AND n.type=2 AND n.idu='$idu' And n.viwed is null ORDER BY n.declanched DESC");
    return $query->getResult();

}
    public function setViewed($idr){
        $qb = $this->createQueryBuilder('notif')
            ->update()
            ->set('notif.viwed', '?1')
            ->where('notif.idtype=' . $idr)
       // ->andWhere('notif.type= 2')
        ->setParameters(1, new \DateTime());
      //  $query=$this->getEntityManager()->createQuery("UPDATE AppBundle:QNotification q SET q.viwed='$now' WHERE q.idtype='$idr' AND q.type=2");

    }

}