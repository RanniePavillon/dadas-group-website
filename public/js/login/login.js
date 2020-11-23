$(document).ready(function(){
    $('.loginSubmit').on('click',function(e){
        e.preventDefault()
        $.ajax({
            url:'/get/login/user',
            type:'POST',
            data:$('.loginForm').serialize(),
            success:function(response){
                console.log(response);
                if (response == 'Success.') {
                    $("#warning").text("");
                    $("#success-alert").show();
                    setTimeout(function() { $("#success-alert").hide(); }, 5000);
                    location.href = '/adminDashboard';
                }
                else if (response == 'Please input username or password.'){
                    $("#warning").text("Please input username or password.");
                }
                else{
                    $("#warning").text("Wrong username or password.");
                }
            }
        })
    })
})