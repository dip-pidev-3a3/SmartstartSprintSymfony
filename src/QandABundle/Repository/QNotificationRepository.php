<?php


namespace QandABundle\Repository;


use Doctrine\ORM\EntityRepository;

class QNotificationRepository extends EntityRepository
{
public function NotViewedNotif($idu){
    $query=$this->getEntityManager()->createQuery("SELECT r FROM AppBundle:QReply r,AppBundle:QNotification n WHERE r.id=n.idtype AND n.type=2 AND n.idu='$idu' And n.viwed is null ORDER BY n.declanched DESC");
    return $query->getResult();

}
}