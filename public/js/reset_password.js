$('#passwordConfirm').on('keyup', function() {
    var password = $('#passwordFirst').val();
    var confirm_password = $('#passwordConfirm').val();

    if (password != confirm_password) {
        this.setCustomValidity("密码不匹配");
    } else {
        this.setCustomValidity('');
    }
});
