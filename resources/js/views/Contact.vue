<template>
    <div>
        <site-header></site-header>
        <section class="text section-middle">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h2 class="heading">Contact</h2>

                        <p>I am available for hire.</p>

                        <div class="row mt-4">
                            <div class="col">
                                <!-- Email -->
                                <div class="row contact-row">
                                    <div class="col-3 contact-label">
                                        <span class="c-f-w-600">Email:</span>
                                    </div>
                                    <div class="col contact-value">
                                        <a href="mailto:engr.mohitgaur@gmail.com">
                                            <i class="fa fa-envelope me-1"></i> engr.mohitgaur@gmail.com
                                        </a>
                                    </div>
                                </div>

                                <!-- LinkedIn -->
                                <div class="row contact-row">
                                    <div class="col-3 contact-label">
                                        <span class="c-f-w-600">LinkedIn:</span>
                                    </div>
                                    <div class="col contact-value">
                                        <a href="https://www.linkedin.com/in/engrmohit" target="_blank">
                                            <i class="fab fa-linkedin-in me-1"></i> engrmohit
                                        </a>
                                    </div>
                                </div>

                                <!-- GitHub -->
                                <div class="row contact-row">
                                    <div class="col-3 contact-label">
                                        <span class="c-f-w-600">GitHub:</span>
                                    </div>
                                    <div class="col contact-value">
                                        <a href="https://github.com/engrmohit" target="_blank">
                                            <i class="fab fa-github me-1"></i> engrmohit
                                        </a>
                                    </div>
                                </div>

                                <!-- Twitter -->
                                <div class="row contact-row">
                                    <div class="col-3 contact-label">
                                        <span class="c-f-w-600">Twitter:</span>
                                    </div>
                                    <div class="col contact-value">
                                        <a href="https://twitter.com/engrmohit" target="_blank">
                                            <i class="fab fa-twitter me-1"></i> @engrmohit
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
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

    .contact-row {
        margin-bottom: 0.5rem;
    }

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

    @media (max-width: 375.98px) {
        .contact-row:first-of-type {
            margin-bottom: 1.5rem;
        }

        .contact-row:nth-of-type(2) .contact-value,
        .contact-row:nth-of-type(3) .contact-value,
        .contact-row:nth-of-type(4) .contact-value {
            margin-left: 16%;
        }
    }
</style>
