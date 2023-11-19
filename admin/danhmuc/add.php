<div class="row">
    <div class="frmtitle">
        <h1>Thêm mới loại hàng hóa</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=adddm" method="post">
            <div class="row mb10">
                Max loại <br>
                <input type="text" name="maloai" disabled>
            </div>

            <div class="row mb10">
                Tên loại <br>
                <input type="text" name="tenloai" >
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="Thêm Mới">
                <input type="reset" value="nhap lai">
                <a href="index.php?act=listdm">
                    <input type="button" value="Danh sách">
                </a>
            </div>
            <?php 
                if(isset($thongbao)&&($thongbao!=""))
                echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>