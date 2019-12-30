<template>
	 <li class="dropdown">
                                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                    <img src="custom/assets/images/users/user-1.jpg" alt="profile-user" class="rounded-circle" /> 
                                    <span class="ml-1 nav-user-name hidden-sm">{{user.name}}<i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> profile</a>
                                    <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a>
                                    <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
                                    <div class="dropdown-divider"></div>
                                    <router-link :to="{ name: 'logout' }" class="dropdown-item"><i class="dripicons-exit text-muted mr-2"></i> Logout</router-link>
                                </div>
                            </li>
</template>

<script>
export default {
        
        data(){
            return{
               user: {}
            }
        },
        created()
        {
        	let retrievedObject = localStorage.getItem('user');
            this.user = JSON.parse(retrievedObject)
        },
      
    }
      
</script>