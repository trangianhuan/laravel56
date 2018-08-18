<template>
    <div class="feed">
        <FeedItem v-for="item in ListItem" v-bind:key="item.id" :item="item"></FeedItem>
    </div>
</template>

<style lang="scss" scoped>
    .feed{
        height: 400px;
        overflow: auto;
    }
</style>

<script>
    import FeedItem from './FeedItem';
    export default{
        props:{
            ListItem:{
                type: Array
            }
        },
        data(){
            return {
            }
        },
        components:{
            FeedItem
        },
        methods:{
        }
    }
</script>