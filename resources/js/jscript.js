const sideNav = document.querySelectorAll('.sidebar ul li');
const slider = document.getElementsByClassName('slider')[0];
const sidebar = document.querySelector('aside.sidebar');
const closeButton = document.getElementsByClassName('close-button')[0];
const overlay = document.getElementsByClassName('overlay')[0];

sideNav.forEach(element => {
    
    const icons = element.querySelector('span');
    const links = element.querySelector('a');

    element.addEventListener('mouseenter', function(){
        icons.classList.toggle('change');
        links.classList.toggle('change');
    });

    element.addEventListener('mouseleave', function(){
        icons.classList.toggle('change');
        links.classList.toggle('change');
    });
});

slider.addEventListener("click", function(){
   sidebar.classList.toggle('slide');
   overlay.style.display = 'block';
   overlay.style.opacity = '100%';

});

closeButton.addEventListener("click", function(){
    sidebar.classList.toggle('slide');
    overlay.style.display = 'none';
    overlay.style.opacity = '0';

});