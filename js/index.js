const mobileBtn = document.getElementById("mobile-nav-btn");

const mobileNavList = document.getElementById("mobile-nav");



mobileBtn.addEventListener('click',()=>{
    mobileNavList.classList.toggle('show');
})