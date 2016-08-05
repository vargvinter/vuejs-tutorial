Vue.component('alert', {
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
});

new Vue({
    el: 'body'
});