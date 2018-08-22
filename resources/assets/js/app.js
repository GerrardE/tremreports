
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

	countryZones: [],
	zoneName: "",
	activeZone: 0,

	country: "NG",
	countryBranches: [],
	activeCountry: "NG",
	activeBranch:0,
	activeBranch2:0,
	activeState:"none",
	activeBranchDetails:[],
	activeEventDetails:[],
	activeBranchName:"",
	activeBranchAddress:"",
	activeBranchCity:"",
	branchEvents:[],
	branchG12s:[],
	activeEvent: 0,
	oldBranch: "none",
	activeMonth: "none",
	activeYear: 0,
	activeEventName: "",
	activeEventDescription: "",
	activeG12: 0,
	activeName: "",
	activeAddress: "",
	activeCity: "",
	activeState: "",
	activeActiveCountry: "",
	allUsers: [],
	userId: 0,
	fullName:"",
	userName: "",
	userRole: "",
	userBranch: "",
	userMobile: "",
	userEmail: "",
	allCategories: [],
	categoryUploads: [],
	activeCategory: 0,
	activeUpload: 0,
	uploadCategory: 0,
	activeName: "",
	activeDescription: "",
	adult:0,
	children:0,
	men:0,
	women:0,
	total:0,

	}
		
		
		
	},
	
	mounted() {	
	
	this.getAllDownloads()
	this.getCountryZones()
	this.getCountryBranches()
	this.getAllUsers();
	this.getAllCategories();
	},
	
	methods: {
		
		getAllDownloads() {
			
			axios.get('/get/all/downloads').then(response=>{
		
		response.data.forEach((download) => {
		this.allDownloads.push(download)
		
		})
		 
	})
	
			
			
		},


		getAllCategories() {
			
			axios.get('/get/all/categories').then(response=>{
		
		response.data.forEach((category) => {
		this.allCategories.push(category)
		
		})
		 
	})
	
			
			
		},

		getAllUsers() {
			
			axios.get('/get/all/users').then(response=>{
		
		response.data.forEach((user) => {
		this.allUsers.push(user)
		
		})
		 
	})
	
			
			
		},

		getCountryZones() {

			axios.get('/get/country/zones/' + this.country).then(response=>{
				
				this.countryZones= []
				response.data.forEach((zone) => {
				this.countryZones.push(zone)
				
				})

				this.getCountryBranches()
				 
			})


		},

		getCategoryUploads() {

			axios.get('/get/category/uploads/' + this.activeCategory).then(response=>{
				
				this.categoryUploads= []
				response.data.forEach((upload) => {
				this.categoryUploads.push(upload)
				this.allDownloads=[]
				this.allDownloads.push(upload)
				
				})
				 
			})


		},


		getBranchEvents() {
			
			axios.get('/get/branch/events/' + this.activeBranch).then(response=>{
				
				this.branchEvents= []
				response.data.forEach((event) => {
				this.branchEvents.push(event)
				
				})
				 
			})


		},


		getBranchG12s() {
			this.activeBranch2= this.activeBranch
			axios.get('/get/branch/g12s/' + this.activeBranch).then(response=>{
				
				this.branchG12s= []
				response.data.forEach((g12) => {
				this.branchG12s.push(g12)
				
				})
				 
			})


		},


		getCountryBranches() {
			this.activeCountry=this.country
			axios.get('/get/country/branches/' + this.country).then(response=>{
				
				this.countryBranches= []
				response.data.forEach((branch) => {
				this.countryBranches.push(branch)
				
				})

				this.getCountryZones()
				 
			})


		},

		getZoneName() {

		this.zoneName=this.activeZone

		},

		getActiveBranch() {
			
		var branch= this.countryBranches.find((p)=> {

			return p.id === this.activeBranch

		});
		this.activeState= branch.state
		this.activeZone= branch.zone
		this.activeBranchName=branch.name
		this.activeBranchAddress=branch.address
		this.activeBranchCity=branch.city
		},


		getUserDetails() {
			
			var user= this.allUsers.find((u)=> {
	
				return u.id === this.userId
	
			});
			this.fullName= user.name
			this.userName= user.username
			this.userRole=user.role
			this.userBranch= user.branch
			this.userMobile= user.mobile
			this.userEmail=user.email
			},


			getUploadDetails() {
			
				var upload= this.categoryUploads.find((u)=> {
		
					return u.id === this.activeUpload
		
				});
				this.uploadCategory= upload.category
				this.activeName= upload.name
				this.activeMonth=upload.month
				this.activeYear= upload.year
				this.activeDescription= upload.description
				this.url=upload.url
				},
	


		getActiveEvent() {
			
			var event= this.branchEvents.find((e)=> {
	
				return e.id === this.activeEvent
	
			});

			this.activeEventDetails=[]
			this.activeEventDetails.push(event)
			this.oldBranch=event.branch
			this.activeMonth=event.month
			this.activeYear=event.year
			this.activeEventName=event.name
			this.activeEventDescription=event.description
			},

			getActiveG12() {
			
				var g12= this.branchG12s.find((g)=> {
		
					return g.id === this.activeG12
		
				});
	
				
				this.oldBranch=g12.branch
				this.activeName=g12.name
				this.activeAddress=g12.address
				this.activeCity=g12.city
				this.activeState=g12.state
				this.activeActiveCountry=g12.country
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

		
		
		
	},

	watch: {

		adult() {
			if (this.adult >0) {
				this.total = parseInt(this.adult) + parseInt(this.men) + parseInt(this.women)+ parseInt(this.children)
			}
			
		},

		men() {

			if (this.men >0) {
				this.total = parseInt(this.adult) + parseInt(this.men) + parseInt(this.women)+ parseInt(this.children)
			}
		},

		women() {

			if (this.women >0) {
				this.total = parseInt(this.adult) + parseInt(this.men) + parseInt(this.women)+ parseInt(this.children)
			}
		},

		children() {

			if (this.children >0) {
				this.total = parseInt(this.adult) + parseInt(this.men) + parseInt(this.women)+ parseInt(this.children)
			}
		}



	},
});



