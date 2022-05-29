function showPassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
}
function showPassword4() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    document.getElementById("ckbox").checked=true;
    x.type = "text";
  } else {
    document.getElementById("ckbox").checked=false;
    x.type = "password";
  }
}
function showPassword2() {
  var x = document.getElementById("password");
  var y = document.getElementById("confirm_password");
  if (x.type === "password" && y.type === "password") {
    x.type = "text";
    y.type = "text";
  } else {
    x.type = "password";
    y.type = "password";
  }
}
function showPassword3() {
  var x = document.getElementById("password");
  var y = document.getElementById("confirm_password");
  if (x.type === "password" && y.type === "password") {
    document.getElementById("ckbox").checked=true;
    x.type = "text";
    y.type = "text";
  } else {
    document.getElementById("ckbox").checked=false;
    x.type = "password";
    y.type = "password";
  }
}