$(document).ready(function () {
    $(window).scroll(function () { 
        var viTri =$('html,body').scrollTop();
        if(viTri >= 200 ){
            $('nav').addClass('cuon-xuong');   
        } else{
            $('nav').removeClass('cuon-xuong');
        }
    });
    $('.go_top').on('click', function (e) {
        e.preventDefault()
        $('html,body').animate({ scrollTop:0 + 'px'},500)
    });

    $("#register").validate({
        rules: {
            name: "required",
            email: {
              required: true,
              email: true
            },
            password: {
              required: true,
              minlength: 6
            },
            comfirmPassword: {
              required: true,
              minlength: 6
            }
          },
      
          messages: {
            name: "Vui lòng nhập họ tên",
            email: "Vui lòng nhập email",
            password: {
              required: "Vui lòng nhập mật khẩu",
              minlength: "Mật khẩu phải lớn hơn 6 kí tự"
            },
            comfirmPassword: {
                required: "Vui lòng nhập mật khẩu",
                minlength: "Mật khẩu phải lớn hơn 6 kí tự"
            },
        }
    });
    $("#login").validate({
        rules: {
            email: {
                required :true,
                email: true
            },
            password: {
                required: true,
                minlength: 6
            }
        },
        messages: {
            email: "Vui lòng nhập email",
            password: {
              required: "Vui lòng nhập mật khẩu",
              minlength: "Mật khẩu phải lớn hơn 6 kí tự"
            },
        }
    })
})
