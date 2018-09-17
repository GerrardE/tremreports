<template>

<span>
{{attendance}}
</span>

</template>


<script>

export default {

mounted() {

this.getAttenndance()


},

data() {

return {

attendance: 0

}

},

props: ['year', 'branch'],

methods: {

getAttenndance() {
        if(this.year>0){
        axios.get('/get/attendance/4/' + this.year + '/' + this.branch).then(response=>{
				
				response.data.forEach((week) => {
				this.attendance= this.attendance + week.total
				
				})
				 
			})
        }

}


}


}


</script>