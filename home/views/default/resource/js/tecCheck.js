/** 
* 检查教师注册信息的文件。 
* @author      lkl
* @version     v1.0
* @since        1.0  
*/
$(document).ready(function(){
    $(function(){
        $("#tch_email").focus(function(){
            $("#tch_emailTips").text("");
        });
        $("#tch_email").blur(function(){
           check_email();
        });
        $("#tch_password1").focus(function(){
            $("#tch_password1Tips").text("");
        });
        $("#tch_password1").blur(function(){
            check_password1();
        });
        $("#tch_password2").focus(function(){
            $("#tch_password2Tips").text("");
        });
        $("#tch_password2").blur(function(){
            check_password2();
        });
        $("#seePass1").click(function()
        {
            if($(this).attr("class")=="glyphicon glyphicon-eye-close")
            {
                $(this).attr("class","glyphicon glyphicon-eye-open");
                $("#tch_password1-1").val($("#tch_password1").val());
                $("#tch_password1").hide();
                $("#tch_password1-1").show();
            }
            else{
                $(this).attr("class","glyphicon glyphicon-eye-close");
                $("#tch_password1").val($("#tch_password1-1").val());
                $("#tch_password1").show();
                $("#tch_password1-1").hide();
            }
        });
        $("#seePass2").click(function(){
            if($(this).attr("class")=="glyphicon glyphicon-eye-close")
            {
                $(this).attr("class","glyphicon glyphicon-eye-open");
                $("#tch_password2-1").val($("#tch_password2").val());
                $("#tch_password2").hide();
                $("#tch_password2-1").show();
            }
            else{
                $(this).attr("class","glyphicon glyphicon-eye-close");
                $("#tch_password2").val($("#tch_password2-1").val());
                $("#tch_password2").show();
                $("#tch_password2-1").hide();
            }
        });
        $("#tch_name").focus(function(){
            $("#tch_nameTips").text("");
        });
        $("#tch_name").blur(function(){
           check_name();
        });
        $("#tch_school").focus(function(){
            $("#tch_schoolTips").text("");
        });
        $("#tch_school").blur(function(){
           check_school();
        });
        $("#tchReg").on("click",function(){
            if(check_email()&&check_password1()&&check_password2()&&check_name()&&check_school())
            {
            }else{
                $("#tchRegister").submit(function(e){
                    e.preventDefault();
                });
            }
        });
    });
});
function check_email()
{
    var email=$("#tch_email").val();
    var regex= /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if(email.length==0)
    {
        $("#tch_emailTips").text("*请输入邮箱账号");
    }
    else if(!regex.test(email))
    {
        $("#tch_emailTips").text("*邮箱格式不符合要求");
        return false;
    }else{
        //检查该Email是否已被注册
        var changeUrl = $('#ajaxurl').val()+"/ajax/check_user/Email/"+email;
        $.get(changeUrl,function(str){
            if(str == '1'){
                $("#tch_emailTips").text("*您输入的用户名已存在！请重新输入");
                return false;
            }
        });
        return true;
    }
}
function check_password1()
{
    if($("#tch_password1").attr("hidden")=="hidden")
    {
        $("#tch_password1").val($("#tch_password1-1").val());
    }
    var tch_password1=$("#tch_password1").val();
    if(tch_password1.length<6||tch_password1.length>20)
    {
        $("#tch_password1Tips").text("*密码长度为"+tch_password1.length+",不符合要求");
        return false;
    }else{
        return true;
    }
}
function check_password2()
{
    if($("#tch_password1").attr("hidden")=="hidden")
    {
        $("#tch_password1").val($("#tch_password1-1").val());
    }
    if($("#tch_password2").attr("hidden")=="hidden")
    {
        $("#tch_password2").val($("#tch_password2-1").val());
    }
    var tch_password1=$("#tch_password1").val();
    var tch_password2=$("#tch_password2").val();
    if(tch_password1!=tch_password2)
    {
        $("#tch_password2Tips").text("*两次输入的密码不相同");
        return false;
    }else{
        return true;
    }
}
function check_name()
{
    var tch_name=$("#tch_name").val();
    if(tch_name.length<2)
    {
        $("#tch_nameTips").text("*姓名长度为"+tch_name.length+",不符合要求");
        return false;
    }else{
        return true;
    }
}
function check_school()
{
    var tch_school=$("#tch_school").val();
    if(tch_school.length<2)
    {
        $("#tch_schoolTips").text("*学校名不符合要求");
        return false;
    }else{
        return true;
    }
}
