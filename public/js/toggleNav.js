
window.onload=function(){
    const toggleButton = document.getElementsByClassName('toggle-button')[0]
    const navbarLinks = document.getElementsByClassName('navbar-links')[0]
    const toggle = document.getElementById('togglebtn');
    
    toggle.addEventListener('click', () => {
        navbarLinks.classList.toggle('active')
    })
    
  }