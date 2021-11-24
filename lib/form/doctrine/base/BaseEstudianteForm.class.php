<?php

/**
 * Estudiante form base class.
 *
 * @method Estudiante getObject() Returns the current form's model object
 *
 * @package    registro
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEstudianteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_estudiante' => new sfWidgetFormInputHidden(),
      'nombres'       => new sfWidgetFormInputText(),
      'apellidos'     => new sfWidgetFormInputText(),
      'email'         => new sfWidgetFormInputText(),
      'telefono'      => new sfWidgetFormInputText(),
      'interesado'    => new sfWidgetFormSelect(array(
          'choices' => array('Bachillerato'=>'Bachillerato', 'Inglés'=>'Inglés', 'Preicfes'=>'Preicfes')) ),
      'contactado'    => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id_estudiante' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_estudiante')), 'empty_value' => $this->getObject()->get('id_estudiante'), 'required' => false)),
      'nombres'       => new sfValidatorString(array('max_length' => 50)),
      'apellidos'     => new sfValidatorString(array('max_length' => 50)),
      'email'         => new sfValidatorString(array('max_length' => 50)),
      'telefono'      => new sfValidatorString(array('max_length' => 10)),
      'interesado'    => new sfValidatorString(array('max_length' => 50)),
      'contactado'    => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('estudiante[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Estudiante';
  }

}
