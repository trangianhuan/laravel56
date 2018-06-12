<template lang="html">
    <div class="row">
        <Sidebar/>
        <router-view></router-view>
    </div>
</template>
<style lang="scss">
    .btn-default{
        color: #333;
        /*background-color: #d4d4d4;*/
        border-color: #8c8c8c;
    }
    .btn:hover, .btn:focus, .btn.focus {
        color: #333;
        text-decoration: none;
    }
</style>
<script>
    import Header from './Header';
    import Sidebar from './Sidebar';

    export default {
      name: 'app',
      components: { Header, Sidebar },
      data () {
        return {
        }
      }
    }
</script>