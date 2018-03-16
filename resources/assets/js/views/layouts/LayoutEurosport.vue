<template>
    <div class="template-container">
        <site-header></site-header>        
        <router-view></router-view>
        <site-footer></site-footer>
    </div>
</template>

<script type="text/babel">

    import SiteHeader from './partials/SiteHeader.vue'
    import SiteFooter from './partials/SiteFooter.vue'    

    import Layout from '../../helpers/layout'

    export default {
        data() {
            return {
                'header' : 'header'
            }
        },
        components : {
            SiteHeader ,  SiteFooter
        },
        mounted() {
            Layout.set('layout-horizontal')
        }
    }
</script>