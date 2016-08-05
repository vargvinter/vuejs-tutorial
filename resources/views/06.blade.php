<!DOCTYPE html>
<html>
<head>
    <title>Vue.js</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <div id="app">

        <pre>
            @{{ $data | json }}
        </pre>

        <div v-for="plan in plans">
            {{--Używamy :plan jeśli chcemy podpiąć cały obiekt--}}
            {{--.sync synchronizuje wartość zmiennej globalnej 'active' i wartość właściwości 'active' komponentu <plan>--}}
            <plan :plan="plan" :active.sync="active"></plan>
        </div>

    </div>

    <template id="plan-template">
        <div>
            <span class="plan-name">@{{ plan.name }}</span>
            <span class="plan-price">@{{ plan.price }}/month</span>
            <button @click="setActivePlan" v-show="plan.name !== active.name">
                @{{ isUpgrade ? 'Upgrade' : 'Downgrade' }}
            </button>
            <span v-else>
                Selected
            </span>
        </div>
    </template>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.js"></script>
    <script>

        new Vue({
            el: 'body',
            data: {
                plans: [
                    { name: 'Enterprise', price: 100 },
                    { name: 'Pro', price: 50 },
                    { name: 'Personal', price: 10 },
                    { name: 'Free', price: 0 }
                ],
                active: {}
            },
            components: {
                plan: {
                    template: '#plan-template',
                    props: ['plan', 'active'],
                    computed: {
                        isUpgrade: function() {
                            return this.plan.price > this.active.price;
                        }
                    },
                    methods: {
                        setActivePlan: function() {
                            this.active = this.plan;
                        }
                    }
                }
            }
        });

    </script>
</body>
</html>
