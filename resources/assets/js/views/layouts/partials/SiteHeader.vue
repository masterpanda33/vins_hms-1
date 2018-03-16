<template>
<div>
    <header class="site-header">
        <div class="container">
            <a href="#" class="brand-main">
                <img src="/assets/img/logo-deskk.png" id="logo-desk" alt="NABH Logo" class="hidden-sm-down">
                <img src="/assets/img/logo-mobile.png" id="logo-mobile" alt="NABH Logo" class="hidden-md-up">
            </a>
            <a href="#" class="nav-toggle" >
                <div class="hamburger hamburger--htla">
                    <span>toggle menu</span>
                </div>
            </a>

        </div>
    </header>
</div>
</template>


<script type="text/babel">

    import Layout from '../../../helpers/layout'
    import Auth from '../../../services/auth'
    import User from '../../../views/admin/Userprofile.vue'
    import Ls from '../../../services/ls'
    import UserApi from '../../../api/users.js'

    export default {
    components: {
            User
        },
        data() {
            return {
                'id':0,
                'header' : 'header',
                'date': '',
                'curTime': '' ,
                'name': '',
                'image': '',
                'userData':[],
                'emailExist': false,
            }
        },

        mounted() {

        let email = Ls.get('email');
        // Here we call Function to get User Details
        let userData = {'email':email}

         },

    }
</script>
