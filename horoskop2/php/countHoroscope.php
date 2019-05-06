<?php
    class user {
        private $horoscope;
         function __construct($sign) {
            $this->sign = $sign;
            if(strlen($sign) > 4){
                $sign = substr($sign, strlen($sign) - 4, strlen($sign));
                // [1995]0817
            }

            if(strlen($sign) < 4) {
            
                $this->horoscope = "<p>Wrong number</p>";
            
            } else if($sign >= '0120' && $sign <= '0218'){  
            
                $this->horoscope = "Vattumannen";
            
            } else if($sign >= '0219' && $sign <= '0320') {
              
                $this->horoscope = "Fiskarna";
                
            } else if($sign >= '0321' && $sign <= '0419') {
                
                  $this->horoscope = "Väduren";
                  
              } else if($sign >= '0420' && $sign <= '0520') {
                
                  $this->horoscope = "Oxen";
                  
              } else if($sign >= '0521' && $sign <= '0621') {
                
                  $this->horoscope = "Tvillingarna";
                  
              } else if($sign >= '0622' && $sign <= '0722'){  
              
                $this->horoscope = "Kräftan";
            
            } else if($sign >= '0723' && $sign <= '0822') {
                
                  $this->horoscope = "Lejonet";
                            
              } else if($sign >= '0823' && $sign <= '0922') {
                
                  $this->horoscope = "Jungfrun";
                  
              } else if($sign >= '0923' && $sign <= '1022') {
                
                  $this->horoscope = "Vågen";
                  
              } else if($sign >= '1023' && $sign <= '1121') {
                
                  $this->horoscope = "Skorpionen";
                  
              } else if($sign >= '1122' && $sign <= '1221') {
                
                  $this->horoscope = "Skytten";
                     
              } else if(($sign >= '1222' && $sign <= '1231') || $sign <= '0119') {
                
                  $this->horoscope = "Stenbocken";
                  
              }
            else {
            
            }
        }
        
        public function echoSign(){
            return $this->horoscope;
        }
        
    }
    $sign = $_POST["prsnnmr"];
    $horoscope = new user($sign);
?>