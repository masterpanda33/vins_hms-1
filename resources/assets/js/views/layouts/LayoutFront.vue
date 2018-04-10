<template>
  <body class="skin-default fixed-header">
    <div class="template-container">
        <header class="header">

              <nav class="navbar navbar-expand-lg navbar-light">

                <router-link to="/" class="brand-main">

                      <img src="/assets/img/nabh_vins_logo.png" id="logo-desk" alt="NABH Logo" class="hidden-sm-down">
                      <img src="/assets/img/nabh_vins_logo.png" id="logo-mobile" alt="NABH Logo" class="hidden-md-up">

                      <H1 class="text-white bg-dark text-center mt-50">  PATIENT MANAGEMENT DASHBOARD</H1>
                      
                        <div href="#" class="logout-text text-right" @click.prevent="logout"><i class="fa fa-sign-out"></i>Logout</div>
                      
                  </router-link>

                  <!-- Sidebar toggle button -->
              </nav>


                <ul class="action-list">
                  <li>
                   <!-- <router-link to="/login">Login</router-link> -->
                    </li>
                </ul>

        </header>
    </div>
        <div class="dashboard">

            <transition name="fade" mode="out-in">
                <router-view></router-view>
            </transition>
        </div>
        <site-footer></site-footer>
    </div>
  </body>
</template>

<script type="text/babel">

import SiteFooter from './partials/SiteFooter.vue';
import Auth from '../../services/auth';
export default {
        components : {
             SiteFooter
        },
        mounted() {
          this.$store.dispatch('SetIpdId',0);
        },
        methods:{
          logout(){
            Auth.logout().then(() => {
                this.$router.replace('/login')
            })
          },
        }
  }
</script>
