<?php

class User {
    public $id = -1;
    //public $username;
    //public $password;
    public $Name;
    public $email;
    
    public static function loadFromID($id) {
            $records = getResultFromSQL('SELECT * FROM Login WHERE id = ?', [$id]);        
        
       if (count($records) == 0) {
            return null;
        }
        
        $record = $records[0];
        $u = new User();
        
        $u->id = $id;
        $u->Name = $record['First_Name'];
        $u->username = $record['UserName'];
        $u->password = $record['Password'];
        $u->email = $record['Email'];
        
        return $u;
    }
    
    public static function loadFromUsername($username) {
        $records = getResultFromSQL('SELECT `ID`,`UserName`,`Password`,`Email` FROM `Login`
                                    
                                    WHERE `UserName`= ?', [$username]);
        
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
    public function save() {
        if ($this->id == -1) {
            $sql = "INSERT INTO `Login` (`ID`, `UserName`, `Password`, `First_Name`, `Last_Name`, `Email`) VALUES (NULL, ?, ?, ? , ?, ?);";
            
            getResultFromSQL($sql, [$this->username, $this->Password, $this->First_Name, $this->Last_Name, $this->email]);
        }
    }
      
    
    public function validatePassword($password) {
        return ($password == $this->password);
    }
}


?>