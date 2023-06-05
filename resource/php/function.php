<?php
function PrevPage($a) {
    if ($a == 1) {
        echo '<li class="page-item disabled"><a class="page-link text-white" href="#">Previous</a></li>';
    } else {
        echo '<li class="page-item"><a class="page-link text-white" href="?page='.($a-1).'">Previous</a></li>';
    }
}

function NextPage($a, $b) {
    if ($a == $b) {
        echo ' <li class="page-item disabled"><a class="page-link text-white" href="#">Next</a></li>';
    } else {
        echo '<li class="page-item"><a class="page-link text-white" href="?page='.($a+1).'">Next</a></li>';
    }
}

function UserEdit($a, $b, $c, $d) {
    echo '<td>';

    if ($a == $b) {
        echo '<a class="btn btn-primary disabled" href="#"><i class="fa-solid fa-hourglass-start"></i> Currently Using this account</a>';
    } else {
        echo '
            <a class="btn btn-primary" href="?update='.$d.'">
        ';
       if ($c == 1) {
            echo '
            <i class="fa-solid fa-user-pen"></i> Edit to User</a>
            <a class="btn btn-danger" href="?delete='.$d.'"> <i class="fa-solid fa-user-xmark"></i> Delete User</a>
            ';
        } else {
            echo '
            <i class="fa-solid fa-user-pen"></i> Edit to Admin</a>
            <a class="btn btn-danger" href="?delete='.$d.'"> <i class="fa-solid fa-user-xmark"></i> Delete User</a>
            ';
        }
    }

    echo '
        </td>
    ';
}

function UserType($a) {
    if ($a == 1) {
        echo '<h5 class="fw-normal text-muted"><span class="text-white fw-bold">Account Type: </span>Administrator</h5>';
    } else {
        echo '<h5 class="fw-normal text-muted"><span class="text-white fw-bold">Account Type: </span>User</h5>';
    }
}

function ItemStat($a) {
    if ($a == 1) {
        echo '<td>Active</td>';
    } elseif ($a == 2) {
        echo '<td>Inactive</td>';
    } else {
        echo '<td>Discounted</td>';
    }
}

function ItemEdit($a, $b) {
    echo '
    <td>
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-file-pen"></i> Edit Item
            </button>
            <ul class="dropdown-menu">
    ';

    if ($a == 1) {
        echo '
        <li><a class="dropdown-item disabled" href="#">Acive</a></li>
        <li><a class="dropdown-item" href="?inact='.$b.'">Inactive</a></li>
        <li><a class="dropdown-item" href="?disc='.$b.'">Discounted</a></li>
        ';
    } elseif ($a == 2) {
        echo '
        <li><a class="dropdown-item" href="?act='.$b.'">Active</a></li>
        <li><a class="dropdown-item disabled" href="#">Inactive</a></li>
        <li><a class="dropdown-item" href="?disc='.$b.'">Discounted</a></li>
        ';
    } else {
        echo '
        <li><a class="dropdown-item" href="?act='.$b.'">Active</a></li>
        <li><a class="dropdown-item" href="?inact='.$b.'">Inactive</a></li>
        <li><a class="dropdown-item disabled" href="#">Discounted</a></li>
        ';
    }

    echo '
            </ul>
        </div>
        <a class="btn btn-danger mt-2" href="?remove='.$b.'"> <i class="fa-solid fa-trash-can"></i> Delete Item</a>
    </td>
    ';
}

function OrderStat($a) {
    if ($a == 1) {
        echo '<td>Ordered</td>';
    } elseif ($a == 2) {
        echo '<td>Packed</td>';
    } elseif ($a == 3) {
        echo '<td>In Transit</td>';
    } else {
        echo '<td>Delivered</td>';
    }
}

