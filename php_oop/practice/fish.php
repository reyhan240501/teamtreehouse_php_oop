<?php

class fish
{
    public $common_name;
    public $flavor;
    public $record_weight;

    public function getInfo() {
        return "A {$this->common_name} is an {$this->flavor} flavored fish. The world record weight is {$this->record_weight}.";
    }

    function __construct($common_name,$flavor,$record_weight) {
      $this->common_name = $common_name;
      $this->flavor = $flavor;
      $this->record_weight = $record_weight;
    }  
}
    
$bass=new fish("largemonth bass","excelent","22 pounds 5 ouncs");
echo $bass->getInfo();
// echo (new fish())->getInfo();