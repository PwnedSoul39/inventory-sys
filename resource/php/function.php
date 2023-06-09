<?php
function PrevPage($page) {
	if ($page == 1) {
		echo '<li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>';
	} else {
		echo '<li class="page-item"><a class="page-link link-body-emphasis" href="?page='.($page-1).'">Previous</a></li>';
	}
}

function NextPage($page,$pages) {
	if ($page == $pages) {
		echo '<li class="page-item disabled"><a class="page-link" href="#">Next</a></li>';
	} else {
		echo '<li class="page-item"><a class="page-link link-body-emphasis" href="?page='.($page+1).'">Next</a></li>';
	}
}

function regUsrMsg() {
	if (isset($_POST['reg_btn'])) {
		$valid = new validate();
		$user = $_POST['user_reg'];
		$email = $_POST['email_reg'];
		$pass = $_POST['pass_reg'];
		$type = $_POST['type_reg'];

		$valid->validReg($user,$email,$pass,$type);
	}

}

function logUsrMsg() {
	if (isset($_POST['log_btn'])) {
		$valid = new validate();
		$user = $_POST['user_log'];
		$pass = $_POST['pass_log'];

		$valid->validLog($user,$pass);
	}
}

function UsrEdit($user,$sesh_user,$type,$id,$page) {
	echo '<td class="d-flex flex-column">';

	if ($user == $sesh_user) {
		echo '<a class="btn btn-primary p-1 my-1 disabled" href="#">Currently used</a>';
	} elseif ($type !== 1) {
		echo '
		<a class="btn btn-primary p-1 my-1" href="?updUsr='.$id.'&page='.$page.'">Change to User</a>
		<a class="btn btn-danger p-1 my-1" href="?delUsr='.$id.'&page='.$page.'">Delete User</a>    
		';
	} else {
		echo '
		<a class="btn btn-primary p-1 my-1" href="?updUsr='.$id.'&page='.$page.'">Change to Admin</a>
		<a class="btn btn-danger p-1 my-1" href="?delUsr='.$id.'&page='.$page.'">Delete User</a>    
		';
	}

	echo '</td>';
}

function UsrType($type) {
	if ($type == 1) {
		echo '<td>User</td>';
	} else {
		echo '<td>Administrator</td>';
	}
}

function AccType($type) {
	if ($type == 1) {
		echo '<h4 class="fw-bolder">Account Type: <span class="fw-light">User</span></h4>';
	} else {
		echo '<h4 class="fw-bolder">Account Type: <span class="fw-light">Administrator</span></h4>';
	}
}

function NewPassMsg() {
	if (isset($_POST['up-pw_btn'])) {
		$validate = new validate();
		$npass = $_POST['new_pw'];
		$cnpass = $_POST['cnew_pw'];
		$user = $_SESSION['username'];
		$validate->newPass($npass,$cnpass,$user);
	}
}

function UsrMsg($page) {
	if (!empty($_GET['updUsr'])) {
		$user_upd = $_GET['updUsr'];
		$edit = new edit($user_upd,null);

		if ($edit->editUsrType()) {
			header('location:user.php?upd=1&page='.$page.'');
			exit();
		}
	} elseif (!empty($_GET['delUsr'])) {
		$user_del = $_GET['delUsr'];
		$del = new delete($user_del);
		
		if ($del->delUsr()) {
			header('location:user.php?obl=1&page='.$page.'');
			exit();
		}
	}
}

