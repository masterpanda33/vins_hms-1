import * as types from '../mutation-types'
import _ from 'lodash'
import user from '../../api/users'
import moment from 'moment'

// initial state
const state = {
	'patientId':0,
  	'ipdId':0,
    'admitDatetime': '',
  	'patientData': [],
 }
// actions
const actions = {
  SetPatientId ({commit},patientId) {
    commit(types.SET_PATIENT_ID, patientId)
  },
  SetIpdId ({commit},ipdId) {
    commit(types.SET_IPD_ID, ipdId)
  },
  SetPatientData ({commit},ipdId) {
    
    user.getpatientDetail(ipdId).then(
    (response) => {
      if(response.data.code == 200) {
        commit(types.SET_PATIENT_DATA, response.data.data);
        
      }
    },
    
    )
  },
}

// mutations
const mutations = {
  [types.SET_IPD_ID] (state, ipdId) {
    state.ipdId = ipdId
  },
  [types.SET_PATIENT_ID] (state, patientId) {
      state.patientId = patientId
  },
  [types.SET_PATIENT_DATA] (state, patientData) {
    // console.log(patientData)
      state.patientData = patientData.patient_details;
      state.admitDatetime = patientData.admit_datetime;
  },
}

export default {
  state,
  // getters,
  actions,
  mutations
}