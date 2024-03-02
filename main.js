const btnSignIn     = document.querySelector('.header-setAcc-button');
const spanSignIn    = document.querySelector('.overlay-span-login');
const sectionSignIn = document.querySelector('.overlay-section-login');
const backSignIn = document.querySelector('.back-signIn');

const btnSignUp     = document.querySelector('.do-signup');
const spanSignUp    = document.querySelector('.overlay-span-signup');
const sectionSignUp = document.querySelector('.overlay-section-signup');

btnSignIn.addEventListener("click", () => {
    sectionSignIn.classList.add("active");
    spanSignIn.classList.add("active-spanSignIn");
    document.body.classList.add("active-popup");
});

spanSignIn.addEventListener("click", () => {
    sectionSignIn.classList.remove("active");
    spanSignIn.classList.remove('active-spanSignIn')
    document.body.classList.remove("active-popup");
});

btnSignUp.addEventListener("click", () => {
    sectionSignIn.classList.remove("active");
    spanSignIn.classList.remove('active-spanSignIn');
    document.body.classList.remove("active-popup");

    sectionSignUp.classList.add("active");
    spanSignUp.classList.add('active-spanSignUp');
    document.body.classList.add("active-popup");
});

spanSignUp.addEventListener("click", () => {
    sectionSignUp.classList.remove("active");
    spanSignUp.classList.remove("active-spanSignUp")
    document.body.classList.remove("active-popup");
});

backSignIn.addEventListener("click", () => {
    sectionSignUp.classList.remove("active");
    spanSignUp.classList.remove("active-spanSignUp")
    document.body.classList.remove("active-popup");

    sectionSignIn.classList.add("active");
    spanSignIn.classList.add("active-spanSignIn");
    document.body.classList.add("active-popup");
});





const btnStart = document.querySelector('.btn-start');
const btnPause = document.querySelector('.btn-pause');

btnStart.addEventListener("click", () => {
    btnPause.classList.add('active-pause');
    btnStart.classList.add('active-start');
});

btnPause.addEventListener("click", () => {
    btnPause.classList.remove('active-pause');
    btnStart.classList.remove('active-start');
});
















