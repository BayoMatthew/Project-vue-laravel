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
                    <h2 class="section-heading text-uppercase">Registration</h2>  
                </div>
                <p></p>
                <p></p>
                <p></p>
                <p></p>


                
            <h3 class="section-heading">Health Facility Registration</h3>
            <p>
            Private Health institutions in Sokoto State could be registered under the following categories:
            </p>
    <div class="row">
        <div class="col-lg-6 col-sm-6 mb-6">           
            <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">List of Facilities</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="type in alltypes.data" v-bind:key="type.id" :value="type.id">
                <!-- <th scope="row">1</th> -->
                <td>{{type.id}}</td>
                <td><router-link :to="`/requirement/${type.id}`">{{type.category_list}}</router-link></td>
                </tr>
            </tbody>
            </table>
        </div>
        <div class="col-lg-6 col-sm-6 mb-6">
            <img src="assets/img/about-2.png" alt="">
        </div>

    </div>
         <div>
             <p>
             The first step by any prospective hospital owner to get the facility registered is to draft an Application letter to the Honourable Commissioner, stating the location of the practice and scope of service. The Honourable Commissioner will approve the issuance of registration form accompanied with the registration guide. Following submission of the completed application form, the information will be entered into the Health facilities registration software.  A team of inspectors will visit the facility for inspection to ensure the minimum standards are met for licensing. Failure to comply with the guidelines will result in a breach of condition of license.
             </p>
        </div>  
        
    <section class="page-section bg-light" id="portfolio">
        
            <div class="container">
                <div class="text-center">
                    <h4 class="section-heading text-uppercase">Private Health Facilities Registration and Renewal Fees</h4>
                </div>
                <div class="awe-item awe-text awe-section-102-0-0-0-1-text ">
                </div>

            <table class="table table-success table-striped">
                    <thead>
                    <tr>
                    <th scope="col">Parts</th>
                    <th scope="col">S/No</th>
                    <th scope="col">Services</th>
                    <th scope="col">Fees</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">A.</th>
                    <td></td>
                    <th scope="row">Registration</th>
                    <td></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td scope="row">1.</td>
                    <td>Registration Form</td>
                    <td>N20,000</td>
                    </tr>
                    <tr>
                    <th scope="row">B.</th>
                    <td></td>
                    <th scope="row">Certificate of Registration</th>
                    <td></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td scope="row">1.</td>
                    <td>Private hospital</td>
                    <td>N100,000</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td scope="row">2.</td>
                    <td>Clinic & Maternity Home</td>
                    <td>N75,000</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td scope="row">3.</td>
                    <td>Maternity Home</td>
                    <td>N75,000</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td scope="row">4.</td>
                    <td>Nursing Home</td>
                    <td>N50,000</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td scope="row">5.</td>
                    <td>Optical Centre</td>
                    <td>N30,000</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td scope="row">6.</td>
                    <td>Diagnostic center with Ultrasound & X-Ray</td>
                    <td>N75,000</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td scope="row">7.</td>
                    <td>Medical Laboratory</td>
                    <td>N20,000</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td scope="row">8.</td>
                    <td>Out-Patient Clinic</td>
                    <td>N50,000</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td scope="row">9.</td>
                    <td>Dental Clinic</td>
                    <td>N30,000</td>
                    </tr>
                    <tr>
                    <th scope="row">C.</th>
                    <td></td>
                    <th scope="row">Renewal of Registration</th>
                    <td></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td scope="row">1.</td>
                    <td>Private hospital</td>
                    <td>N50,000</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td scope="row">2.</td>
                    <td>Clinic & Maternity Home</td>
                    <td>N50,000</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td scope="row">3.</td>
                    <td>Maternity Home</td>
                    <td>N50,000</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td scope="row">4.</td>
                    <td>Nursing Home</td>
                    <td>N30,000</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td scope="row">5.</td>
                    <td>Optical Centre</td>
                    <td>N20,000</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td scope="row">6.</td>
                    <td>Diagnostic center with Ultrasound & X-Ray</td>
                    <td>N50,000</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td scope="row">7.</td>
                    <td>Medical Laboratory</td>
                    <td>N10,000</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td scope="row">8.</td>
                    <td>Out-Patient Clinic</td>
                    <td>N20,000</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td scope="row">9.</td>
                    <td>Dental Clinic</td>
                    <td>N20,000</td>
                    </tr>
                    <tr>
                    <th scope="row">D.</th>
                    <td></td>
                    <th scope="row">Other Fees</th>
                    <td></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td scope="row">1.</td>
                    <td>Facility Inspection</td>
                    <td>N25,000</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td scope="row">2.</td>
                    <td>Request for Information</td>
                    <td>N7,000</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td scope="row">3.</td>
                    <td>Upgrading / Downgrading of facility </td>
                    <td>N20,000</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td scope="row">4.</td>
                    <td>Suspension / Re-opening</td>
                    <td>N20,000</td>
                    </tr>
                    <tr>
                    <th scope="row">E.</th>
                    <td></td>
                    <th scope="row">Penalties</th>
                    <td></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td scope="row">1.</td>
                    <td>Late Renewal of Registration</td>
                    <td>25%  Per quarter</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td scope="row">2.</td>
                    <td>Operating outside registered category</td>
                    <td>N50,000</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td scope="row">3.</td>
                    <td>Operation without registration</td>
                    <td>N100,000</td>
                    </tr>
                </tbody>
            </table>

            <p>Click the Button below to start registration:</p>

            <div class="text-center">
                <button class="btn btn-danger"><a href='https://app.heflama.hayokmedicare.ng' alt='Broken Link'>PORTAL</a></button>
            </div>
                  
            </div>
        </section>


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
            }
            },
            methods: {

        getFailityType(){
                        fetch("https://api.heflama.hayokmedicare.ng/api/facility/types")
                    .then(response => response.json())
                        .then(data => (this.alltypes = data))
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
        this.getFailityType()
    }
        }

        </script>
        <style>

        </style>



