<template>
    <header class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <router-link to="/" class="navbar-brand link-scroll">
                    <!-- <img src="/images/logo.png" alt="" class="img-fluid"> -->
                    Mohit Sharma
                </router-link>

                <b-button v-b-toggle.navbarSupportedContent variant="light" class="navbar-toggler navbar-toggler-right">
                    <i class="fa fa-bars"></i>
                </b-button>

                <b-collapse id="navbarSupportedContent" class="navbar-collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <router-link to="/" exact class="nav-link link-scroll">Home</router-link>
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
                </b-collapse>
            </div>
        </nav>
    </header>
</template>
