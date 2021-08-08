<template>
    <div>
        <site-header></site-header>
        <section class="text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="heading">About me</h2>
                        <!-- <p class="lead">This can be an about section.</p> -->
                        <p class="c-text-justify">
                            My name is <span class="c-f-w-600">Mohit Sharma</span> and I'm a <span class="c-f-w-600">full-stack software engineer</span> based in Punjab, India. 
                            Since 2015 I've worked at a variety of companies. 
                            Along the way, I've also been a freelancer and building web apps for creative agencies, businesses and individuals. 
                        </p>

                        <p class="c-text-justify">
                            My current stack includes PHP &amp; Laravel, Vue.js, MySQL and all the other various frameworks, 
                            libraries and technologies related to them. Currently I am <span class="c-f-w-600">available for hire.</span>
                        </p>
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
