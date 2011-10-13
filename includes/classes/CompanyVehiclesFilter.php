<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once dirname(__FILE__).'/IFilter.php';

class CompanyVehiclesFilter implements IFilter
{
       private  $fieldName;
    
    public function __construct()
    {
        $this->fieldName = 'field_vehicle_type';
        
    }
    
    public function meetsCondition($node)    
    {
        
        
        $fieldName = $this->fieldName;
        $field = $node->$fieldName;
        
        return $field[0]['value'] == 'camioneta' || $field[0]['value'] == 'camion' || 'minibus';
    }
}
?>
