<template>
    <div class="card text-gray" :class="cpdate() ? 'bg-info' : 'bg-light' " style="width: 100%;">
      <div class="card-header" @click="header">
        <span class="date">{{item.publish_date}}</span> <br/>
        {{item.title}}
      </div>
      <div class="card-body" v-show="isShow">
        <a :href="item.url" target="blank">link</a>
        <p class="card-text">{{item.content}}</p>
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
    export default{
        props:{
            item:{}
        },
        data(){
            return {
                isShow:false,
            }
        },
        methods:{
            header(){
                console.log('header click');
                this.isShow = !this.isShow;
            },
            cpdate(){
                return this.item.publish_date == '2018-07-30 03:15:15'
            }
        }
    }
</script>