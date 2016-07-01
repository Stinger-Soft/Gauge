<?php

namespace StingerSoft\GaugePresentationBundle\Repository\ORM;

use Doctrine\ORM\EntityRepository;
use StingerSoft\GaugePresentationBundle\Repository\PresentationRepositoryInterface;
use StingerSoft\PlatformBundle\Entity\User;

class PresentationRepository extends EntityRepository implements PresentationRepositoryInterface {
	/**
	 * {@inheritDoc}
	 * @see \StingerSoft\GaugePresentationBundle\Repository\PresentationRepositoryInterface::paginatePresentationsByUser()
	 */
	public function paginatePresentationsByUser(User $user = null) {
		$qb = $this->createQueryBuilder('presentation');
// 		$qb->andWhere('presentation.createdBy = :username');
// 		$qb->setParameter('username', $user->getUsername());
		return $qb;
	}

}