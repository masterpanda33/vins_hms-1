<template id="">
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
					<h1>Nursing Duty Over</h1>
				</div>
				<div class="col-md-6">
					<div class="text-right">
						DOC NO. F/IPD/38 <br>
						REV. No. 0.0 <br>
						WEF 01-01-2014
					</div>
				</div>
			</div>
		</div>

		<form name="" action="" method="post">
			<div class ="row form-group">
				<div class="col-md-4">
					<textarea class="form-control" name="addressograph" rows="3" placeholder="Addressograph Here" value="" v-model="NursingDutyOver.addressograph" v-validate="'required'"></textarea>
					<span class="help is-danger" v-show="errors.has('addressograph')">
						Field is required
					</span>
				</div>
				<div class="col-md-8">
					<textarea class="form-control" name="specific_instruction" rows="3" placeholder="Specific Instructions If Any" value="" v-model="NursingDutyOver.specific_instruction" v-validate="'required'"></textarea>
					<span class="help is-danger" v-show="errors.has('specific_instruction')">
						Field is required
					</span>
				</div>
			</div>
			<hr />
			<div class="row form-group">
				<table class="table table-bordered">
					<thead>
						<tr>
								<th></th>
							<th  class="text-center">Morning</th>
							<th  class="text-center">Evening</th>
							<th  class="text-center">Night</th>
							</tr>
					</thead>
					<tbody>
						<tr>
								<td>Unit Nurse Name</td>

								<td >
									<input type = "text" class = "form-control" name="M_nurse_name" v-model="NursingDutyOver.M_nurse_name" v-validate="'required'">
									<span class="help is-danger" v-show="errors.has('M_nurse_name')">
										Field is required
									</span>
								</td>
								<td >
									<input type = "text" class = "form-control" name="E_nurse_name" v-model="NursingDutyOver.E_nurse_name" v-validate="'required'">
									<span class="help is-danger" v-show="errors.has('E_nurse_name')">
										Field is required
									</span>
								</td>
								<td >
									<input type = "text" class = "form-control" name="N_nurse_name" v-model="NursingDutyOver.N_nurse_name" v-validate="'required'">
									<span class="help is-danger" v-show="errors.has('N_nurse_name')">
										Field is required
									</span>
								</td>
							</tr>

						<tr>
								<td>In Charge on Duty</td>

								<td >
									<input type = "text" class = "form-control" name="M_incharge_name" v-model="NursingDutyOver.M_incharge_name" v-validate="'required'">
									<span class="help is-danger" v-show="errors.has('M_incharge_name')">
										Field is required
									</span>
								</td>
								<td >
									<input type = "text" class = "form-control" name="E_incharge_name" v-model="NursingDutyOver.E_incharge_name" v-validate="'required'">
									<span class="help is-danger" v-show="errors.has('E_incharge_name')">
										Field is required
									</span>
								</td>
								<td >
									<input type = "text" class = "form-control" name="N_incharge_name" v-model="NursingDutyOver.N_incharge_name" v-validate="'required'">
									<span class="help is-danger" v-show="errors.has('N_incharge_name')">
										Field is required
									</span>
								</td>
							</tr>

						<tr>
								<td>1. Eye Care </td>

								<td  class="text-center">
									<input type="radio"  name="M_eyecare" v-model="NursingDutyOver.M_eyecare" >
									<span class="help is-danger" v-show="errors.has('M_eyecare')">
										Field is required
									</span>
								</td>
								<td  class="text-center">
									<input type="radio"  name="E_eyecare" v-model="NursingDutyOver.E_eyecare" >
									<span class="help is-danger" v-show="errors.has('E_eyecare')">
										Field is required
									</span>
								</td>
								<td  class="text-center">
									<input type="radio"  name="N_eyecare" v-model="NursingDutyOver.N_eyecare" >
									<span class="help is-danger" v-show="errors.has('N_eyecare')">
										Field is required
									</span>
								</td>
							</tr>

						<tr>
								<td>2. Mouth Care</td>

								<td  class="text-center">
									<input type="radio"  name="M_mouthcare" v-model="NursingDutyOver.M_mouthcare" >
									<span class="help is-danger" v-show="errors.has('M_mouthcare')">
										Field is required
									</span>
								</td>
								<td  class="text-center">
									<input type="radio"  name="E_mouthcare" v-model="NursingDutyOver.E_mouthcare" >
									<span class="help is-danger" v-show="errors.has('E_mouthcare')">
										Field is required
									</span>
								</td>
								<td  class="text-center">
									<input type="radio"  name="N_mouthcare" v-model="NursingDutyOver.N_mouthcare" >
									<span class="help is-danger" v-show="errors.has('N_mouthcare')">
										Field is required
									</span>
								</td>
							</tr>

						<tr>
								<td>3. Skin Care/ Back Care </td>

								<td  class="text-center">
									<input type="radio" name="M_skincare" v-model="NursingDutyOver.M_skincare" >
									<span class="help is-danger" v-show="errors.has('M_skincare')">
										Field is required
									</span>
								</td>
								<td  class="text-center">
									<input type="radio" name="E_skincare" v-model="NursingDutyOver.E_skincare" >
									<span class="help is-danger" v-show="errors.has('E_skincare')">
										Field is required
									</span>
								</td>
								<td  class="text-center">
									<input type="radio" name="N_skincare" v-model="NursingDutyOver.N_skincare" >
									<span class="help is-danger" v-show="errors.has('N_skincare')">
										Field is required
									</span>
								</td>
							</tr>

						<tr>
								<td>4. Bedding</td>

								<td  class="text-center">
									<input type="radio" name="M_bedding" v-model="NursingDutyOver.M_bedding" >
									<span class="help is-danger" v-show="errors.has('M_bedding')">
										Field is required
									</span>
								</td>
								<td  class="text-center">
									<input type="radio" name="E_bedding" v-model="NursingDutyOver.E_bedding" >
									<span class="help is-danger" v-show="errors.has('E_bedding')">
										Field is required
									</span>
								</td>
								<td  class="text-center">
									<input type="radio" name="N_bedding" v-model="NursingDutyOver.N_bedding" >
									<span class="help is-danger" v-show="errors.has('N_bedding')">
										Field is required
									</span>
								</td>
							</tr>

						<tr>
								<td>5. Catheter Care</td>

								<td  class="text-center">
									<input type="radio" name="M_cathetercare" v-model="NursingDutyOver.M_cathetercare" >
									<span class="help is-danger" v-show="errors.has('M_cathetercare')">
										Field is required
									</span>
								</td>
								<td  class="text-center">
									<input type="radio" name="E_cathetercare" v-model="NursingDutyOver.E_cathetercare" >
									<span class="help is-danger" v-show="errors.has('E_cathetercare')">
										Field is required
									</span>
								</td>
								<td  class="text-center">
									<input type="radio" name="N_cathetercare" v-model="NursingDutyOver.N_cathetercare" >
									<span class="help is-danger" v-show="errors.has('N_cathetercare')">
										Field is required
									</span>
								</td>
							</tr>

						<tr>
								<td>6. Physiotherapy</td>

								<td  class="text-center">
									<input type="radio" name="M_physiotherapy" v-model="NursingDutyOver.M_physiotherapy" >
									<span class="help is-danger" v-show="errors.has('M_physiotherapy')">
										Field is required
									</span>
								</td>
								<td  class="text-center">
									<input type="radio" name="E_physiotherapy" v-model="NursingDutyOver.E_physiotherapy" >
									<span class="help is-danger" v-show="errors.has('E_physiotherapy')">
										Field is required
									</span>
								</td>
								<td  class="text-center">
									<input type="radio" name="N_physiotherapy" v-model="NursingDutyOver.N_physiotherapy" >
									<span class="help is-danger" v-show="errors.has('N_physiotherapy')">
										Field is required
									</span>
								</td>
							</tr>

						<tr>
								<td>7. Sponge Bath</td>

								<td  class="text-center">
									<input type="radio" name="M_spongebath" v-model="NursingDutyOver.M_spongebath" >
									<span class="help is-danger" v-show="errors.has('M_spongebath')">
										Field is required
									</span>
								</td>
								<td  class="text-center">
									<input type="radio" name="E_spongebath" v-model="NursingDutyOver.E_spongebath" >
									<span class="help is-danger" v-show="errors.has('E_spongebath')">
										Field is required
									</span>
								</td>
								<td  class="text-center">
									<input type="radio" name="N_spongebath" v-model="NursingDutyOver.N_spongebath" >
									<span class="help is-danger" v-show="errors.has('N_spongebath')">
										Field is required
									</span>
								</td>
							</tr>

						<tr>
								<td>8. Any Other </td>

								<td  class="text-center">
									<input type="radio" name="M_other" v-model="NursingDutyOver.M_other" >
									<span class="help is-danger" v-show="errors.has('M_other')">
										Field is required
									</span>
								</td>
								<td  class="text-center">
									<input type="radio" name="E_other" v-model="NursingDutyOver.E_other" >
									<span class="help is-danger" v-show="errors.has('E_other')">
										Field is required
									</span>
								</td>
								<td  class="text-center">
									<input type="radio" name="N_other" v-model="NursingDutyOver.N_other" >
									<span class="help is-danger" v-show="errors.has('N_other')">
										Field is required
									</span>
								</td>
							</tr>

						<tr>
								<td>Investigations</td>

								<td >
									<input type = "text" class = "form-control" name="M_investigations"  value="" v-model="NursingDutyOver.M_investigations" v-validate="'required'">
									<span class="help is-danger" v-show="errors.has('M_investigations')">
										Field is required
									</span>
								</td>
								<td >
									<input type = "text" class = "form-control" name="E_investigations"  value="" v-model="NursingDutyOver.E_investigations" v-validate="'required'">
									<span class="help is-danger" v-show="errors.has('E_investigations')">
										Field is required
									</span>
								</td>
								<td >
									<input type = "text" class = "form-control" name="N_investigations"  value="" v-model="NursingDutyOver.N_investigations" v-validate="'required'">
									<span class="help is-danger" v-show="errors.has('N_investigations')">
										Field is required
									</span>
								</td>
							</tr>

						<tr>
								<td>Pending Reports</td>

								<td >
									<input type = "text" class = "form-control" name="M_pendingreport"  value="" v-model="NursingDutyOver.M_pendingreport" v-validate="'required'">
									<span class="help is-danger" v-show="errors.has('M_pendingreport')">
										Field is required
									</span>
								</td>
								<td >
									<input type = "text" class = "form-control" name="E_pendingreport"  value="" v-model="NursingDutyOver.E_pendingreport" v-validate="'required'">
									<span class="help is-danger" v-show="errors.has('E_pendingreport')">
										Field is required
									</span>
								</td>
								<td >
									<input type = "text" class = "form-control" name="N_pendingreport"  value="" v-model="NursingDutyOver.N_pendingreport" v-validate="'required'">
									<span class="help is-danger" v-show="errors.has('N_pendingreport')">
										Field is required
									</span>
								</td>
							</tr>

						<tr>
								<td>Replacement Of Drug.</td>

								<td >
									<input type = "text" class = "form-control" name="M_replacementdrug"  value="" v-model="NursingDutyOver.M_replacementdrug" v-validate="'required'">
									<span class="help is-danger" v-show="errors.has('M_replacementdrug')">
										Field is required
									</span>
								</td>
								<td >
									<input type = "text" class = "form-control" name="E_replacementdrug"  value="" v-model="NursingDutyOver.E_replacementdrug" v-validate="'required'">
									<span class="help is-danger" v-show="errors.has('E_replacementdrug')">
										Field is required
									</span>
								</td>
								<td >
									<input type = "text" class = "form-control" name="N_replacementdrug"  value="" v-model="NursingDutyOver.N_replacementdrug" v-validate="'required'">
									<span class="help is-danger" v-show="errors.has('N_replacementdrug')">
										Field is required
									</span>
								</td>
							</tr>

					</tbody>
				</table>

				<table class="table table-bordered">
					<thead>
						<tr>
								<th>Balance Drugs in Stock</th>
							<th>Time</th>
							<th>Balance</th>
							<th>Time</th>
							<th>Balance</th>
							<th>Time</th>
							<th>Balance</th>
							</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<input type = "text" class = "form-control" name="balance_drugs_00" v-model="NursingDutyOver.balance_drugs_00" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('balance_drugs_00')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="M_time_00" v-model="NursingDutyOver.M_time_00" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('M_time_00')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="M_balance_00" v-model="NursingDutyOver.M_balance_00" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('M_balance_00')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="E_time_00" v-model="NursingDutyOver.E_time_00" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('E_time_00')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="E_balance_00" v-model="NursingDutyOver.E_balance_00" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('E_balance_00')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="N_time_00" v-model="NursingDutyOver.N_time_00" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('N_time_00')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="N_balance_00" v-model="NursingDutyOver.N_balance_00" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('N_balance_00')">
									Field is required
								</span>
							</td>
						</tr>

						<tr>
							<td>
								<input type = "text" class = "form-control" name="balance_drugs_01" v-model="NursingDutyOver.balance_drugs_01" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('balance_drugs_01')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="M_time_01" v-model="NursingDutyOver.M_time_01" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('M_time_01')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="M_balance_01" v-model="NursingDutyOver.M_balance_01" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('M_balance_01')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="E_time_01" v-model="NursingDutyOver.E_time_01" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('E_time_01')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="E_balance_01" v-model="NursingDutyOver.E_balance_01" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('E_balance_01')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="N_time_01" v-model="NursingDutyOver.N_time_01" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('N_time_01')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="N_balance_01" v-model="NursingDutyOver.N_balance_01" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('N_balance_01')">
									Field is required
								</span>
							</td>
						</tr>

						<tr>
							<td>
								<input type = "text" class = "form-control" name="balance_drugs_02" v-model="NursingDutyOver.balance_drugs_02" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('balance_drugs_02')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="M_time_02" v-model="NursingDutyOver.M_time_02" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('M_time_02')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="M_balance_02" v-model="NursingDutyOver.M_balance_02" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('M_balance_02')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="E_time_02" v-model="NursingDutyOver.E_time_02" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('E_time_02')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="E_balance_02" v-model="NursingDutyOver.E_balance_02" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('E_balance_02')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="N_time_02" v-model="NursingDutyOver.N_time_02" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('N_time_02')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="N_balance_02" v-model="NursingDutyOver.N_balance_02" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('N_balance_02')">
									Field is required
								</span>
							</td>
						</tr>

						<tr>
							<td>
								<input type = "text" class = "form-control" name="balance_drugs_03" v-model="NursingDutyOver.balance_drugs_03" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('balance_drugs_03')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="M_time_03" v-model="NursingDutyOver.M_time_03" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('M_time_03')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="M_balance_03" v-model="NursingDutyOver.M_balance_03" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('M_balance_03')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="E_time_03" v-model="NursingDutyOver.E_time_03" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('E_time_03')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="E_balance_03" v-model="NursingDutyOver.E_balance_03" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('E_balance_03')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="N_time_03" v-model="NursingDutyOver.N_time_03" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('N_time_03')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="N_balance_03" v-model="NursingDutyOver.N_balance_03" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('N_balance_03')">
									Field is required
								</span>
							</td>
						</tr>

						<tr>
							<td>
								<input type = "text" class = "form-control" name="balance_drugs_04" v-model="NursingDutyOver.balance_drugs_04" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('balance_drugs_04')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="M_time_04" v-model="NursingDutyOver.M_time_04" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('M_time_04')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="M_balance_04" v-model="NursingDutyOver.M_balance_04" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('M_balance_04')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="E_time_04" v-model="NursingDutyOver.E_time_04" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('E_time_04')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="E_balance_04" v-model="NursingDutyOver.E_balance_04" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('E_balance_04')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="N_time_04" v-model="NursingDutyOver.N_time_04" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('N_time_04')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="N_balance_04" v-model="NursingDutyOver.N_balance_04" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('N_balance_04')">
									Field is required
								</span>
							</td>
						</tr>

						<tr>
							<td>
								<input type = "text" class = "form-control" name="balance_drugs_05" v-model="NursingDutyOver.balance_drugs_05" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('balance_drugs_05')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="M_time_05" v-model="NursingDutyOver.M_time_05" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('M_time_05')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="M_balance_05" v-model="NursingDutyOver.M_balance_05" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('M_balance_05')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="E_time_05" v-model="NursingDutyOver.E_time_05" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('E_time_05')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="E_balance_05" v-model="NursingDutyOver.E_balance_05" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('E_balance_05')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="N_time_05" v-model="NursingDutyOver.N_time_05" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('N_time_05')">
									Field is required
								</span>
							</td>
							<td>
								<input type = "text" class = "form-control" name="N_balance_05" v-model="NursingDutyOver.N_balance_05" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('N_balance_05')">
									Field is required
								</span>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<hr/>
			<div class="row form-group">
				<div class="col-md-6">
					<label for="">Events if any:</label>
				</div>
				<div class="col-md-6">
					<input type="text" name="events" value="" v-model="NursingDutyOver.events" class="form-control">
					<span class="help is-danger" v-show="errors.has('events')">
						Field is required
					</span>
				</div>
			</div>
			<table class="table table-bordered" name="">
				<tr>
					<th>
						Name of Nurse:
					</th>
					<td>
						<input type="text" class="form-control" name="event_m_nurse_name" v-model="NursingDutyOver.event_m_nurse_name" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('event_m_nurse_name')">
									Field is required
								</span>
					</td>
					<td>
						<input type="text" class="form-control" name="event_e_nurse_name" v-model="NursingDutyOver.event_e_nurse_name" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('event_e_nurse_name')">
									Field is required
								</span>
					</td>
					<td>
						<input type="text" class="form-control" name="event_n_nurse_name" v-model="NursingDutyOver.event_n_nurse_name" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('event_n_nurse_name')">
									Field is required
								</span>
					</td>
				</tr>
				<tr>
					<th>
						Date:
					</th>
					<td>
						<input type="date" class="form-control" name="m_date" v-model="NursingDutyOver.m_date" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('m_date')">
									Field is required
								</span>
					</td>
					<td>
						<input type="date" class="form-control" name="e_date" v-model="NursingDutyOver.e_date" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('e_date')">
									Field is required
								</span>
					</td>
					<td>
						<input type="date" class="form-control" name="n_date" v-model="NursingDutyOver.n_date" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('n_date')">
									Field is required
								</span>
					</td>
				</tr>
				<tr>
					<th>
						Time:
					</th>
					<td>
						<input type="time" class="form-control" name="m_time" v-model="NursingDutyOver.m_time" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('m_time')">
									Field is required
								</span>
					</td>
					<td>
						<input type="time" class="form-control" name="e_time" v-model="NursingDutyOver.e_time" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('e_time')">
									Field is required
								</span>
					</td>
					<td>
						<input type="time" class="form-control" name="n_time" v-model="NursingDutyOver.n_time" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('n_time')">
									Field is required
								</span>
					</td>
				</tr>
			</table>
			<div class="row form-group">
				<div class="col text-center">
					<button class="btn btn-success" type="button" @click="saveNursingDutyOver()">Submit</button>
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
                'NursingDutyOver' : {
									'addressograph':'',
									'specific_instruction':'',
									'M_nurse_name':'',
									'E_nurse_name':'',
									'N_nurse_name':'',
									'M_incharge_name':'',
									'E_incharge_name':'',
									'N_incharge_name':'',
									'M_eyecare':'',
									'E_eyecare':'',
									'N_eyecare':'',
									'M_mouthcare':'',
									'E_mouthcare':'',
									'N_mouthcare':'',
									'M_skincare':'',
									'E_skincare':'',
									'N_skincare':'',
									'M_bedding':'',
									'E_bedding':'',
									'N_bedding':'',
									'M_cathetercare':'',
									'E_cathetercare':'',
									'N_cathetercare':'',
									'M_physiotherapy':'',
									'E_physiotherapy':'',
									'N_physiotherapy':'',
									'M_spongebath':'',
									'E_spongebath':'',
									'N_spongebath':'',
									'M_other':'',
									'E_other':'',
									'N_other':'',
									'balance_drugs_00':'',
									'M_time_00':'',
									'M_balance_00':'',
									'E_time_00':'',
									'E_balance_00':'',
									'N_time_00':'',
									'N_balance_00':'',
									'balance_drugs_01':'',
									'M_time_01':'',
									'M_balance_01':'',
									'E_time_01':'',
									'E_balance_01':'',
									'N_time_01':'',
									'N_balance_01':'',
									'balance_drugs_02':'',
									'M_time_02':'',
									'M_balance_02':'',
									'E_time_02':'',
									'E_balance_02':'',
									'N_time_02':'',
									'N_balance_02':'',
									'balance_drugs_03':'',
									'M_time_03':'',
									'M_balance_03':'',
									'E_time_03':'',
									'E_balance_03':'',
									'N_time_03':'',
									'N_balance_03':'',
									'balance_drugs_04':'',
									'M_time_04':'',
									'M_balance_04':'',
									'E_time_04':'',
									'E_balance_04':'',
									'N_time_04':'',
									'N_balance_04':'',
									'balance_drugs_05':'',
									'M_time_05':'',
									'M_balance_05':'',
									'E_time_05':'',
									'E_balance_05':'',
									'N_time_05':'',
									'N_balance_05':'',
									'M_investigations':'',
									'E_investigations':'',
									'N_investigations':'',
									'M_pendingreport':'',
									'E_pendingreport':'',
									'N_pendingreport':'',
									'M_replacementdrug':'',
									'E_replacementdrug':'',
									'N_replacementdrug':'',
									'events':'',
									'event_m_nurse_name':'',
									'event_e_nurse_name':'',
									'event_n_nurse_name':'',
									'm_date':'',
									'e_date':'',
									'n_date':'',
									'm_time':'',
									'e_time':'',
									'n_time':'',
                }
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },

        saveNursingDutyOver() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
                   User.saveNursingDutyOver(this.NursingDutyOver).then(
                         (response) => {
                         	console.log(response)
                         	if(response.data.status == 200) {
                         		toastr.success('Discharge Summary has been saved', 'NursingDutyOver', {timeOut: 5000});
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
