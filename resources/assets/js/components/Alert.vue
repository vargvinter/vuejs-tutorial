<template>
    <div :class="alertClasses" v-show="show">
        <slot></slot>
        <span class="Alert__close" @click="show = false">X</span>
    </div>
</template>

<script>
    export default {
        template: '#alert-template',
        props: ['type'],
        data: function() {
            return {
                show: true
            }
        },
        computed: {
            alertClasses: function() {
                var type = this.type;
                return {
                    'Alert': true,
                    'Alert__success': type == 'success',
                    'Alert__error': type == 'error'
                }
            }
        }
    };
</script>