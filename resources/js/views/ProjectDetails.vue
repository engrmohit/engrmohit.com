<template>
    <div>
        <site-header></site-header>
        <section>
            <div class="container">
                <div v-if="project">
                    <div class="row">
                        <div class="col-md-8">

                            <!-- title -->
                            <h1 class="Heading">{{ project.title }}</h1>

                            <!-- description -->
                            <div class="description mt-4" v-html="project.description"></div>

                            <!-- links -->
                            <div class="pt-3" v-if="project.links && project.links.length > 0">
                                <a 
                                    v-for="link in project.links" 
                                    :key="link.id" 
                                    :href="link.link" 
                                    class="btn btn-primary btn-project-link" 
                                    target="_blank"
                                >
                                    <i class="fa fa-external-link-alt me-1"></i>
                                    {{ link.title }}
                                </a>
                            </div>

                            <!-- technologies -->
                            <div class="my-4">
                                <span class="technologies-title">
                                    Technologies
                                </span>
                                
                                <span class="tag" v-for="tech in project.technologies" :key="tech.id">
                                    {{ tech.name }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- images -->
                    <div class="row">
                        <div class="col-md-12">
                            <img class="project-image" v-for="image in project.images" :key="image.id" :src="image.path">
                        </div>
                    </div>
                </div>
                <div v-else>
                    Loading...
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import SiteHeader from '../components/Header.vue'

export default {
    name: 'about',
    components: { SiteHeader },
    data() {
        return {
            project: null
        }
    },
    mounted() {
        axios
            .get('/api/projects/'+this.$route.params.slug)
            .then(response => {
                this.project = response.data.data.project;
            })
            .catch(error => {
                // 
            });
    }
}
</script>

<style>
    @import "../../css/app.css";
</style>

<style src="../../css/project-details.css"></style>
