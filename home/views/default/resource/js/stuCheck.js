/** 
* 检查学生注册信息的文件。 
* @author      lkl
* @version     v1.0
* @since        1.0  
*/ 
$(document).ready(function(){
     $(function(){
        $("#stu_email").focus(function(){
            $("#stu_emailTips").text("");
        });
        $("#stu_email").blur(function(){
           checkstu_email();
        });
        $("#stu_password1").focus(function(){
            $("#stu_password1Tips").text("");
        });
        $("#stu_password1").blur(function(){
            checkstu_password1();
        });
        $("#stu_password2").focus(function(){
            $("#stu_password2Tips").text("");
        });
        $("#stu_password2").blur(function(){
            checkstu_password2();
        });
        $("#see_stu_password1").click(function()
        {
            if($(this).attr("class")=="glyphicon glyphicon-eye-close")
            {
                $(this).attr("class","glyphicon glyphicon-eye-open");
                $("#stu_password1-1").val($("#stu_password1").val());
                $("#stu_password1").hide();
                $("#stu_password1-1").show();
            }
            else{
                $(this).attr("class","glyphicon glyphicon-eye-close");
                $("#stu_password1").val($("#stu_password1-1").val());
                $("#stu_password1").show();
                $("#stu_password1-1").hide();
            }
        });
        $("#see_stu_password2").click(function(){
            if($(this).attr("class")=="glyphicon glyphicon-eye-close")
            {
                $(this).attr("class","glyphicon glyphicon-eye-open");
                $("#stu_password2-1").val($("#stu_password2").val());
                $("#stu_password2").hide();
                $("#stu_password2-1").show();
            }
            else{
                $(this).attr("class","glyphicon glyphicon-eye-close");
                $("#stu_password2").val($("#stu_password2-1").val());
                $("#stu_password2").show();
                $("#stu_password2-1").hide();
            }
        });
        $("#stu_name").focus(function(){
            $("#stu_nameTips").text("");
        });
        $("#stu_name").blur(function(){
           checkstu_name();
        });
        $("#stu_school").focus(function(){
            $("#stu_schoolTips").text("");
        });
        $("#stu_school").blur(function(){
           checkstu_school();
        });
         $("#stu_number").focus(function(){
            $("#stu_numberTips").text("");
        });
        $("#stu_number").blur(function(){
           checkstu_number();
        });       
        $("#stuReg").on("click",function(){
            if(checkstu_email()&&checkstu_password1()&&checkstu_password2()&&checkstu_name()&&checkstu_school()&&checkstu_number())
            {
            }else{
                $("#stuRegister").submit(function(e){
                    e.preventDefault();
                });
            }
        });
    });
});
function checkstu_email()
{
    var stu_email = $("#stu_email").val();
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if(stu_email.length==0)
    {
        $("#stu_emailTips").text("*请输入邮箱账号");
        return false;
    }
    else if(!regex.test(stu_email))
    {
        $("#stu_emailTips").text("*邮箱格式不符合要求");
        return false;
    }
    else{
        //查询该Email是否已被注册
        var changeUrl = $('#ajaxurl').val()+"/ajax/check_user/Email/"+stu_email;
        $.get(changeUrl,function(str){
            if(str == ' 1'){
                $("#stu_emailTips").text("*您输入的用户名已存在！请重新输入");
                return false;
            }
        });        
        return true;
    }
}
function checkstu_password1()
{
    if($("#stu_password1").attr("hidden")=="hidden")
    {
        $("#stu_password1").val($("#stu_password1-1").val());
    }
    var stu_password1=$("#stu_password1").val();
    if(stu_password1.length<6||stu_password1.length>20)
    {
        $("#stu_password1Tips").text("*密码长度为"+stu_password1.length+",不符合要求");
        return false;
    }else{
        return true;
    }
}
function checkstu_password2()
{
    if($("#stu_password1").attr("hidden")=="hidden")
    {
        $("#stu_password1").val($("#stu_password1-1").val());
    }
    if($("#stu_password2").attr("hidden")=="hidden")
    {
        $("#stu_password2").val($("#stu_password2-1").val());
    }
    var stu_password1=$("#stu_password1").val();
    var stu_password2=$("#stu_password2").val();
    if(stu_password1!=stu_password2)
    {
        $("#stu_password2Tips").text("*两次输入的密码不相同");
        return false;
    }else{
        return true;
    }
}
function checkstu_name()
{
    var stu_name=$("#stu_name").val();
    if(stu_name.length<2)
    {
        $("#stu_nameTips").text("*姓名长度为"+stu_name.length+",不符合要求");
        return false;
    }else{
        return true;
    }
}
function checkstu_school()
{
    var stu_school=$("#stu_school").val();
    if(stu_school.length<2)
    {
        $("#stu_schoolTips").text("*学校名不符合要求");
        return false;
    }else{
        return true;
    }
}
function checkstu_number()
{
    var stu_school=$("#stu_number").val();
    if(stu_school.length<1)
    {
        $("#stu_numberTips").text("学号不能为空");
        return false;
    }else{
        return true;
    }
}