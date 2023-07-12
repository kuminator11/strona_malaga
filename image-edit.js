const image_input = document.querySelector("#image-input");
let uploaded_image;


image_input.addEventListener("change", (event) =>{
    const reader = new FileReader();
    reader.addEventListener('load', () => {
        uploaded_image = reader.result;
        document.querySelector('#image').style.backgroundImage = `url(${uploaded_image})`;
    });
    if(event.target.files[0]){
        reader.readAsDataURL(event.target.files[0]);
    }
    else{
        console.log('error' + event.target.files);
    }
});




