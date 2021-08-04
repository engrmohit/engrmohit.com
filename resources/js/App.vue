<template>
    <div class="app">
        <home></home>
    </div>
</template>

<script>
import Home from './views/Home.vue';

export default {
    name: 'app',
    components: { Home }
}
</script>

<style scoped>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700|Cardo:400,400italic,700');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
</style>
