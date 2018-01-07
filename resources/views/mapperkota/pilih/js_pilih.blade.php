function pilih(){
                var cou = document.getElementById("select");
                var cou1 = cou.options[cou.selectedIndex].value;
             if(cou1==1)
                {
                    @include('mapperkota.pilih.pilih_jombang.remove_jombang')
                    @include('mapperkota.pilih.pilih_kotakediri.remove_kotakediri')
                    @include('mapperkota.pilih.pilih_kediri.remove_kediri')
                    @include('mapperkota.pilih.pilih_nganjuk.remove_nganjuk')
                    @include('mapperkota.pilih.pilih_perkota.add_perkota')
                    
                }
                else if(cou1==2)
                {
                    @include('mapperkota.pilih.pilih_jombang.remove_jombang')
                    @include('mapperkota.pilih.pilih_perkota.remove_perkota')
                    @include('mapperkota.pilih.pilih_kediri.remove_kediri')
                    @include('mapperkota.pilih.pilih_nganjuk.remove_nganjuk')
                    @include('mapperkota.pilih.pilih_kotakediri.add_kotakediri')
                }
                else if(cou1==3)
                {
                    @include('mapperkota.pilih.pilih_jombang.remove_jombang')
                    @include('mapperkota.pilih.pilih_perkota.remove_perkota')
                    @include('mapperkota.pilih.pilih_kotakediri.remove_kotakediri')
                    @include('mapperkota.pilih.pilih_nganjuk.remove_nganjuk')
                    @include('mapperkota.pilih.pilih_kediri.add_kediri')

                }
                else if(cou1==4)
                {
                    @include('mapperkota.pilih.pilih_jombang.remove_jombang')
                    @include('mapperkota.pilih.pilih_perkota.remove_perkota')
                    @include('mapperkota.pilih.pilih_kediri.remove_kediri')
                    @include('mapperkota.pilih.pilih_kotakediri.remove_kotakediri')
                    @include('mapperkota.pilih.pilih_nganjuk.add_nganjuk')

                }
                else
                {
                    @include('mapperkota.pilih.pilih_perkota.remove_perkota')
                    @include('mapperkota.pilih.pilih_kediri.remove_kediri')
                    @include('mapperkota.pilih.pilih_kotakediri.remove_kotakediri')
                    @include('mapperkota.pilih.pilih_nganjuk.remove_nganjuk')
                    @include('mapperkota.pilih.pilih_jombang.add_jombang')

                }
        }