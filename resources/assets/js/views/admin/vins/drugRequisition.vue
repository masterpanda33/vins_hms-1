<template>
<div class="container">
  <div class="page-header">
    <div class="row">
      <div class="col-md-6">
      <h1 >Drug Requisition Form</h1>
      </div>
      <div class="col-md-6">
        <div class="text-right">
          DOC NO. F/IPD/56 <br>
          REV. No. 0.0 <br>
          WEF 24-04-2016
        </div>
      </div>
    </div>
  </div>


  <form action="" method="post">

    <div class="row form-group">
      <table class="table table-bordered table-responsive">
        <thead>
          <tr>
            <th class="text-center">Sr. No.</th>
            <th class="text-center">Name of the Drug</th>
            <th class="text-center">Qty.</th>
            <th class="text-center">Batch No.</th>
            <th class="text-center">Expiry Date</th>
            <th class="text-center">Issued by</th>
            <th class="text-center">Received by </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center">1</td>
            <td><input class="form-control" type = "text" id = "name_of_drug_01" name="name_of_drug_01" value="" :class="{'is-danger': errors.has('name_of_drug_01') }" v-model="drugRequisitionData.name_of_drug_01"/>
            <span class="help is-danger" v-show="errors.has('name_of_drug_01')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "text" id = "quantity_01" name="quantity_01" value="" :class="{'is-danger': errors.has('quantity_01') }" v-model="drugRequisitionData.quantity_01"/>
            <span class="help is-danger" v-show="errors.has('quantity_01')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "text" id = "batch_no_01" name="batch_no_01" value="" :class="{'is-danger': errors.has('batch_no_01') }" v-model="drugRequisitionData.batch_no_01"/>
            <span class="help is-danger" v-show="errors.has('batch_no_01')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "date" id = "expiry_date_01" name="expiry_date_01" value="" :class="{'is-danger': errors.has('expiry_date_01') }" v-model="drugRequisitionData.expiry_date_01"/>
            <span class="help is-danger" v-show="errors.has('expiry_date_01')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "text" id = "issued_by_01" name="issued_by_01" value="" :class="{'is-danger': errors.has('issued_by_01') }" v-model="drugRequisitionData.issued_by_01"/>
            <span class="help is-danger" v-show="errors.has('issued_by_01')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "text" id = "received_by_01" name="received_by_01" value="" :class="{'is-danger': errors.has('received_by_01') }" v-model="drugRequisitionData.received_by_01"/>
            <span class="help is-danger" v-show="errors.has('received_by_01')">
                      Field is required
                    </span>

            </td>
          </tr>
          <tr>
            <td class="text-center">2</td>
            <td><input class="form-control" type = "text" id = "name_of_drug_02" name="name_of_drug_02" value="" :class="{'is-danger': errors.has('name_of_drug_02') }" v-model="drugRequisitionData.name_of_drug_02"/>
            <span class="help is-danger" v-show="errors.has('name_of_drug_02')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "text" id = "quantity_02" name="quantity_02" value="" :class="{'is-danger': errors.has('quantity_02') }" v-model="drugRequisitionData.quantity_02"/>
            <span class="help is-danger" v-show="errors.has('quantity_02')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "text" id = "batch_no_02" name="batch_no_02" value="" :class="{'is-danger': errors.has('batch_no_02') }" v-model="drugRequisitionData.batch_no_02"/>
            <span class="help is-danger" v-show="errors.has('batch_no_02')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "date" id = "expiry_date_02" name="expiry_date_02" value="" :class="{'is-danger': errors.has('expiry_date_02') }" v-model="drugRequisitionData.expiry_date_02"/>
            <span class="help is-danger" v-show="errors.has('expiry_date_02')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "text" id = "issued_by_02" name="issued_by_02" value="" :class="{'is-danger': errors.has('issued_by_02') }" v-model="drugRequisitionData.issued_by_02"/>
            <span class="help is-danger" v-show="errors.has('issued_by_02')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "text" id = "received_by_02" name="received_by_02" value="" :class="{'is-danger': errors.has('received_by_02') }" v-model="drugRequisitionData.received_by_02"/>
            <span class="help is-danger" v-show="errors.has('received_by_02')">
                      Field is required
                    </span>

            </td>
          </tr>
          <tr>
            <td class="text-center">3</td>
            <td><input class="form-control" type = "text" id = "name_of_drug_03" name="name_of_drug_03" value="" :class="{'is-danger': errors.has('name_of_drug_03') }" v-model="drugRequisitionData.name_of_drug_03"/>
            <span class="help is-danger" v-show="errors.has('name_of_drug_03')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "text" id = "quantity_03" name="quantity_03" value="" :class="{'is-danger': errors.has('quantity_03') }" v-model="drugRequisitionData.quantity_03"/>
            <span class="help is-danger" v-show="errors.has('quantity_03')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "text" id = "batch_no_03" name="batch_no_03" value="" :class="{'is-danger': errors.has('batch_no_03') }" v-model="drugRequisitionData.batch_no_03"/>
            <span class="help is-danger" v-show="errors.has('batch_no_03')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "date" id = "expiry_date_03" name="expiry_date_03" value="" :class="{'is-danger': errors.has('expiry_date_03') }" v-model="drugRequisitionData.expiry_date_03"/>
            <span class="help is-danger" v-show="errors.has('expiry_date_03')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "text" id = "issued_by_03" name="issued_by_03" value="" :class="{'is-danger': errors.has('issued_by_03') }" v-model="drugRequisitionData.issued_by_03"/>
            <span class="help is-danger" v-show="errors.has('issued_by_03')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "text" id = "received_by_03" name="received_by_03" value="" :class="{'is-danger': errors.has('received_by_03') }" v-model="drugRequisitionData.received_by_03"/>
            <span class="help is-danger" v-show="errors.has('received_by_03')">
                      Field is required
                    </span>

            </td>
          </tr>
          <tr>
            <td class="text-center">4</td>
            <td><input class="form-control" type = "text" id = "name_of_drug_04" name="name_of_drug_04" value="" :class="{'is-danger': errors.has('name_of_drug_04') }" v-model="drugRequisitionData.name_of_drug_04"/>
            <span class="help is-danger" v-show="errors.has('name_of_drug_04')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "text" id = "quantity_04" name="quantity_04" value="" :class="{'is-danger': errors.has('quantity_04') }" v-model="drugRequisitionData.quantity_04"/>
            <span class="help is-danger" v-show="errors.has('quantity_04')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "text" id = "batch_no_04" name="batch_no_04" value="" :class="{'is-danger': errors.has('batch_no_04') }" v-model="drugRequisitionData.batch_no_04"/>
            <span class="help is-danger" v-show="errors.has('batch_no_04')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "date" id = "expiry_date_04" name="expiry_date_04" value="" :class="{'is-danger': errors.has('expiry_date_04') }" v-model="drugRequisitionData.expiry_date_04"/>
            <span class="help is-danger" v-show="errors.has('expiry_date_04')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "text" id = "issued_by_04" name="issued_by_04" value="" :class="{'is-danger': errors.has('issued_by_04') }" v-model="drugRequisitionData.issued_by_04"/>
            <span class="help is-danger" v-show="errors.has('issued_by_04')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "text" id = "received_by_04" name="received_by_04" value="" :class="{'is-danger': errors.has('received_by_04') }" v-model="drugRequisitionData.received_by_04"/>
            <span class="help is-danger" v-show="errors.has('received_by_04')">
                      Field is required
                    </span>

            </td>
          </tr>
          <tr>
            <td class="text-center">5</td>
            <td><input class="form-control" type = "text" id = "name_of_drug_05" name="name_of_drug_05" value="" :class="{'is-danger': errors.has('name_of_drug_05') }" v-model="drugRequisitionData.name_of_drug_05"/>
            <span class="help is-danger" v-show="errors.has('name_of_drug_05')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "text" id = "quantity_05" name="quantity_05" value="" :class="{'is-danger': errors.has('quantity_05') }" v-model="drugRequisitionData.quantity_05"/>
            <span class="help is-danger" v-show="errors.has('quantity_05')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "text" id = "batch_no_05" name="batch_no_05" value="" :class="{'is-danger': errors.has('batch_no_05') }" v-model="drugRequisitionData.batch_no_05"/>
            <span class="help is-danger" v-show="errors.has('batch_no_05')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "date" id = "expiry_date_05" name="expiry_date_05" value="" :class="{'is-danger': errors.has('expiry_date_05') }" v-model="drugRequisitionData.expiry_date_05"/>
            <span class="help is-danger" v-show="errors.has('expiry_date_05')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "text" id = "issued_by_05" name="issued_by_05" value="" :class="{'is-danger': errors.has('issued_by_05') }" v-model="drugRequisitionData.issued_by_05"/>
            <span class="help is-danger" v-show="errors.has('issued_by_05')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "text" id = "received_by_05" name="received_by_05" value="" :class="{'is-danger': errors.has('received_by_05') }" v-model="drugRequisitionData.received_by_05"/>
            <span class="help is-danger" v-show="errors.has('received_by_05')">
                      Field is required
                    </span>

            </td>
          </tr>
          <tr>
            <td class="text-center">6</td>
            <td><input class="form-control" type = "text" id = "name_of_drug_06" name="name_of_drug_06" value="" :class="{'is-danger': errors.has('name_of_drug_06') }" v-model="drugRequisitionData.name_of_drug_06"/>
            <span class="help is-danger" v-show="errors.has('name_of_drug_06')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "text" id = "quantity_06" name="quantity_06" value="" :class="{'is-danger': errors.has('quantity_06') }" v-model="drugRequisitionData.quantity_06"/>
            <span class="help is-danger" v-show="errors.has('quantity_06')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "text" id = "batch_no_06" name="batch_no_06" value="" :class="{'is-danger': errors.has('batch_no_06') }" v-model="drugRequisitionData.batch_no_06"/>
            <span class="help is-danger" v-show="errors.has('batch_no_06')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "date" id = "expiry_date_06" name="expiry_date_06" value="" :class="{'is-danger': errors.has('expiry_date_06') }" v-model="drugRequisitionData.expiry_date_06"/>
            <span class="help is-danger" v-show="errors.has('expiry_date_06')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "text" id = "issued_by_06" name="issued_by_06" value="" :class="{'is-danger': errors.has('issued_by_06') }" v-model="drugRequisitionData.issued_by_06"/>
            <span class="help is-danger" v-show="errors.has('issued_by_06')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "text" id = "received_by_06" name="received_by_06" value="" :class="{'is-danger': errors.has('received_by_06') }" v-model="drugRequisitionData.received_by_06"/>
            <span class="help is-danger" v-show="errors.has('received_by_06')">
                      Field is required
                    </span>

            </td>
          </tr>
          <tr>
            <td class="text-center">7</td>
            <td><input class="form-control" type = "text" id = "name_of_drug_07" name="name_of_drug_07" value="" :class="{'is-danger': errors.has('name_of_drug_07') }" v-model="drugRequisitionData.name_of_drug_07"/>
            <span class="help is-danger" v-show="errors.has('name_of_drug_07')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "text" id = "quantity_07" name="quantity_07" value="" :class="{'is-danger': errors.has('quantity_07') }" v-model="drugRequisitionData.quantity_07"/>
            <span class="help is-danger" v-show="errors.has('quantity_07')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "text" id = "batch_no_07" name="batch_no_07" value="" :class="{'is-danger': errors.has('batch_no_07') }" v-model="drugRequisitionData.batch_no_07"/>
            <span class="help is-danger" v-show="errors.has('batch_no_07')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "date" id = "expiry_date_07" name="expiry_date_07" value="" :class="{'is-danger': errors.has('expiry_date_07') }" v-model="drugRequisitionData.expiry_date_07"/>
            <span class="help is-danger" v-show="errors.has('expiry_date_07')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "text" id = "issued_by_07" name="issued_by_07" value="" :class="{'is-danger': errors.has('issued_by_07') }" v-model="drugRequisitionData.issued_by_07"/>
            <span class="help is-danger" v-show="errors.has('issued_by_07')">
                      Field is required
                    </span>

            </td>
            <td><input class="form-control" type = "text" id = "received_by_07" name="received_by_07" value="" :class="{'is-danger': errors.has('received_by_07') }" v-model="drugRequisitionData.received_by_07"/>
            <span class="help is-danger" v-show="errors.has('received_by_07')">
                      Field is required
                    </span>

            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="row">
      <div class="form-group col-md-6">
        <div class="col-md-5">
          <label class="control-label" for="name">Name and Signature :</label>
        </div>
        <div class="col-md-7">
          <input class="form-control" type = "text" v-validate="'required'" id = "name" name="name" value="" :class="{'is-danger': errors.has('name') }" v-model="drugRequisitionData.name"/>
          <span class="help is-danger" v-show="errors.has('name')">
                    Field is required
                  </span>
        </div>
      </div>
      <div class="form-group col-md-3">
        <div class="col-md-4">
          <label class="control-label" for="date">Date :</label>
        </div>
        <div class="col-md-8">
          <input class="form-control" type = "date" v-validate="'required'" id = "date" name="date" value="" :class="{'is-danger': errors.has('date') }" v-model="drugRequisitionData.date"/>
          <span class="help is-danger" v-show="errors.has('date')">
                    Field is required
                  </span>
        </div>
      </div>
      <div class="form-group col-md-3">
        <div class="col-md-4">
          <label class="control-label" for="time">Time :</label>
        </div>
        <div class="col-md-8">
          <input class="form-control" type = "time" v-validate="'required'" id = "time" name="time" value="" :class="{'is-danger': errors.has('time') }" v-model="drugRequisitionData.time"/>
          <span class="help is-danger" v-show="errors.has('time')">
                    Field is required
                  </span>
        </div>
      </div>
    </div>
    <div class="row form-group text-center">
      <button class="btn btn-success" type="submit">Submit</button>
    </div>
   </form>
