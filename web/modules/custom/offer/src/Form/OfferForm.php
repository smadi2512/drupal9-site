<?php
/**
 * @file
 * Contains Drupal\offer\Form\OfferForm
 */

namespace Drupal\offers\Form;
use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;


class OfferForm extends ContentEntityForm {
    /**
     * @inheritDoc
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {   /* @var $entity \Drupal\offer\Entity\Offer */
        $form = parent::buildForm($form, $form_state);
        return $form;
    }

    /**
     * @inheritDoc
     */

    public function save(array $form, FormStateInterface $form_state)
    {
        //Redirect to offer list after save
        $form_state->setRedirect('entity.offer.collection');
        $entity = $this->getEntity();
        $entity->save();
    }
}