function toggleMenu(){
    const navBar = document.querySelector('.navBar');
    const burger = document.querySelector('.burger');
    burger.addEventListener('click', ()=>{
        navBar.classList.toggle('openNav')
    })
}
toggleMenu();