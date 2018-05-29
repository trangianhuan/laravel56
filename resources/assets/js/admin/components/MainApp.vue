<template lang="html">
    <div id="main">
        <Header />
        <Sidebar />

    </div>
</template>

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