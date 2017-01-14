<?php

use Phalcon\Mvc\Model;

class Demotable extends Model
{

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=true)
     */
     
    public $firstname;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=true)
     */
    public $middlename;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=true)
     */
    public $lastname;

    /**
     * Initialize method for model.
     */
     public $db;
     
     public function initialize()
   	{
   		//parent::initialize();
   		$this->db=$this->getDi()->getShared('db');
   	}
     
    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'demotable';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Demotable[]|Demotable
     */
     
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Demotable
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }
    
    public function deleteValue($firstname)
    {
    	$condition = $this->db->execute("DELETE FROM demotable WHERE firstname = :fname",array(
    		"fname" => $firstname));
    		
    	return $condition;
    }
    public function insertValue($valueList){
    	$condition = $this->db->execute("INSERT INTO demotable VALUES (:firstname,:middlename,:lastname)",$valueList);
    	return $condition;
    }
}
