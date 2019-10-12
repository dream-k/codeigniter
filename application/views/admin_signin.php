

<body class="account-body accountbg">

<!-- sign In page -->
<div class="row vh-100 mt-5">
<div class="col-12 align-self-center">
    <div class="auth-page">
        <div class="card auth-card shadow-lg">
            <div class="card-body">
                <div class="px-3">
                    <form class="form-horizontal auth-form my-4" id="regForm"  action="index.php">
                        
                        <div class="tab" id="tab1" style="display:block;">
                            <div class="auth-logo-box">
                                <a href="<?php echo base_url();?>" class="logo logo-admin"><img src="<?php echo base_url('images/signin_images/signin_image_four.png')?>" height="70" alt="logo" class="auth-logo"></a>
                            </div><!--end auth-logo-box-->
                            <div class="text-center auth-logo-text mb-5">
                                <h4 class="mt-0 mb-5 mt-5">Login to Your Account</h4>
                            </div> <!--end auth-logo-text-->
                            <div class="form-group">
                                <label for="email">Email<span id="emailStatus" style="float:right;margin-left:20px;display:none;"></span></label>
                                <div class="input-group mb-5">
                                    <span class="auth-form-icon">
                                        <i class="dripicons-mail"></i> 
                                    </span>      
                                    <input type="email" name="email" class="form-control required" id="email" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group mb-5">
                                    <span class="auth-form-icon">
                                    </span>      
                                    <input type="password" name="password" class="form-control required" id="password" >
                                </div>
                            </div>
                            <div class="form-group" id="passMatchError" style="display:none;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p style="color:red; text-align:center;">Email and Password Do Not Match.Try again!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-5 row">
                                <div class="col-8 mt-2" style="margin:auto;" id="selector">
                                    <div class="row">
                                        <div class="col-12 next">
                                            <button type="button" class="btn btn-primary btn-block enw" id="nextBtn1"  disabled>Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center auth-logo-text">
                                
                                <p class="text-muted mb-3">Don't have an account?.click <a href="<?php echo base_url();?>" style="text-decoration:underline;">Here</a> to create one for FREE.
                                </p>  
                                <p class="text-muted mb-3">Forgot Password?
                                </p>
                            </div> <!--end auth-logo-text-->
                        </div><!--end tab --> 
                        <div class="tab" id="matchcode">
                            <div class="auth-logo-box">
                                <a href="<?php echo base_url();?>" class="logo logo-admin"><img src="<?php echo base_url('images/signin_images/signin_image_five.png');?>" height="70" alt="logo" class="auth-logo"></a>
                            </div><!--end auth-logo-box-->
                            <div class="text-center auth-logo-text mb-3">
                                <h4 class="mb-3 mt-5">SMS Verification</h4>
                                <h5 class="mb-3 mt-3" id="helloUser">Hello</h5>
                                <p class="text-muted mb-3">You will receive a text message(SMS) on the following cell phone number found associated with your account based on email and password entered.
                                </p>  
                                <p class="text-muted mb-3">The text message(SMS) has been sent to 
                                </p>
                                <h5 class="mb-3 mt-3" id="userCell"></h5>
                                <p class="text-muted mb-3">Please enter 8-digit code received in the following field.
                                </p>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3 inline-r-45 centering">
                                    <input type="text" class="form-control verifyCode required" id="verifyCode" placeholder="00000000">
                                </div>                                    
                            </div><!--end form-group-->
                            <div class="form-group">
                                <p class="inline-r-30 verifyTimer">
                                    <span id="timer" style="font-size:26px;"></span><br>
                                </p>                            
                            </div><!--end form-group-->
                            <div class="form-group mb-0 row">
                                <div class="col-12 mt-2" id="selector" style="margin:auto;">
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn-block btn btn-outline-light waves-effect waves-light" id="prevBtn2">Go Back</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-primary btn-block enw" id="nextBtn2">Next</button>
                                                <button type="button" class="btn btn-primary btn-block enw" id="resendSMSBtn" style="display:none;">Re-send Code</button>
                                            </div>
                                        </div>
                                </div>
                            </div> 
                        </div><!--end tab --> 
                        <div class="tab" id="congratulation">
                            <div class="auth-logo-box">
                                <a href="<?php echo base_url();?>" class="logo logo-admin"><img src="<?php echo base_url('images/signin_images/signin_image_six.png');?>" height="70" alt="logo" class="auth-logo"></a>
                            </div><!--end auth-logo-box-->
                            <div class="text-center auth-logo-text">
                                <h2 class="mt-0 mb-5 mt-5" style="color:green">Welcome</h2>
                                <h3 class="mt-0 mb-5 mt-5" id="companyName"></h3>
                                <p class="text-muted mb-0" style="width:80%;margin:auto;">You are now being directed to your Admin page...
                                </p>  
                            </div> <!--end auth-logo-text-->  
                        </div>
                        <!-- Circles which indicates the steps of the form: -->
                        <div style="text-align:center;margin-top:40px;">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>
                    </form><!--end form-->
                    <input type="hidden" value="0" id="matchCodeConfirm" />
                </div><!--end /div-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end auth-card-->
</div><!--end col-->           
</div><!--end row-->
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
var verifyCode='';

