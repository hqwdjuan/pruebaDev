<?php

/**
 * Estudiante filter form base class.
 *
 * @package    registro
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEstudianteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombres'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'apellidos'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telefono'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'interesado'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'contactado'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombres'       => new sfValidatorPass(array('required' => false)),
      'apellidos'     => new sfValidatorPass(array('required' => false)),
      'email'         => new sfValidatorPass(array('required' => false)),
      'telefono'      => new sfValidatorPass(array('required' => false)),
      'interesado'    => new sfValidatorPass(array('required' => false)),
      'contactado'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('estudiante_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Estudiante';
  }

  public function getFields()
  {
    return array(
      'id_estudiante' => 'Number',
      'nombres'       => 'Text',
      'apellidos'     => 'Text',
      'email'         => 'Text',
      'telefono'      => 'Text',
      'interesado'    => 'Text',
      'contactado'    => 'Number',
    );
  }
}
