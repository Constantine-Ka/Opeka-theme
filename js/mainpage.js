//Переключатель складки Истории организации
document.getElementsByName('timeLine').forEach(e => {
    e.addEventListener('change', function () {
        document.querySelector('.field.active').classList.remove('active');
        document.querySelector('.field#list-' + this.value).classList.add('active');
    });
});
///swiper подключение библиотеки swiper
var swiper = new Swiper(".mySwiper", {
            
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            slidesPerView: 4,
            spaceBetween: 30,
            centeredSlides: true,

        });

swiper.on('activeIndexChange', function (swiper) {
            var i = swiper.realIndex
            console.log('slide changed', typeof i);
			year = 2013+i;
            document.querySelectorAll('.swiper-slide').forEach(e=>e.classList.remove('active'));
			console.log(document.querySelector(`.key${year}`))
            document.querySelector('.key'+year).classList.add('active');
            document.querySelectorAll('.eventListMobile>.field').forEach(e=>e.style.display='none');
            document.getElementById(`list-mobile-${year}`).style='display:flex'

        });
var swiper2 = new Swiper(".partnerSwiper", {
            
            navigation: {
                nextEl: ".swiperButtons>.swiper-button-next",
                prevEl: ".swiperButtons>.swiper-button-prev",
            },
			 breakpoints: {
			// when window width is >= 320px
			320: {
			  slidesPerView: 2,
			  spaceBetween: 20
			},
			// when window width is >= 480px
			480: {
			  slidesPerView: 3,
			  spaceBetween: 30
			},
			// when window width is >= 640px
			640: {
			  slidesPerView: 4,
			  spaceBetween: 40
			},
			960:{
				slidesPerView: 8,
			}
		  }
            
           
        });