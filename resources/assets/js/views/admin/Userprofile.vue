  <template>
    <div class="modal fade" id="user_profile">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-4 form-control-label">{{$lang.user_management_add_name}}</label>
                        <div class="col-sm-7">
                            <input  v-validate="'required|alpha'" v-model="userData.name" :class="{'is-danger': errors.has('name') }" name="name" type="text" class="form-control" placeholder="Your name">
                            <i v-show="errors.has('name')" class="fa fa-warning"></i>
                            <span class="help is-danger" v-show="errors.has('name')">{{ errors.first('name') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 form-control-label">{{$lang.user_desktop_surname}}</label>
                        <div class="col-sm-7">
                            <input  v-validate="'required|alpha'" v-model="userData.surname" :class="{'is-danger': errors.has('surname') }" name="surname" type="text" class="form-control" placeholder="Enter second name">
                            <i v-show="errors.has('surname')" class="fa fa-warning"></i>
                            <span class="help is-danger" v-show="errors.has('surname')">{{ errors.first('surname') }}</span>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-sm-4 form-control-label">{{$lang.user_management_email}}</label>
                        <div class="col-sm-7">

                            <input v-model="userData.emailAddress" v-validate="'required|email'" :class="{'is-danger': errors.has('email') }" name="email" type="email" class="form-control" placeholder="Enter email address" @change="hideEmailExistMessage()">
                            <i v-show="errors.has('email')" class="fa fa-warning"></i>
                            <span class="help is-danger" v-show="errors.has('email')">{{ errors.first('email') }}</span>
                            <span class="help is-danger" v-if="emailExist == true">Email already exist</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" @click="updateUser()">
                        {{$lang.user_management_user_save}}
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
<script type="text/babel">
   import User from '../../api/users.js'
   export default {
   data() {
        return {
        'userId': 1,
        'name': '',
        }
    },
    mounted(){
    },

    props: ['userData', 'emailExist'],
    methods : {
        updateUser(){
        this.userId = this.userData.id
        let that = this;

        User.updateUser(this.userId,this.userData).then(
          (response)=> {
            if(response.data.status_code == 500) {
              this.$emit('showEmailExists');
              return;
            }
            toastr.success('User has been updated successfully.', 'Update User', {timeOut: 5000});
                $("#user_profile").modal("hide");
                // setTimeout(Plugin.reloadPage, 2000);
          },
          (error)=> {
          }
        )
           /*  axios.post("/api/user/update/"+this.userId,this.userData).then((response) => {
                toastr.success('User has been updated successfully.', 'Update User', {timeOut: 5000});
                $("#user_profile").modal("hide");
                 setTimeout(Plugin.reloadPage, 2000);
            }); */
        },

        createImage(file) {
        // here we validate the Image Dimensions
          var reader = new FileReader();
          var vm = this;
          reader.onload = (e) => {
            var image = new Image();
            vm.image = e.target.result;
          };

          reader.readAsDataURL(file);
        },

        hideEmailExistMessage() {
          this.$emit('hideEmailExists');
        },
   }
}
</script>
