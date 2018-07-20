<script>
    export default {
        props: ['userId'],
        data() {
            return {
                blog: {
                    title: '',
                    body: '',
                    user_id: ''
                },
                edit: false
            }
        },
        methods: {
            addBlog() {

                let vm = this;

                vm.blog.user_id = vm.userId;

                let data = vm.blog;

                axios.post('/api/save', data).then(function(response) {

                    vm.$notify({
                        title: 'Success',
                        message: response.data,
                        type: 'success'
                    });

                });
            }
        }
    }


</script>

<template>

    <div>

        <div class="form-group row">
            <label>Blog Title</label>
            <input id="text" type="text" class="form-control" v-model="blog.title" required autofocus>

        </div>

        <div class="form-group row">
            <label>Blog post</label>
            <textarea class="form-control" v-model="blog.body" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary float-left" @click="addBlog">
                    Post Blog
                </button>

            </div>
        </div>
    </div>


</template>