<template>

<div class="col-sm-3">
                        <table class="table table-y table-striped table-hover table-bordered table-condensed">
                            <thead>
                                <!--here, each year will load onclick generate button -->
                                <tr>
                                    <th scope="col"><strong>{{this.year}}</strong></th>
                                    <th scope="col">Tuesdays</th>
                                    <th scope="col">Sundays</th>
                                </tr>
                            </thead>
                            <tbody>

                            <!-- This row will loop Nigerian branches -->
                
                                <tr v-for="branch in allBranches" >
                                    <td v-if="branch.country=='NG'">{{branch.name}}</td>
                                    <td v-if="branch.country=='NG'"><tuesday :branch="branch.id" :year="nYear"></tuesday></td>
                                    <td v-if="branch.country=='NG'"><sunday :branch="branch.id" :year="nYear"></sunday></td>
                                </tr>

                              <!-- Total will be displayed here -->
                                <tr>
                                    <th scope="row"><h4>TOTAL</h4></th>
                                     <td>1000</td>
                                    <td>1000</td>
                                </tr>

                               <!-- This will loop through foreign branches--> 
                               
                                <tr v-for="branch in allBranches">
                                    
                                    <td v-if="branch.country !='NG'">{{branch.name}}</td>
                                    
                                    <td v-if="branch.country !='NG'"><tuesday :branch="branch.id" :year="nYear"></tuesday></td>
                                    <td v-if="branch.country !='NG'"><sunday :branch="branch.id" :year="nYear"></sunday></td>
                                    
                                </tr>
                                
                                <!-- Total will be displayed here -->
                                <tr>
                                    <th scope="row"><h4>TOTAL</h4></th>
                                    <td>1000</td>
                                    <td>1000</td>
                                </tr>

                                
                            </tbody>
                        </table>
                    </div>



</template>


<script>

export default  {

mounted() {
this.fixYear()
this.getAllBranches();

},

props:['year',],

data() {

return {

allBranches: [],
nYear: 0,

}

},

methods: {
fixYear(){
if(this.year>0){
this.nYear=this.year
}
},
getAllBranches() {
			
			axios.get('/get/all/branches/').then(response=>{
				
				this.allBranches= []
				response.data.forEach((branch) => {
				this.allBranches.push(branch)
				
				})
				 
			})


		},
    
}


}




</script>