<?php

/**
 * nestudioss actions.
 *
 * @package    inassVreposos
 * @subpackage nestudioss
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class nestudiossActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    /*$this->nestudioss = Doctrine_Core::getTable('Nestudios')
      ->createQuery('a')
      ->execute();
*/
    $page = $request->getParameter('pagina', 1);
    $this->nestudioss = Doctrine::getTable('Nestudios')->getListPager($page);
    $this->haveToPaginate = Doctrine::getTable('Nestudios')->haveToPaginate();
    $this->resultados = Doctrine::getTable('Nestudios')->getTotalResult();
    $this->paginas = Doctrine::getTable('Nestudios')->getTotalPages();
    $this->menu = Doctrine::getTable('Nestudios')->getDisplay(array(), true);


  }

  public function executeShow(sfWebRequest $request)
  {
    $this->nestudios = Doctrine_Core::getTable('Nestudios')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->nestudios);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new NestudiosForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new NestudiosForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($nestudios = Doctrine_Core::getTable('Nestudios')->find(array($request->getParameter('id'))), sprintf('Object nestudios does not exist (%s).', $request->getParameter('id')));
    $this->form = new NestudiosForm($nestudios);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($nestudios = Doctrine_Core::getTable('Nestudios')->find(array($request->getParameter('id'))), sprintf('Object nestudios does not exist (%s).', $request->getParameter('id')));
    $this->form = new NestudiosForm($nestudios);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($nestudios = Doctrine_Core::getTable('Nestudios')->find(array($request->getParameter('id'))), sprintf('Object nestudios does not exist (%s).', $request->getParameter('id')));
    $nestudios->delete();

    $this->redirect('nestudioss/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $nestudios = $form->save();

      $this->redirect('nestudioss/edit?id='.$nestudios->getId());
    }
  }
}
