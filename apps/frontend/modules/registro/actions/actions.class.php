<?php

/**
 * registro actions.
 *
 * @package    registro
 * @subpackage registro
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class registroActions extends sfActions
{/*
  public function executeIndex(sfWebRequest $request)
  {
    $this->estudiantes = Doctrine_Core::getTable('Estudiante')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->estudiante = Doctrine_Core::getTable('Estudiante')->find(array($request->getParameter('id_estudiante')));
    $this->forward404Unless($this->estudiante);
  }*/

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new EstudianteForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new EstudianteForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }
    /*
      public function executeEdit(sfWebRequest $request)
      {
        $this->forward404Unless($estudiante = Doctrine_Core::getTable('Estudiante')->find(array($request->getParameter('id_estudiante'))), sprintf('Object estudiante does not exist (%s).', $request->getParameter('id_estudiante')));
        $this->form = new EstudianteForm($estudiante);
      }

      public function executeUpdate(sfWebRequest $request)
      {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($estudiante = Doctrine_Core::getTable('Estudiante')->find(array($request->getParameter('id_estudiante'))), sprintf('Object estudiante does not exist (%s).', $request->getParameter('id_estudiante')));
        $this->form = new EstudianteForm($estudiante);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
      }

      public function executeDelete(sfWebRequest $request)
      {
        $request->checkCSRFProtection();

        $this->forward404Unless($estudiante = Doctrine_Core::getTable('Estudiante')->find(array($request->getParameter('id_estudiante'))), sprintf('Object estudiante does not exist (%s).', $request->getParameter('id_estudiante')));
        $estudiante->delete();

        $this->redirect('registro/index');
      }*/

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
        $q =Doctrine_Query::create()
            ->from('estudiante e')
            ->where('email = ?',$form->getValue("email") );
        $dataU = $q->execute()->getData();
        if(sizeof($dataU[0]) == 0){
            $estudiante = $form->save();
            $this->getUser()->setFlash('notice', sprintf('Registrado correctamente.'));
        }else{
            // todo -> update contactado a 0 cuando ya ha estado registrado
            $this->getUser()->setFlash('warning', sprintf('Actualizado correctamente.'));
        }


      $this->redirect('registro/new');
    }
  }
}
