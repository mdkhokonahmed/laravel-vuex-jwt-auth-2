<template>
   
    <div class="row">
            <div class="offset-lg-4 col-lg-4 offset-lg-4 pr-0">
                  
                <div class="card mb-0 shadow-none">
                    <div class="card-body">
                        <h3 class="text-center m-0">
                            <a href="index.html" class="logo logo-admin"><img src="custom/assets/images/logo-sm.png" height="60" alt="logo" class="my-3"></a>
                        </h3>
                        <div  class="px-3">
                            <h4 class="text-muted font-18 mb-2 text-center">Welcome Back !</h4>
                            <p class="text-muted text-center">Sign in to continue to Amezia.</p>
                            <div v-if="isLoading" class="text-center">
                               <img  align="middle" src="custom/assets/images/mess.gif" alt=""> 
                            </div>
                            
                        <form  v-else class="form-horizontal my-4" @submit.prevent="submitLogin" @keydown="form.onKeydown($event)">
    
                                <div class="form-group">
                                    <label for="username">Email</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
                                        </div>
                                        <input type="email" class="form-control" id="username"  name="email" :class="{ 'is-invalid': form.errors.has('email') }" v-model="form.email" placeholder="Enter Email">
                                        <has-error :form="form" field="email"></has-error>
                                    </div>                                    
                                </div>
    
                                <div class="form-group">
                                    <label for="userpassword">Password</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input type="password" class="form-control" id="userpassword" name="password" :class="{ 'is-invalid': form.errors.has('password') }" v-model="form.password" placeholder="Enter Password">
                                        <has-error :form="form" field="password"></has-error>
                                    </div>                                
                                </div>
    
                                <div class="form-group row mt-4">
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                            <label class="custom-control-label" for="customControlInline">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a href="pages-recoverpw-2.html" class="text-muted font-13"><i class="mdi mdi-lock"></i> Forgot your password?</a>                                    
                                    </div>
                                </div>
    
                                <div class="form-group mb-0 row">
                                    <div class="col-12 mt-2">
                                        <button :disabled="form.busy" class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                                    </div>
                                </div>                            
                            </form>
                        </div>

                        <div class="m-3 text-center bg-light p-3 text-primary">
                            <h4 class="">Don't have an account ? </h4>
                            <p class="font-13">Join <span>Amezia</span> Now</p>
                            <a href="#" class="btn btn-primary waves-effect waves-light">Free Resister</a>                
                        </div>
                       
                    </div>
                </div>
            </div>
         
        </div>
</template>

<script>
    import store from '../../store';
    import { mapGetters } from 'vuex';
    export default {
        data() {
            return {
             
            form: new Form({ email: '',password: '',}),
            loginError: false,
            

            }
        },
        computed: {
            // ...mapGetters([
            //     'isLoading',
            //     ]),
            isLoading()

            {
                return this.$store.getters.isLoading
            }        
        },
        methods: {
            submitLogin() {
                this.loginError = false;
                this.$store.commit('toggleLoading');
                this.form.post('/api/auth/login').then(response => {
                    this.$store.commit('toggleLoading');
                    if (response.data) {
                     this.$awn.success(response.data.message, {durations: {success: 2000}})

                    }
                    store.commit('loginUser')
                    localStorage.setItem('token', response.data.access_token)
                    localStorage.setItem('user', JSON.stringify(response.data.user))
                    this.$router.push({ name: 'dashboard' })
                }).catch(error => {
                    this.$store.commit('toggleLoading');
                    this.loginError = true
                    if (error.response.data.error) {
                       this.$awn.warning(error.response.data.error, {durations: {success: 2000}})
                    }
                   
                    
                });
            }
        }
    }
</script>