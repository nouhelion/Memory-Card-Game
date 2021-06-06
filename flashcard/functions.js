//functions for the create file
function visible() {
  var x = document.getElementById("ps1");
  var y = document.getElementById("ps2");
  if (x.type == "password" && y.type == "password") {
    x.type = "text";
    y.type = "text";
  } else {
    x.type = "password";
    y.type = "password";
  }
}

function validate() {
  const password = document.querySelector("input[name=passwo]");
  const confirm = document.querySelector("input[name=passwc]");
  if (confirm.value === password.value) {
    confirm.setCustomValidity("");
  } else {
    confirm.setCustomValidity("Passwords do not match");
  }
}

  //how the password should be verified
  /*function verify(inp) {
    var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
    if (inp.value.match(passw)) {
      return true;
    } else {

      return false;
    } 
  }*/

  /*function required() {
    if(document.forms["skull"]["username"].value==""  || document.forms["skull"]["passwo"].value=="" || document.forms["skull"]["passwc"].value=="")
     return false;   //it is oblig for the user to fill the stuff 
    else 
    return true;
  }
  
  //redirecting the user where to go either login or the game 
  function action_stuff(i){
    if(i==1) { //if he chooses login that means we need to confirm if his data is in our system
      document.skull.action="login.php";
    }
    if(i==2 && required()==true) {// if he chooses create it means he is new and he only needs to give us his data
      document.skull.action="index.php";
    }
    document.skull.submit();
  }*/
  
  //fucntions for the login file 
  function visible_log()
  {
    var y = document.getElementById("ps_log");
    if ( y.type == "password") {
      y.type = "text";
    } else {
      y.type = "password";
    }
  }

  