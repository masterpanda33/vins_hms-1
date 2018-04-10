import * as types from '../mutation-types'
import _ from 'lodash'
import user from '../../api/users'
import moment from 'moment'

// initial state
const state = {
	'userDetails':[]
}


// actions
const actions = {
  SetUserDetailsData ({commit},userId) {
    user.getUserDetails(userId).then(
    (response) => {
      if(response.status == 200) {
        commit(types.SET_USER_DATA, response.data);  
      }
    })
  }
 }
// mutations
const mutations = {
	[types.SET_USER_DATA] (state, userData) {
		console.log('userData',userData);
      state.userDetails = userData;
	}
}

export default {
  state,
  // getters,
  actions,
  mutations
}