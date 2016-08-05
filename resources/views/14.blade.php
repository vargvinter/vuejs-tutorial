<!DOCTYPE html>
<html>
<head>
    <title>Vue.js</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

    <h1>@{{ 'hello world' | uppercase }}</h1>
    <h1>@{{ 5 | currency }}</h1>


    <ul>
        <li v-for="person in people | orderBy 'name' -1">
            @{{ person.name }}
        </li>
    </ul>

    <ul>
        <li v-for="person in people | orderBy 'name' | limitBy 2">
            @{{ person.name }}
        </li>
    </ul>

    <ul>
        <li v-for="person in people | role 'admin'">
            @{{ person.name }}
        </li>
    </ul>

    <pre>
        @{{ $data | json }}
    </pre>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.js"></script>
    <script src="js/14.js"></script>
</body>
</html>
