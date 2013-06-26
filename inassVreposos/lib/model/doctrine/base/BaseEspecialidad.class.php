<?php

/**
 * BaseEspecialidad
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $descripcion
 * @property Doctrine_Collection $Reposos
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method string              getDescripcion() Returns the current record's "descripcion" value
 * @method Doctrine_Collection getReposos()     Returns the current record's "Reposos" collection
 * @method Especialidad        setId()          Sets the current record's "id" value
 * @method Especialidad        setDescripcion() Sets the current record's "descripcion" value
 * @method Especialidad        setReposos()     Sets the current record's "Reposos" collection
 * 
 * @package    inassVreposos
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEspecialidad extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('especialidad');
        $this->hasColumn('id', 'integer', 4, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('descripcion', 'string', 240, array(
             'type' => 'string',
             'notnull' => true,
             'notblank' => true,
             'minlength' => 4,
             'length' => 240,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Reposos', array(
             'local' => 'id',
             'foreign' => 'especialidad_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $softdelete0 = new Doctrine_Template_SoftDelete();
        $this->actAs($timestampable0);
        $this->actAs($softdelete0);
    }
}