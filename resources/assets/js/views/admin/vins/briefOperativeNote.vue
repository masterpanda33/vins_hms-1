<template>
  <div class="container">
  		<div class="page-header">
  			<div class="row">
  				<div class="col-md-6">
  				<h1>Brief Operative Note</h1>
  				</div>
  				<div class="col-md-6">
  				</div>
  			</div>
  		</div>

  		<form action="" method="post">
        <div class="row form-group">
          <textarea name="briefoperativenote" v-validate="'required'" v-model="briefOperativeNoteData.briefoperativenote" rows="5" cols="80" class="form-control" placeholder="Brief Operative Notes here:"></textarea>
          <span class="help is-danger" v-show="errors.has('briefoperativenote')">
            Field is required
          </span>
        </div>
  			<div class="row">
  				<table class="table table-bordered table-striped" name="">
  					<thead>
  						<tr>
  							<th class="text-center">Post Operative Clinical Status</th>
  							<th class="text-center">Post Operative Orders</th>
  						</tr>
  					</thead>
  					<tbody>
  						<tr>
  							<td>
                  <textarea name="post_operative_clinical_status" v-validate="'required'" v-model="briefOperativeNoteData.post_operative_clinical_status" rows="4" class="form-control"></textarea>
                  <span class="help is-danger" v-show="errors.has('post_operative_clinical_status')">
                    Field is required
                  </span>
  							</td>
  							<td>
                  <textarea name="post_operative_orders" v-validate="'required'" v-model="briefOperativeNoteData.post_operative_orders" rows="4" class="form-control"></textarea>
                  <span class="help is-danger" v-show="errors.has('post_operative_orders')">
                    Field is required
                  </span>
  							</td>
              </tr>
  					</tbody>
  				</table>
  			</div>
  			<div class="form-group text-center">
  			  <input class="btn btn-success" type="button" value = "Submit" @click="saveBreifOperativeNote()"/>
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
                'briefOperativeNoteData' : {
                  'briefoperativenote' : '',
                  'post_operative_clinical_status' : '',
                  'post_operative_orders' : '',

                }
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveBreifOperativeNote() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
				    	User.saveBreifOperativeNote(this.briefOperativeNoteData).then(
		                (response) => {
		                	if(response.data.code == 200) {
		                		toastr.success('Brief Operative Note details have been saved', 'brief operative note detail', {timeOut: 5000});
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