function ItmEdit($status,$id,$page) {
	echo '
	<td class="d-flex flex-column">
		<a class="btn btn-success p-1 w-100 my-1" href="editItm.php?id='.$id.'&page='.$page.'">Full Edit</a>
		<div class="dropdown">
			<a class="btn btn-primary p-1 w-100 my-1 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Change Status</a>
			<ul class="dropdown-menu">
	';

	if ($status == 1) {
		echo '
		<li><a class="dropdown-item disabled" href="#">Active</a></li>
		<li><a class="dropdown-item" href="?ItmSt2='.$id.'&page='.$page.'">Sold Out</a></li>
		<li><a class="dropdown-item" href="?ItmSt3='.$id.'&page='.$page.'">On Discount</a></li>
		';
	} elseif ($status == 2) {
		echo '
		<li><a class="dropdown-item" href="?ItmSt1='.$id.'&page='.$page.'">Active</a></li>
		<li><a class="dropdown-item disabled" href="#">Sold Out</a></li>
		<li><a class="dropdown-item" href="?ItmSt3='.$id.'&page='.$page.'">On Discount</a></li>
		';
	} else {
		echo '
		<li><a class="dropdown-item" href="?ItmSt1='.$id.'&page='.$page.'">Active</a></li>
		<li><a class="dropdown-item" href="?ItmSt2='.$id.'&page='.$page.'">Sold Out</a></li>
		<li><a class="dropdown-item disabled" href="#">On Discount</a></li>
		';
	}

	echo '
			</ul>
		</div>
		<a class="btn btn-danger p-1 w-100 my-1" href="?delItm='.$id.'&page='.$page.'">Delete Item</a>
	</td>
	';
}

function ItmStatus($status) {
	if ($status == 1) {
		echo '<td>Active</td>';
	} elseif ($status == 2) {
		echo '<td>Sold Out</td>';
	} else {
		echo '<td>On Discount</td>';
	}
}

function ItmMsg($page) {

	if (!empty($_GET['ItmSt1'])) {
		$item_upd1 = $_GET['ItmSt1'];
		$edit = new edit($item_upd1, 1);

		if ($edit->editItmStatus()) {
			header('location:inventory.php?upd=2&page='.$page.'');
			exit();
		}
	} elseif (!empty($_GET['delItm'])) {
		$item_del = $_GET['delItm'];
		$del = new delete($item_del);

		if ($del->delItm()) {
			header('location:inventory.php?obl=2&page='.$page.'');
			exit();
		}
	} elseif (!empty($_GET['ItmSt2'])) {
		$item_upd2 = $_GET['ItmSt2'];
		$edit = new edit($item_upd2, 2);

		if ($edit->editItmStatus()) {
			header('location:inventory.php?upd=2&page='.$page.'');
			exit();
		}
	} elseif (!empty($_GET['ItmSt3'])) {
		$item_upd3 = $_GET['ItmSt3'];
		$edit = new edit($item_upd3, 3);

		if ($edit->editItmStatus()) {

			header('location:inventory.php?upd=2&page='.$page.'');
			exit();
		}
	}
}

function InsItmMsg() {
	if (isset($_POST['itm_add'])) {
		$validate = new validate();
		$name = $_POST['inm_box'];
		$type = $_POST['itp_box'];
		$brand = $_POST['ibd_box'];
		$price = intval($_POST['ipr_box']);
		$qty = intval($_POST['iqt_box']);
		$status = intval($_POST['ist_box']);
		$date = $_POST['idt_box'];
		$page = $_GET['page'];
		$validate->validItm($name,$type,$brand,$price,$qty,$status,$date);

		header('location:inventory.php?page='.$page.'');
		exit();
	}
}

