
// ORIGINAL
  $("#contactForm").submit(function(event){
    // cancels the form submission
      event.preventDefault();
      submitForm();
  });
 // ENDS ORIGINAL



 // $("#contactForm").validator().on("submit", function (event) {
 //     if (event.isDefaultPrevented()) {
         // handle the invalid form...
            // submitMSG(false, "Did you fill in the form properly?");
 //     } else {
         // everything looks good!
 //         event.preventDefault();
 //         submitForm();
 //     }
 // });



/*$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});*/


/*
3era opcion de:
https://stackoverflow.com/questions/35529441/form-validated-but-no-email-send

$(document).ready(function () {
$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
            ///console.log("rrrr");
    } else {
        ///console.log("fff");
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});
});
*/
function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();
	/*Yadi*/
	var empresa = $("#empresa").val();
	var tel = $("#tel").val();
	/*Yadi*/

    $.ajax({
        type: "POST",
        url: "js/form-process.php",
        data: "name=" + name + "&empresa=" + empresa + "&tel=" + email + "&tel=" + email + "&message=" + message,
        success : function(text){
            if (text == "success"){
                formSuccess();
            }
        }
    });
}
function formSuccess(){
    $( "#msgSubmit" ).removeClass( "hidden" );
    $("#contactForm")[0].reset();
    submitMSG(true, "Enviado exitosamente!")
}

function formError(){
    $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}
/**Redicreccionar este js en footer-common*/
function submitMSG(valid, msg){
        var msgClasses;
    if(valid){
        msgClasses = "h3 text-center tada animated text-success";
    } else {
        msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}

function formError(){
    $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}