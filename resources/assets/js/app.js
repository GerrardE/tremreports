
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',
	
	data() {
		
	return {

	url: "",
	
	uploadDelay: [],
	
	form: new FormData,
	
	allDownloads: [],


	}
		
		
		
	},
	
	mounted() {	
	
	this.getAllDownloads()
	
	
	},
	
	methods: {
		
		getAllDownloads() {
			
			axios.get('/get/all/downloads').then(response=>{
		
		response.data.forEach((download) => {
		this.allDownloads.push(download)
		
		})
		 
	})
	
			
			
		},
		
		showFilePicker() {
	    var select = document.getElementById('productimage')	
		select.click();
		
		},
		
		fileChange(e) {
		
		let selected=e.target.files[0];
		
		if (!selected) {
		return 0
		}
		
		
		this.uploadDelay.push('File')
		
		
		
		let selectedFile=e.target.files[0];
		
		
		this.attachment=selectedFile;
		this.form.append('fl', this.attachment);
		const config = {headers: {'Content-Type': 'multipart/form-data'}};
		
		axios.post('/upload/file', this.form, config).then(response=>{
		//success
		
		
			
			if (response.data.length == 0) {
			this.uploadDelay= [];
			
			return
			
			}
					
					this.url = [];
					this.uploadDelay= [];
					this.url=response.data.URL;
				
		
		})
				.catch(response=>{
				//errors
				});
		
},

		
		
		
	}
});



