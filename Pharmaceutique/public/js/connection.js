function W3docs()                                    
{ 
    var name = document.forms["RegForm"]["name"];               
   
    var password = document.forms["RegForm"]["motdepass"];  
   

    if (name.value == "")                                  
    { 
        Swal.fire({
            icon: 'error',
            title: 'Oops!Name invalid',
        })  
        name.focus(); 
        return false; 
    }    
   
    if (password.value == "")                        
    { 
        Swal.fire({
            icon: 'error',
            title: 'Oops!password invalid',
        })   
        password.focus(); 
        return false; 
    } 
       
   
    return true; 
}