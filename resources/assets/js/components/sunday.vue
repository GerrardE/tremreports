<template>

<span>
{{attendance.reduce(add,0)}}
</span>

</template>


<script>

export default {

mounted() {

this.getAttenndance()


},

data() {

return {

attendance: []

}

},

props: ['year', 'branch'],

methods: {

add(a,b) {

return a+b;

},

getAttenndance() {
        if(this.year>0){
        axios.get('/get/attendance/3/' + this.year + '/' + this.branch).then(response=>{
				
				response.data.forEach((week) => {
				this.attendance.push(week.total)
				})
				 
			})
        }

}


}


}


</script>