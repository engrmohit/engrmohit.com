<template>
    <div>
        <site-header></site-header>
        <section class="text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="heading">Contact</h2>

                        <p>I am available for hire.</p>

                        <div class="row">
                            <div class="col">
                                <!-- Email -->
                                <div class="row mb-2">
                                    <div class="col-3">
                                        <span class="c-f-w-600">Email:</span>
                                    </div>
                                    <div class="col">
                                        <a href="mailto:engr.mohitgaur@gmail.com">
                                            <i class="fa fa-envelope me-1"></i> engr.mohitgaur@gmail.com
                                        </a>
                                    </div>
                                </div>

                                <!-- LinkedIn -->
                                <div class="row mb-2">
                                    <div class="col-3">
                                        <span class="c-f-w-600">LinkedIn:</span>
                                    </div>
                                    <div class="col">
                                        <a href="https://www.linkedin.com/in/engrmohit" target="_blank">
                                            <i class="fab fa-linkedin-in me-1"></i> engrmohit
                                        </a>
                                    </div>
                                </div>

                                <!-- GitHub -->
                                <div class="row mb-2">
                                    <div class="col-3">
                                        <span class="c-f-w-600">GitHub:</span>
                                    </div>
                                    <div class="col">
                                        <a href="https://github.com/engrmohit" target="_blank">
                                            <i class="fab fa-github me-1"></i> engrmohit
                                        </a>
                                    </div>
                                </div>

                                <!-- Twitter -->
                                <div class="row mb-2">
                                    <div class="col-3">
                                        <span class="c-f-w-600">Twitter:</span>
                                    </div>
                                    <div class="col">
                                        <a href="https://twitter.com/engrmohit" target="_blank">
                                            <i class="fab fa-twitter me-1"></i> @engrmohit
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mx-auto">
                        <img src="/images/mohit-sharma.jpg" alt="" class="img-fluid rounded-circle profile-img">
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import SiteHeader from '../components/Header.vue'

export default {
    name: 'about',
    components: { SiteHeader }
}
</script>

<style>
    @import "../../css/app.css";
</style>
