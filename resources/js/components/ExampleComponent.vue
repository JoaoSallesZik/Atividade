<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <pre>
                            
                            {{ info }}
                            
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                info: null
            }
        },
        mounted() {
            console.log('componente montado')
            axios
                .get('https://api.github.com/users/sergiopeluzzi')
                .then(response => (this.info = response))
        }
    }
</script>
