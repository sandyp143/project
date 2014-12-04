
<?php
 class showroom 
 {
 		private $showroom_id;
 		private $showroom_name;
 		private $model_name;
 		private $location;
 		private $is_deleted;
 		private $is_active;


 		public function set_showroom_name($name)
 		 {

		    	$this->showroom_name = trim($name);

				if($name == '') {
           		     throw new Exception('A name is required to create a showroom.');
        		}

				
	    }

	    public function get_showroom_name()
	    {
	    		return $show->showroom_name;



			}

	    public function set_location($name)
 		 {

		    	$this->location = trim($name);

				if($name == '') {
           		     throw new Exception('A location is required to create a showroom.');
        		}

				
	    }

	    public function set_model_name($name)
 		 {

		    	$this->model_name = trim($name);

				if($name == '') {
           		     throw new Exception('A model name is required to create a showroom.');
        		}

				
	    }

	    public function is_deleted() {
		           return ($this->is_deleted) ? true : false;
	             }




	    public function delete() {

		        if($this->is_deleted()) {
			         throw new exception('deleted');
		        }

		        $this->is_deleted = 1;
		        return $this;
	            }



	    public function is_active() {
		         return ($this->is_active) ? true : false;
	             }      



	    public function activate() {

		        if($this->is_deleted()) {
			         $this->throw_base_exception('deleted');
		         }

		        if($this->is_active()) {
			        throw new exception('active');
		         }

                $this->is_active = 1;
                return $this;
		        
	           }


	     public function check_model($model)
	     {

	     		if($this->model_exists($model) )
	     		{
	     			 throw new exception('This $model model exists in the showroom');
	     		}
	     		else
	     		{

	     			 throw new exception('This $model model  does not exists in the showroom');
	     		}

	     }

	     public function model_exists($model)
	     {
	     	if($this->model_name==$model)
	     	{
	     		return true;
	     	}
	     }





	    public static function create($params) {

		$showroom = new showroom;

		$showroom->name = $this->set_showroom_name($params[name]);
		$showroom->location = $this->set_location($params[location]);
		$showroom->model_name = $this->set_model_name($params[model_name]);
		$course->is_active = 1;
		$course->is_deleted = 0;
		

		return $showroom;
	}



	    






 	
 }