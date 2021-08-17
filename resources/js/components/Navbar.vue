<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand"><router-link class="nav-link" to="/"><img src="assets/img/Sokoto-State.jpg" alt="Sokoto State" /></router-link></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <strong>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        
                        <li class="nav-item"><router-link class="nav-link" to="/">Home</router-link></li>
                        <li class="nav-item"><router-link class="nav-link" to="/about">About Us</router-link></li>
                        <li class="nav-item"><router-link class="nav-link" to="/responsibility">Responsibilities</router-link></li>
                        <li class="nav-item"><router-link class="nav-link" to="/registration">Registration</router-link></li>
                        <li class="nav-item"><a class="nav-link" href="https://app.heflama.hayokmedicare.ng">Portal</a></li>
                    </ul>
                </div>
                </strong>
            </div>
            
        </nav>
        <body>
            <router-view></router-view>
        </body>
    </div>
</template>





