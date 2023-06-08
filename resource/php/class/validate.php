<?php
include 'insertUsr.php';
include 'edit.php';

class validate extends config {
	public function viewer($a) {
		$con = $this->con();
		$sql = $a;
		$data = $con->prepare($sql);
		$data->execute();
		$result = $data->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}

	public function valRegUser($user) {
		$sql = "SELECT * FROM `tbl_user` WHERE `u_user` = '$user'";
		$check = $this->viewer($sql);

		if (!$check) {
			if (strlen($user) > 30 || strlen($user) < 4) {
				echo '
				<div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
					Username must be between 4 to 30 characters
					<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
				</div>
				';
				return false;
			} elseif (empty($user)) {
				echo '
				<div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
					Please enter a username
					<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
				</div>
				';
				return false;
			} else {
				$user = trim($user);
				return true;
			}
		} else {
			echo '
			<div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
				Username has already been taken
				<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
			</div>
			';
			return false;
		}
	}

	public function valRegPass($pass) {
		$upper = preg_match('@[A-Z]@',$pass);
		$lower = preg_match('@[a-z]@',$pass);
		$num = preg_match('@[0-9]@',$pass);
		$spec = preg_match('@[^\w]@',$pass);

		if (!$upper) {
			echo '
			<div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
				Password should have at least 1 uppercase character
				<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
			</div>
			';
			return false;
		} elseif (!$lower) {
			echo '
			<div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
				Password should have at least 1 lowercase character
				<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
			</div>
			';
			return false;
		} elseif (!$num) {
			echo '
			<div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
				Password should have at least 1 number
				<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
			</div>
			';
			return false;
		} elseif (!$spec) {
			echo '
			<div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
				Password should have at least 1 special character
				<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
			</div>
			';
			return false;
		} elseif (strlen($pass) < 8 && strlen($pass) > 16) {
			echo '
			<div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
				Password should be between 8-16 characters
				<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
			</div>
			';
			return false;
		} else {
			return true;
		}
	}

	public function valRegEmail($mail) {
		$sql = "SELECT * FROM `tbl_user` WHERE `u_email` = '$mail'";
		$check = $this->viewer($sql);
		
		if (!$check) {
			$mail = trim($mail);
			$mail = filter_var($mail, FILTER_SANITIZE_EMAIL);
			if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
				echo '
				<div class="alert alert-success alert-dismissible fade show my-3" role="alert">
					Invalid email
					<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>	
				</div>
				';
				return false;
			} else {
				return true;
			}
		} else {
			echo '
			<div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
				Email has already been used
				<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>	
			</div>
			';
			return false;
		}
	}

	public function validLog($user,$pass) {		
		if (!empty($user) && !empty($pass)) {
			$sql = "SELECT * FROM `tbl_user` WHERE `u_user` = '$user'";
			$check = $this->viewer($sql);

			if ($check) {
				foreach ($check as $data) {
					$a = password_verify($pass, $data['u_pass']);
					if ($a) {
						session_start();
						$_SESSION['username'] = $data['u_user'];
						$_SESSION['user_type'] = $data['u_type'];
						$_SESSION['user_mail'] = $data['u_email'];
						$_SESSION['user_date'] = $data['u_join'];
						
						if ($data['u_type'] == 1) {
							header('location:home.php');
							exit();
						} else {
							header('location:dashboard.php');
							exit();
						}
						
					} elseif (!$a) {
						echo '
						<div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
							Invalid password
							<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>	
						</div>
						';
					} else {
						echo '
						<div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
							Invalid username
							<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>	
						</div>
						';
					}
				}
			} else {
				echo '
				<div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
					Invalid username or password
					<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>	
				</div>
				';
			}
		} elseif (empty($user)) {
			echo '
			<div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
				Please enter your username
				<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>	
			</div>
			';
		} elseif (empty($pass)) {
			echo '
			<div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
				Please enter your password
				<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>	
			</div>
			';
		} else {
			echo '
			<div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
				Invalid information
				<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>	
			</div>
			';
		}
	}

	public function validReg($user,$mail,$pass,$type) {
		$date = date('Y-m-d H:i:s');
		
		if ($this->valRegEmail($mail) == true && $this->valRegPass($pass) == true && $this->valRegUser($user) == true) {
			$pass = password_hash($pass, PASSWORD_BCRYPT);
			$insert = new insertUsr($user,$mail,$pass,$type,$date);

			if($insert->addUsr()) {
				echo '
				<div class="alert alert-success alert-dismissible fade show my-3" role="alert">
					Successfully added user
					<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>	
				</div>
				';
			} else {
				echo '
				<div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
					Error adding user
					<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>	
				</div>
				';
			}
		}
	}

	public function validItm($name,$type,$brand,$price,$qty,$status,$date) {
		$name = trim($name);
		$type = trim($type);
		$brand = trim($brand);
		$date = date('Y-m-d H:i:s', strtotime($date));
		if (is_int($price) == 1 && is_int($qty) == 1 && is_int($status) == 1) {
			$insert = new insertItm($name,$type,$brand,$price,$qty,$status,$date);

			if($insert->addItm()) {
				echo '
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					Item added successfully!
					<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
				</div>
				';
			} else {
				echo '
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Error adding item...
					<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
				</div>
				';
			}
		}
	}

	public function validOrd($cname,$iname,$qty,$total,$status,$order,$receive) {
		$cname = trim($cname);
		$iname = trim($iname);
		$order = date('Y-m-d H:i:s', strtotime($order));
		$receive = date('Y-m-d H:i:s', strtotime($receive));

		if (is_int($qty) == 1 && is_int($total) == 1 && is_int($status) == 1) {
			$insert = new insertOrd($cname,$iname,$qty,$total,$status,$order,$receive);

			if ($insert->addOrd()) {
				echo '
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					Order added successfully!
					<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
				</div>
				';
			} else {
				echo '
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Error adding order...
					<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
				</div>
				';
			}
		} else {
			echo '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Invalid Values...
				<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
			</div>
			';
		}
	}

	public function newPass($npass,$cnpass,$user) {
		if ($npass === $cnpass) {
			if  ($this->valRegPass($npass) == true && $this->valRegPass($cnpass) == true) {
				$cnpass = password_hash($cnpass, PASSWORD_BCRYPT);
				$edit = new edit($user,$cnpass);

				if ($edit->editPass()) {
					echo '
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						Password updated successfully!
						<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
					</div>
					';
				} else {
					echo '
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Erro updating password...
						<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
					</div>
					';
				}
			}
		} else {
			echo '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Password does not match!
				<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
			</div>
			';
		}
	}
}
?>