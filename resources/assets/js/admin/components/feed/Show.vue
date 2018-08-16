<template>
    <div class="main col-xs-9 offset-xs-3 col-md-10 offset-md-2">
        <fieldset>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group field">
                        <label for="feed_content">WEB SUBSCRIBE</label>
                        <textarea size="16" class="form-control" v-model="feed.content" rows="8" id="feed_content"></textarea>
                    </div>
                </div>
            </div>
            <ButtonCus @save="add" @cancel="cancel"></ButtonCus>
        </fieldset>
    </div>
</template>

<style type="scss">

</style>

<script>
    import ButtonCus from '../buttons/Button';

    export default {
        data() {
            return {
                feed:{
                    id : null,
                    type : 'FEED',
                    content : null,
                }
            }
        },
        methods: {
                add(){
                    axios.post('/api/feed', this.feed).then(res => {
                    //this.feed.content = res.data;
                    console.log('add success',res.data);
                }).catch(err => {
                    console.log(err);
                })
            },
            cancel(){
                console.log('cancel click');
            }
        },
        components: {
            ButtonCus
        },
        mounted(){
            axios.get('/api/feed').then(res => {
                console.log({...res.data});
                this.feed = {...res.data};
            }).catch(err => {
                console.log(err);
            })
        }
}
</script>