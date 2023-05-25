window.onload = function () {
    setCaptcha();
}

window.onscroll = function () {
    scrollFunction()
};
//khai báo biến slideIndex đại diện cho slide hiện tại
let slideIndex;
// KHai bào hàm hiển thị slide
function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    slides[slideIndex].style.display = "block";
    dots[slideIndex].className += " active";
    //chuyển đến slide tiếp theo
    slideIndex++;
    //nếu đang ở slide cuối cùng thì chuyển về slide đầu
    if (slideIndex > slides.length - 1) {
        slideIndex = 0
    }
    //tự động chuyển đổi slide sau 5s
    setTimeout(showSlides, 10000);
}
//mặc định hiển thị slide đầu tiên 
showSlides(slideIndex = 0);


function currentSlide(n) {
    showSlides(slideIndex = n);
}
//js phần validate form đăng ký
function validate() {


    if (document.myForm.fullname.value == "") {
        document.getElementById("messageName").innerHTML = "Tên không được để trống";
        document.myForm.fullname.focus();
        return false;
    } else {
        document.getElementById("messageName").innerHTML = "";
    }

    if (document.myForm.email.value == "") {
        document.getElementById("messageEmail").innerHTML = "Email không được để trống";
        document.myForm.email.focus();
        return false;
    } else {
        document.getElementById("messageEmail").innerHTML = "";
    }
    let emailID = document.myForm.email.value;
    atpos = emailID.indexOf("@");
    dotpos = emailID.lastIndexOf(".");

    if (atpos < 1 || (dotpos - atpos < 2)) {
        document.getElementById("messageEmail").innerHTML = "Email không đúng định dạng";
        document.myForm.email.focus();
        return false;
    } else {
        document.getElementById("messageEmail").innerHTML = "";
    }

    if (document.myForm.sdt.value == "" || isNaN(document.myForm.sdt.value) ||
        document.myForm.sdt.value.length != 10) {
        document.getElementById("messageSdt").innerHTML = "Số điện thoại không đúng định dạng";
        document.myForm.sdt.focus();
        return false;
    } else {
        document.getElementById("messageSdt").innerHTML = "";
    }
    if (document.myForm.password.value == "") {
        document.getElementById("messagePass").innerHTML = "Mật khẩu không được để trống";
        document.myForm.password.focus();
        return false;
    } else {
        document.getElementById("messagePass").innerHTML = "";
    }
    if (document.myForm.password_confirmation.value == "") {
        document.getElementById("messageConf").innerHTML = "Nhập lại mật khẩu không được để trống";
        document.myForm.password_confirmation.focus();
        return false;
    } else {
        document.getElementById("messageConf").innerHTML = "";
    }

    if (document.myForm.password_confirmation.value != document.myForm.password.value) {
        document.getElementById("messageConf").innerHTML = "Mật khẩu nhập lại không giống nhau";
        document.myForm.password_confirmation.focus();
        return false;
    }

    if (document.myForm.captcha_confirmation.value == "" || document.myForm.code_captcha.value != document.myForm.captcha_confirmation.value) {
        document.getElementById("messageCaptcha").innerHTML = "Mã Captcha không chính xác";
        document.myForm.captcha_confirmation.focus();
        return false;
    }

    alert("Đăng Ký Thành Công");
    registerAjax();

}



function setCaptcha() {
    document.getElementById("code_captcha").value = generateCaptcha();
}


function generateCaptcha() {
    let chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    let captcha = "";
    for (let i = 0; i < 6; i++) {
        captcha += chars.charAt(Math.floor(Math.random() * chars.length));
    }
    return captcha;
}

//đăng ký bằng ajax
function registerAjax() {
    $(document).on('submit', '#contactForm', function (e) {
        e.preventDefault();
        let app = $(this);
        let fullname = $("#fullname").val();
        let email = $("#email").val();
        let sdt = $("#sdt").val();
        let password = $("#password").val();
        let status = $("#status").val();
        $.ajax({
            type: 'POST',
            ataType: 'json',
            url: "../../source/admin/member/create.php",
            data: {
                'fullname': fullname,
                'email': email,
                'sdt': sdt,
                'password': password,
                'status': status
            },
            beforeSend: function () {
                $('#btnContact').text('Sending...');
                $('#btnContact').attr('disabled', !0)
            },
            success: function (data) {
                $('#btnContact').text('Đăng ký');
                $('#btnContact').attr('disabled', !1);
                window.location = "http://localhost/floorsy/source/admin/member/index.php";
                app.trigger('reset');
            },
            error: function (error) {
                console.log(error)
            }
        })
    })
}

// js phần search menu
const people = [{
        name: 'an'
    },
    {
        name: 'bình'
    },
    {
        name: 'duy'
    },
    {
        name: 'linh'
    },
    {
        name: 'thảo'
    },
    {
        name: 'khoa'
    },
    {
        name: 'trang'
    },
    {
        name: 'tiên'
    },
    {
        name: 'huyền'
    },
    {
        name: 'lĩnh'
    },
    {
        name: 'xuyến'
    },
]

const searchInput = document.querySelector('.input')

searchInput.addEventListener("input", (e) => {
    let value = e.target.value
    if (value && value.trim().length > 0) {
        value = value.trim().toLowerCase()
        setList(people.filter(person => {
            return person.name.includes(value)
        }))
    } else {
        clearList()
    }
})


function setList(results) {
    clearList()
    for (const person of results) {
        const resultItem = document.createElement('li')
        resultItem.classList.add('result-item')
        const text = document.createTextNode(person.name)
        resultItem.appendChild(text)
        list.appendChild(resultItem)
    }

    if (results.length === 0) {
        noResults()
    }
}

function clearList() {
    while (list.firstChild) {
        list.removeChild(list.firstChild)
    }
}


function noResults() {
    const error = document.createElement('li')
    error.classList.add('error-message')
    const text = document.createTextNode('Không có dữ liệu cần tìm')
    error.appendChild(text)
    list.appendChild(error)
}

//js nút scrolls trở lên đầu trang 

// When the user scrolls down 20px from the top of the document, show the button


function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

