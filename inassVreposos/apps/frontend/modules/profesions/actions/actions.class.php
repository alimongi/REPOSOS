<?php

/**
 * profesions actions.
 *
 * @package    inassVreposos
 * @subpackage profesions
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class profesionsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
 /*   $this->profesions = Doctrine_Core::getTable('Profesion')
      ->createQuery('a')
      ->execute();
*/
    $page = $request->getParameter('pagina', 1);
    $this->profesions = Doctrine::getTable('Profesion')->getListPager($page);
    $this->haveToPaginate = Doctrine::getTable('Profesion')->haveToPaginate();
    $this->resultados = Doctrine::getTable('Profesion')->getTotalResult();
    $this->paginas = Doctrine::getTable('Profesion')->getTotalPages();
    $this->menu = Doctrine::getTable('Profesion')->getDisplay(array(), true);



  }

  public function executeShow(sfWebRequest $request)
  {
    $this->profesion = Doctrine_Core::getTable('Profesion')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->profesion);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ProfesionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ProfesionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($profesion = Doctrine_Core::getTable('Profesion')->find(array($request->getParameter('id'))), sprintf('Object profesion does not exist (%s).', $request->getParameter('id')));
    $this->form = new ProfesionForm($profesion);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($profesion = Doctrine_Core::getTable('Profesion')->find(array($request->getParameter('id'))), sprintf('Object profesion does not exist (%s).', $request->getParameter('id')));
    $this->form = new ProfesionForm($profesion);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($profesion = Doctrine_Core::getTable('Profesion')->find(array($request->getParameter('id'))), sprintf('Object profesion does not exist (%s).', $request->getParameter('id')));
    $profesion->delete();

    $this->redirect('profesions/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $profesion = $form->save();

      $this->redirect('profesions/edit?id='.$profesion->getId());
    }
  }
}