function OrdEdit($status,$id,$page) {
	echo '
	<td class="d-flex flex-column">
		<a class="btn btn-success p-1 w-100 my-1" href="editOrd.php?id='.$id.'&page='.$page.'">Full Edit</a>
		<div class="dropdown">
			<a class="btn btn-primary p-1 w-100 my-1 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Change Status</a>
			<ul class="dropdown-menu">
	';

	if ($status == 1) {
		echo '
		<li><a class="dropdown-item disabled" href="#">Ordered</a></li>
		<li><a class="dropdown-item" href="?OrdSt2='.$id.'&page='.$page.'">Packaged</a></li>
		<li><a class="dropdown-item" href="?OrdSt3='.$id.'&page='.$page.'">Shipped</a></li>
		<li><a class="dropdown-item" href="?OrdSt4='.$id.'&page='.$page.'">In Transit</a></li>
		<li><a class="dropdown-item" href="?OrdSt5='.$id.'&page='.$page.'">Delivered</a></li>
		';
	} elseif ($status == 2) {
		echo '
		<li><a class="dropdown-item" href="?OrdSt1='.$id.'&page='.$page.'">Ordered</a></li>
		<li><a class="dropdown-item disabled" href="#">Packaged</a></li>
		<li><a class="dropdown-item" href="?OrdSt3='.$id.'&page='.$page.'">Shipped</a></li>
		<li><a class="dropdown-item" href="?OrdSt4='.$id.'&page='.$page.'">In Transit</a></li>
		<li><a class="dropdown-item" href="?OrdSt5='.$id.'&page='.$page.'">Delivered</a></li>
		';
	} elseif ($status == 3) {
		echo '
		<li><a class="dropdown-item" href="?OrdSt1='.$id.'&page='.$page.'">Ordered</a></li>
		<li><a class="dropdown-item" href="?OrdSt2='.$id.'&page='.$page.'">Packaged</a></li>
		<li><a class="dropdown-item disabled" href="#">Shipped</a></li>
		<li><a class="dropdown-item" href="?OrdSt4='.$id.'&page='.$page.'">In Transit</a></li>
		<li><a class="dropdown-item" href="?OrdSt5='.$id.'&page='.$page.'">Delivered</a></li>
		';
	} elseif ($status == 4) {
		echo '
		<li><a class="dropdown-item" href="?OrdSt1='.$id.'&page='.$page.'">Ordered</a></li>
		<li><a class="dropdown-item" href="?OrdSt2='.$id.'&page='.$page.'">Packaged</a></li>
		<li><a class="dropdown-item" href="?OrdSt3='.$id.'&page='.$page.'">Shipped</a></li>
		<li><a class="dropdown-item disabled" href="#">In Transit</a></li>
		<li><a class="dropdown-item" href="?OrdSt5='.$id.'&page='.$page.'">Delivered</a></li>
		';
	} else {
		echo '
		<li><a class="dropdown-item" href="?OrdSt1='.$id.'&page='.$page.'">Ordered</a></li>
		<li><a class="dropdown-item" href="?OrdSt2='.$id.'&page='.$page.'">Packaged</a></li>
		<li><a class="dropdown-item" href="?OrdSt3='.$id.'&page='.$page.'">Shipped</a></li>
		<li><a class="dropdown-item" href="?OrdSt4='.$id.'&page='.$page.'">In Transit</a></li>
		<li><a class="dropdown-item disabled" href="#">Delivered</a></li>
		';
	}

	echo '
			</ul>
		</div>
		<a class="btn btn-danger p-1 w-100 my-1" href="?delOrd='.$id.'&page='.$page.'">Delete Order</a>
	</td>
	';
}

function OrdStatus($status) {
	if ($status == 1) {
		echo '<td>Ordered</td>';
	} elseif ($status == 2) {
		echo '<td>Packaged</td>';
	} elseif ($status == 3) {
		echo '<td>Shipped</td>';
	} elseif ($status == 4) {
		echo '<td>In Transit</td>';
	} else {
		echo '<td>Delivered</td>';
	}
}

function OrdMsg($page) {
	if (!empty($_GET['OrdSt1'])) {
		$order_upd1 = $_GET['OrdSt1'];
		$edit = new edit($order_upd1,1);

		if ($edit->editOrdStatus()) {
			header('location:order.php?upd=3&page='.$page.'');
			exit();
		}
	} elseif (!empty($_GET['delOrd'])) {
		$order_del = $_GET['delOrd'];
		$del = new delete($order_del);

		if ($del->delOrd()) {
			header('location:order.php?obl=3&page='.$page.'');
			exit();
		}
	} elseif (!empty($_GET['OrdSt2'])) {
		$order_upd2 = $_GET['OrdSt2'];
		$edit = new edit($order_upd2,2);

		if ($edit->editOrdStatus()) {
			header('location:order.php?upd=3&page='.$page.'');
			exit();
		}
	} elseif (!empty($_GET['OrdSt3'])) {
		$order_upd3 = $_GET['OrdSt3'];
		$edit = new edit($order_upd3,3);

		if ($edit->editOrdStatus()) {
			header('location:order.php?upd=3&page='.$page.'');
			exit();
		}
	} elseif (!empty($_GET['OrdSt4'])) {
		$order_upd4 = $_GET['OrdSt4'];
		$edit = new edit($order_upd4,4);

		if ($edit->editOrdStatus()) {
			header('location:order.php?upd=3&page='.$page.'');
			exit();
		}
	} elseif (!empty($_GET['OrdSt5'])) {
		$order_upd5 = $_GET['OrdSt5'];
		$edit = new edit($order_upd5,5);

		if ($edit->editOrdStatus()) {
			header('location:order.php?upd=3&page='.$page.'');
			exit();
		}
	}
}

