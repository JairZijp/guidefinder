<?php
include('Password.php');
class User extends Password {

    private $_db;
    private $_memberID;

    function __construct($db,$memberID){
        parent::__construct();
        $this->_db = $db;
        $this->_memberID = $memberID;
    }

	private function get_user_hash($username){
        try {
			$stmt = $this->_db->prepare('SELECT password FROM members WHERE username = :username AND active="Yes" ');

            $stmt->execute(array('username' => $username));

			$row = $stmt->fetch();

            return $row['password'];

		} catch(PDOException $e) {
		    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
		}
	}
	public function getUserData($username) {

        $result = $this->_db->prepare('SELECT * FROM members WHERE username = :username');

        $result->execute(array('username' => $username));

        $userInfo = $result->fetchAll();

		return $userInfo;
    }

    public function getPublicUserData() {

        $guidesInfo = array();

        $result = $this->_db->prepare('SELECT * FROM members WHERE memberID ='.$this->_memberID);

        $result->execute();

        $guidesInfo = $result->fetch();

        return $guidesInfo;


    }

    public function updateUserData($username,$email,$firstname,$lastname,$address,$zipcode,$city,$phone,$image,$description,$NL,$GE,$ES,$RU,$EN,$FR,$IT,$CH) {
        $result = $this->_db->prepare('UPDATE members SET firstname = :firstname, lastname = :lastname, email = :email, city = :city, address = :address, zipcode = :zipcode, phone = :phone, image = :image, description = :description, NL = :NL, GE = :GE, ES = :ES, RU = :RU, EN = :EN, FR = :FR, IT = :IT, CH = :CH WHERE username = :username');

        $result->execute(array(
            'username' => $username,
            ':email' => $email,
            ':firstname' => $firstname,
            ':lastname' => $lastname,
            ':address' => $address,
            ':zipcode' => $zipcode,
            ':city' => $city,
            ':phone' => $phone,
            ':image' => $image,
            ':description' => $description,
            ':NL' => $NL,
            ':GE' => $GE,
            ':EN' => $EN,
            ':RU' => $RU,
            ':CH' => $CH,
            ':ES' => $ES,
            ':FR' => $FR,
            ':IT' => $IT
        ));

        return $result;

    }

    public function getUserTour($username) {

        $result = $this->_db->prepare('SELECT * FROM tours WHERE username = :username ');

        $result->execute(array('username' => $username));

        $tourInfo = $result->fetchAll();

        return $tourInfo;


    }

    public function getAllGuides() {

        $result = $this->_db->prepare('SELECT * FROM members WHERE active = "Yes" AND activeAdmin = "Yes" AND usertype != "admin"');

        $result->execute();

        $allGuides = $result->fetchAll();

        return $allGuides;
    }

    public function addTour($memberID, $username, $name, $image, $price, $description, $adults, $aged, $children, $disabled) {
        $statement = $this->_db->prepare('INSERT INTO tours(memberID, username, name, image, price, description, adults, aged, children, disabled) VALUES (:memberID, :username, :name, :image, :price, :description, :adults, :aged, :children, :disabled)');

        $statement->execute(array(
            "memberID" => $memberID,
            "username" => $username,
            "name" => $name,
            "image" => $image,
            "price" => $price,
            "description" => $description,
            "adults" => $adults,
            "aged" => $aged,
            "children" => $children,
            "disabled" => $disabled
        ));

        return $statement;
    }

    public function updateTimes($username,$monday,$tuesday,$wednesday,$thursday,$friday,$saturday,$sunday) {
            $result = $this->_db->prepare('UPDATE members SET monday = :monday,tuesday = :tuesday,wednesday = :wednesday,thursday = :thursday,friday = :friday,saturday = :saturday,sunday = :sunday WHERE username = :username');

            $result->execute(array(
                ":username" => $username,
                ":monday" => $monday,
                ":tuesday" => $tuesday,
                ":wednesday" => $wednesday,
                ":thursday" => $thursday,
                ":friday" => $friday,
                ":saturday" => $saturday,
                ":sunday" => $sunday
            ));

            return $result;

        }
    public function getAllGuidesAdmin(){
        $result = $this->_db->prepare('SELECT * FROM members WHERE active = "Yes"');

        $result->execute();

        $allGuides = $result->fetchAll();

        return $allGuides;
    }
	public function login($username,$password){

		$hashed = $this->get_user_hash($username);

		if($this->password_verify($password,$hashed) == 1){

		    $_SESSION['loggedin'] = true;
		    return true;
		}
	}

	public function logout(){
		session_destroy();
	}

	public function is_logged_in(){
		if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			return true;
		}
	}


}
