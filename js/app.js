// Smooth Scroll
$(function () {
    $('a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});

// Browser Update 
var $buoop = {c:2}; 
function $buo_f(){ 
 var e = document.createElement("script"); 
 e.src = "//browser-update.org/update.min.js"; 
 document.body.appendChild(e);
};
try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
catch(e){window.attachEvent("onload", $buo_f)}


$(document).ready(function () {
    
    // Returns true, if browser is safari.
    var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;
    var isIE = /*@cc_on!@*/false || !!document.documentMode;    
    
    if (isSafari || isIE) {
               
        if (isIE) {
            $('textarea').css('height','208px');               
        }
        
        $('.intropage').addClass('intropagesafari');
        $('.intro').addClass('introsafari');
        
    }
    
    // Form Submission
    $("#submit").click(function (e) {

        e.preventDefault();

        $("#form-result").html('<p><i class="fa fa-spinner fa-pulse fa-2x"></i></p>');
        
        var val = validate();

        if (val == undefined) {

            $("#submit").prop('disabled', true);

            var name = $('#name').val();
            var email = $('#email').val();
            var subject = $('#subject').val();
            var message = $('#message').val();

            $.post('php/send.php', {
                'name': name,
                'email': email,
                'subject': subject,
                'message': message
            }, function (data) {

                $("#form-result").html(data);

            });

            $('#name').val('');
            $('#email').val('');
            $('#subject').val('');
            $('#message').val('');

            $("#submit").prop('disabled', false);

        } else {

            $("#form-result").html(val);

        }

    });
    
    
});

function validate() {

    if (!$('#name').val() == "" && !$('#email').val() == "" && !$('#subject').val() == "" && !$('#message').val() == "") {

        if (validateEmail($('#email').val())) {
            return undefined;
        } else {
            return '<div class="alert alert-danger" role="alert">Please provide a valid E-Mail-Adress.</div>';
        }


    } else {

        return '<div class="alert alert-danger" role="alert">Please fill out every field.</div>';

    }

}

function validateEmail(email) {

    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);

}