function validacionForm(){
    //alert('hello world')
    var email=document.getElementById('email').value
    var password=document.getElementById('psswd').value

    if (email=='' && password=='') {
        //alert('dos vacios')
        document.getElementById('message').innerHTML='<p style="color:red">Dos vacios</p>';
        return false
    }else if (email=='') {
        //alert('email vacio')
        document.getElementById('message').innerHTML='email vacio';
        return false
    }else if (password=='') {
        //alert('contra vacia')
        document.getElementById('message').innerHTML='contra vacio';
        return false
    }else{
        return true
    }

}

//document.getElementById(message).innerHTML = ""