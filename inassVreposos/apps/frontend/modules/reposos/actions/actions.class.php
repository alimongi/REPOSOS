<?php

/**
 * reposos actions.
 *
 * @package    inassVreposos
 * @subpackage reposos
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class repososActions extends sfActions
{

  public function executeBuscarxFecha(sfWebRequest $request)
  {
       $this->form = new SearchForm();
  }

  public function executeMostrar(sfWebRequest $request)
    {
      
      if ($request->getMethod() == 'POST' ) {
          $fecha_inicio = explode("/",$request->getParameter('fecha_inicial'));
          $fecha_fin = explode("/",$request->getParameter('fecha_final'));
          $fecha_inicio = array_reverse($fecha_inicio);
          $fecha_fin = array_reverse($fecha_fin);
          $fecha_inicio = implode("-",$fecha_inicio);
          $fecha_fin = implode("-",$fecha_fin);
          $this->form = new SearchForm();

           $this->repososs = Doctrine_Query::create()
           ->select('r.id as id, e.nombre as nombre, e.apellido as apellido, e.cedula as cedula, e.cargo as cargo, e.activoivss as activo, r.finicio as inicio, r.ffin as fin, r.dias as dias, r.forma1452 as forma, r.finireposocont as reposocont, r.diasrepcont as ndias, s.descripcion as especialidad, c.nombre as centro, r.observacion as observacion')->from('reposos r')
           ->innerJoin('r.Empleado e')
           ->innerJoin('r.Especialidad s')
           ->innerJoin('r.Centros c')
           ->where('r.finicio >= ?', $fecha_inicio)
           ->andWhere('r.finicio <= ?', $fecha_fin)
           ->andWhere('r.deleted_at IS NULL')
           ->fetchArray();

       $this->fecha_inicial = $request->getParameter('fecha_inicial', '');
       $this->fecha_final = $request->getParameter('fecha_final', '');
            }
        $this->setTemplate('BuscarxFecha');

      $this->setTemplate('index2');
      $this->setLayout(false); // Esto desactiva la salida de datos por la vista y lo genera en un archivo de 
      $response = $this->getResponse();
      $response->setContentType('application/vnd.ms-excel');


    }





  public function executeBuscarxAnual(sfWebRequest $request)
  {
  }

  public function executeIndex13(sfWebRequest $request)
    {
           $this->repososene = Doctrine_Query::create()
           ->select('r.id as id, e.nombre as nombre, e.apellido as apellido, e.cedula as cedula, e.cargo as cargo, e.activoivss as activo, r.finicio as inicio, r.ffin as fin, r.dias as dias, r.forma1452 as forma, r.finireposocont as reposocont, r.diasrepcont as ndias, s.descripcion as especialidad, c.nombre as centro, r.observacion as observacion')->from('reposos r')
           ->innerJoin('r.Empleado e')
           ->innerJoin('r.Especialidad s')
           ->innerJoin('r.Centros c')
           ->where('r.finicio >= ?', '2013-01-01')
           ->andWhere('r.finicio <= ?', '2013-01-31')
           ->andWhere('r.deleted_at IS NULL')
           ->orderBy('r.finicio')
           ->fetchArray();

           $this->repososfeb = Doctrine_Query::create()
           ->select('r.id as id, e.nombre as nombre, e.apellido as apellido, e.cedula as cedula, e.cargo as cargo, e.activoivss as activo, r.finicio as inicio, r.ffin as fin, r.dias as dias, r.forma1452 as forma, r.finireposocont as reposocont, r.diasrepcont as ndias, s.descripcion as especialidad, c.nombre as centro, r.observacion as observacion')->from('reposos r')
           ->innerJoin('r.Empleado e')
           ->innerJoin('r.Especialidad s')
           ->innerJoin('r.Centros c')
           ->where('r.finicio >= ?', '2013-02-01')
           ->andWhere('r.finicio <= ?', '2013-02-31')
           ->andWhere('r.deleted_at IS NULL')
           ->orderBy('r.finicio')
           ->fetchArray();

           $this->repososmar = Doctrine_Query::create()
           ->select('r.id as id, e.nombre as nombre, e.apellido as apellido, e.cedula as cedula, e.cargo as cargo, e.activoivss as activo, r.finicio as inicio, r.ffin as fin, r.dias as dias, r.forma1452 as forma, r.finireposocont as reposocont, r.diasrepcont as ndias, s.descripcion as especialidad, c.nombre as centro, r.observacion as observacion')->from('reposos r')
           ->innerJoin('r.Empleado e')
           ->innerJoin('r.Especialidad s')
           ->innerJoin('r.Centros c')
           ->where('r.finicio >= ?', '2013-03-01')
           ->andWhere('r.finicio <= ?', '2013-03-31')
           ->andWhere('r.deleted_at IS NULL')
           ->orderBy('r.finicio')
           ->fetchArray();

           $this->repososabr = Doctrine_Query::create()
           ->select('r.id as id, e.nombre as nombre, e.apellido as apellido, e.cedula as cedula, e.cargo as cargo, e.activoivss as activo, r.finicio as inicio, r.ffin as fin, r.dias as dias, r.forma1452 as forma, r.finireposocont as reposocont, r.diasrepcont as ndias, s.descripcion as especialidad, c.nombre as centro, r.observacion as observacion')->from('reposos r')
           ->innerJoin('r.Empleado e')
           ->innerJoin('r.Especialidad s')
           ->innerJoin('r.Centros c')
           ->where('r.finicio >= ?', '2013-04-01')
           ->andWhere('r.finicio <= ?', '2013-04-31')
           ->andWhere('r.deleted_at IS NULL')
           ->orderBy('r.finicio')
           ->fetchArray();

           $this->repososmay = Doctrine_Query::create()
           ->select('r.id as id, e.nombre as nombre, e.apellido as apellido, e.cedula as cedula, e.cargo as cargo, e.activoivss as activo, r.finicio as inicio, r.ffin as fin, r.dias as dias, r.forma1452 as forma, r.finireposocont as reposocont, r.diasrepcont as ndias, s.descripcion as especialidad, c.nombre as centro, r.observacion as observacion')->from('reposos r')
           ->innerJoin('r.Empleado e')
           ->innerJoin('r.Especialidad s')
           ->innerJoin('r.Centros c')
           ->where('r.finicio >= ?', '2013-05-01')
           ->andWhere('r.finicio <= ?', '2013-05-31')
           ->andWhere('r.deleted_at IS NULL')
           ->orderBy('r.finicio')
           ->fetchArray();       

           $this->repososjun = Doctrine_Query::create()
           ->select('r.id as id, e.nombre as nombre, e.apellido as apellido, e.cedula as cedula, e.cargo as cargo, e.activoivss as activo, r.finicio as inicio, r.ffin as fin, r.dias as dias, r.forma1452 as forma, r.finireposocont as reposocont, r.diasrepcont as ndias, s.descripcion as especialidad, c.nombre as centro, r.observacion as observacion')->from('reposos r')
           ->innerJoin('r.Empleado e')
           ->innerJoin('r.Especialidad s')
           ->innerJoin('r.Centros c')
           ->where('r.finicio >= ?', '2013-06-01')
           ->andWhere('r.finicio <= ?', '2013-06-31')
           ->andWhere('r.deleted_at IS NULL')
           ->orderBy('r.finicio')
           ->fetchArray();

           $this->repososjul = Doctrine_Query::create()
           ->select('r.id as id, e.nombre as nombre, e.apellido as apellido, e.cedula as cedula, e.cargo as cargo, e.activoivss as activo, r.finicio as inicio, r.ffin as fin, r.dias as dias, r.forma1452 as forma, r.finireposocont as reposocont, r.diasrepcont as ndias, s.descripcion as especialidad, c.nombre as centro, r.observacion as observacion')->from('reposos r')
           ->innerJoin('r.Empleado e')
           ->innerJoin('r.Especialidad s')
           ->innerJoin('r.Centros c')
           ->where('r.finicio >= ?', '2013-07-01')
           ->andWhere('r.finicio <= ?', '2013-07-31')
           ->andWhere('r.deleted_at IS NULL')
           ->orderBy('r.finicio')
           ->fetchArray();

           $this->repososago = Doctrine_Query::create()
           ->select('r.id as id, e.nombre as nombre, e.apellido as apellido, e.cedula as cedula, e.cargo as cargo, e.activoivss as activo, r.finicio as inicio, r.ffin as fin, r.dias as dias, r.forma1452 as forma, r.finireposocont as reposocont, r.diasrepcont as ndias, s.descripcion as especialidad, c.nombre as centro, r.observacion as observacion')->from('reposos r')
           ->innerJoin('r.Empleado e')
           ->innerJoin('r.Especialidad s')
           ->innerJoin('r.Centros c')
           ->where('r.finicio >= ?', '2013-08-01')
           ->andWhere('r.finicio <= ?', '2013-08-31')
           ->andWhere('r.deleted_at IS NULL')
           ->orderBy('r.finicio')
           ->fetchArray();

           $this->reposossep = Doctrine_Query::create()
           ->select('r.id as id, e.nombre as nombre, e.apellido as apellido, e.cedula as cedula, e.cargo as cargo, e.activoivss as activo, r.finicio as inicio, r.ffin as fin, r.dias as dias, r.forma1452 as forma, r.finireposocont as reposocont, r.diasrepcont as ndias, s.descripcion as especialidad, c.nombre as centro, r.observacion as observacion')->from('reposos r')
           ->innerJoin('r.Empleado e')
           ->innerJoin('r.Especialidad s')
           ->innerJoin('r.Centros c')
           ->where('r.finicio >= ?', '2013-09-01')
           ->andWhere('r.finicio <= ?', '2013-09-31')
           ->andWhere('r.deleted_at IS NULL')
           ->orderBy('r.finicio')
           ->fetchArray();

           $this->repososoct = Doctrine_Query::create()
           ->select('r.id as id, e.nombre as nombre, e.apellido as apellido, e.cedula as cedula, e.cargo as cargo, e.activoivss as activo, r.finicio as inicio, r.ffin as fin, r.dias as dias, r.forma1452 as forma, r.finireposocont as reposocont, r.diasrepcont as ndias, s.descripcion as especialidad, c.nombre as centro, r.observacion as observacion')->from('reposos r')
           ->innerJoin('r.Empleado e')
           ->innerJoin('r.Especialidad s')
           ->innerJoin('r.Centros c')
           ->where('r.finicio >= ?', '2013-10-01')
           ->andWhere('r.finicio <= ?', '2013-10-31')
           ->andWhere('r.deleted_at IS NULL')
           ->orderBy('r.finicio')
           ->fetchArray();

           $this->repososnov = Doctrine_Query::create()
           ->select('r.id as id, e.nombre as nombre, e.apellido as apellido, e.cedula as cedula, e.cargo as cargo, e.activoivss as activo, r.finicio as inicio, r.ffin as fin, r.dias as dias, r.forma1452 as forma, r.finireposocont as reposocont, r.diasrepcont as ndias, s.descripcion as especialidad, c.nombre as centro, r.observacion as observacion')->from('reposos r')
           ->innerJoin('r.Empleado e')
           ->innerJoin('r.Especialidad s')
           ->innerJoin('r.Centros c')
           ->where('r.finicio >= ?', '2013-11-01')
           ->andWhere('r.finicio <= ?', '2013-11-31')
           ->andWhere('r.deleted_at IS NULL')
           ->orderBy('r.finicio')
           ->fetchArray();

           $this->repososdic = Doctrine_Query::create()
           ->select('r.id as id, e.nombre as nombre, e.apellido as apellido, e.cedula as cedula, e.cargo as cargo, e.activoivss as activo, r.finicio as inicio, r.ffin as fin, r.dias as dias, r.forma1452 as forma, r.finireposocont as reposocont, r.diasrepcont as ndias, s.descripcion as especialidad, c.nombre as centro, r.observacion as observacion')->from('reposos r')
           ->innerJoin('r.Empleado e')
           ->innerJoin('r.Especialidad s')
           ->innerJoin('r.Centros c')
           ->where('r.finicio >= ?', '2013-12-01')
           ->andWhere('r.finicio <= ?', '2013-12-31')
           ->andWhere('r.deleted_at IS NULL')
           ->orderBy('r.finicio')
           ->fetchArray();

    $this->setTemplate('index13');
    $this->setLayout(false); // Esto desactiva la salida de datos por la vista y lo genera en un archivo de 
    $response = $this->getResponse();
    $response->setContentType('application/vnd.ms-excel');

    }



public function executeBuscarEmple(sfWebRequest $request) {
       $this->form = new SearchForm();
}


  public function executeMostraremple(sfWebRequest $request)
    {
        if ($request->getMethod() == 'POST' ) {
           // $this->empleado = Doctrine_Query::create()->select()->from('Empleado e')->where('e.cedula = ?', $request->getParameter('ci_empleado'))->fetchOne();
          //  if(!$this->empleado){
          //      $this->getUser()->setFlash('notice', 'El registro para la Cédula '.$request->getParameter('ci_empleado').' no existe.');
          //      $this->redirect('reposos/BuscarEmple');
          //  }

          $fecha_inicio = explode("/",$request->getParameter('fecha_inicial'));
          $fecha_fin = explode("/",$request->getParameter('fecha_final'));
          $fecha_inicio = array_reverse($fecha_inicio);
          $fecha_fin = array_reverse($fecha_fin);
          $fecha_inicio = implode("-",$fecha_inicio);
          $fecha_fin = implode("-",$fecha_fin);

           $this->repososs = Doctrine_Query::create()
           ->select('r.id as id, e.nombre as nombre, e.apellido as apellido, e.cedula as cedula, e.cargo as cargo, e.activoivss as activo, r.finicio as inicio, r.ffin as fin, r.dias as dias, r.forma1452 as forma, r.finireposocont as reposocont, r.diasrepcont as ndias, s.descripcion as especialidad, c.nombre as centro, r.observacion as observacion')->from('reposos r')
           ->innerJoin('r.Empleado e')
           ->innerJoin('r.Especialidad s')
           ->innerJoin('r.Centros c')
           ->where('e.cedula = ?', $request->getParameter('ci_empleado'))
           ->andwhere('r.finicio >= ?', $fecha_inicio)
           ->andWhere('r.finicio <= ?', $fecha_fin)
           ->andWhere('r.deleted_at IS NULL')
           ->orderBy('r.finicio')
           ->fetchArray();

       $this->fecha_inicial = $request->getParameter('fecha_inicial', '');
       $this->fecha_final = $request->getParameter('fecha_final', '');

            $this->setTemplate('IndexEmple');
        }
    }





  public function executeIndex(sfWebRequest $request)
  {
   /* $this->repososs = Doctrine_Core::getTable('Reposos')
      ->createQuery('a')
      ->execute();
*/
    $page = $request->getParameter('pagina', 1);
    $this->repososs = Doctrine::getTable('Reposos')->getListPager($page);
    $this->haveToPaginate = Doctrine::getTable('Reposos')->haveToPaginate();
    $this->resultados = Doctrine::getTable('Reposos')->getTotalResult();
    $this->paginas = Doctrine::getTable('Reposos')->getTotalPages();
    $this->menu = Doctrine::getTable('Reposos')->getDisplay(array(), true);

  }


  public function executeShow(sfWebRequest $request)
  {
    $this->reposos = Doctrine_Core::getTable('Reposos')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->reposos);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new RepososForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new RepososForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($reposos = Doctrine_Core::getTable('Reposos')->find(array($request->getParameter('id'))), sprintf('Object reposos does not exist (%s).', $request->getParameter('id')));
    $this->form = new RepososForm($reposos);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($reposos = Doctrine_Core::getTable('Reposos')->find(array($request->getParameter('id'))), sprintf('Object reposos does not exist (%s).', $request->getParameter('id')));
    $this->form = new RepososForm($reposos);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($reposos = Doctrine_Core::getTable('Reposos')->find(array($request->getParameter('id'))), sprintf('Object reposos does not exist (%s).', $request->getParameter('id')));
    $reposos->delete();

    $this->redirect('reposos/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $reposos = $form->save();

      $this->redirect('reposos/edit?id='.$reposos->getId());
    }
  }
}
