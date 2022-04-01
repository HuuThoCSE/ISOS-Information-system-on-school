<div class="border rounded-top">
        <h1 class="text-center">TÀI KHOẢN</h1>
    </div>

    <div class="border rounded-bottom">
    <div class='text-center'>
        <strong>HÌNH TRONG LỚP</strong>
        <div class="rounded mx-auto d-block" id='tronglop'><img src="/icons/no-image.svg" width="20%"></div>
            <strong>HÌNH ĐẠI DIỆN</strong>
        <div class="rounded mx-auto d-block" id="avatar"><img src="/icons/no-image.svg" width="20%"></div>
            <strong>HÌNH BÌA: </strong>
        <div class="rounded mx-auto d-block" id="banner"><img src="/icons/no-image.svg" width="20%"></div>
    </div>

    <div class="list-group">
        <button class="list-group-item">Họ và tên:</button> <br>
        <button class="list-group-item">Sinh nhật:</button> <br>
        <button class="list-group-item">Lớp:</button> <br>
        <button class="list-group-item">Học lực:</button> <br>
        <button class="list-group-item">Hạnh kiểm:</button> <br>
        <button class="list-group-item">PIN:</button> <br> <button class="list-group-item" onclick="document.getElementById('id01').style.display='block'">Đổi PIN</button> <br>
        <button class="list-group-item">Email:</button> <br>
        <button class="list-group-item">SDT:</button> <br>
        <button class="list-group-item">Cha:</button> <br>
        <button class="list-group-item">Mẹ:</button> <br>
        <button class="list-group-item">Học sinh:</button> <br>
        <button class="list-group-item">Địa chỉ:</button> <br>
    </div>
</div>

<img src="" alt="">
	Họ và tên: 
	Ngày/Tháng/Năm sinh: 
	Chủ nhiệm lớp: 
	Mức lương:  

    <div id="id01" class="modal">
    <form class="modal-content" action="/action_page" method="post">
        <div style="float:right;">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>
        <h1>ĐỔI PIN</h1>
        <input type="text" name="pincu" id="pincu" maxlength="6" placeholder="Mã PIN cũ.">
        <input type="text" name="pinmoi" id="pinmoi" maxlength="6" placeholder="Mã PIN mới.">
        <input type="text" name="nhaplaipin" id="nhaplaipin" maxlength="6" placeholder="Nhập lại PIN mới.">
        <input type="submit" value="ĐỔI PIN">
    </form>

</div> <br>
<div id='video'>
    <div class="container border rounded">
        <h1 class='text-center'>VIDEO</h1>
    </div>