function logout() {
    fetch('/php/login.php').then(()=>window.location.href=
   'login.html'
    )
}