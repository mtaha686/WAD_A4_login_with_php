// script.js
function checkSession() {
  if (sessionStorage.getItem("username") === null) {
    window.location.href = "login.php";
  }
}

function logout() {
  sessionStorage.removeItem("username");
  window.location.href = "logout.php";
}
