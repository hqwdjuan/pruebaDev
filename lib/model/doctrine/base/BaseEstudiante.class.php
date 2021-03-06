<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Estudiante', 'doctrine');

/**
 * BaseEstudiante
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_estudiante
 * @property string $nombres
 * @property string $apellidos
 * @property string $email
 * @property string $telefono
 * @property string $interesado
 * @property integer $contactado
 * 
 * @method integer    get()              Returns the current record's "id_estudiante" value
 * @method string     get()              Returns the current record's "nombres" value
 * @method string     get()              Returns the current record's "apellidos" value
 * @method string     get()              Returns the current record's "email" value
 * @method string     get()              Returns the current record's "telefono" value
 * @method string     get()              Returns the current record's "interesado" value
 * @method integer    get()              Returns the current record's "contactado" value
 * @method Estudiante set()              Sets the current record's "id_estudiante" value
 * @method Estudiante set()              Sets the current record's "nombres" value
 * @method Estudiante set()              Sets the current record's "apellidos" value
 * @method Estudiante set()              Sets the current record's "email" value
 * @method Estudiante set()              Sets the current record's "telefono" value
 * @method Estudiante set()              Sets the current record's "interesado" value
 * @method Estudiante set()              Sets the current record's "contactado" value
 * 
 * @package    registro
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEstudiante extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('estudiante');
        $this->hasColumn('id_estudiante', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombres', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('apellidos', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('email', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('telefono', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('interesado', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('contactado', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}