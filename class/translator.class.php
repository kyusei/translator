<?php

class TTranslator extends TObjetStd {
    
    
    function __construct(){
        
        
        $this->set_table(MAIN_DB_PREFIX.'translator');    
        $this->add_champs('langue,mot_origine,traduction','type=chaine;');
        
        $this->_init_vars();
        
        $this->start();
    }
    
    
}

