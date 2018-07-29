<template>
    <div class="main col-xs-9 offset-xs-3 col-md-10 offset-md-2" id="main-part">
        <fieldset>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group field" id="product_name_field">
                        <label for="article_title">TITLE</label> <span class="required">*</span>
                        <input class="form-control" required="required" type="text" value="" v-model="article.title" id="article_title">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group field">
                        <label for="article_content">CONTENT</label>
                        <textarea size="16" class="form-control" type="text" value="" v-model="article.content" id="article_content"></textarea>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group field">
                        <label for="article_meta_title">META TITLE</label> <span class="required">*</span>
                        <input class="form-control" required="required" type="text" value="" v-model="article.meta_title" id="article_title">
                    </div>
                    <div class="form-group field">
                        <label for="article_meta_keyword">META KEYWORD</label> <span class="required">*</span>
                        <input class="form-control" required="required" type="text" value="" v-model="article.meta_keyword" id="article_meta_keyword">
                    </div>
                    <div class="form-group field">
                        <label for="article_meta_description">META DESCRIPTION</label> <span class="required">*</span>
                        <input class="form-control" required="required" type="text" value="" v-model="article.meta_description" id="article_meta_description">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group field" id="product_name_field">
                        <label for="article_is_available">IS AVAILABLE</label> <br/>
                        <input type="checkbox" class="checkbox" value="" v-model="article.is_available" id="article_is_available">
                    </div>
                    <div class="form-group field" id="product_name_field">
                        <label for="article_expiration_date">EXPIRATION DATE</label> <span class="required">*</span>
                        <input class="form-control" required="required" type="text" value="" v-model="article.expiration_date" id="article_title">
                    </div>
                </div>

            </div>
            <ButtonCus @save="add" @cancel="cancel"></ButtonCus>
        </fieldset>
    </div>
</template>
<style type="scss">
    .checkbox{
        height: 31px;
        width: 31px;
    }
</style>
<script>
    import {mapGetters, mapActions, mapState} from 'vuex';
    import ButtonCus from '../buttons/Button';

    export default {
        data() {
            return {
                article:{
                    title : null,
                    content : null,
                    meta_title : null,
                    meta_keyword : null,
                    meta_description : null,
                    is_available : 0,
                    expiration_date : null,
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
                console.log('vao roi ne')
                this.createArticle(this.article).then(result => {
                    console.log(result)
                }).catch(err => {
                    console.log(err)
                })
                //this.$store.dispatch('article/createArticle', this.article );
            },
            cancel() {
                console.log('cancel nef')
            }
        },
        computed: {
            ...mapState('article', ['listArticle']),
        },
        components: {
            ButtonCus
        }
}
</script>