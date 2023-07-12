const editBtn = document.getElementById('edit');
const editFields = document.querySelectorAll('.input')
const saveBtn = document.getElementById('save');

editBtn.addEventListener('click', () => {
    for(let value of editFields.values()){
        if(value.readOnly){
            value.readOnly = false;
            if(value.name == 'categoria' || value.name == 'class'
        || value.name == 'end-date'){
                value.readOnly = true;
            }
        }
    }
})
saveBtn.addEventListener('click', () =>{
    for(let value of editFields.values()){
        value.readOnly = true;
    }
 })

