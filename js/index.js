// toggleicon
let menuIcon=document.querySelector('#menu-icon');
let navbar=document.querySelector('.navbar');

menuIcon.onclick=() => {
    menuIcon.classList.toggle('bx-x');
    navbar.classList.toggle('active');
};

// scroll section actifity link
let sections=document.querySelectorAll('section');
let navLinks=document.querySelectorAll('header nav a');

window.onscroll=()=>{
    sections.forEach(sec=> {
        let top=window.scrollY;
        let offset=sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id=sec.getAttribute('id');

        if(top>= offset && top < offset + height){
            navLinks.forEach(links=>{
                links.classList.remove(active);
                document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
            });
        };
    });
            // stick navbar
        let header=document.querySelector('header');

        header.classList.toggle('sticky',window.scrollY>100);

        // REMOVE TOGLE ICON ON NAVBAR LINK( SCROL)
       menuIcon.classList.remove('bx-x');
       navbar.classList.remove('active');



};

navLinks.forEach(link => {
    link.onclick = () => {
        menuIcon.classList.remove('bx-x');
        navbar.classList.remove('active');
    };
});

function resetForm() {
    document.getElementById('refreshform').reset();
    return true; // memastikan form tetap dikirim
}
window.onload = function() {
    // document.getElementById('username').value = '';
    // document.getElementById('zone_id').value = '';
    // document.querySelectorAll('input[type="text"]').forEach(input => input.value = '');
    // document.querySelectorAll('.price-tag').forEach(tag => tag.textContent = 'Rp. 0');
    document.getElementById('refreshform').reset();
    return true;
};




