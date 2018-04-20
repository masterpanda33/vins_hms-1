import Vue from 'vue'
import Vuex from 'vuex'

import * as actions from './actions'
import * as getters from './getters'
import * as types from './mutation-types'

import Patient from './modules/patient'
import Users from './modules/users'

import createPersistedState from 'vuex-persistedstate'
// import VuexPersist from 'vuex-persist';

Vue.use(Vuex)

const debug = process.env.NODE_ENV !== 'production'

const state = {
  isAdmin:'',
}

// const vuexLocalStorage = new VuexPersist({
//   key: 'vuex', // The key to store the state on in the storage provider.
//   storage: window.localStorage, // or window.sessionStorage or localForage
//   // Function that passes the state and returns the state with only the objects you want to store.
//   // reducer: state => state,
//   // Function that passes a mutation and lets you decide if it should update the state in localStorage.
//   // filter: mutation => (true)
// })


const mutations = {
}
export default new Vuex.Store({
  state,
  plugins: [createPersistedState()],
   // plugins: [vuexLocalStorage.plugin],
  actions,
  mutations,
  getters,
  modules: {
    Patient,
    Users,
    // Pitch,
    // Users
  },
  strict: debug
})
