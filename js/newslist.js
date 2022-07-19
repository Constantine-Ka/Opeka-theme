const App = {
	data() {
		return{
			cat: 'events',
			
		}	
	}
};
Vue.createApp(App).mount('#newsSlider')

const eventHandler = ()=>{
	document.querySelectorAll('.swiper-slide').forEach(e => e.style = 'width:205px');
		document.querySelectorAll('.swiper-slide').forEach(e => e.classList.remove('active'));
        document.querySelector('.key-2022').classList.add('active');
        document.querySelectorAll('.textblock>.list').forEach(e => e.style.display = 'none');
        document.getElementById(`alert-2022`).style = 'display:flex'
}
eventHandler();
const swiper = new Swiper('.smiSwipers', {
        centeredSlides: false,
        spaceBetween: 20.12,
		isEnd:true,
        slideToClickedSlide: true,
		
		initialSlide:7,
        pagination: {
            el: '.swiper-pagination',
            type: 'fraction',
        },
        navigation: {
            nextEl: '.swiper-button-next0',
            prevEl: '.swiper-button-prev0',
        },
		 breakpoints: {
		// when window width is >= 320px
		320: {
		  slidesPerView: 1,
		  spaceBetween: 20,
		  initialSlide:1,
		},
		// when window width is >= 480px
		
		// when window width is >= 640px
		640: {
		  slidesPerView: 4,
		  spaceBetween: 40,
		  initialSlide:7,
		}
  }

    });
    swiper.on('activeIndexChange', function (swiper) {
        var i = swiper.realIndex
        console.log('slide chaged', typeof i);
        year = 2014 + i;
        document.querySelectorAll('.swiper-slide').forEach(e => e.classList.remove('active'));
        document.querySelector('.key-' + year).classList.add('active');
        document.querySelectorAll('.textblock>.list').forEach(e => e.style.display = 'none');
        document.getElementById(`alert-${year}`).style = 'display:flex'

    });
	swiper.on('click',  function () {
		year = 2014 + this.clickedIndex;
        document.querySelectorAll('.swiper-slide').forEach(e => e.classList.remove('active'));
        document.querySelector('.key-' + year).classList.add('active');
        document.querySelectorAll('.textblock>.list').forEach(e => e.style.display = 'none');
        document.getElementById(`alert-${year}`).style = 'display:flex'
	});
	swiper.slideTo(1, 1000)
    

	const swiperhandler = (selector, i)=>{
		var swiper0 = new Swiper(selector, {
			slidesPerView: 4,
			centeredSlides: false,
			spaceBetween: 10,
			slideToClickedSlide: true,
			width:922,
			pagination: {
				el: '.swiper-pagination',
				type: 'fraction',
			},
			navigation: {
				nextEl: '.swiper-button-next'+i,
				prevEl: '.swiper-button-prev'+i,
			},

    	});
		return swiper0
	}
	const v1 = swiperhandler('.newsListing1',2)
	const v2 = swiperhandler('.newsListing2',1)