<?php

/**
 * Reposos filter form base class.
 *
 * @package    inassVreposos
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRepososFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'empleado_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empleado'), 'add_empty' => true)),
      'finicio'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'dias'            => new sfWidgetFormFilterInput(),
      'ffin'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'forma1452'       => new sfWidgetFormChoice(array('choices' => array('' => '', 'S' => 'S', 'N' => 'N'))),
      'especialidad_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Especialidad'), 'add_empty' => true)),
      'centros_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Centros'), 'add_empty' => true)),
      'finireposocont'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'diasrepcont'     => new sfWidgetFormFilterInput(),
      'observacion'     => new sfWidgetFormFilterInput(),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'deleted_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'empleado_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Empleado'), 'column' => 'id')),
      'finicio'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'dias'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ffin'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'forma1452'       => new sfValidatorChoice(array('required' => false, 'choices' => array('S' => 'S', 'N' => 'N'))),
      'especialidad_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Especialidad'), 'column' => 'id')),
      'centros_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Centros'), 'column' => 'id')),
      'finireposocont'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'diasrepcont'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'observacion'     => new sfValidatorPass(array('required' => false)),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'deleted_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('reposos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Reposos';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'empleado_id'     => 'ForeignKey',
      'finicio'         => 'Date',
      'dias'            => 'Number',
      'ffin'            => 'Date',
      'forma1452'       => 'Enum',
      'especialidad_id' => 'ForeignKey',
      'centros_id'      => 'ForeignKey',
      'finireposocont'  => 'Date',
      'diasrepcont'     => 'Number',
      'observacion'     => 'Text',
      'created_at'      => 'Date',
      'updated_at'      => 'Date',
      'deleted_at'      => 'Date',
    );
  }
}
