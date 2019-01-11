/* Ajax call to check if email already exists */
/* Asynchronous call */
$(document).ready(function(){
  $("#email").change(function(){
    $.ajax({
    url : "check_email.php",
    type : "POST",
    data : {"email": $("#email").val() },
    success : function (data)
      {
         if(data == "success")
          {
            var email = document.getElementById("email")
            email.setCustomValidity("");
          }
         else if(data == "fail")
          {
            var email = document.getElementById("email")
            email.setCustomValidity("To email δεν είναι διαθέσιμο");
          }
      }
    });
  });
});