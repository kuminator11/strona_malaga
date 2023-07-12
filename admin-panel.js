let userField = document.querySelectorAll('.user-field');
    for(let elements of userField.values()){
        elements.addEventListener('click', (e) =>{
            if(e) window.location.href = "admin-user-edit.php";
            else console.log('error' + e);
        }
        )
    }

    
    