<template>
    <div class="template-container">
        <site-header></site-header>
        <div class="main-content">
            <breadCrum></breadCrum>
        </div>
        <router-view></router-view>
        <div class="horizontal_line"></div>
        <site-footer></site-footer>
    </div>
</template>

<script type="text/babel">

    import SiteHeader from './partials/SiteHeader.vue'
    import SiteFooter from './partials/SiteFooter.vue'
    import SiteHeaderBottom from './partials/SiteHeaderBottom.vue'

    import Layout from '../../helpers/layout'
    import BreadCrum from '../../components/BreadCrum.vue'

    export default {
        data() {
            return {
                'header' : 'header'
            }
        },
        components : {
            SiteHeader , SiteHeaderBottom , SiteFooter, BreadCrum
        },
        mounted() {
            Layout.set('layout-horizontal')
        }
    }
</script>