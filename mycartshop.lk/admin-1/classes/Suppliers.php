<?php 
session_start();
/**
 * 

	
CREATE TABLE IF NOT EXISTS `supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` int(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `address 1` varchar(255) NOT NULL,
  `address 2` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `profile_image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
 	
 */
class Suppliers
{
	
	private $con;

	function __construct()
	{
		include_once("Database.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	public function getSuppliers(){
		$q = $this->con->query("SELECT 'id', 'supplier_name', 'email', 'phone_number', 'country', 'address_1', 'address_2', 'age', 'profile_image' FROM 'supplier'");
		$ar = [];
		if (@$query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'no supplier data'];
	}

		
	public function addSupplier($supplier_name,
								$id,
								$email,
								$phone_number,
								$country,
                                $address_1,
                                $address_2,
								$age,
								$file){


		$fileName = $file['name'];
		$fileNameAr= explode(".", $fileName);
		$extension = end($fileNameAr);
		$ext = strtolower($extension);

		if ($ext == "jpg" || $ext == "jpeg" || $ext == "png") {
			
			//print_r($file['size']);

			if ($file['size'] > (1024 * 2)) {
				
				$uniqueImageName = time()."_".$file['name'];
				if (move_uploaded_file($file['tmp_name'], $_SERVER['DOCUMENT_ROOT']."./mycartshop.lk/product_images/".$uniqueImageName)) {
					$q = $this->con->query("INSERT INTO 'supplier`(`supplier_name`, `email`, `phone_number`, `country`, `address_1`, `address_2`, `age`, `profile_image`) VALUES ('$supplier_name', '$email', '$phone_number', '$country', '$address_1', '$address_2', '$age', '$uniqueImageName')");

					if ($q) {
						return ['status'=> 202, 'message'=> 'Supplier Added Successfully..!'];
					}else{
						return ['status'=> 303, 'message'=> 'Failed to run query'];
					}

				}else{
					return ['status'=> 303, 'message'=> 'Failed to upload image'];
				}

			}else{
				return ['status'=> 303, 'message'=> 'Large Image ,Max Size allowed 2MB'];
			}

		}else{
			return ['status'=> 303, 'message'=> 'Invalid Image Format [Valid Formats : jpg, jpeg, png]'];
		}

	}


	public function editSupplierWithImage($supplier_name,
    $id,
    $email,
    $phone_number,
    $country,
    $address_1,
    $address_2,
    $age,
    $file){


		$fileName = $file['name'];
		$fileNameAr= explode(".", $fileName);
		$extension = end($fileNameAr);
		$ext = strtolower($extension);

		if ($ext == "jpg" || $ext == "jpeg" || $ext == "png") {
			
			//print_r($file['size']);

			if ($file['size'] > (1024 * 2)) {
				
				$uniqueImageName = time()."_".$file['name'];
				if (move_uploaded_file($file['tmp_name'], $_SERVER['DOCUMENT_ROOT']."./mycartshop.lk/product_images/".$uniqueImageName)) {
					
					$q = $this->con->query("UPDATE `supplier` SET 
										'age'='$age',
                                        'email'='$email',
                                        'phone_number'='$phone_number',
										`supplier_name` = '$supplier_name', 
										`country` = '$country', 
										`address_1` = '$address_1', 
										`address_2` = '$address-2', 
										`profile_image` = '$uniqueImageName', 
										WHERE id = '$id'");

					if ($q) {
						return ['status'=> 202, 'message'=> 'Supplier Modified Successfully..!'];
					}else{
						return ['status'=> 303, 'message'=> 'Failed to run query'];
					}

				}else{
					return ['status'=> 303, 'message'=> 'Failed to upload image'];
				}

			}else{
				return ['status'=> 303, 'message'=> 'Large Image ,Max Size allowed 2MB'];
			}

		}else{
			return ['status'=> 303, 'message'=> 'Invalid Image Format [Valid Formats : jpg, jpeg, png]'];
		}

	}

	public function editSupplierWithoutImage($supplier_name,
    $id,
    $email,
    $phone_number,
    $country,
    $address_1,
    $address_2,
    $age){

		if ($id != null) {
			$q = $this->con->query("UPDATE `supplier` SET 
										'age'='$age',
                                        'email'='$email',
                                        'phone_number'='$phone_number',
										`supplier_name` = '$supplier_name', 
										`country` = '$country', 
										`address_1` = '$address_1', 
										`address_2` = '$address_2', 
										WHERE id = '$id'");

			if ($q) {
				return ['status'=> 202, 'message'=> 'Supplier updated Successfully'];
			}else{
				return ['status'=> 303, 'message'=> 'Failed to run query'];
			}
			
		}else{
			return ['status'=> 303, 'message'=> 'Invalid supplier id'];
		}
		
	}




	public function deleteSupplier($id = null){
		if ($id != null) {
			$q = $this->con->query("DELETE FROM supplier WHERE id = '$id'");
			if ($q) {
				return ['status'=> 202, 'message'=> 'Supplier removed from Company'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed to run query'];
			}
			
		}else{
			return ['status'=> 303, 'message'=>'Invalid supplier id'];
		}

	}



if (isset($_POST['GET_SUPPLIER'])) {
	if (isset($_SESSION['admin_id'])) {
		$s = new Suppliers();
		echo json_encode($s->getSuppliers());
		exit();
	}
}


if (isset($_POST['add_supplier'])) {

	extract($_POST);
	if (!empty($supplier_name) 
	&& !empty($id) 
	&& !empty($email)
	&& !empty($age)
	&& !empty($phone_number)
	&& !empty($country)
    && !empty($address_1)
    && !empty($address_2)
	&& !empty($_FILES['profile_image']['name'])) {
		

		$s = new Suppliers();
		$result = $q->addSupplier($supplier_name,
								$id,
								$email,
								$age,
								$country,
								$address_1,
                                $address_2,
                                $phone_number,
								$_profil_image['profile_image']);
		
		header("Content-type: application/json");
		echo json_encode($result);
		http_response_code($result['status']);
		exit();


	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Empty fields']);
		exit();
	}



	
}


if (isset($_POST['edit_supplier'])) {

	extract($_POST);
	if (!empty($id)
	&& !empty($e_supplier_name) 
	&& !empty($e_email) 
	&& !empty($e_age)
	&& !empty($e_country)
	&& !empty($e_phone_number)
	&& !empty($e_country)
    && !empty($e_address_1)
    && !empty($e_address_2) ) {
		
		$s = new Suppliers();

		if (isset($_FILE['e_profile_image']['name']) 
			&& !empty($_FILE['e_profile_image']['name'])) {
			$result = $p->editSupplierWithImage($id,
								$e_supplier_name,
								$e_email,
								$e_phone_number,
								$e_country,
								$e_age,
								$e_address_1,
								$e_address_2,
								$e_profile_image['e_supplier_image']);
		}else{
			$result = $s->editProductWithoutImage($id,
            $e_supplier_name,
            $e_email,
            $e_phone_number,
            $e_country,
            $e_age,
            $e_address_1,
            $e_address_2,);
		}

		echo json_encode($result);
		exit();


	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Empty fields']);
		exit();
	}



	
}









?>