function InsOrdMsg() {
	if (isset($_POST['ord_add'])) {
		$validate = new validate();
		$cname = $_POST['ocn_box'];
		$iname = $_POST['oin_box'];
		$qty = intval($_POST['oiq_box']);
		$total = intval($_POST['otp_box']);
		$status = intval($_POST['oos_box']);
		$order = $_POST['odo_box'];
		$receive = $_POST['odr_box'];
		$validate->validOrd($cname,$iname,$qty,$total,$status,$order,$receive);
		$page = $_GET['page'];

		header('location:order.php?page='.$page.'');
		exit();
	}
}

function AdminMsg() {
	if (isset($_GET['upd'])) {
		if ($_GET['upd'] == 1) {
			echo '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				User updated successfully!
				<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
			</div>
			';
		} elseif ($_GET['upd'] == 2) {
			echo '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				Item updated successfully!
				<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
			</div>
			';
		} elseif ($_GET['upd'] == 3) {
			echo '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				Order updated successfully!
				<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
			</div>
			';
		}
	} elseif (isset($_GET['obl'])) {
		if ($_GET['obl'] == 1) {
			echo '
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				User deleted successfully!
				<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
			</div>
			';
		} elseif ($_GET['obl'] == 2) {
			echo '
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				Item deleted successfully!
				<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
			</div>
			';
		} elseif ($_GET['obl'] == 3) {
			echo '
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				Order deleted successfully!
				<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
			</div>
			';
		}
	}
}

function OrdComboMsg($page) {
	OrdMsg($page);
	AdminMsg();
	InsOrdMsg();
}

function ItmComboMsg($page) {
	ItmMsg($page);
	AdminMsg();
	InsItmMsg();
}

function UsrComboMsg($page) {
	UsrMsg($page);
	AdminMsg();
}

function logStatus() {
	if (isset($_SESSION['username']) && isset($_SESSION['user_type']) && isset($_SESSION['user_mail']) && isset($_SESSION['user_date'])) {
		return true;
	} else {
		return false;
	}
}

function logIn() {
	if (logStatus() == false) {
		header('location:index.php');
		exit();
	}
}

function logLockUsr() {
	if ($_SESSION['user_type'] == 1) {
		header('location:home.php');
		exit();
	}
}

function logCombo() {
	logIn();
	logLockUsr();
}

function fullOrd($id,$page) {
	if (isset($_POST['fo_upd'])) {
		$fe = new fullEdit();
		$cname = $_POST['focn_box'];
		$iname = $_POST['foin_box'];
		$qty = intval($_POST['foiq_box']);
		$total = intval($_POST['fotp_box']);
		$status = intval($_POST['foos_box']);
		$order = date('Y-m-d H:i:s', strtotime($_POST['fodo_box']));
		$receive = date('Y-m-d H:i:s', strtotime($_POST['fodr_box']));

		$fe->fullEditOrd($id,$cname,$iname,$qty,$total,$status,$order,$receive);
		header('location:order.php?upd=3&page='.$page.'');
		exit();
	}
}

function fullItm($id,$page) {
	if (isset($_POST['fi_upd'])) {
		$fe = new fullEdit();
		$name = $_POST['finm_box'];
		$type = $_POST['fitp_box'];
		$brand = $_POST['fibd_box'];
		$price = intval($_POST['fipr_box']);
		$qty = intval($_POST['fiqt_box']);
		$status = intval($_POST['fist_box']);
		$date = date('Y-m-d H:i:s', strtotime($_POST['fidt_box']));

		$fe->fullEditItm($id,$name,$type,$brand,$price,$qty,$status,$date);
		header('location:inventory.php?upd=2&page='.$page.'');
		exit();
	}
}
?>