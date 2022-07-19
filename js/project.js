const App = {
	data() {
		return{
			cat: '0',
		}
	}
};
Vue.createApp(App).mount('#project');


	const swiperhandler = (selector, i)=>{
		var swiper0 = new Swiper(selector, {
			
			centeredSlides: false,
			spaceBetween: 16.67,
			slideToClickedSlide: true,
			pagination: {
				el: '.swiper-pagination',
				type: 'fraction',
			},
			navigation: {
				nextEl: '.swiper-button-next'+i,
				prevEl: '.swiper-button-prev'+i,
			},
			 breakpoints: {
			390: {
			  slidesPerView: 1,
			  spaceBetween: 20
			},
			480: {
			  slidesPerView: 3,
			  spaceBetween: 30
			},
			640: {
			  slidesPerView: 4,
			  spaceBetween: 40
			}
  }

    	});
		return swiper0
	}
	const v1 = swiperhandler('.newsListing1',2)