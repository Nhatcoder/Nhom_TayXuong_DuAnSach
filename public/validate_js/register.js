function send_user(){
    var username = document.getElementById('username');
    var err_username = document.getElementById('err_username');

    var email = document.getElementById('email');
    var err_email = document.getElementById('err_email');

    var password = document.getElementById('password');
    var err_password = document.getElementById('err_password');

    var count = 0;
    if (username.value == '') {
        err_username.textContent = 'Vui lòng điền tên đăng nhập';
        err_username.style.color = 'red';
        count++;
    } else {
        err_username.textContent = '';
    }
    var emailRegex = /^[^\s@]+@gmail\.com$/;
    if (email.value == '') {
        err_email.textContent = 'Vui lòng nhập email';
        err_email.style.color = 'red';
        count++;
    } else if (!emailRegex.test(email.value)) {
        err_email.textContent = 'Email không hợp lệ';
        err_email.style.color = 'red';
        count++;
    } else {
        err_email.textContent = '';
    }
    var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;
    if (password.value == '') {
        err_password.textContent = 'Vui lòng nhập mật khẩu';
        err_password.style.color = 'red';
        count++;
    } else if (!passwordRegex.test(password.value)) {
        err_password.textContent = 'Mật khẩu ít nhất 8 kí tự, 1 kí tự viết hoa viết thường và số';
        err_password.style.color = 'red';
        count++;
    } else {
        err_password.textContent = '';

    }
    if (count > 0) {

        return false;
    } else {
        return true;
    }
}