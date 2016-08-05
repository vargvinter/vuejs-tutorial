<!DOCTYPE html>
<html>
<head>
    <title>Vue.js</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <h1>Skill @{{ skill }}</h1>
    <input type="text" v-model="points">

    <div>
        <h1>@{{ fullName }}</h1>

        <input type="text" v-model="first">
        <input type="text" v-model="last">
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.js"></script>
    <script>
        new Vue({
            el: 'body',
            data: {
                points: 100,
                first: 'John',
                last: 'Doe'
            },
            computed: {
                skill: function() {
                    if (this.points <= 100)
                        return 'Beginner';
                    return 'Advanced';
                },
                fullName: function() {
                    return this.first + ' ' + this.last;
                }
            }
        });
    </script>
</body>
</html>
