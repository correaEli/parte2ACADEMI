<?php
class Profile {
    public $id = -1;
    public $Name;
    public $LV;
    public $Money;
    public $Academia;
    public $Club;
    
    public static function loadFromID($id) {
            $records = getResultFromSQL('SELECT * FROM Student_Profile WHERE id = ?', [$id]);        
        
       if (count($records) == 0) {
            return null;
        }
        
        $record = $records[0];
        $u = new User();
        
        $u->id = $id;
        $u->Name = $record['Name'];
        $u->LV = $record['Lv'];
        $u->Money = $record['Money'];
        $u->Academia = $record['Academic'];
        $u->Club = $record['Club'];
        return $u;
    }
    
    
}


?>
