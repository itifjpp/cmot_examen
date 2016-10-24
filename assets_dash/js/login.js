$(document).ready(function (){
    $('.btn-no-login').click(function (){
        $('.row-login').removeClass('hide');
        $('.row-no-login').addClass('hide');
    })
    $('.login-form').submit(function (e){
        e.preventDefault();
        $.ajax({
            url: base_url+"login/login_user",
            dataType: 'json',
            type: 'POST',
            data:$(this).serialize(),
            success:function (data){
                console.log(data);
                if(data['accion']==1){
                    location.replace('principal');
                }else{
                    $('.row-login').addClass('hide');
                    $('.row-no-login').removeClass('hide');
                }
            },error: function (e) {
                console.log(e)
            }
        })
    })
})


