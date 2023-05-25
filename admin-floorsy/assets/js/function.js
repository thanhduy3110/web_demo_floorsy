//hiển thị ảnh đã chọn
$( document ).ready(function() {
    document.querySelector("#img").addEventListener("change", readFile);
});

function readFile() {

    if (!this.files || !this.files[0]) return;

    const FR = new FileReader();

    FR.addEventListener("load", function (evt) {
        document.querySelector("#image").src = evt.target.result;
    });

    FR.readAsDataURL(this.files[0]);

}




//Chọn xoá tất cả
document.getElementById('btn').onclick = function () {
    // Khai báo tham số
    var checkbox = document.getElementsByName('idProduct');
    var result = "";

    // Lặp qua từng checkbox để lấy giá trị
    for (var i = 0; i < checkbox.length; i++) {
        if (checkbox[i].checked === true) {
            result += checkbox[i].value + ' ';
        }
    }
    document.getElementById('idAll').value= result;
};

document.getElementById('btnCheckAll').onclick = function () {
    // Khai báo tham số
    var checkbox = document.getElementsByName('idProduct');

    for (var i = 0; i < checkbox.length; i++) {
        {
            checkbox[i].checked=true;
        }
    }
   
};

document.getElementById('btnUnCheckAll').onclick = function () {
    // Khai báo tham số
    var checkbox = document.getElementsByName('idProduct');

    for (var i = 0; i < checkbox.length; i++) {
        {
            checkbox[i].checked=false;
        }
    }
   
};