<template>
    <header class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <router-link to="/" class="navbar-brand link-scroll">
                    <!-- <img src="/images/logo.png" alt="" class="img-fluid"> -->
                    Mohit Sharma
                </router-link>
                
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
                
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <router-link to="/" class="nav-link link-scroll">Home</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/portfolio" class="nav-link link-scroll">Portfolio</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/about" class="nav-link link-scroll">About</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/contact" class="nav-link link-scroll">Contact</router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</template>