</div>
</template>

<script>
	import User from '../../../api/users.js';
    export default {
        data() {
            return {
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
                'drugRequisitionData' : {
                  'name_of_drug_01':'',
                  'quantity_01':'',
                  'batch_no_01':'',
                  'expiry_date_01':'',
                  'issued_by_01':'',
                  'received_by_01':'',
                  'name_of_drug_02':'',
                  'quantity_02':'',
                  'batch_no_02':'',
                  'expiry_date_02':'',
                  'issued_by_02':'',
                  'received_by_02':'',
                  'name_of_drug_03':'',
                  'quantity_03':'',
                  'batch_no_03':'',
                  'expiry_date_03':'',
                  'issued_by_03':'',
                  'received_by_03':'',
                  'name_of_drug_04':'',
                  'quantity_04':'',
                  'batch_no_04':'',
                  'expiry_date_04':'',
                  'issued_by_04':'',
                  'received_by_04':'',
                  'name_of_drug_05':'',
                  'quantity_05':'',
                  'batch_no_05':'',
                  'expiry_date_05':'',
                  'issued_by_05':'',
                  'received_by_05':'',
                  'name_of_drug_06':'',
                  'quantity_06':'',
                  'batch_no_06':'',
                  'expiry_date_06':'',
                  'issued_by_06':'',
                  'received_by_06':'',
                  'name_of_drug_07':'',
                  'quantity_07':'',
                  'batch_no_07':'',
                  'expiry_date_07':'',
                  'issued_by_07':'',
                  'received_by_07':'',
                  'name':'',
                  'date':'',
                  'time':''
                }
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    savedrugRequisition() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
				    	User.savedrugRequisition(this.drugRequisitionData).then(
		                (response) => {
		                	if(response.data.code == 200) {
		                		toastr.success('Patient details have been saved', 'drug requisition', {timeOut: 5000});
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
