<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Dashboard</h1>

                <p>
                    <router-link :to="{ name: 'logout' }">Logout</router-link>
                </p>

                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                        <p>All User: {{Allusers}}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
 import {mapGetters} from 'vuex'
    export default {
        data() {
            return {
                data: 'nothing'
            }
        },
        mounted() {
             //this.$store.dispatch('allusers');
            axios.get('/api/dashboard', {
                headers: {
                    Authorization: 'khokonahmed ' + localStorage.getItem('token')
                }
            })
            .then(response => {
                this.data = response.data.data

            }).catch(error => {
            })
        },
         computed:{
        Allusers(){
           return this.$store.getters.allusers
        },
    }

    }
</script>