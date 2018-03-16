<template>
    <div class="login-wrapper">
        <div class="login-box">
            <div class="brand-main">
                <a href="/">
                    <img src="/assets/img/logo-deskk.png" height="100px" alt="NABH Logo">
                </a>
            </div>
            <router-view></router-view>
            
        </div>
    </div>
</template>

<script type="text/babel">

    export default {
        data() {
          return {
            'currentYear': new Date().getFullYear()
           }
        },
        methods: {
            setLayoutClasses(){
                let body = $('body');
                body.removeClass();
                body.addClass('login-page')
            },
        },
        mounted() {
            this.setLayoutClasses()
        },
        destroyed(){
            $('body').removeClass('login-page')
        }
    }
</script>