<template>
<div id="all-member">
<header-component></header-component>

<div class="wrapper">
    <div class="container-fluid">

        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                       
                        <span>Member Lists</span>
                        
                          <button type="button" class="btn btn-dark float-right" data-toggle="modal" data-target="#exampleModalform">
                                  Add
                                </button>
                     </div>
                    <div class="card-body">
                        <div class="table-rep-plugin">
                            <p v-if="isLoading" class="text-center">
                               <img  align="middle" src="custom/assets/images/mess.gif" alt=""> 
                            </p>
                            <div v-else class="table-responsive mb-0" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table  table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="member in AllMembers">
                                            <th>{{member.name}}</th>
                                            <th>{{member.email}}</th>
                                            <th></th>
                                           
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                                <div class="modal fade" id="exampleModalform" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title align-self-center mt-0" id="exampleModalform1">New message</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                    <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="field-1" class="control-label">Name</label>
                                                            <input type="text" class="form-control" id="field-1" placeholder="John">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="field-2" class="control-label">Surname</label>
                                                            <input type="text" class="form-control" id="field-2" placeholder="Doe">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="field-3" class="control-label">Address</label>
                                                            <input type="text" class="form-control" id="field-3" placeholder="Address">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group no-margin">
                                                            <label for="field-7" class="control-label">Personal Info</label>
                                                            <textarea class="form-control" id="field-7" placeholder="Write something about yourself" style="margin-top: 0px; margin-bottom: 0px; height: 137px;"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                          
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Send message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</template>
<script>

    export default {

        data()
        {
            return{
                loginError: false,
            }
        },

        mounted(){
           this.$store.dispatch('allmembers');
          
        },
       
        computed:{
        AllMembers(){
           return this.$store.getters.allmembers
        },
       isLoading()

            {
            return this.$store.getters.isLoading
            }  
      }

        

    }


</script>