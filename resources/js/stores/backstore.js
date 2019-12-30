export default{


 state: {
 	isLoading: false,
    allusers:"Working data",
    allmembers:{},
   
},
getters: {
     allusers(state){
      return state.allusers
    },
    isLoading: state => state.isLoading,
    allmembers:state => state.allmembers,

},
actions:{

allmembers(context)
     {
      context.commit('toggleLoading');
      axios.get(`api/auth/members/allmembers`).then((response) => 
                {
         context.commit('toggleLoading');
        context.commit('allmembers', response.data)
                
        }).catch((error) => {
        	context.commit('toggleLoading');
        	console.log(error)
        });
     },
},

mutations: {
	'toggleLoading': state => state.isLoading === false ? state.isLoading = true : state.isLoading = false,


allmembers(state, data)
   {
    return state.allmembers = data
   },
}

}
