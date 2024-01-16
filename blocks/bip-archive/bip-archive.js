const opener = document.querySelector('.opener');
const contener = document.querySelector('.bip-archive-content')
opener.addEventListener('click', function(e){
    e.preventDefault();
    contener.classList.toggle('active');
});
