<template>
<body>
    <div>
        <header class="masthead-1">
            <div class="container">
            </div>
        </header>

        <!-- Services-->
        <section class="page-section" id="services">
             <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Requirements</h2>  
                </div>
                <p></p>
                <p></p>
                <p></p>
                <p></p>

            <div >
                <ul v-for="type in alltypes.parts" v-bind:key="type.id">
                    <li><h3>{{type.designation}} : {{type.part_name}}</h3></li>
                        <ul v-for="req in type.requirements" v-bind:key="req.id">
                            <li>
                            {{req.list}}
                            </li>
                        </ul>   
                </ul> 
            </div>
             </div>
        </section>  
    </div>
</body>
</template>

<script>
 export default {

    data () {
      return {
      alltypes:"",
      allreqs:"",

      }
    },
    methods:{
      getReq(){
         axios.post('https://api.heflama.hayokmedicare.ng/api/facility-type', {id:this.$route.params.id })
                           .then(response => {
                              this.alltypes = response.data
                              this.allreqs = response.data.parts
                              console.log(response)
                             })
                            .catch(error => {
                                this.errorMessage = error;
                                console.error("There was an error!", error);
                                });
      },

    },
     mounted() {
            console.log('Component mounted.')
        },
        created(){
            this.getReq()

        }

    }
</script>
<style>
</style>
