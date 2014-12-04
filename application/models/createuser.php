

<?php 

class User extends CI_Model {

  

      public $first_name;
        public $last_name;
        public $email;

 
        public function __construct() {
        }

        
       
        public function set_first_name($fname) {
                if($fname == null || $fname == '') {
                    echo 'First Name required';
                }else{
                $this->first_name = $fname;
                }
        }
 
        public function set_last_name($lname) {
                if($lname == null || $lname == '') {
                    echo 'Last Name required';
                }else{
                $this->last_name = $lname;
                }
        }
        
         public function set_email($email) {
                if($email == null || $email == '') {
                    echo 'Email required';
                }else{
                $this->email = $email;
                }
        }
 
 
        public static function create($data) {
                $user = new User();
                $first_name = $_POST['firstname'];
                $last_name = $_POST['last_name'];
                $user->set_first_name($first_name);
                 $user->set_last_name($last_name);
 

 
                return $user;
        }
}


?>
