<?php

class User {
    public $id = -1;
    public $username;
    public $password;
    public $email;
    
    public static function loadFromID($id) {
            $records = getResultFromSQL('SELECT * FROM Login WHERE id = ?', [$id]);        
        
       if (count($records) == 0) {
            return null;
        }
        
        $record = $records[0];
        $u = new User();
        
        $u->id = $id;
        $u->username = $record['UserName'];
        $u->password = $record['Password'];
        $u->email = $record['Email'];
        
        return $u;
    }
    
    public static function loadFromUsername($username) {
        $records = getResultFromSQL('SELECT * FROM Login WHERE UserName = ?', [$username]);
        
            if (count($records) == 0) {
               return null;
           }
           
           $record = $records[0];
           $u = new User();
           
           $u->id = $record['ID'];
           $u->username = $record['UserName'];
           $u->password = $record['Password'];
           $u->email = $record['Email'];
           
           return $u;
    }
      
    
    public function validatePassword($password) {
        return ($password == $this->password);
    }
}


?>