<template>
  <div>
    Qui sommes nous ?!
    <ProfilElisa />
    <ProfilGabzz/>
    <ProfilKilian/>
    <ProfilSimon/>
    <ProfilChris/>
    
  </div>
</template>

<script>

import ProfilElisa from '../components/ProfilElisa'
import ProfilSimon from '../components/ProfilSimon'
import ProfilChris from '../components/ProfilChris'
import ProfilGabzz from '../components/ProfilGabzz'
import ProfilKilian from '../components/ProfilKilian'






export default {
  components: {
     ProfilElisa,
     ProfilSimon,
     ProfilGabzz,
     ProfilKilian,
     ProfilChris
  
     },
  
}
</script>