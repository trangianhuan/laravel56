<template>
     <div class="main col-xs-9 offset-xs-3 col-md-10 offset-md-2">
        <fieldset>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group field">
                        <label for="feed_content">WEB SUBSCRIBE</label>
                        <br><button class="btn btn-success mb-2" @click="f5"><i class="fa fa-refresh" aria-hidden="true"></i> F5</button>
                        <textarea size="16" class="form-control" readonly="true" v-model="log" rows="20" id="feed_log"></textarea>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</template>

<style type="text/scss">

</style>

<script>
    export default {
        data () {
            return {
                log : null,
            }
        },
        methods : {
            f5(){
                axios.get('/api/log').then(res => {
                    this.log = res.data
                }).catch(err => {
                    console.log(err);
                })
            }
        },
        mounted(){
            this.f5();
        }
    }
</script>