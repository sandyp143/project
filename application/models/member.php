<?php
class Member extends CI_Model {
   


    public var $check=false; //Create a variable for checking if it is already member or not
    public var $varified=false;// check if created member is varified or not
    public var $deleted=false;// check if member is alredy deleted or not

    public function validate($array){
      // this function is used to validate all the input field in create member

       if($arrrasy['f_name'] == null || $f_name == '')
       {
        echo "first name is missing";
       }

       if($l_name == null || $l_name == '')
       {
        echo "last name is missing";
       }

       if($email == null || $email == '')
       {
        echo "email name is missing";
       }


    }


     public function delete() {// delete certain member
              check_deleted();
              if ($deleted==true) {
                echo "already deleted";

                # code...
              }
              else{
                $this->deleted = true;
              }
        }



    public function send_confirm_mail(){//send confirm mail

    } 
    public function check_confirmed_status(){
      if ($confirm=true) {
        //used for further acess of system
        # code...
      }
      else{
        echo "plese confirm email";
        $this->send_confirm_mail();
      }
    }   
   



}




