 "use strict";

//email validation
let em = $('.email');
let email = em.val();

function ValidateEmail(inputText) {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (inputText.value.match(mailformat)) {
        return true;
    } else {
        return false;
    }
}

em.on('input', () => {
    if (!ValidateEmail(document.form1.email)) {
        $('.email-err').css('display', 'block')
    }else{
        $('.email-err').css('display','none')
    }
});

// phone number validation with message

function phonenumber(inputtxt) {
    var phoneno = /^\+?([0-9]{3})\)?[-. ]?([0-9]{2})[-. ]?([0-9]{6})$/;
    if ((inputtxt.value.match(phoneno))){
        return true;
    } else {
        return false;
    }
}
$('.phone').on('input', ()=>{
    if(!phonenumber(document.form1.phone)){
        $('.phone-err').css('display','block')
    }else{
        $('.phone-err').css('display','none')
    }
})



$('.send').on('click',()=>{
    if(phonenumber(document.form1.phone) && ValidateEmail(document.form1.email)){
        $('form[name="form1"]').each((i)=>{
            let userName= $('#uName').val();
            let userEmail= $('#email').val();
            let userPass= $('#pass').val();
            let userConfpass= $('#confpas').val();
            localStorage.setItem('anun', userName );
            localStorage.setItem('mail', userEmail );
            localStorage.setItem('heraxos', $('#phone').val() );
            localStorage.setItem('parol', userPass );      
	  })
         document.location = 'account.html'

    }else{
        document.location = 'index.html';
    }
})


$('.user-name').append(localStorage.getItem('anun'));
$('.user-email').append(localStorage.getItem('mail'));
$('.user-phone').append(localStorage.getItem('heraxos'));
$('.user-password').append(localStorage.getItem('parol'));
