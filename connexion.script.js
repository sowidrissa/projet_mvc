var allInput = document.getElementsByClassName("type");
var inputLogin =document.getElementsByClassName('type')[0];
var inputPassword =document.getElementsByClassName('type')[1];
console.log(allInput);

function validateEmail (email)  {
  const re=(
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
  );
  if(re.test(email.toLowerCase())){
    return true;
  }
  else{
    return false;
  }

};
 inputLogin.onkeyup=function(){
   if(validateEmail(inputLogin.value.trim())){
     inputLogin.style.border='4px solid green';
   }else{
     
    inputLogin.style.border='4px solid red';
   }
 }

 inputPassword.onkeyup=function(){
  if(validatePassword(inputPassword.value.trim())){
    inputPassword.style.border='4px solid green';
  }else{
    
   inputPassword.style.border='4px solid red';
  }
}

  function validatePassword(pwd){ 
    var alpha = pwd.match(/[a-zA-Z]/g);
    var num = pwd.match(/[0-9]/g);
    if(alpha == null || num == null || pwd.length <6){
      return false;
    }else{
      return true;
    }
  }