function OrderEdit($a,$b) {
    echo '
    <td>
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-box"></i> Edit Item
            </button>
            <ul class="dropdown-menu">
    ';
    
    if ($a == 1) {
        echo '
        <li><a class="dropdown-item disabled" href="#">Ordered</a></li>
        <li><a class="dropdown-item" href="?pack='.$b.'">Packed</a></li>
        <li><a class="dropdown-item" href="?transit='.$b.'">In Transit</a></li>
        <li><a class="dropdown-item" href="?deliver='.$b.'">Delivered</a></li>
        ';
    } elseif ($a == 2) {
        echo '
        <li><a class="dropdown-item" href="?order='.$b.'">Ordered</a></li>
        <li><a class="dropdown-item disabled" href="#">Packed</a></li>
        <li><a class="dropdown-item" href="?transit='.$b.'">In Transit</a></li>
        <li><a class="dropdown-item" href="?deliver='.$b.'">Delivered</a></li>
        ';
    } elseif ($a == 3) {
        echo '
        <li><a class="dropdown-item " href="?order='.$b.'">Ordered</a></li>
        <li><a class="dropdown-item" href="?pack='.$b.'">Packed</a></li>
        <li><a class="dropdown-item disabled" href="#">In Transit</a></li>
        <li><a class="dropdown-item" href="?deliver='.$b.'">Delivered</a></li>
        ';
    } else {
        echo '
        <li><a class="dropdown-item " href="?order='.$b.'">Ordered</a></li>
        <li><a class="dropdown-item" href="?pack='.$b.'">Packed</a></li>
        <li><a class="dropdown-item" href="?transit='.$b.'">In Transit</a></li>
        <li><a class="dropdown-item disabled" href="#">Delivered</a></li>
        ';
    }

    echo '
            </ul>
        </div>
        <a class="btn btn-danger mt-2" href="?obl='.$b.'"> <i class="fa-solid fa-trash-can"></i> Delete Order</a>
    </td>
    ';
}

function UserMsg() {
    if (!empty($_GET['update'])) {
        $user_upd = $_GET['update'];
        $edit = new editStuff($user_upd);
        
        if ($edit->editType()) {
            header('location:user.php?done=3');
            exit();
        }
    } elseif (!empty($_GET['delete'])) {
        $user_del = $_GET['delete'];
        $del = new deleteStuff($user_del);

        if ($del->delUser()) {
            header('location:user.php?fin=3');
            exit();
        }
    }
}

function ItemMsg() {
    if (!empty($_GET['act'])) {
        $item_upd1 = $_GET['act'];
        $edit = new editStuff($item_upd1);

        if ($edit->editStatusAct()) {
            header('location:inventory.php?done=1');
            exit();
        } 
    } elseif (!empty($_GET['remove'])) {
        $item_del = $_GET['remove'];
        $del = new deleteStuff($item_del);
        
        if ($del->delItem()) {
            header('location:inventory.php?fin=1');
            exit();
        }
    } elseif (!empty($_GET['inact'])) {
        $item_upd2 = $_GET['inact'];
        $edit = new editStuff($item_upd2);

        if ($edit->editStatusIna()) {
            header('location:inventory.php?done=1');
            exit();
        }
    } elseif (!empty($_GET['disc'])) {
        $item_upd3 = $_GET['disc'];
        $edit = new editStuff($item_upd3);

        if ($edit->editStatusDis()) {
            header('location:inventory.php?done=1');
            exit();
        }
    }
}

function OrderMsg() {
    if (!empty($_GET['order'])) {
        $order_upd1 = $_GET['order'];
        $edit = new editStuff($order_upd1);

        if ($edit->editStatusO()) {
            header('location:order.php?done=2');
            exit();
        }
    } elseif (!empty($_GET['obl'])) {
        $order_del = $_GET['obl'];
        $del = new deleteStuff($order_del);
        if ($del->delOrder()) {
            header('location:order.php?fin=2');
            exit();
        }
    } elseif (!empty($_GET['pack'])) {
        $order_upd2 = $_GET['pack'];
        $edit = new editStuff($order_upd2);

        if ($edit->editStatusP()) {
            header('location:order.php?done=2');
            exit();
        }

    } elseif (!empty($_GET['transit'])) {
        $order_upd3 = $_GET['transit'];
        $edit = new editStuff($order_upd3);

        if ($edit->editStatusT()) {
            header('location:order.php?done=2');
            exit();
        }

    } elseif (!empty($_GET['deliver'])) {
        $order_upd4 = $_GET['deliver'];
        $edit = new editStuff($order_upd4);

        if ($edit->editStatusD()) {
            header('location:order.php?done=2');
            exit();
        }
    }
}

