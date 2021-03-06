<?php

namespace StingerSoft\GaugePresentationBundle\Form;

use Doctrine\ORM\EntityRepository;
use StingerSoft\GaugePresentationBundle\Model\MultipleChoiceInterface;
use StingerSoft\GaugePresentationBundle\Model\MultipleChoiceVoteInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MultipleChoiceType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {
		/**
		 *
		 * @var MultipleChoiceInterface $slide
		 */
		$slide = $options['slide'];
		$builder->add('answers', EntityType::class, array(
			'expanded' => true,
			'multiple' => $slide->getAllowMultiple(),
			'class' => $slide->getAnswerClassName(),
			'query_builder' => function (EntityRepository $repos) use ($slide) {
				return $repos->createQueryBuilder('answer')->where('answer.question = :slide')->setParameter('slide', $slide);
			} 
		));
	}

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \Symfony\Component\Form\AbstractType::configureOptions()
	 */
	public function configureOptions(OptionsResolver $resolver) {
		$resolver->setDefault('class', MultipleChoiceVoteInterface::class);
		$resolver->addAllowedTypes('slide', MultipleChoiceInterface::class);
	}

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \Symfony\Component\Form\AbstractType::getParent()
	 */
	public function getParent() {
		return SlideType::class;
	}
}