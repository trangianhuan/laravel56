<template>
    <div class="main col-xs-9 offset-xs-3 col-md-10 offset-md-2" id="main-part">
        <div class="col-md-6 col-md-offset-3">
          <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Login as Existing Customer</h3>
            </div>
              <div id="existing-customer" class="panel-body" data-hook="login">
                  <form class="new_spree_user" id="new_spree_user" action="/login" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="r2j4YwaZs14VF6vexnYQsqoNuLW4Z3RZyV+cCbPqUfsP1lSvHJOe2YQRlbgo7DcYUmBR7LvlV3D4qfXA9pFe3Q==">
          <div id="password-credentials">
            <p>
              <label for="spree_user_email">Email</label>
              <input class="form-control" tabindex="1" autofocus="autofocus" type="email" name="spree_user[email]" id="spree_user_email">
            </p>
            <p>
              <label for="spree_user_password">Password</label>
              <input class="form-control" tabindex="2" type="password" name="spree_user[password]" id="spree_user_password">
            </p>
          </div>
          <p>
            <input name="spree_user[remember_me]" type="hidden" value="0"><input tabindex="3" type="checkbox" value="1" name="spree_user[remember_me]" id="spree_user_remember_me">
            <label for="spree_user_remember_me">Remember me</label>
          </p>

          <p><input type="submit" name="commit" value="Login" class="btn btn-lg btn-success btn-block" tabindex="4" data-disable-with="Login"></p>
        </form>
                  <div class="text-center">
                    or
                        <a href="/signup">Create a new account</a> |
                        <a href="/password/recover">Forgot Password?</a>
                  </div>
                  <div data-hook="login_extras"></div>
              </div>
          </div>
        </div>
    </div>
</template>
<script>
    import {mapGetters, mapActions, mapState} from 'vuex';
    export default {
        data() {
            return {
                article:{
                    title : null,
                    content : null,
                }
            }
        },
        methods: {

        },
        computed: {

        },
}
</script>
