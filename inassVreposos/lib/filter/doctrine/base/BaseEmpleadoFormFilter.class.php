<?php

/**
 * Empleado filter form base class.
 *
 * @package    inassVreposos
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEmpleadoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo'       => new sfWidgetFormFilterInput(),
      'cargo'        => new sfWidgetFormFilterInput(),
      'fingreso'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'activoivss'   => new sfWidgetFormChoice(array('choices' => array('' => '', 'S' => 'S', 'N' => 'N'))),
      'cedula'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'apellido'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sexo'         => new sfWidgetFormChoice(array('choices' => array('' => '', 'M' => 'M', 'F' => 'F'))),
      'fnacimiento'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'telefono'     => new sfWidgetFormFilterInput(),
      'nhijos'       => new sfWidgetFormFilterInput(),
      'nestudios_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Nestudios'), 'add_empty' => true)),
      'profesion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Profesion'), 'add_empty' => true)),
      'estadociv'    => new sfWidgetFormChoice(array('choices' => array('' => '', 'Solter@' => 'Solter@', 'Casad@' => 'Casad@', 'Viud@' => 'Viud@', 'Divorciad@' => 'Divorciad@', 'Separad@' => 'Separad@', 'Concubin@' => 'Concubin@'))),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'deleted_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'codigo'       => new sfValidatorPass(array('required' => false)),
      'cargo'        => new sfValidatorPass(array('required' => false)),
      'fingreso'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'activoivss'   => new sfValidatorChoice(array('required' => false, 'choices' => array('S' => 'S', 'N' => 'N'))),
      'cedula'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nombre'       => new sfValidatorPass(array('required' => false)),
      'apellido'     => new sfValidatorPass(array('required' => false)),
      'sexo'         => new sfValidatorChoice(array('required' => false, 'choices' => array('M' => 'M', 'F' => 'F'))),
      'fnacimiento'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'telefono'     => new sfValidatorPass(array('required' => false)),
      'nhijos'       => new sfValidatorPass(array('required' => false)),
      'nestudios_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Nestudios'), 'column' => 'id')),
      'profesion_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Profesion'), 'column' => 'id')),
      'estadociv'    => new sfValidatorChoice(array('required' => false, 'choices' => array('Solter@' => 'Solter@', 'Casad@' => 'Casad@', 'Viud@' => 'Viud@', 'Divorciad@' => 'Divorciad@', 'Separad@' => 'Separad@', 'Concubin@' => 'Concubin@'))),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'deleted_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('empleado_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Empleado';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'codigo'       => 'Text',
      'cargo'        => 'Text',
      'fingreso'     => 'Date',
      'activoivss'   => 'Enum',
      'cedula'       => 'Number',
      'nombre'       => 'Text',
      'apellido'     => 'Text',
      'sexo'         => 'Enum',
      'fnacimiento'  => 'Date',
      'telefono'     => 'Text',
      'nhijos'       => 'Text',
      'nestudios_id' => 'ForeignKey',
      'profesion_id' => 'ForeignKey',
      'estadociv'    => 'Enum',
      'created_at'   => 'Date',
      'updated_at'   => 'Date',
      'deleted_at'   => 'Date',
    );
  }
}
