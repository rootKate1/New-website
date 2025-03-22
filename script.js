let Btn = document.getElementById('btn-link');
Btn.addEventListener('click', function(e){
    let Block = document.getElementById('link');
    Block.classList.toggle('display-none');
    Btn.classList.toggle('navbar-toggler-icon');
    Btn.classList.toggle('btn-close')
})