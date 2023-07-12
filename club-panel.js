let userField = document.querySelectorAll('.user-field');
    for(let elements of userField.values()){
        elements.addEventListener('click', (e) =>{
            if(e) window.location.href = "club-player-club-information.php";
            else console.log('error' + e);
        }
        )
    }

    
    