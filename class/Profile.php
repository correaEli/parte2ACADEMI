<?php
class Profile {
    public $id = -1;
    public $Name;
    public $LV;
    public $Money;
    public $Academia;
    public $Club;
  
    public $ActionHP;
    public $ActionAttack;
    public $ActionDeffens;
    public $ActionInteligen;
    public $ActionStamina;
    public $ActionSpeed;

    public $Foes;
    public $Friends;

    public $Craft;

    public $Sorcery;

    public $Message;
    
    
    
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
            public static function loadFromName($Name) {
                    $records = getResultFromSQL('SELECT * FROM Student_Profile WHERE Name = ?', [$Name]);        
                
               if (count($records) == 0) {
                    return null;
                }
                
                $record = $records[0];
                $u = new User();
                
                $u->id = $record['ID'];
                $u->Name = $Name;
                $u->LV = $record['Lv'];
                $u->Money = $record['Money'];
                $u->Academia = $record['Academic'];
                $u->Club = $record['Club'];
                        
                return $u;
            }
            
            public static function loadFromStats($ID) {
                $records = getResultFromSQL('SELECT Stats_Type,Action_Point FROM `Student_Stats` WHERE IDProfile = ?', [$ID]);
                
                    if (count($records) == 0) {
                    return null;
                    }
                    $record = $records[0];
                    $u = new User();
                    
                   foreach ($records as $rec) {
                        if ($rec['Stats_Type'] == 'atk') {
                            $u->ActionAttack = $rec['Action_Point'];
                        }
                        else if ($rec['Stats_Type'] == 'def') {
                            $u->ActionDeffens = $rec['Action_Point'];
                        }
                        else if ($rec['Stats_Type'] == 'HP') {
                            $u->ActionHP = $rec['Action_Point'];
                        }
                        else if ($rec['Stats_Type'] == 'sta') {
                            $u->ActionStamina = $rec['Action_Point'];
                        }
                        else if ($rec['Stats_Type'] == 'int') {
                            $u->ActionInteligen = $rec['Action_Point'];
                        }
                        else if ($rec['Stats_Type'] == 'spe') {
                            $u->ActionSpeed = $rec['Action_Point'];
                        }
                    }
                    return $u;
            }

            public static function loadFromFoes($ID) {
            $records = getResultFromSQL('SELECT `Name` FROM `Student_Foe` INNER JOIN `Student_Profile` on `Student_Foe`.`IDProfileFoe`=
                                        `Student_Profile`.`ID` WHERE IDProfile = ?', [$ID]);
            
                    if (count($records) == 0) {
                    return null;
                    }
                    $record = $records[0];
                    $u = new User();
                        foreach ($records as $rec){
                            $u->Foes[] = $rec['Name'];
                        }
                    return $u;
            }
            public static function loadFromFriend($ID) {
            $records = getResultFromSQL('SELECT `Name` FROM `Student_Friends`
                                        INNER JOIN `Student_Profile` on `Student_Friends`.`IDProfileFriends`= `Student_Profile`.`ID`
                                        WHERE IDProfile =?', [$ID]);
            
                    if (count($records) == 0) {
                    return null;
                    }
                    $record = $records[0];
                    $u = new User();
                        foreach ($records as $rec){
                            $u->Friend[] = $rec['Name'];
                        }
                    return $u;
            }
           
    
            public static function loadFromCraft($ID) {
            $records = getResultFromSQL('SELECT * FROM `Student_Craft` WHERE IDStats = ?', [$ID]);
            
                    if (count($records) == 0) {
                    return null;
                    }
                    $record = $records[0];
                    $u = new User();
                        foreach ($records as $rec){
                            
                            $u->Name[] = $rec['NameCraft'];
                            $u->Description[] = $rec['Description'];
                            $u->StatsUP[] = $rec['StatsUP'];
                            $u->Action_Point[] = $rec['Action_Points'];
                        }
                    return $u;
            }
            
             public static function loadFromSorcery($ID) {
            $records = getResultFromSQL('SELECT * FROM `Student_Sorcery` WHERE IDStats = ?', [$ID]);
            
                    if (count($records) == 0) {
                    return null;
                    }
                    $record = $records[0];
                    $u = new User();
                        foreach ($records as $rec){
                            
                            $u->Name[] = $rec['NameSorcery'];
                            $u->Description[] = $rec['Description'];
                            $u->Action_Point[] = $rec['Action_Points'];
                        }
                    return $u;
            }
            
}


?>
