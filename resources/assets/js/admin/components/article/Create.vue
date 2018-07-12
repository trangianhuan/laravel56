<template>
    <div class="main col-xs-9 offset-xs-3 col-md-10 offset-md-2" id="main-part">
        <fieldset data-hook="new_product">
            <div class="form-group field" id="product_name_field">
                <label for="product_name">Name</label> <span class="required">*</span>
                <input class="form-control title" required="required" type="text" value="" v-model="article.title" id="article_title">

            </div>
            <div data-hook="new_product_attrs" class="row">
                <div data-hook="new_product_sku" class="col-xs-12 col-md-4">
                    <div class="form-group field" id="product_sku_field">
                        <label for="product_sku">Content</label>
                        <textarea size="16" class="form-control" type="text" value="" v-model="article.content" id="article_content"></textarea>
                    </div>
                </div>
            </div>

            <div class="form-actions" data-hook="buttons">
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
                article:{
                    title : null,
                    content : null,
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
                this.createArticle(this.article).then(result => {
                    console.log(result)
                }).catch(err => {
                    console.log(err)
                })
                //this.$store.dispatch('article/createArticle', this.article );
            }
        },
        computed: {
            ...mapState('article', ['listArticle']),
        },
}
</script>