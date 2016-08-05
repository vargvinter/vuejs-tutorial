Vue.filter('jsonIt', function(value) {
    return JSON.stringify(value);
});

Vue.filter('role', function(value, role) {
    return value.filter(function(item) {
        return item.role == role;
    });
}); // people | role 'admin'

new Vue({
    el: 'body',
    data: {
        message: 'Message',
        people: [
            { name: 'Joe', role: 'admin' },
            { name: 'Tom', role: 'user' },
            { name: 'Frank', role: 'admin' },
            { name: 'Steve', role: 'admin' }
        ]
    }
});