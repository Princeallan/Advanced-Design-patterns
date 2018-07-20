<script>
    export default {
        props: ['userData'],
        data() {
            return {
                blogs: [],
            }
        },

        // created() {
        //     let self = this;
        //     self.user;
        // },

        method: {
            getBlogs: function() {
                axios.get('/api/blogs').then( ({data}) => {
                    this.blogs = data ;
                  }, () => {
                 });
            }
        },

        mounted(){
            this.getBlogs();
        },

        computed: {
            usersData() {
                let self = this;
                return self.usersData();
            }
        }
    }
</script>

<template>
    <div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" v-for="blog in blogs">
                <div class="card card-default">
                    <div class="card-header">{{blog.title}} </div>

                    <div class="card-body">
                       {{ userData.name }}
                        {{blog.body}}
                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>
</template>


