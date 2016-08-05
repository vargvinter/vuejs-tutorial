<!DOCTYPE html>
<html>
<head>
    <title>Vue.js</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .Alert {
            background: #ddd;
            border: 1px solid black;
            padding: 1em;
            position: relative;
        }
        .Alert__close {
            position: absolute;
            right: 1em;
        }
        .Alert__success {
            background: green;
        }
        .Alert__error {
            background: red;
        }
    </style>
</head>
<body>

    <div class="container">
        <alert type="success">
            <strong>Success! Your account has been updated.</strong>
        </alert>
    </div>

    <template id="alert-template">
        <div :class="alertClasses" v-show="show">
            <slot></slot>
            <span class="Alert__close" @click="show = false">X</span>
        </div>
    </template>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.js"></script>
    <script src="js/12.js"></script>
</body>
</html>
