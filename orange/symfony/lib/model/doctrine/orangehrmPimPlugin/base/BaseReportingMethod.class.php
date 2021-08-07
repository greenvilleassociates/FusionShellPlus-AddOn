<?php

/**
 * BaseReportingMethod
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property int              $id                        Type: integer(4), primary key
 * @property string           $name                      Type: string(100)
 * @property ReportTo         $ReportTo                  
 *  
 * @method int                getId()                    Type: integer(4), primary key
 * @method string             getName()                  Type: string(100)
 * @method ReportTo           getReportTo()              
 *  
 * @method ReportingMethod    setId(int $val)            Type: integer(4), primary key
 * @method ReportingMethod    setName(string $val)       Type: string(100)
 * @method ReportingMethod    setReportTo(ReportTo $val) 
 *  
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseReportingMethod extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_emp_reporting_method');
        $this->hasColumn('reporting_method_id as id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('reporting_method_name as name', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ReportTo', array(
             'local' => 'id',
             'foreign' => 'reportingMethodId'));
    }
}