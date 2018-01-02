<?php
class Database
{
    protected $pdo='';
    protected $sql='';
    protected $stateMent='';
    public function __construct()
    {
        try
        {
        $this->pdo=new PDO('mysql:host=localhost; dbname=showroom_cars','root','');
        $this->pdo->query('set names utf8');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    public function setQuery($sql)
    {
        $this->sql=$sql;
    }
    //thuc hien truy van hanh dong: insert, update, delete
    public function execute($option=array())
    {
        $this->stateMent=$this->pdo->prepare($this->sql);
        return $this->stateMent->execute($option);
        //return $this->stateMent;
    }
    //truy liet ke lay danh sach
    public function loadAllRow($option=array())
    {
        $this->stateMent=$this->pdo->prepare($this->sql);
        $this->stateMent->execute($option);
        return $this->stateMent->fetchAll(PDO::FETCH_ASSOC);
    }
    //thuc hien truy van liet ke lay 1 mot tin
    public function loadRow($option=array())
    {
        $this->stateMent=$this->pdo->prepare($this->sql);
        $this->stateMent->execute($option);
        return $this->stateMent->fetch(PDO::FETCH_ASSOC);
    }
    //Function count the record on the table
    public function loadRecord($option=array()) {
        if(!$option) {
            if(!$result = $this->execute())
                return false;
        }
        else {
            if(!$result = $this->execute($option))
                return false;
        }
        return $result->fetch(PDO::FETCH_COLUMN);
    }
    public function lastInsertId()
    {
        return $this->pdo->lastInsertId();
    }
    public function CountAll($option=array())
    {
        $this->stateMent=$this->pdo->prepare($this->sql);
        $this->stateMent->execute($option=array());
        return $this->stateMent->rowCount();
    }    
}
?>