<div class='menu'>
        <img src="/icons/menu.svg" width="24px" height="24px" onclick="window.location.href='/trangchu'">
    </div>
    <div>
        <h1 class='text-center'>NGHỈ PHÉP</h1>
        <p class="text-left">Lý do nghỉ phép:</p>
        <ul class="list-group text-center">
            <li class="list-group-item">Bệnh</li>
            <li class="list-group-item" id='bthkhac' onclick="lydokhac()">Khác</li>
        </ul>
    </div>

    <div class="menu-end">
        Họ và tên: 
        Lớp: 
        Lý do nghỉ: 
    </div>

    <div class='menu'>
        <img src="/icons/menu.svg" width="24px" height="24px" onclick="window.location.href='/trangchu'">
    </div>
    <div align='center' class="tieude">
        <strong>Cộng hoà xã hội chủ nghĩa Việt Nam</strong> <br>
        <strong>Độc lập – Tự do – Hạnh phúc</strong>
        <h1>ĐƠN XIN PHÉP NGHỈ HỌC</h1>
    </div> 
    <div class='noidung'>
        <strong>Kính gửi:</strong> <br> <br>
        <strong>Em tên là:</strong> <br>
        <strong>Học sinh lớp:</strong> <br>
        <strong>Em viết đơn này xin phép được nghỉ học từ ngày</strong>...<strong>đến ngày</strong>... <br>
        <strong>Lý do:</strong>... <br>
        Em hứa sẻ chép bài, học bài bà làm bài tập đầy đủ. <br>
        Kính mong các thầy/cô cho em nghỉ buổi học này! <br>
        Em xin chân thành cảm ơn! <br> <br>
    </div>
    <div class="kiten">
        ......, Ngày ... tháng ... năm ...
    </div> <br>
    <div>
        <button>Xát nhận của Phụ huynh học sinh (recoding)</button>
        <button>Giáo viên bộ môn</button>
    </div>
    <div class="thanhcong" hidden>
        THÀNH CÔNG
    </div>
    <div class="thatbai" hidden>
        THẤT BẠI
    </div>

<script>
function lydokhac(){
var t = prompt('Lý do khác:', '');
alert(t); }
</script>