setTimeout(  function() {
    const tab = document.querySelector('.tabs');

    if(tab !== null){

        tab.style.display = 'block';
        var swiper = new Swiper(".tab-swiper", {
            slidesPerView: 2,
            spaceBetween: 5,
            pagination: {
            el: '.swiper-pagination',
            },
            
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            },

        
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
                clickable: true,
            },
            breakpoints: {
                400: {
                    slidesPerView: 2,
                    spaceBetween: 20,
        
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
        
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 20,
            
                },
                1200: {
                    slidesPerView: 5,
                    spaceBetween: 20,
                
                },
                1400: {
                    slidesPerView: 5,
                    spaceBetween: 20,
                
                }
            }
        });
    }
}, 1000);

function tabs(evt, tabs) {
    evt.preventDefault();
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].classList.remove('active');
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabs).classList.add('active');
    evt.currentTarget.className += " active";
}