<template>
    <div class="card text-gray" style="width: 100%;">
      <div class="card-header" :class="cpdate()" @click="header">
        <span class="date">{{item.publish_date}}</span> <br/>
        {{item.title}}
      </div>
      <div class="card-body" v-show="isShow">
        <a :href="item.url" target="blank">link</a>
        <p class="card-text" v-html="item.content"></p>
      </div>
    </div>
</template>
<style lang="scss" scoped>
    .card-header{
        user-select: none;
        padding: 2px 10px;
        &:hover{
            cursor: pointer;
        }
    }
    .date{
        font-size: 0.8em;
    }
</style>

<script>
    import moment from 'moment';

    export default{
        props:{
            item:{}
        },
        data(){
            return {
                isShow:false,
                date: '',
            }
        },
        methods:{
            header(){
                console.log('header click');
                this.isShow = !this.isShow;
            },
            cpdate(){
                return this.item.publish_date >= this.date ? 'bg-info' : 'bg-light'
            }
        },
        mounted(){
            this.date = moment().subtract(5, "days").format("YYYY-MM-DD");
        }
    }
</script>