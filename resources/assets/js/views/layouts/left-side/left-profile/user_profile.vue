<template>
<div class="nav_profile">
    <div class="media profile-left">
        <a class="float-left profile-thumb" href="javascript:void(0)">
            <img :src="this.$store.state.user.picture" class="rounded-circle" alt="User Image">
        </a>
        <div class="content-profile">
            <h4 class="media-heading user_name_max" v-text="this.$store.state.user.name"></h4>
            <ul class="icon-list">
                <li>
                    <router-link to="/users_list" title="user" exact>
                        <i class="ti-user"></i>
                    </router-link>
                </li>
                <li>
                    <router-link to="/lockscreen" title="lock" exact>
                        <i class="ti-lock"></i>
                    </router-link>
                </li>
                <li>
                    <router-link to="/edit_user" title="settings" exact>
                        <i class="ti-settings"></i>
                    </router-link>
                </li>
                <li>
                    <router-link to="/login" title="Logout" exact>
                        <i class="ti-shift-right"></i>
                    </router-link>
                </li>
            </ul>
        </div>
    </div>
</div>
</template>
<style scoped lang="scss">
/* left side profile css */

.profile-left {
    padding: 15px;
    min-height: 90px;
    border-bottom: 1px solid #EEE;
}

.profile-left .profile-thumb {
    border-radius: 50px;
    display: inline-block;
    padding-top: 9px;
}

.profile-left .media-heading {
    line-height: 23px;
    margin-top: 12px;
    font-weight: 500;
    font-size: 16px;
    color: #2E576B;
}

.profile-left .profile-thumb img {
    width: 54px;
}
.content-profile{
    padding-left:15px;
    .icon-list {
        padding-left:0;
    }
}
.content-profile .icon-list li {
    display: inline-block;
    padding: 0;
    vertical-align: top;
}

.content-profile .icon-list:before {
    content: '';
}

.content-profile .icon-list li i {
    font-size: 13px;
    color: #555;
    padding-top: 5px;
}

.content-profile .icon-list li a {
    display: block;
    width: 30px;
    height: 25px;
    text-align: center;
    line-height: 23px;
    transition: all 300ms ease-in-out;
}

.content-profile .icon-list li a {
    border: 1px solid #DDD;
}

.icon-list li a {
    position: relative;
}
</style>
