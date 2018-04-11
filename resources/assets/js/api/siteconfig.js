import axios from 'axios'
import Ls from '../services/ls'
// import NProgress from 'nprogress'
// var NProgress = require("nprogress")
// var PulseLoader = require('vue-spinner/src/PulseLoader.vue');
// EndPoint API

var instance = axios.create({
  baseURL: 'http://127.0.0.1:8000/api/',
  timeout: 50000
})

instance.interceptors.request.use(function (config) {
    // Do something before request is sent
    const AUTH_TOKEN = Ls.get('auth.token');

    if(AUTH_TOKEN){
        config.headers.common['Authorization'] = `Bearer ${AUTH_TOKEN}`
    }

    return config;
}, function (error) {
    // Do something with request error
    return Promise.reject(error);
});

/*
instance.interceptors.request.use(function (config) {
   	NProgress.start();

  	return config
}, function (error) {

  return Promise.reject(error)
})
// Add a response interceptor
instance.interceptors.response.use(function (response) {

  NProgress.done(true);
  NProgress.remove();

  return response
}, function (error) {
  // Loading.hide()
  // alert('hi1233454345')
  return Promise.reject(error)
})
*/
export default instance
