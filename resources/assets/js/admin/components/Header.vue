<template>
    <header class="header logged-in">

  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="row">
        <div class="navbar-header col-xs-3 col-md-2">
          <a class="logo navbar-brand" href="/admin"><img id="logo" src="/assets/admin/logo-80200db37ace2294842fdb8cadf550b3681426b5551d89ad8fc4c0a53249d729.png"></a>
            <span class="navbar-toggle" id="sidebar-toggle">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </span>
        </div>
        <div class="col-xs-9 col-md-10">
          <div class="navbar-right">
              <ul class="nav navbar-nav">
    <li class="dropdown user user-menu">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="glyphicon glyphicon-user"></i>
        <span>spree@example.com <i class="caret"></i></span>
      </a>
      <ul class="dropdown-menu">
          <li>
            <a target="blank" href="/">
              <i class="glyphicon glyphicon-new-window"></i>
              &nbsp;
              Back to Store
</a>          </li>
        <li>
          <a href="/admin/users/1/edit">
            <i class="glyphicon glyphicon-user"></i>
            &nbsp;
            Account
</a>        </li>
          <li>
            <a href="/admin/logout">
              <i class="glyphicon glyphicon-log-out"></i>
              &nbsp;
              Logout
</a>          </li>
        <hr>
        <li>
          <a target="blank" href="http://guides.spreecommerce.org">
            <i class="glyphicon glyphicon-info-sign"></i>
            &nbsp;
            Help Center
</a>        </li>
        <li>
          <a target="blank" href="http://slack.spreecommerce.org">
            <i class="glyphicon glyphicon-comment"></i>
            &nbsp;
            Join Slack
</a>        </li>
        <li>
          <a target="blank" href="https://github.com/spree-contrib">
            <i class="glyphicon glyphicon-download"></i>
            &nbsp;
            Extensions Directory
</a>        </li>
      </ul>
    </li>
  </ul>

          </div>
        </div>
      </div>
    </div>
  </nav>

</header>
</template>

<script>
  export default {
    created() {
    },
    data: () => {
        return {

        }
    },
    computed: {
    },
    watch: {
    },

    methods: {
    },
    components: {
    },
    mounted() {
    }
  }
</script>