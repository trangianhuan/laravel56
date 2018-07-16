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
                        <label for="user_password">PASSWORD</label>
                        <input class="form-control title" required="required" type="password" v-model="user.password" id="user_password">
                    </div>
                    <div class="form-group field ">
                        <label for="user_confirm">PASSWORD CONFIRMATION</label>
                        <input class="form-control title" required="required" type="password" v-model="user.confirmPass" id="user_confirm">
                    </div>
                </div>
            </div>

            <ButtonCus @save="add" @cancel="cancel"></ButtonCus>

        </fieldset>
    </div>
</template>
<script>
    import {mapGetters, mapActions, mapState} from 'vuex';
    import ButtonCus from '../buttons/Button';

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
            ...mapActions('user', [
                'getUserList',
                'createUser',
                'updateUser',
                'deleteUser'
            ]),
            add(){
                console.log('user create')
                this.createUser(this.user).then(res => {
                    console.log(res);
                }).catch(err => {
                    console.log(err);
                });
            },
            cancel(){
                console.log('cancel user')
            }
        },
        computed: {
            ...mapState('user', ['listUser']),
        },
        components: {
            ButtonCus
        }
}
</script>