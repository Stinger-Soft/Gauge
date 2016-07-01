<?php

namespace StingerSoft\GaugePresentationBundle\Repository;

use Doctrine\Common\Persistence\ObjectRepository;
use StingerSoft\PlatformBundle\Entity\User;

interface PresentationRepositoryInterface extends ObjectRepository {

	/**
	 *
	 * @param User $user        	
	 *
	 * @return \Doctrine\ORM\Query|\Doctrine\ORM\QueryBuilder|\Doctrine\ODM\MongoDB\Query\Query|\Doctrine\ODM\MongoDB\Query\Builder
	 */
	public function paginatePresentationsByUser(User $user = null);
}