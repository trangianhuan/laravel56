<template lang="html">
    <div id="main">
        <Header />
        <div id="wrapper" class="container-fluid">
            <router-view></router-view>
        </div>
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

    export default {
      name: 'app',
      components: { Header },
      data () {
        return {
        }
      }
    }
</script>