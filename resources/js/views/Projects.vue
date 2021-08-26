<template>
    <div>
        <site-header></site-header>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="heading">Portfolio</h1>
                        <p class="mb-5">
                            Here is a portfolio of some of my most recent projects. 
                            <!-- Unless explicitly stated otherwise, all their back-end and front-end parts were completely done by me. -->
                        </p>

                        <div class="row">
                            <div class="col">
                                <div v-if="projects">
                                    <project-list-item 
                                        v-for="project in projects" 
                                        :key="project.id"
                                        :project="project"
                                    ></project-list-item>
                                </div>
                                <div v-else class="text-center">Loading...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import axios from 'axios'

import SiteHeader from '../components/Header.vue'
import ProjectListItem from '../components/ProjectListItem.vue'

export default {
    name: 'projects',
    components: { SiteHeader, ProjectListItem },
    data() {
        return {
            projects: null
        }
    },
    mounted() {
        axios
            .get('/api/projects')
            .then(response => {
                this.projects = response.data.data.projects;
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

<style src="../../css/projects.css"></style>
