<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH LOẠI HÀNG</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table border="1 red">
                <tr>
                    <th></th>
                    <th>Mã loại</th>
                    <th>Tên loại</th>

                    <th></th>
                </tr>
                <?php
                foreach($listdanhmuc  as $danhmuc)
                {
                    extract($danhmuc);
                    $sua="index.php?act=suadm&id=".$id;
                    $xoadm="index.php?act=xoadm&id=".$id;
                    echo'<tr>
                    <td><input type="checkbox" value=""></td>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td><a href="'.$sua.'"><input type="button" value="Sửa"></a>
                        <a href="'.$xoadm.'"><input type="button" value="Xóa"></a>
                    </td>
                </tr>';
                }
                ?>
            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="admin.html"></a><input type="button" value="Nhập thêm">
            <br>
            <?php 
                if(isset($thongbao)&&($thongbao!=""))
                echo $thongbao;
            ?>
        </div>
    </div>
</div>