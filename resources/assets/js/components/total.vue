<template>

<span>
{{total.reduce(add,0)}}
</span>

</template>


<script>

export default {

mounted() {

this.getTotal()


},

data() {

return {

total: [],

}

},

props: ['year', 'event'],

methods: {

add(a,b) {

return parseInt(a)+parseInt(b);

},

getTotal() {
        if(this.year>0){
        axios.get('/get/total/' + this.year + '/' + this.event).then(response=>{
				
				response.data.forEach((event) => {
				this.total.push(event.total)
				
				
				})
				 
			})
        }

}


}


}


</script>