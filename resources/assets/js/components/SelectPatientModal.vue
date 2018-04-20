<template>
    <div class="modal fade bg-modal-color refdel" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog delete-modal" role="document">
        <div class="modal-content">
            <form method="delete" class="js-delete-modal-form">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">{{$lang.user_management_confirmation}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                   
                      <label class="control-label">IPD Number</label>
                     <select class="form-control" id="ipdNumber" name="ipdNumber"  v-validate="'required'" v-model="ipd_No">
                            <option :value="rec.id" v-for="rec in ipdData">{{rec.id}} ({{rec.patient_details.first_name}})</option>
                           
                        </select>
                        <span class="help is-danger" v-show="">
                            Field is required
                        </span>
                </div>
                <div class="modal-body js-delete-confirmation-msg"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger"  @click="hideModal()">{{$lang.user_management_cancel}}</button>
                    <button type="submit" class="btn btn-primary" @click.prevent="saveIpd()">{{$lang.user_management_save}}</button>
                </div>
                <input name="_method" value="DELETE" type="hidden" />
            </form>
        </div>
      </div>
    </div>
</template>
<script>
    export default  {
        data() {
            return {

                'ipdData': this.$store.state.Patient.ipdData,
                'ipd_No'  : '',
            }
        },
        mounted(){
            var vm = this;
            setTimeout(function(){
                vm.ipdData = vm.$store.state.Patient.ipdData;
            },3000)
        },
        props: {
            // deleteConfirmMsg: String
        },
        created() {
            this.$store.dispatch('GetAllPatientName');
        },
        methods: {
            saveIpd() {
                this.$store.dispatch('SetPatientData',this.ipd_No);
                this.hideModal();
                // this.$emit('confirmed');
            },
            hideModal() {
                $('#delete_modal').modal('hide')
                return false
            }
        }
    }
</script>
