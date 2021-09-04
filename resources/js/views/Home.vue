<template>
    <section class="vh-100">
        <div class="overlay"></div>
        <div class="content">
            <b-container class="clearfix">
                <b-row>
                    <b-col md="8" lg="6" xl="5" offset-md="2" offset-lg="0" offset-xl="0">
                        <div class="block-headings">
                            <!-- <h3>Hi, This is</h3> -->
                            <h1>Mohit Sharma</h1>
                            <h4>Full-Stack Web Developer</h4>
                        </div>

                        <div class="block-intro">
                            <p>
                                My stack includes PHP &amp; Laravel, Vue.js, MySQL and all the other 
                                various frameworks, libraries and technologies related to them.
                            </p>
                        </div>

                        <div class="block-links">
                            <router-link to="/portfolio" class="me-2">My work</router-link>
                            <router-link to="/about">More about me</router-link>
                        </div>

                        <div class="block-social">
                            <div class="block-title">Get in touch</div>
                            <div class="block-content">
                                <div class="social-icons">
                                    <a rel="me" href="https://www.linkedin.com/in/engrmohit" target="_blank" title="linkedin: engrmohit">
                                        <i class="fab fa-linkedin"></i>
                                    </a>

                                    <a rel="me" href="https://github.com/engrmohit" target="_blank" title="github: engrmohit">
                                        <i class="fab fa-github-square"></i>
                                    </a>

                                    <a rel="me" href="https://twitter.com/engrmohit" target="_blank" title="twitter: @engrmohit">
                                        <i class="fab fa-twitter-square"></i>
                                    </a>

                                    <a rel="me" href="mailto:engr.mohitgaur@gmail.com" title="mail: engr.mohitgaur@gmail.com">
                                        <i class="fa fa-envelope-square"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </b-col>
                </b-row>
            </b-container>
        </div>
    </section>
</template>

<style>
    @import "../../css/app.css";
</style>
<style scoped src="../../css/home.css"></style>
