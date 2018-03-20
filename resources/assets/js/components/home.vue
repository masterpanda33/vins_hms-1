<template>
	<div class="container">
		<p>Welcome....</p>
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
