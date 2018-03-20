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
                    <label class="control-label">Patient Name</label>
                    <select class="form-control" id="patientName" name="patientName" v-validate="'required'">
                            <option value="name1">name1</option>
                            <option value="name2">name2</option>
                            <option value="name3">name3</option>
                            <option value="name4">name4</option>
                        </select>
                        <span class="help is-danger" v-show="">
                            Field is required
                        </span>
                      <label class="control-label">IPD Number</label>
                     <select class="form-control" id="ipdNumber" name="ipdNumber"  v-validate="'required'">
                            <option value="ipdNumber1">1</option>
                            <option value="ipdNumber2">2</option>
                            <option value="ipdNumber3">3</option>
                            <option value="ipdNumber4">4</option>
                        </select>
                        <span class="help is-danger" v-show="">
                            Field is required
                        </span>
                </div>
                <div class="modal-body js-delete-confirmation-msg"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger"  @click="hideModal()">{{$lang.user_management_cancel}}</button>
                    <button type="submit" class="btn btn-primary" @click.prevent="confirmDelete()">{{$lang.user_management_save}}</button>
                </div>
                <input name="_method" value="DELETE" type="hidden" />
            </form>
        </div>
      </div>
    </div>
</template>
<script>
    export default  {
        props: {
            // deleteConfirmMsg: String
        },
        methods: {
            confirmDelete() {
                this.$emit('confirmed');
            },
            hideModal() {
                $('#delete_modal').modal('hide')
                return false
            }
        }
    }
</script>
