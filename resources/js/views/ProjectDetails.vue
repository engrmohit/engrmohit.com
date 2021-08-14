<template>
    <div>
        <site-header></site-header>
        <section>
            <div class="container">
                <h1 class="Heading">Callsheet</h1>

                <div class="row mt-4">
                    <div class="col-md-8">
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam odio ut distinctio modi. Eius dolorum unde sapiente ullam voluptate debitis id similique molestias? Cumque eveniet explicabo dolore quibusdam ratione fugit!</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi voluptatum eligendi rerum dignissimos perspiciatis, repellendus libero distinctio aut asperiores enim placeat, nobis incidunt, minima ad officiis quia voluptates molestias odio.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime fuga repellendus tempora at facere sit accusamus, voluptas, atque, magnam quae voluptatem. Obcaecati eius consequatur quidem dolores dolor quam laudantium corrupti.</p>
                        </div>
                    </div>
                </div>

                <div class="pt-3">
                    <a href="https://callsheet.dk" class="btn btn-primary btn-view-online" target="_blank">
                        <i class="fa fa-external-link-alt me-1"></i>
                        View Online
                    </a>
                </div>

                <div class="my-4">
                    <span class="technologies-title">
                        Technologies
                    </span>
                    <span class="tag">Laravel</span>
                    <span class="tag">Vuejs</span>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <img src="/images/callsheet.dk.png" class="project-image">
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

<style scoped src="../../css/project-details.css"></style>
