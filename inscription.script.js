// const prenom=document.getElementById('prenom');
// const nom=document.getElementById('nom');
// const login=document.getElementById('login');
// const password=document.getElementById('password');
// const password2=document.getElementById('password2');

// function validateEmail (email)  {
//     const re=(
//       /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
//     );
//     if(re.test(email.toLowerCase())){
//       return true;
//     }
//     else{
//       return false;
//     }
  
//   };
//   login.onkeyup=function(){
//     if(validateEmail(login.value.trim())){
//       login.style.border='4px solid green';
//     }else{
      
//      login.style.border='4px solid red';
//     }
//   }
//   password.onkeyup=function(){
//     if(validatePassword(password.value.trim())){
//       password.style.border='4px solid green';
//     }else{
      
//      password.style.border='4px solid red';
//     }
//   }
  
//     function validatePassword(pwd){ 
//       var alpha = pwd.match(/[a-zA-Z]/g);
//       var num = pwd.match(/[0-9]/g);
//       if(alpha == null || num == null || pwd.length <6){
//         return false;
//       }else{
//         return true;
//       }
//     }
//     password2.onkeyup=function(){
//         if(validatePassword(password2.value.trim())){
//           password2.style.border='4px solid green';
//         }else{
          
//          password2.style.border='4px solid red';
//         }
//       }
      
//     var lettre=/[A-Za-z]+$/;

//     prenom.onkeyup = function(){
//         if(prenom.value=='' || prenom.length<2){
//             prenom.style.border='4px solid red';
//         }else{
//             prenom.style.border='4px solid green';
//         }
//     }

//     nom.onkeyup = function(){

//         if(nom.value=='' || nom.length<2){
//             nom.style.border='4px solid red';
//         }else{
//             nom.style.border='4px solid green';
//         }
//     }
    
    