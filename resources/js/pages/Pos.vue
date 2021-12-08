<template>
    <div>
        <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Dashboard 1</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Pos</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="row">
                   <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">General Form</h4>
                                <h6 class="card-subtitle"> All with bootstrap element classies </h6>
                                <form class="mt-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-check mr-sm-2 mb-3">
                                        <input type="checkbox" class="form-check-input" id="checkbox0" value="check">
                                        <label class="form-check-label" for="checkbox0">Check Me Out !</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary text-white">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</template>

<script>
export default {
    name: 'Myapp2Pos',

    data() {
        return {
            
        };
    },

    mounted() {
        
    },

    methods: {
        
    },
};
</script>

<style lang="scss" scoped>

</style>