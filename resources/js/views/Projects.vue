<template>
    <div>
        <site-header></site-header>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="heading">Portfolio</h1>
                        <p class="mb-5">
                            Put your portfolio or gallery images here for example. Able an hope of body. 
                            Any nay shyness article matters own removal nothing his forming. 
                            Gay own additions education satisfied the perpetual. If he cause manor happy. 
                            Without farther she exposed saw man led. Along on happy could cease green oh. 
                        </p>

                        <div class="row">
                            <div class="col">
                                <div class="row project-row">
                                    <!-- Timeline -->
                                    <div class="col-md-2 project-timeline">
                                        <div class="timeline-date">
                                            <div class="timeline-date-element">
                                                <span class="me-2 fst-italic">2020-2021</span>
                                                <span class="p-2 bg-white badge rounded-circle border border-secondary" style="margin-bottom: -0.2rem;">
                                                    <span class="visually-hidden">2020-2021</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Project -->
                                    <div class="col-md-10 project-content">
                                        <div class="row">
                                            <!-- Project details -->
                                            <div class="col-md-6 ps-0 pe-3">
                                                <div>
                                                    <h2>Callsheet</h2>
                                                    <div class="project-description">
                                                        <p class="c-text-justify">
                                                            Callsheet is a job platform for actors. Actors can find job and the casters can post jobs for the actooes.
                                                        </p>
                                                        <p class="c-text-justify">
                                                            Both the actors and the casters can message to each others to discuss any job. Actors are provided with an applied jobs section where they can see all the job they had applied for.
                                                        </p>
                                                        <p class="c-text-justify">
                                                            On the other hand the casters are provided with the a casrinf dashboard where they can see the applications on their movie. They can shortlist or reject the candidate. They can also message a particuler cndidate to discuss something.
                                                        </p>
                                                        <p class="c-text-justify">
                                                            Callsheet works in two languages (English and Danish). More languages are coming soon.
                                                        </p>
                                                    </div>
                                                    <p class="my-4">
                                                        <a href="javascript:void(0)" class="btn btn-primary btn-more-details text-decoration-none">
                                                            More details
                                                        </a>
                                                    </p>
                                                    <p class="pt-3 tech-tags">
                                                        <span class="title">Technologies</span>
                                                        <span class="tag">Laravel</span>
                                                        <span class="tag">Vuejs</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- Project image -->
                                            <div class="col-md-6">
                                                <div class="project-image">
                                                    <a href="https://callsheet.dk" class="has-border" target="_blank">
                                                        <div>
                                                            <img src="/images/callsheet.dk.png" alt="image" class="img-fluid">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="row project-row">
                                    <!-- Timeline -->
                                    <div class="col-md-2 project-timeline">
                                        <div class="timeline-date">
                                            <div class="timeline-date-element">
                                                <span class="me-2 fst-italic">2020</span>
                                                <span class="p-2 bg-white badge rounded-circle border border-secondary" style="margin-bottom: -0.2rem;">
                                                    <span class="visually-hidden">2020</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Project -->
                                    <div class="col-md-10 project-content">
                                        <div class="row">
                                            <!-- Project details -->
                                            <div class="col-md-6 ps-0 pe-3">
                                                <div>
                                                    <h2>Nobious</h2>
                                                    <div class="project-description">
                                                        <p class="c-text-justify">
                                                            Callsheet is a job platform for actors. Actors can find job and the casters can post jobs for the actooes.
                                                        </p>
                                                        <p class="c-text-justify">
                                                            Both the actors and the casters can message to each others to discuss any job. Actors are provided with an applied jobs section where they can see all the job they had applied for.
                                                        </p>
                                                    </div>
                                                    <p class="my-4">
                                                        <a href="javascript:void(0)" class="btn btn-primary btn-more-details text-decoration-none">
                                                            More details
                                                        </a>
                                                    </p>
                                                    <p class="pt-3 tech-tags">
                                                        <span class="title">Technologies</span>
                                                        <span class="tag">Laravel</span>
                                                        <span class="tag">Vuejs</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- Project image -->
                                            <div class="col-md-6">
                                                <div class="project-image">
                                                    <a href="https://www.nobious.com" class="has-border" target="_blank">
                                                        <div>
                                                            <img src="/images/nobious.com.png" alt="image" class="img-fluid">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

<style scoped src="../../css/projects.css"></style>
