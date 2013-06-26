<?php

/**
 * Reposos form base class.
 *
 * @method Reposos getObject() Returns the current form's model object
 *
 * @package    inassVreposos
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRepososForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'empleado_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empleado'), 'add_empty' => false)),
      'finicio'         => new sfWidgetFormDate(),
      'dias'            => new sfWidgetFormInputText(),
      'ffin'            => new sfWidgetFormDate(),
      'forma1452'       => new sfWidgetFormChoice(array('choices' => array('S' => 'S', 'N' => 'N'))),
      'especialidad_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Especialidad'), 'add_empty' => false)),
      'centros_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Centros'), 'add_empty' => false)),
      'finireposocont'  => new sfWidgetFormDate(),
      'diasrepcont'     => new sfWidgetFormInputText(),
      'observacion'     => new sfWidgetFormInputText(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
      'deleted_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'empleado_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Empleado'))),
      'finicio'         => new sfValidatorDate(array('required' => false)),
      'dias'            => new sfValidatorInteger(array('required' => false)),
      'ffin'            => new sfValidatorDate(array('required' => false)),
      'forma1452'       => new sfValidatorChoice(array('choices' => array(0 => 'S', 1 => 'N'))),
      'especialidad_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Especialidad'))),
      'centros_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Centros'))),
      'finireposocont'  => new sfValidatorDate(array('required' => false)),
      'diasrepcont'     => new sfValidatorInteger(array('required' => false)),
      'observacion'     => new sfValidatorString(array('max_length' => 240, 'min_length' => 4, 'required' => false)),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
      'deleted_at'      => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reposos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Reposos';
  }

}
