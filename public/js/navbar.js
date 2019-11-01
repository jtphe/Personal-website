function classToggle() {
    console.log("test");
    const navs = document.querySelectorAll('.navbar-menu')

    navs.forEach(nav => nav.classList.toggle('navbar-toggleShow'));
}

var res = document.querySelector('.navbar-toggle');
console.log(res);
if(res){
    res.addEventListner('click', classToggle);
}
