<template>
  <section class="section section-hero-area">
    <div class="container">
      <div class="d-flex justify-content-center">
        <div class="card">
          <div class="card-block">
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script type="text/babel">

import Tournament from '../../api/tournament.js'

export default {
  data() {
    return {
      'tournaments' : []
    }
  },
  created: function() {
      // this.$root.$on('changeTourComp', this.setTournamentData);
  },
  mounted() {
   // Display All Published Tournaments
   let TournamentData = {'status':'Published'}
    Tournament.getTournamentByStatus(TournamentData).then(
      (response) => {
        this.tournaments = response.data.data
      },
      (error) => {
      }
    )
  },
  methods: {
    selectTournament(tournament) {

     // here we set the tournaments and add Schedule & Results
     let name = tournament.name
     let id = tournament.id
     let tournamentSel  = {
        name:name,
        id:id,
        tournamentSlug: tournament.slug,
        tournamentLogo: tournament.logo,
        tournamentStatus:tournament.status,
        tournamentStartDate:tournament.start_date,
        tournamentEndDate:tournament.end_date
      }
      this.$store.dispatch('SetTournamentName', tournamentSel)
        // After Set We have to Redirect to Schedule View
      if(this.$store.state.Tournament.tournamentId != undefined) {
        this.$router.push({'name':'front_schedule', params: { tournamentslug: tournament.slug }})
      }
    }
  }
}
</script>
