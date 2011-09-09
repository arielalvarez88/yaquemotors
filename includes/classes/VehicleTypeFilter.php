<?php
require_once dirname(__FILE__).'/IFilter.php';



class VehicleTypeFilter implements IFilter{
    
    private  $fieldName;
    private  $value;
    public function __construct($value)
    {
        $this->fieldName = 'field_vehicle_type';
        $this->value = $value;
    }
    
    public function meetsCondition($node)    
    {
        
        
        $fieldName = $this->fieldName;
        $field = $node->$fieldName;
        
        return $field[0]['value'] == $this->value;
    }
    
}

?>
