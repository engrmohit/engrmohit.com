<template>
    <div class="row project-row">
        <!-- Timeline (large screen) -->
        <div class="col-md-2 project-timeline d-lg-block">
            <div class="timeline-date">
                <div class="timeline-date-element">
                    <span class="me-2 fst-italic">{{ timelineYear }}</span>
                    <span class="p-2 bg-white badge rounded-circle border border-secondary" style="margin-bottom: -0.2rem;">
                        <span class="visually-hidden">-</span>
                    </span>
                </div>
            </div>
        </div>

        <!-- Project -->
        <div class="col-12 col-lg-10 project-content">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <!-- title -->
                    <h2>
                        <router-link :to="detailsLink">
                            {{ project.title }}
                        </router-link>
                    </h2>

                    <!-- Timeline (small and medium screen) -->
                    <div class="mb-4 d-lg-none">
                        <span class="text-secondary">{{ timelineYear }}</span>
                    </div>

                    <!-- description -->
                    <div class="project-description" v-html="project.short_description"></div>

                    <!-- more details -->
                    <div class="my-4">
                        <router-link :to="detailsLink" class="btn btn-primary btn-more-details">
                            More details
                        </router-link>
                    </div>

                    <!-- technologies -->
                    <div class="pt-3">
                        <span class="technologies-title">
                            Technologies
                        </span>

                        <span class="tag" v-for="tech in project.technologies" :key="tech.id">
                            {{ tech.name }}
                        </span>
                    </div>
                </div>

                <!-- Project image -->
                <div class="col-12 col-lg-5 mt-5">
                    <div class="project-image">
                        <router-link :to="detailsLink" class="has-border">
                            <img :src="project.thumbnail" alt="image" class="img-fluid">
                        </router-link>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>

export default {
    name: 'project-list-item',
    props: ['project'],
    computed: {
        timelineYear: function() {
            return (this.project.start_year == this.project.end_year) 
                        ? this.project.start_year 
                        : this.project.start_year + '-' + this.project.end_year;
        },
        detailsLink: function() {
            return '/portfolio/' + this.project.slug;
        }
    }
}
</script>
