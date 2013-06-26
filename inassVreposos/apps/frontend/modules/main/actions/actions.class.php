<?php

/**
 * main actions.
 *
 * @package    inass0800
 * @subpackage main
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mainActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {

  }

  public function executeChangePasswd(sfWebRequest $request) {
    if ($request->getMethod() == 'POST' ) {
        $response = $this->getUser()->cambiarPassword($this->getUser()->getGuardUser(), $request->getParameter('current_pass'), $request->getParameter('new_pass'), $request->getParameter('confirm'));
        $this->getUser()->setFlash('notice', $response);
    }
  }



}
