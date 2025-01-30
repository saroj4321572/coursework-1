var username = document.forms["form"]["us"];
var password = document.forms["form"]["pwd"];
var usr_error = document.getElementById("usr_error");
var pass_error = document.getElementById("pass_error");
var icon_1 = document.getElementById("icon_1");
var icon_2 = document.getElementById("icon_2");
var form_username = document.getElementById("form_username");
var form_password = document.getElementById("form_password");

username.addEventListener("textInput", username_verify);
password.addEventListener("textInput", password_verify);
function validated() {
  setTimeout(() => {
    form_username.classList.remove("shake");
    form_password.classList.remove("shake");
  }, 500);

  if (username.value == "" && password.value == "") {
    username.style.border = "1px solid red";
    usr_error.style.display = "block";
    form_username.classList.add("shake");
    icon_1.style.display = "block";
    username.focus();

    password.style.border = "1px solid red";
    pass_error.style.display = "block";
    form_password.classList.add("shake");
    icon_2.style.display = "block";
    password.focus();
    return false;
  }

  if (username.value == "") {
    username.style.border = "1px solid red";
    usr_error.style.display = "block";
    form_username.classList.add("shake");
    icon_1.style.display = "block";
    username.focus();
    return false;
  }

  if (password.value == "") {
    password.style.border = "1px solid red";
    pass_error.style.display = "block";
    form_password.classList.add("shake");
    icon_2.style.display = "block";
    password.focus();
    return false;
  }
}

function username_verify() {
  if (username.value.length > 1) {
    username.style.border = "1px solid silver";
    usr_error.style.display = "none";
    icon_1.style.display = "none";
    username.focus();
    return true;
  }
}

function password_verify() {
  if (password.value.length > 1) {
    password.style.border = "1px solid silver";
    pass_error.style.display = "none";
    icon_2.style.display = "none";
    password.focus();
    return true;
  }
}
