<?php

namespace Akina\ImmobilierBundle\Repository;

/**
 * BiensRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BiensRepository extends \Doctrine\ORM\EntityRepository
{
	 public function findBiens($Localite="0", $budjet="0", $Type="0")
    {
      //  $dql = $this->getEntityManager()->createQueryBuilder();
        $dql = "SELECT b FROM Akina\ImmobilierBundle\Entity\Biens b 
        left Join b.Type t left Join b.Localite l WHERE b.etat = 0";
          if($Localite!=0){
            $dql .= "AND l.id = :Localite";
         }
          if($Type!=0){
            $dql .= "AND t.id = :Type";
         }
          if($budjet!=0){
            $dql .= "AND b.prix BETWEEN :prixMIn AND :prixMax";
         }

          $query = $this->getEntityManager()->createQuery($dql);
         if($Localite != 0){
            $query ->setParameter(
            'Localite', $Localite);
         }
          
          if ($budjet != 0) {
            $query->setParameter('prixMIn', $budjet - 10000)
            ->setParameter('prixMax', $budjet + 20000);
        }
        if($Type != 0){
           $query ->setParameter(
            'Type', $Type);
         }
       
        return $query->getResult();
    }
}
