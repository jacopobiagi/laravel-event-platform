<script>
    import axios from 'axios';

    export default{
        name: 'AppEvent',
        data(){
            return{
                events:[],
            }
        },
        mounted(){
            axios.get('http://localhost:8000/api/v1/events')
                .then(res => {
                    this.events = res.data;
                    console.log(this.events);
                })
                .catch(err => console.log(err))
        },
    }
</script>
<template>
    <h1>Eventi</h1>
    <p v-for="event in events">{{ event.name }}</p>
</template>
<style>

</style>