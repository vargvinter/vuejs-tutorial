<!DOCTYPE html>
<html>
<head>
    <title>Vue.js</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <div id="app">
        <div>
            <form action="">
                <span class="error" v-show="!message">
                    You must enter a message
                </span>
                <div>
                    <textarea v-model="message">

                    </textarea>
                </div>
                <div>
                    <button type="submit" v-show="message">
                        Send a message
                    </button>
                </div>
            </form>
        </div>

        <pre>
            @{{ $data | json }}
        </pre>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
    <script>
        new Vue({
            el: '#app',
            data: {
                message: ''
            }
        });
    </script>
</body>
</html>
