<template>

  <div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-8">
				<h1>List Of Forms</h1>
			</div>
		</div>
	</div>
	<div class="col-md-4 top-buffer">
		<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('opd_form')">OPD Form</a>
	</div>
	
	<hr />
</div>
</template>

<script >
    export default {
        data() {
            return {
                'footer' : 'footer',
                'currentYear': new Date().getFullYear()
            }
        },
        mounted() {
        	this.$store.dispatch('SetIpdId',0);
        
    },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    }
		  },
    }
</script>
