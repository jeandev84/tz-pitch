<?php
namespace App\Manager\Common;

use Doctrine\ORM\EntityManagerInterface;

/**
 *
*/
abstract class AbstractManager
{

     /**
      * @var EntityManagerInterface
     */
     protected $em;



     /**
      * @param EntityManagerInterface $em
     */
     public function __construct(EntityManagerInterface $em)
     {
          $this->em = $em;
     }


}