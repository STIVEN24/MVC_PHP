window.onload = function() {
    
    /**
     * Toast
    */
    function toast(text) {
        const toast = document.createElement('div');
        const body = document.querySelector('body');
        toast.className = 'toast' ;
        toast.innerText = text;
        body.append(toast);
        setTimeout( () => {
            toast.remove();
        }, 3000);
    }
    
    /**
     * Validate Fields Login
    */
    const formLogin = document.getElementById('login');
    const username = document.getElementById('username');
    const password = document.getElementById('password');

    try {
        formLogin.addEventListener('submit', (e) => {
            if ( username.value === "" && password.value === "" ) { toast("Fields Empty"); username.className = password.className = 'focus-form-login'; setTimeout( () => { username.className = username.className.replace('focus-form-login',""); password.className = password.className.replace('focus-form-login',"") }, 3000) }
            else if (username.value === "") { toast("Field Username Empty") }
            else if (password.value === "") { toast("Field Password Empty") }
       });
    } catch(err) {}
  
}