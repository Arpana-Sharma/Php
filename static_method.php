<?php
    class domain {
        protected static function getWebsiteName() {
          return "home.com";
        }
      }
      
      class domainW3 extends domain {
        public $websiteName;
        public function __construct() {
          $this->websiteName = parent::getWebsiteName();
        }
      }
      
      $domainW3 = new domainW3;
      echo $domainW3 -> websiteName;
    //   class pi {
    //     public static $value = 3.14159;
    //   }
      
      // Get static property
    //   echo pi::$value;

      class pi {
        public static $value=3.14159;
        public function staticValue() {
          return self::$value;
        }
      }
      
      $pi = new pi();
      echo $pi->staticValue();

      class pi2 {
        public static $value=3.14159;
      }
      
      class x extends pi2 {
        public function xStatic() {
          return parent::$value;
        }
      }
      
      // Get value of static property directly via child class
      echo x::$value;
      
      // or get value of static property via xStatic() method
      $x = new x();
      echo $x->xStatic();
?>