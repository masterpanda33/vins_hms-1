<template>
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>-- Testing File --</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. FMT/IPD/36 <br>
					REV. No. 0.1 <br>
					WEF 01-10-2014 <br>
					PAGE NO. 01 OF 02
				</div>
			</div>
		</div>
	</div>
  <form>

	  <div class="row form-group">

			<div class="col">
          <div class="col">
            <label>1111111111111111</label>
          </div>
          <div class="col">
            <label><textarea class="form-control" rows="4"></textarea></label>
          </div>
      </div>

      <div class="col">
          <div class="col">
            <label>3333333333333333</label>
          </div>
          <div class="col">
            <label><textarea class="form-control" rows="4"></textarea></label>
          </div>
      </div>

    </div>

    <div class="row">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="id1" >
        <label class="form-check-label" >1</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="id2" >
        <label class="form-check-label" >2</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="id3" >
        <label class="form-check-label" >3</label>
      </div>
    </div>

    <div class="row form-group form-inline">
      <div class=""
    </div>




    <div class="row">
      <div class="col text-center">
        <button class="btn btn-success" type="button">Submit</button>
      </div>
    </div>
  </form>

</div>
</template>
<script >
	import User from '../../../api/users.js';
    export default {
        data() {
            return {
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
                'testData' : {
                }
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    testFunction() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
				    	User.testFunction(this.testData).then(
		                (response) => {
		                	if(response.data.code == 200) {
		                		toastr.success('Patient details have been saved', 'patient detail', {timeOut: 5000});
		                	}
		                	 $("body .js-loader").addClass('d-none');

		                },
		                (error) => {
		                	 $("body .js-loader").addClass('d-none');

		                }
		                )
			    	}
			    },
                (error) => {
                }
                )

			}
		  },

    }
</script>
