import Vue from 'vue'
import Vuex from 'vuex'

import * as actions from './actions'
import * as getters from './getters'
import * as types from './mutation-types'

import Patient from './modules/patient'

import createPersistedState from 'vuex-persistedstate'

Vue.use(Vuex)

const debug = process.env.NODE_ENV !== 'production'

const state = {
  isAdmin:'',
}

const mutations = {
}
export default new Vuex.Store({
  state,
  plugins: [createPersistedState()],
  actions,
  mutations,
  getters,
  modules: {
    Patient,
    // Pitch,
    // Users
  },
  strict: debug
})
