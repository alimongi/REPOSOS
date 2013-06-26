<?php

/**
 * Empleado form base class.
 *
 * @method Empleado getObject() Returns the current form's model object
 *
 * @package    inassVreposos
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEmpleadoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'codigo'       => new sfWidgetFormInputText(),
      'cargo'        => new sfWidgetFormInputText(),
      'fingreso'     => new sfWidgetFormDate(),
      'activoivss'   => new sfWidgetFormChoice(array('choices' => array('S' => 'S', 'N' => 'N'))),
      'cedula'       => new sfWidgetFormInputText(),
      'nombre'       => new sfWidgetFormInputText(),
      'apellido'     => new sfWidgetFormInputText(),
      'sexo'         => new sfWidgetFormChoice(array('choices' => array('M' => 'M', 'F' => 'F'))),
      'fnacimiento'  => new sfWidgetFormDate(),
      'telefono'     => new sfWidgetFormInputText(),
      'nhijos'       => new sfWidgetFormInputText(),
      'nestudios_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Nestudios'), 'add_empty' => true)),
      'profesion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Profesion'), 'add_empty' => true)),
      'estadociv'    => new sfWidgetFormChoice(array('choices' => array('Solter@' => 'Solter@', 'Casad@' => 'Casad@', 'Viud@' => 'Viud@', 'Divorciad@' => 'Divorciad@', 'Separad@' => 'Separad@', 'Concubin@' => 'Concubin@'))),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
      'deleted_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'codigo'       => new sfValidatorString(array('max_length' => 120, 'min_length' => 4, 'required' => false)),
      'cargo'        => new sfValidatorString(array('max_length' => 120, 'min_length' => 4, 'required' => false)),
      'fingreso'     => new sfValidatorDate(),
      'activoivss'   => new sfValidatorChoice(array('choices' => array(0 => 'S', 1 => 'N'))),
      'cedula'       => new sfValidatorInteger(),
      'nombre'       => new sfValidatorString(array('max_length' => 120, 'min_length' => 4)),
      'apellido'     => new sfValidatorString(array('max_length' => 120, 'min_length' => 4)),
      'sexo'         => new sfValidatorChoice(array('choices' => array(0 => 'M', 1 => 'F'))),
      'fnacimiento'  => new sfValidatorDate(),
      'telefono'     => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'nhijos'       => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'nestudios_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Nestudios'), 'required' => false)),
      'profesion_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Profesion'), 'required' => false)),
      'estadociv'    => new sfValidatorChoice(array('choices' => array(0 => 'Solter@', 1 => 'Casad@', 2 => 'Viud@', 3 => 'Divorciad@', 4 => 'Separad@', 5 => 'Concubin@'), 'required' => false)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
      'deleted_at'   => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Empleado', 'column' => array('cedula')))
    );

    $this->widgetSchema->setNameFormat('empleado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Empleado';
  }

}
