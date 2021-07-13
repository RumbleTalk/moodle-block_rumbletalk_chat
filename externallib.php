<?php

require_once("$CFG->libdir/externallib.php");

class create_account_external extends external_api {
        
    public static function account_create($itemid) {
        global $DB;
        //$params = self::validate_parameters(self::getExample_parameters(), array());
        $params = self::validate_parameters(self::loadsettings_parameters(), 
                array('itemid'=>$itemid));

        $sql = 'SELECT content FROM {testtest} WHERE id = ?';
        $paramsDB = $params; //array($itemid);
        $db_result = $DB->get_records_sql($sql,$paramsDB);
        
        return $db_result;
    }
    
}


