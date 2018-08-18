<template>
    <div class="feed">
        <div class="col-md-6 col-12 mb-2" v-for="(items,key) of ListItem" :key="key">
            <h2>{{items[0]['site']}}</h2>
            <FeedList :ListItem="items"/>
        </div>
    </div>
</template>

<style lang="scss" scoped>
    .feed{
        display: flex;
        flex-wrap: wrap;
    }
</style>

<script>
    import FeedList from './FeedList';

    export default{
        data(){
            return {
                isShow:false,
                ListItem : [],
            }
        },
        components:{
            FeedList
        },
        methods:{
            getFeed(){
                axios.get('/api/web/feed').then(rs =>{
                    console.log(rs.data);
                    this.ListItem = rs.data;
                }).catch(err => {
                    console.log(err);
                })
            },
        },
        mounted(){
            this.getFeed();
        }
    }
</script>