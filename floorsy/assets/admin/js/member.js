document.getElementById('btn').onclick = function () {
    // Khai báo tham số
    var checkbox = document.getElementsByName('idMember');
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
    var checkbox = document.getElementsByName('idMember');

    for (var i = 0; i < checkbox.length; i++) {
        {
            checkbox[i].checked=true;
        }
    }
   
};

document.getElementById('btnUnCheckAll').onclick = function () {
    // Khai báo tham số
    var checkbox = document.getElementsByName('idMember');

    for (var i = 0; i < checkbox.length; i++) {
        {
            checkbox[i].checked=false;
        }
    }
   
};