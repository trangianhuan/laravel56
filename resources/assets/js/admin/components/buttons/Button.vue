<template>
    <div class="form-actions" data-hook="buttons">
        <button name="button" type="submit" @click="save" class="btn btn-primary btn-success" data-disable-with="Saving...">
            <span class="icon icon-ok"></span> Create
        </button>
        <span class="or">or</span>
        <a icon="remove" class="btn btn-default" @click="cancel" href="javascript:void(0)">
            <span class="icon icon-remove"></span> Cancel
        </a>
    </div>
</template>
<script>
    export default {
        data() {
            return {
            }
        },
        methods: {
            save(){
                this.$emit('save')
            },
            cancel() {
                this.$emit('cancel')
            }
        },
}
</script>