var myTimer;
var countDownDate;
var x = document.getElementsByClassName("tab");
showTab(0);
//function for counting 5 minutes of time to verify code
function startTimer(){
    // document.getElementById('timer').innerHTML = 05 + ":" + 00;
    $('#resendSMSBtn').css('display','none');
    $('#nextBtn2').css('display','block');
    $('#verifyCode').attr('disabled',false);
    // $('#verifyCode').removeClass('invalid');
    // $('#verifyCode').addClass('validable');
    var st=new Date().getTime();
    countDownDate=st+300000;
    myTimer = setInterval("showTime()", 1000);
}
//display remaing time for verify code
function showTime() {
    var now = new Date().getTime();
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    // Time calculations for minutes and seconds
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    // Output the result in an element with id="timer"
    //document.getElementById("timer").innerHTML ="0"+ minutes + " m " + seconds + " s ";
    $("#timer").html("0"+minutes+"<small>&nbsp;m&nbsp;</small>"+ seconds+"<small>&nbsp;s<small>");
    // If the count down is over, write EXPIRED
    if (distance < 0) {
        clearInterval(myTimer);
        $('#resendSMSBtn').css('display','block');
        $('#nextBtn2').css('display','none');
        $('#verifyCode').removeClass('validable');
        $('#verifyCode').removeClass('invalid');
        $('#verifyCode').val('');
        $('#verifyCode').attr('disabled',true);
        document.getElementById("timer").innerHTML = "Expired";
    }
}
//send sms to cell number
function sendSMS(){
    $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>admin_signin/sendSMS", 
            data: {
                emp_email: $("#email").val()
            },
            dataType: "json",  
            cache:false,
            success: function(data){
               verifyCode=data['verify_code'];
               startTimer();
            },
            error: function(data){
               
            }
    });
}
function showTab(n) {
    // This function will display the specified tab of the form...
   
    x[n].style.display = "block";
    fixStepIndicator(n);
}

function fixStepIndicator(n) {
      // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
}
//check validate form
//first tab
$('#email').val('');
$('#password').val('');
//check emailStatus;
$('#email').keyup(function(){
    var email=$('#email').val();
    if(validateEmail(email)){
        $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>admin_signin/email_registered", 
                data: {
                    emp_email: $("#email").val()
                },
                dataType: "json",  
                cache:false,
                success: function(data){
                    $('#email').removeClass('invalid');
                    $('#email').addClass('validable');
                    $('#emailStatus').css('display','block');
                    $('#emailStatus').css('color','green');
                    $('#emailStatus').text('Email found.');
                },
                error: function(data){
                    $('#email').addClass('invalid');
                    $('#email').removeClass('validable');
                    $('#emailStatus').css('color','red');
                    $('#emailStatus').css('display','block');
                    $('#emailStatus').text('Email not Registered.');
                }
        });
    }
    else{
        $('#email').addClass('invalid');
        $('#email').removeClass('validable');
        $('#emailStatus').css('display','block');
        $('#emailStatus').css('color','red');
        $('#emailStatus').text('Must be an email.');
    }
});
function validateEmail($email) {
    if($email=="") return false;
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test($email);
}
//password entered check and validate next button;
$('#password').on('keyup change',function(){
    if($('#password').val()!='' && $('#emailStatus').text()=='Email found.') {
        $('#nextBtn1').attr('disabled',false);
    }
    else{
        $('#nextBtn1').attr('disabled',true);
    }
});
$('#verifyCode').on('keyup change',function(){
    if($('#verifyCode').val().length==8) {
        $('#verifyCode').addClass('validable');
        $('#verifyCode').removeClass('invalid');
    }
    else{
       
        $('#verifyCode').removeClass('validable');
        $('#verifyCode').addClass('invalid');
    }
})

$('#nextBtn1').on('click',function(){
    
    $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>admin_signin/match_password", 
            data: {
                emp_email: $("#email").val(),
                emp_password:$('#password').val()
            },
            dataType: "json",  
            cache:false,
            success: function(data){
                if(data==1){
                    $('#passMatchError').css('display','none');
                    $('#password').addClass('validable');
                    $('#password').removeClass('invalid');
                    $.ajax({
                            type: "POST",
                            url: "<?php echo base_url();?>admin_signin/get_user", 
                            data: {
                                emp_email:$('#email').val()
                            },
                            dataType: "json",  
                            cache:false,
                            success: function(data){
                                $('#helloUser').text('Hello '+data['employee_name']+'!');
                                $('#userCell').text('(***)***-'+data['employee_cell1'].slice(-4));
                                $('#companyName').text(data['organization_name']);
                                sendSMS();
                                
                            },
                            error: function(data){
                               
                            }
                    });
                    x[currentTab].style.display = "none";
                    currentTab+=1;
                    showTab(currentTab);
                }
                else{
                    $('#passMatchError').css('display','block');
                    $('#password').addClass('invalid');
                    $('#password').removeClass('validable');
                    $('#password').val('');
                    return false;
                }
            },
            error: function(data){
                $('#passMatchError').css('display','block');
                $('#password').addClass('invalid');
                $('#password').removeClass('validable');
                return false;
            }
    });
});
//second tab
$('#prevBtn2').on('click',function(){
    
    x[currentTab].style.display = "none";
    currentTab-=1;
    showTab(currentTab);

});
$('#nextBtn2').on('click',function(){
    if(verifyCode==$('#verifyCode').val() && verifyCode!=''){
        x[currentTab].style.display = "none";
        currentTab+=1;
        showTab(currentTab);
        setTimeout(function(){ window.location.href = "<?php echo base_url();?>"; }, 2000);
        
    }
    else{
        $('#verifyCode').removeClass('validable');
        $('#verifyCode').addClass('invalid');
        return false;
    }
});
$('#resendSMSBtn').on('click',function(){
    sendSMS();
})
$(document).ready(function(){
    
});
</script>
<!--   end code  vaib   -->
