<?php

require_once 'Model1.php';	

class User extends Model {

    protected static $table = 'users';

    public function save()
    {
    	self::dbConnect();
    	// Ensure attributes array contains somthing
    	if(isset($this->attributes)){
    		if(isset($this->attributes['id'])){
    			$this->update();
    		}else{
    			$this->insert();
    		}
    	}
    	
    }

    public static function find($id)
    {
    	 self::dbConnect();

        // @TODO: Create select statement using prepared statements
        $query = ('SELECT * FROM users WHERE id = :id');
        $stmt = self::$dbc->prepare($query);
        //bind
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
       	$stmtexecute();

        // @TODO: Store the resultset in a variable named $result
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // The following code will set the attributes on the calling object based on the result variable's contents

        $instance = null;
        if ($result){
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
    }

    public static function all()
    {	
    	// start by connecting to db
    	self::dbConnect();
    	// get all rows
    	$stmt = self::$dbc->query('SELECT * FROM users');
    	
    	// assign results to variable
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    	return $result;
    }

    public function update()
    {

    }

    public function insert()
    {
    	$query = 'INSERT INTO users(first_name, last_name) VALUES (:first_name, :last_name);';
    	$stmt = self::$dbc->prepare($query);
    	$stmt->bindValue(':first_name', $this->attributes['first_name'], PDO::PARAM_STR);
    	$stmt->bindValue(':last_name', $this->attributes['last_name'], PDO::PARAM_STR);
    	$stmt->execute();
    }

    public function delete()
    {
    	$query = 'DELETE * FROM users WHERE id = :id';
    	$stmt = self::$dbc->prepare($query)
    	$stmt->bindValue(':id', $id, PDO::PARAM_INT);
    	$stmt->execute();
    }
}