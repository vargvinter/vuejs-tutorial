Vue.component('tasks', {
    template: '#tasks-template',
    props: ['list']
});

new Vue({
    el: 'body'
});