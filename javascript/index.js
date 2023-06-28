
function openSignIn(){

    document.getElementById("darkbox").style.display="flex"
    document.getElementById("login_box").style.display="flex"   
}


function openRegister(){
    document.getElementById("login_box").style.display="none"
    document.getElementById("register_box").style.display="flex"
}

function openSignUp(){
    document.getElementById("login_box").style.display="flex"
    document.getElementById("register_box").style.display="none"
}

function crossSign(){
    document.getElementById("darkbox").style.display="none"
    document.getElementById("login_box").style.display="none"  
    document.getElementById("register_box").style.display="none"  
}

