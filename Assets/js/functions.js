function frmLogin(e) {
    e.preventDefault();

    const user = document.getElementById("user");
    const psw = document.getElementById("psw");

    if (user.value == "") {
        psw.classList.remove('is-invalid');
        user.classList.add('is-invalid');
        user.focus();
    } else if (psw.value == "") {
        user.classList.remove('is-invalid');
        psw.classList.add('is-invalid');
        psw.focus();
    } else {
        const url = base_url + "User/validate";
        const frm = document.getElementById("frmLogin");
        const http = new XMLHttpRequest;
        http.open('POST', url, true);
        http.send(new FormData(frm));
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const res = JSON.parse(this.responseText);
                if (res == "ok") {
                    window.location = base_url + "User"
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Incorrect credentials',
                        text: res,
                    })
                }
            }
        }
    }
}