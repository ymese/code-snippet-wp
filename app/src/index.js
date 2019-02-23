import Vue from 'vue';

import App from './App.vue';

window.addEventListener('load', () => {
	new Vue({
		el: '#csw-app',
		render: h => h(App),
	});
});
