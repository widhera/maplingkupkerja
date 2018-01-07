var command = L.control({position: 'topright'});

        command.onAdd = function (map) {
            var div = L.DomUtil.create('div', 'command');

            div.innerHTML = '<table><tr><td><select onchange="pilih();" id="select" class="selectpicker">\
                              <option value="1" selected="">Semua Wilayah</option>\
                              <option value="2">Kota Kediri</option>\
                              <option value="3">Kediri</option>\
                              <option value="4">Nganjuk</option>\
                              <option value="5">Jombang</option>\
                            </select></td>\
                            <td><select class="selectpicker">\
                              <option>Semua Tahun</option>\
                              <option>2018</option>\
                              <option>2017</option>\
                              <option>2016</option>\
                              <option>2015</option>\
                              <option>2014</option>\
                              <option>2013</option>\
                              <option>2012</option>\
                            </select></td>\
                            <td><button     type="button" class="btn btn-xs btn-block">Button 1</button></td></tr></table>\
                            '; 
            return div;
        };


        command.addTo(map);