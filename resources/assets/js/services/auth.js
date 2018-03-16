import Ls from './ls'

export default {

    login(loginData){
        return axios.post('/api/auth/login', loginData).then(response =>  {
            Ls.set('auth.token',response.data.token)
            // We set Email Over here
            Ls.set('email',loginData.email)

        }).catch(error => {
            if (error.response.status == 401) {
                toastr['error']('Invalid credentials', 'Error');
                Ls.remove('auth.token')
                Ls.remove('email')
            }
            else {
                // Something happened in setting up the request that triggered an Error
            }
        });

    },

    logout(){
        return axios.get('/api/auth/logout').then(response =>  {
            Ls.remove('auth.token')
            Ls.remove('email')
            Ls.remove('vuex')
            Ls.remove('userData')
            // here we have to reload the page
            toastr['success']('Logged out!', 'Success');
            setTimeout(Plugin.reloadPage, 1000);
        }).catch(error => {
        });
        // Reload
    },
    check(){
        return axios.get('/api/auth/check').then(response =>  {
            if(response.data.authenticated == false) {

              if(response.data.message != undefined) {
                toastr['error'](response.data.message, 'Error');
              }
            }
            return !!response.data.authenticated;
        }).catch(error => {
        });
    },

}
