 $(document).ready(function () {
  $("#pload").hide();
 	var formData="";
  $("#i-btn").click(function(){
  	 	  $("#pload").show();
      $("#i-btn").hide();
    var formData = {
      kode: $("#kode").val()
    };
    $.ajax({
      type: "POST",
      url: "login/twostepverification/step.php",
      data: formData,
      dataType: "text",
      encode: true,
    }).done(function (data) {
setTimeout(function(){
           if(data=="1"){
           	   $("#pload").hide();
           $("#i-btn").show();
           	$('#form1')[0].reset();
           	      $("#errorq").text("Failed, try again");   
           }else if(data=="0"){
           	     $("#pload").hide();
              $("#i-btn").show();
           	    $("#errorq").text("Processing");   
           	window.location.replace("../");
           	}
}, 1000);
    }); 

    event.preventDefault();
  });
});