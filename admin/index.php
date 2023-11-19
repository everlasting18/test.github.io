<?php
include "../model/pdo.php";
include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            //kiem tra nguoi dung co click khong
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                $sql = "insert into danhmuc(name) values('$tenloai')";
                $listdm = pdo_execute($sql);
                $thongbao = "Thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case 'listdm';
            $sql = "select * from danhmuc order by name";
            $listdanhmuc = pdo_query($sql);
            include "danhmuc/listdm.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sql = "delete from danhmuc where id=" . $_GET['id'];
                pdo_query($sql);
                $thongbao = "Xóa thành công";
            }
            $sql = "select * from danhmuc order by name";
            $listdanhmuc = pdo_query($sql);
            include "danhmuc/listdm.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
