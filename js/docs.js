const App = {
	data() {
		return{
			doc : '',
		}
	}
};
Vue.createApp(App).mount('#post-841');

window.onload = function() {
  kiwimi.modal();
  kiwimi.slider('k_slider', 1, 3);
}