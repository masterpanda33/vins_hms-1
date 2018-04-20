 <template>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-aside sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar -->
        <section class="sidebar">
            <div id="menu" role="navigation">
                <div class="nav_profile">
                    <!-- <profile></profile> -->
                </div>
                <vmenu>
                    <vmenu-item link="/" icon="ti-desktop">
                        &nbsp; Dashboard
                    </vmenu-item>
                    <vmenu-item link="/NewUser" icon="ti-layout">
                        &nbsp; New User
                    </vmenu-item>
                    <vmenu-item link="/patients_detail_form" icon="ti-layout">
                        &nbsp; Patients Detail Form
                    </vmenu-item>

                </vmenu>
                <!-- / .navigation -->
            </div>
            <!-- menu -->
        </section>
        <!-- /.sidebar -->
    </aside>
</template>
<script>
import {
    vmenu,
    vmenuItem,
    vsubMenu
} from './menu';
// import profile from "../left-profile/user_profile.vue"
export default {
    name: "left-side",
    components: {
        vmenu,
        vsubMenu,
        vmenuItem,
        // profile
    },
    data() {
        return {
        }
    }
}
</script>




<!--
<vsub-menu title="Forms" icon="ti-check-box">
    <vmenu>
    <vsub-menu title="Features" icon="ti-receipt">
        <vmenu-item link="/form-elements" icon="ti-cup">
            Form Elements
        </vmenu-item>
        <vmenu-item link="/realtime_form" icon="ti-write">
            Realtime Form
        </vmenu-item>
        <vmenu-item link="/form-validations" icon="ti-alert">
            Form Validations
        </vmenu-item>
        <vmenu-item link="/form_layouts" icon="ti-layout-width-default">
            Form Layouts
        </vmenu-item>
        <vmenu-item link="/complex_forms" icon="ti-layout-cta-left">
            Complex Forms
        </vmenu-item>
        <vmenu-item link="/radio_check" icon="ti-check-box">
            Radio and Checkbox
        </vmenu-item>
    </vsub-menu>
    <vsub-menu title="Components" icon="ti-clipboard">
        <vmenu-item link="/form_editors" icon="ti-pencil">
            Form Editors
        </vmenu-item>
        <vmenu-item link="/form_wizards" icon="ti-settings">
            Form Wizards
        </vmenu-item>
        <vmenu-item link="/dropdowns" icon="ti-widget-alt">
            Drop Downs
        </vmenu-item>
        <vmenu-item link="/vue_multiselect" icon="ti-widget-alt">
            Vue Multiselect
        </vmenu-item>
        <vmenu-item link="/vue_slider" icon="ti-bell">
            Vue Slider
        </vmenu-item>
        <vmenu-item link="/date_pickers" icon="ti-calendar">
            Date pickers
        </vmenu-item>
        <vmenu-item link="/advanced_date_pickers" icon="ti-notepad">
            Advanced Date pickers
        </vmenu-item>
    </vsub-menu>
</vmenu>
</vsub-menu> -->
