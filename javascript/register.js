var username = document.forms["form"]["usr"];
var password = document.forms["form"]["pw"];
var email = document.forms["form"]["em"];
var confirm_pass = document.forms["form"]["cpw"];

var usr_error = document.getElementById("usr_error");
var pass_error = document.getElementById("pass_error");
var em_error = document.getElementById("em_error");
var con_error = document.getElementById("con_error");

var icon_1 = document.getElementById("icon_1");
var icon_2 = document.getElementById("icon_2");
var icon_3 = document.getElementById("icon_3");
var icon_4 = document.getElementById("icon_4");

var form_username = document.getElementById("form_username");
var form_password = document.getElementById("form_password");
var form_email = document.getElementById("form_email");
var form_confirm = document.getElementById("form_confirm");

username.addEventListener("textInput", username_verify);
password.addEventListener("textInput", password_verify);
email.addEventListener("textInput", email_verify);
confirm_pass.addEventListener("textInput", con_verify);

function validated() {
  setTimeout(() => {
    form_username.classList.remove("shake");
    form_password.classList.remove("shake");
    form_email.classList.remove("shake");
    form_confirm.classList.remove("shake");
  }, 500);

  if (
    username.value == "" &&
    password.value == "" &&
    email.value == "" &&
    confirm_pass.value == ""
  ) {
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

    email.style.border = "1px solid red";
    em_error.style.display = "block";
    form_email.classList.add("shake");
    icon_3.style.display = "block";
    password.focus();

    confirm_pass.style.border = "1px solid red";
    con_error.style.display = "block";
    form_confirm.classList.add("shake");
    icon_4.style.display = "block";
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
  } else if (email.value == "") {
    email.style.border = "1px solid red";
    em_error.style.display = "block";
    form_email.classList.add("shake");
    icon_2.style.display = "block";
    email.focus();
    return false;
  } else if (password.value == "") {
    password.style.border = "1px solid red";
    pass_error.style.display = "block";
    form_password.classList.add("shake");
    icon_3.style.display = "block";
    email.focus();
    return false;
  } else if (confirm_pass.value == "") {
    confirm_pass.style.border = "1px solid red";
    con_error.style.display = "block";
    form_confirm.classList.add("shake");
    icon_4.style.display = "block";
    confirm_pass.focus();
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
    icon_3.style.display = "none";
    password.focus();
    return true;
  }
}
function email_verify() {
  if (email.value.length > 1) {
    email.style.border = "1px solid silver";
    em_error.style.display = "none";
    icon_2.style.display = "none";
    email.focus();
    return true;
  }
}
function con_verify() {
  if (confirm_pass.value.length > 1) {
    confirm_pass.style.border = "1px solid silver";
    con_error.style.display = "none";
    icon_4.style.display = "none";
    confirm_pass.focus();
    return true;
  }
}
