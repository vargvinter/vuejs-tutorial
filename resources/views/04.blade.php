<!DOCTYPE html>
<html>
<head>
    <title>Vue.js</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <div id="app">
        <counter heading="Likes"></counter>
        <counter heading="Dislikes"></counter>
    </div>

    <template id="counter-template">
        <h1>@{{ heading }}</h1>
        <button @click="count += 1">Increment @{{ count }}</button>
    </template>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.js"></script>
    <script>
        Vue.component('counter', {
            template: '#counter-template',
            props: ['heading'],
            data: function() {
                return {
                    count: 0
                }
            }
        });

        new Vue({
            el: '#app'
        });
    </script>
</body>
</html>
