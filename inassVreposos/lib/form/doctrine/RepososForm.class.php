<?php

/**
 * Reposos form.
 *
 * @package    inassVreposos
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class RepososForm extends BaseRepososForm
{
  public function configure()
  {
 unset($this['created_at'], $this['updated_at'], $this['deleted_at']);
  $this->widgetSchema['empleado_id'] = new sfWidgetFormInputHidden();

  $today = array(
   'year' => date('Y'),
   'month' => date('n'),
   'day' => date('j')
   );
   $years = range(date('Y') + 5, date('Y') - 1);
   $yearas = range(date('Y') + 5, date('Y') - 5);

 $this->widgetSchema['finicio'] = new sfWidgetFormDate(array('format' => '%day%/%month%/%year%', 'default' => $today, 'years' => array_combine($years, $years)));

 $this->widgetSchema['ffin'] = new sfWidgetFormDate(array('format' => '%day%/%month%/%year%', 'default' => $today, 'years' => array_combine($years, $years)));

 $this->widgetSchema['finireposocont'] = new sfWidgetFormDate(array('format' => '%day%/%month%/%year%', 'default' => $today, 'years' => array_combine($yearas, $yearas)));



  }
}
