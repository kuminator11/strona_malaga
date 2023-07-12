const btn = document.getElementById('sbmt'); 
const bars = document.getElementById('bars');

bars.addEventListener('click', () =>{
    const navbar = document.querySelector('nav');
    navbar.classList.toggle('active');
    
});


btn.addEventListener('click', () =>{
    let username = document.getElementById('username').value;
    window.localStorage.setItem('uname', username);
});

