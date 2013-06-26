<?php

/**
 * empleado actions.
 *
 * @package    inassVreposos
 * @subpackage empleado
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class empleadoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
/*    $this->empleados = Doctrine_Core::getTable('Empleado')
      ->createQuery('a')
      ->andWhere('a.deleted_at IS NULL')
      ->execute();
*/
    $page = $request->getParameter('pagina', 1);
    $this->empleados = Doctrine::getTable('Empleado')->getListPager($page);
    $this->haveToPaginate = Doctrine::getTable('Empleado')->haveToPaginate();
    $this->resultados = Doctrine::getTable('Empleado')->getTotalResult();
    $this->paginas = Doctrine::getTable('Empleado')->getTotalPages();
    $this->menu = Doctrine::getTable('Empleado')->getDisplay(array(), true);


  }



public function executeBuscarEmpleado(sfWebRequest $request) {
}

  public function executeMostrar(sfWebRequest $request)
    {
        if ($request->getMethod() == 'POST' ) {
            $this->empleado = Doctrine_Query::create()->select()->from('Empleado e')->where('e.cedula = ?', $request->getParameter('ci_empleado'))->fetchOne();
           if($request->getParameter('ci_empleado') == '') {
                $this->getUser()->setFlash('notice', 'El registro para la Cédula '.$request->getParameter('ci_empleado').' no existe.');
                $this->redirect('empleado/BuscarEmpleado');
            }            
            if(!$this->empleado) {
                $this->getUser()->setFlash('notice', 'El registro para la Cédula '.$request->getParameter('ci_empleado').' no existe.');
                $this->redirect('empleado/new?cedula='.$request->getParameter('ci_empleado'));
            }
         
            $reposos = new Reposos();
            $reposos->setEmpleado($this->empleado);
            $this->form = new RepososForm($reposos);

      

            $this->setTemplate('show');
        } else {
            $this->empleado = Doctrine_Core::getTable('Empleado')->find(array($request->getParameter('id')));
            $reposos = new Reposos();
            $reposos->setEmpleado($this->empleado);
            $this->form = new RepososForm($reposos);

  
            
            $this->setTemplate('show');
        }
    }








  public function executeShow(sfWebRequest $request)
  {
    $this->empleado = Doctrine_Core::getTable('Empleado')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->empleado);
  }

  public function executeShow2(sfWebRequest $request)
  {
    $this->empleado = Doctrine_Core::getTable('Empleado')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->empleado);
  }


  public function executeNew(sfWebRequest $request)
  {
    $this->form = new EmpleadoForm();
    $this->form->setDefault('cedula', $request->getParameter('cedula'));
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new EmpleadoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($empleado = Doctrine_Core::getTable('Empleado')->find(array($request->getParameter('id'))), sprintf('Object empleado does not exist (%s).', $request->getParameter('id')));
    $this->form = new EmpleadoForm($empleado);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($empleado = Doctrine_Core::getTable('Empleado')->find(array($request->getParameter('id'))), sprintf('Object empleado does not exist (%s).', $request->getParameter('id')));
    $this->form = new EmpleadoForm($empleado);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($empleado = Doctrine_Core::getTable('Empleado')->find(array($request->getParameter('id'))), sprintf('Object empleado does not exist (%s).', $request->getParameter('id')));
    $empleado->delete();

    $this->redirect('empleado/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $empleado = $form->save();

      $this->redirect('empleado/mostrar?id='.$empleado->getId());
    }
  }
}
