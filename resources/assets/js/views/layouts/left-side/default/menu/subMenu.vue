<template>
    <div class="submenu collapse-item" :class="{ 'active': isActived }">
        <div class="submenu-header" role="tab" :aria-expanded="selected ? 'true' : 'fase'" @click="toggle">
            <i class="leftmenu_icon" :class="icon"></i>
            <span class="submenu-header-title">{{ title }}</span>
            <span class="submenu_icon float-right">
                <i class="ti-angle-right"></i>
            </span>
        </div>
        <transition name="collapsed-fade" :css="false" @before-appear="before" @appear="enter" @appear-cancel="cancel" @before-enter="before"
            @enter="enter" @enter-cancel="cancel" @leave="leave" @leave-cancel="cancel">
            <div class="submenu-content" v-show="isActived">
                <div class="submenu-content-box" ref="box">
                    <slot></slot>
                </div>
            </div>
        </transition>
    </div>
</template>
<script>
    import anime from 'animejs'
    export default {
        props: {
            selected: Boolean,
            icon: String,
            title: {
                type: String,
                required: true
            }
        },
        data() {
            return {
                isActived: this.selected
            }
        },
        computed: {
            index() {
                return this.$parent.$collapseItems.indexOf(this)
            }
        },
        created() {
            this._isCollapseItem = true
        },
        mounted() {
            function activate(self) {
                if (self.$refs.box) {
                    self.isActived = self.$refs.box.querySelectorAll("a.active").length >= 1 ? true : false;
                }
            }
            //change when route changes
            this.$store.subscribe((mutation, state) => {
                if (mutation.type == "routeChange" && mutation.payload == "end") {
                    setTimeout(() => {
                        activate(this);
                    }, 0);
                }
            });
            activate(this);
        },
        methods: {
            toggle() {
                this.$parent.$emit('closeall', this.index)
                this.isActived = !this.isActived
            },
            cancel() {
                this.anime.pause()
            },
            before(targets) {
                targets.removeAttribute('style')
            },
            enter(targets, done) {
                const height = targets.scrollHeight
                targets.style.height = 0
                targets.style.opacity = 0
                anime({
                    targets: targets,
                    duration: 377,
                    easing: 'easeOutExpo',
                    opacity: [0, 1],
                    height: height,
                    complete() {
                        targets.removeAttribute('style')
                        done()
                    }
                });
            },
            leave(targets, complete) {
                anime({
                    targets: targets,
                    duration: 377,
                    easing: 'easeOutExpo',
                    opacity: [1, 0],
                    height: 0
                });
            }
        }
    }
</script>
<style lang="scss" scoped>
    .collapse-item {
        .submenu-header {
            cursor: pointer;
            color: #666;
            padding: 11px 21px 11px 19px;
            .submenu-header-title {
                vertical-align: text-bottom;
            }
            .active {
                .submenu-header-title {
                    font-weight: 600;
                }
            }
        }
        .submenu-content {
            /*background-color: #F8F7F6;*/
            overflow-y: hidden;
            position: relative;
        }


        .submenu_icon {
            transition: all 0.3s;
            font-size: 10px;
            margin-top: 5px;
            /*color:#3e6174;*/
        }

        &.active {
            >.submenu-header {
                /*background-color:#e6e6e6;*/
                /*color: #3e6174;*/
                font-weight: 500;
                >.submenu_icon {
                    transform: rotate(90deg);
                }
                i {
                    /*color: #3e6174 !important;*/
                }
            }
        }
    }

    .leftmenu_icon {
        margin-right: 6px;
        line-height: 20px;
        height: 22px;
        width: 20px;
        text-align: center;
        font-size: 16px;
        /*color:#e6e6e6;*/
    }
</style>