function AdminMsg() {
    if (isset($_GET['done'])) {
        if ($_GET['done'] == 1) {
            echo '
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                <i class="fa-solid fa-circle-check"></i> Item updated successfully
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
            ';
        } elseif ($_GET['done'] == 2) {
            echo '
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                <i class="fa-solid fa-circle-check"></i> Order updated successfully
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
            ';
        } elseif ($_GET['done'] == 3) {
            echo '
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                <i class="fa-solid fa-circle-check"></i> User updated successfully
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
            ';
        }
    } elseif (isset($_GET['fin'])) {
        if ($_GET['fin'] == 1) {
            echo '
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                <i class="fa-solid fa-circle-check"></i> Successfully deleted item
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
            ';
        } elseif ($_GET['fin'] == 2) {
            echo '
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                <i class="fa-solid fa-circle-check"></i> Successfully deleted order
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
            ';
        } elseif ($_GET['fin'] == 3) {
            echo '
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                <i class="fa-solid fa-circle-check"></i> Successfully deleted user
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
            ';
        }
    }
}

function logStatus() {
    if (isset($_SESSION['user']) && isset($_SESSION['user_level']) && isset($_SESSION['user_f']) && isset($_SESSION['user_mail']) && isset($_SESSION['user_join'])) {
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

function logLockUser() {
    if ($_SESSION['user_level'] == 0) {
        header('location:home.php');
        exit();
    }
}

function logLockAdmin() {
    if ($_SESSION['user_level'] == 1) {
        header('location:dashboard.php');
        exit();
    }
}

function logOut() {
    session_start();
    session_unset();
    session_destroy();
    header('location:index.php');
    exit();
}

function insertAccMsg() {
    if (isset($_POST['reg_btn'])) {
        $validate = new validate();
        $validate->validReg($_POST['lname_box'], $_POST['fname_box'], $_POST['uname_box'], $_POST['email_box'], $_POST['pass_box'], $_POST['type_choice']);
    }
}

function insertItemMsg() {
    if (isset($_POST['item_add'])) {
        $validate = new validate();
        $iname = $_POST['iname_box'];
        $itype = $_POST['itype_box'];
        $ibrand = $_POST['ibrand_box'];
        $iprice = intval($_POST['iprice_box']);
        $iqty = intval($_POST['iqty_box']);
        $istat = intval($_POST['itype_box']);
        $validate->validNewItem($iname,$itype,$ibrand,$iprice,$iqty,$istat);
    }
}

function insertOrderMsg() {
    if (isset($_POST['order_add'])) {
        $validate = new validate();
        $ocus = $_POST['ocus_box'];
        $oname = $_POST['oname_box'];
        $oqty = intval($_POST['oqty_box']);
        $oprice = intval($_POST['oprice_box']);
        $ostatus = intval($_POST['ostatus_box']);
        $odate = $_POST['odate_box'];
        $oreceive = $_POST['oreceive_box'];
        $validate->validNewOrder($ocus,$oname,$oqty,$oprice,$ostatus,$odate,$oreceive);
    }
}

function loginMsg() {
    if (isset($_POST['log_btn'])) {
        $validate = new validate();
        $validate->validLog($_POST['email_logbox'], $_POST['pass_logbox']);
    }
}

function newPassMsg() {
    if (isset($_POST['edit_btn'])) {
        $validate = new validate();
        $validate->validNewPass($_POST['pass_editbox'],$_POST['confirm_pass_editbox']);
    }
}

function InventComboMsg() {
    ItemMsg();
    AdminMsg();
    insertItemMsg();
}

function OrderComboMsg() {
    OrderMsg();
    AdminMsg();
    insertOrderMsg();
}
?>