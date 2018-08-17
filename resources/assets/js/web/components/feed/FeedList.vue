<template>
    <div class="feed p-2 col-md-4 col-12 mb-2">
        <FeedItem v-for="item in ListItem" v-bind:key="item.id" :item="item"></FeedItem>
    </div>
</template>

<style lang="scss" scoped>
    .feed{
        height: 300px;
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