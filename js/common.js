function validateEmail(email){
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}


function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}


function noSundays(date) {  
    return [date.getDay() != 0, ''];  
}

function chkPwd(str){
   var pw = str;
   var num = pw.search(/[0-9]/g);
   var eng = pw.search(/[a-z]/ig);
   var spe = pw.search(/[`~!@@#$%^&*|₩₩₩'₩";:₩/?]/gi);

   if(pw.length < 8 || pw.length > 20){
    alert("Please, enter the password more than 8 characters and less than 20 characters.");
    return false;
   }
   if(pw.search(/₩s/) != -1){
    alert("Please, enter the password without space.");
    return false;
   } if(num < 0 || eng < 0 || spe < 0 ){
    alert("Please, enter the password which contain at least one numeric digit, one letter and special character.");
    return false;
   }

   return true;
}