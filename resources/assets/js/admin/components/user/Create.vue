<template>
    <div class="main col-9 offset-xs-3 col-md-10 offset-md-2">
        <fieldset>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group field">
                        <label for="user_name">NAME</label> <span class="required">*</span>
                        <input class="form-control title" required="required" type="text" v-model="user.name" id="user_name">
                    </div>
                    <div class="form-group field ">
                        <label for="user_email">EMAIL</label>
                        <input class="form-control title" required="required" type="text" v-model="user.email" id="user_email">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group field ">
                        <label for="user_email">PASSWORD</label>
                        <input class="form-control title" required="required" type="password" v-model="user.password" id="user_email">
                    </div>
                    <div class="form-group field ">
                        <label for="user_email">PASSWORD CONFIRMATION</label>
                        <input class="form-control title" required="required" type="password" v-model="user.confirmPass" id="user_email">
                    </div>
                </div>
            </div>

            <div class="form-actions">
                <button name="button" type="submit" @click="add" class="btn btn-primary btn-success" data-disable-with="Saving...">
                    <span class="icon icon-ok"></span> Create
                </button>
                <span class="or">or</span>
                <a icon="remove" class="btn btn-default" href="https://testspree1234.herokuapp.com/admin/products">
                    <span class="icon icon-remove"></span> Cancel
                </a>
            </div>

        </fieldset>
    </div>
</template>
<script>
    import {mapGetters, mapActions, mapState} from 'vuex';
    export default {
        data() {
            return {
                user:{
                    name:null,
                    email:null,
                    password:null,
                    confirmPass:null
                }
            }
        },
        methods: {
            ...mapActions('article', [
                'getArticleList',
                'createArticle',
                'updateArticle',
                'deleteArticle'
            ]),
            add(){
                //this.createArticle(this.article);
                //this.$store.dispatch('article/createArticle');
            }
        },
        computed: {
            ...mapState('article', ['listArticle']),
        },
}
</script>