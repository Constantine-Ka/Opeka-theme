const App = {
	data() {
		return{
			chooseLocate: 'office',
			message: 'Hello Vue!',
			timework:'08:00 – 17:00'
		}
	},
	methods:{
		timeWork(fri){
			var d = new Date();
			var n = d.getDay();
			this.timework = (fri)?"08:00 – 15:45":'08:00 – 17:00';
			
		},

		
	}
};
Vue.createApp(App).mount('#app')

const week =()=>{
	var d = new Date();
	var n = d.getDay();
	if(n==5) document.getElementById('worktime').innerHTML = "08:00 – 15:45";
    (n==0)?document.querySelector(`.container.contact-page .row.basic .holiday .days span:nth-child(2)`).classList.add('bold'):(n<7)?document.querySelector(`.container.contact-page .row.basic .weekday .days span:nth-child(${n})`).classList.add('bold'):document.querySelector(`.container.contact-page .row.basic .holiday .days span:nth-child(2)`).classList.add('bold');
	
}
setInterval(week, 1000)
