<?php



                 function InsertIntoDB(&$formvars)
    {
    
       
        
        $insert_query = 'insert into '.$this->tablename.'(
                         questions
                         )
                values
                (
                "' . $this->SanitizeForSQL($formvars['questions']) . '",
               
                )';      
        if(!mysql_query( $insert_query ,$this->connection))
        {
            $this->HandleDBError("Error inserting data to the table\nquery:$insert_query");
            return false;
        }        
        return true;
    }