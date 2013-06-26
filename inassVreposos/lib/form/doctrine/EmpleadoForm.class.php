<?php

/**
 * Empleado form.
 *
 * @package    inassVreposos
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EmpleadoForm extends BaseEmpleadoForm
{
  public function configure()
  {
 unset($this['created_at'], $this['updated_at'], $this['deleted_at']);


  $today = array(
   'year' => date('Y'),
   'month' => date('n'),
   'day' => date('j')
   );
   $years = range(date('Y') + 5, date('Y') - 110);

 $this->widgetSchema['fnacimiento'] = new sfWidgetFormDate(array('format' => '%day%/%month%/%year%', 'default' => $today, 'years' => array_combine($years, $years)));

 $this->widgetSchema['fingreso'] = new sfWidgetFormDate(array('format' => '%day%/%month%/%year%', 'default' => $today, 'years' => array_combine($years, $years)));




  }
}
