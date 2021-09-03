<template>
    <div>
        <site-header></site-header>
        <section class="text section-middle">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h2 class="heading">About me</h2>
                        <!-- <p class="lead">This can be an about section.</p> -->
                        <p class="c-text-justify">
                            My name is <span class="c-f-w-600">Mohit Sharma</span> and I'm a <span class="c-f-w-600">full-stack web developer</span> based in Punjab, India. 
                            Since 2015 I've worked at a variety of companies. 
                            Along the way, I've also been a freelancer and building web apps for creative agencies, businesses and individuals. 
                        </p>

                        <p class="c-text-justify">
                            My stack includes PHP &amp; Laravel, Vue.js, MySQL and all the other various frameworks, 
                            libraries and technologies related to them. Currently I am 
                            <span class="c-f-w-600">
                                <u><router-link to="/contact">available for hire</router-link></u>
                            </span>.
                        </p>
                    </div>
                    <div class="col-8 col-md-4 mx-auto">
                        <div class="container-img">
                            <img src="/images/mohit-sharma.jpg" alt="" class="img-fluid rounded-circle">
                        </div>
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

<style scoped>
    @media (max-width: 991.98px) {
        .container-img {
            padding: 5rem 0;
        }
    }

    @media (max-width:767.98px) {
        .container-img {
            padding: 3rem 0;
        }
    }
</style>
