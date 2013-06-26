<?php

/**
 * especialidad actions.
 *
 * @package    inassVreposos
 * @subpackage especialidad
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class especialidadActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
  /*  $this->especialidads = Doctrine_Core::getTable('Especialidad')
      ->createQuery('a')
      ->andWhere('a.deleted_at IS NULL')
      ->execute();
*/
    $page = $request->getParameter('pagina', 1);
    $this->especialidads = Doctrine::getTable('Especialidad')->getListPager($page);
    $this->haveToPaginate = Doctrine::getTable('Especialidad')->haveToPaginate();
    $this->resultados = Doctrine::getTable('Especialidad')->getTotalResult();
    $this->paginas = Doctrine::getTable('Especialidad')->getTotalPages();
    $this->menu = Doctrine::getTable('Especialidad')->getDisplay(array(), true);

  }

  public function executeShow(sfWebRequest $request)
  {
    $this->especialidad = Doctrine_Core::getTable('Especialidad')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->especialidad);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new EspecialidadForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new EspecialidadForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($especialidad = Doctrine_Core::getTable('Especialidad')->find(array($request->getParameter('id'))), sprintf('Object especialidad does not exist (%s).', $request->getParameter('id')));
    $this->form = new EspecialidadForm($especialidad);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($especialidad = Doctrine_Core::getTable('Especialidad')->find(array($request->getParameter('id'))), sprintf('Object especialidad does not exist (%s).', $request->getParameter('id')));
    $this->form = new EspecialidadForm($especialidad);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($especialidad = Doctrine_Core::getTable('Especialidad')->find(array($request->getParameter('id'))), sprintf('Object especialidad does not exist (%s).', $request->getParameter('id')));
    $especialidad->delete();

    $this->redirect('especialidad/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $especialidad = $form->save();

      $this->redirect('especialidad/edit?id='.$especialidad->getId());
    }
  }
}
