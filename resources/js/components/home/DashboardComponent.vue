<template>
    <div id="home-content">
         <header-component></header-component>
          <div class="wrapper">

            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-right">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Amezia</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Dashboard 2</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Dashboard 2</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-sm-6 col-xl-3">
                        <div class="card card-content">
                            <div class="card-body row justify-content-center">
                                <div class="col-5 align-self-center">
                                    <h4 class="mt-0 mb-2 font-20">1530</h4>  
                                    <p class="mb-2 text-muted font-13 text-nowrap">Unique Visitors</p>                                                                                                                    
                                    <span class="badge badge-soft-success mt-1 shadow-none"><i class="mdi mdi-menu-up font-16"></i>20.15%</span>
                                </div>
                                <div class="col-7 align-self-center">
                                    <span class="peity-line" data-width="100%" data-peity='{ "fill": ["#b5f1e0"],"stroke": ["#0acf97"]}' data-height="80">1,2,3,4,3,6,3,5,3,3,4,2</span>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="card card-content">
                            <div class="card-body row justify-content-center">
                                <div class="col-5 align-self-center">
                                    <h4 class="mt-0 mb-2 font-20">8320</h4>  
                                    <p class="mb-2 text-muted font-13 text-nowrap">New Users</p>                                                                                                                    
                                    <span class="badge badge-soft-danger mt-1 shadow-none"><i class="mdi mdi-menu-down font-16"></i>7.15%</span>
                                </div>
                                <div class="col-7 align-self-center text-right">
                                    <span class="peity-line" data-width="100%" data-peity='{ "fill": ["#d6d8f5"],"stroke": ["#777edd"]}' data-height="80">0,3,6,3,4,2,6,1,8,4,4,2</span>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="card card-content">
                            <div class="card-body row justify-content-center">
                                <div class="col-5 align-self-center">
                                    <h4 class="mt-0 mb-2 font-20">1840</h4>  
                                    <p class="mb-2 text-muted font-13 text-nowrap">New Orders</p>                                                                                                                    
                                    <span class="badge badge-soft-danger mt-1 shadow-none"><i class="mdi mdi-menu-down font-16"></i>6.05%</span>
                                </div>
                                <div class="col-7 align-self-center">
                                    <span class="peity-line" data-width="100%" data-peity='{ "fill": ["#fdebb5"],"stroke": ["#f9bc0b"]}' data-height="80">2,4,7,3,5,3,6,3,4,3,2,1,2</span>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="card card-content">
                            <div class="card-body row justify-content-center">
                                <div class="col-5 align-self-center">
                                    <h4 class="mt-0 mb-2 font-20">2501</h4>  
                                    <p class="mb-2 text-muted font-13 text-nowrap">Total Sales</p>                                                                                                                    
                                    <span class="badge badge-soft-success mt-1 shadow-none"><i class="mdi mdi-menu-up font-16"></i>8.97%</span>
                                </div>
                                <div class="col-7 align-self-center">
                                    <span class="peity-bar" data-peity='{ "fill": ["#ffd1e1", "#ffd1e1"]}' data-width="100%" data-height="80">5,6,2,8,9,4,7,10,11,12,10,4,7,10</span>
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
 import {mapGetters} from 'vuex'
    export default {
        data() {
            return {
                data: {},
               
            }
        },
         computed:{
        // Allusers(){
        //    return this.$store.getters.allusers
        // },
    },
    

    }
</script>