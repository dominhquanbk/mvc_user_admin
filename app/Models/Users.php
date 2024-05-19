<?php 
namespace App\Models;

class Users {
	protected $id;
	protected $last_name;
	protected $first_name;
	protected $address;
	protected $city;
	protected $image;
	protected $is_admin = 0;

	// GET METHODS
	public function getId(){
		return $this->id;
	}
	
	public function getLastName(){
		return $this->last_name;
	}

	public function getFirstName(){
		return $this->first_name;
	}

	public function getAddress(){
		return $this->address;
	}

	public function getCity(){
		return $this->city;
	}

	public function getImage(){
		return $this->image;
	}

	public function getIsAdmin(){
		return $this->is_admin;
	}

	// SET METHODS
	public function setId(int $id){
		$this->id = $id;
	}
	
	public function setLastName(string $last_name){
		$this->last_name = $last_name;
	}

	public function setFirstName(string $first_name){
		$this->first_name = $first_name;
	}

	public function setAddress(string $address){
		$this->address = $address;
	}

	public function setCity(string $city){
		$this->city = $city;
	}

	public function setImage(string $image){
		$this->image = $image;
	}

	public function setIsAdmin(bool $is_admin){
		$this->is_admin = $is_admin;
	}		

    // CRUD OPERATIONS
    public function create(array $data)
    {
    
    }

    public function read(int $id)
    {

    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }

}