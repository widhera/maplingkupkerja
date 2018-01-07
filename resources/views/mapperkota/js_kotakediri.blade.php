 function pop_Pesantren_2(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">ID</th>\
                        <td>' + (feature.properties['ID'] !== null ? Autolinker.link(String(feature.properties['ID'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kecamatan</th>\
                        <td>' + (feature.properties['Kecamatan'] !== null ? Autolinker.link(String(feature.properties['Kecamatan'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Pesantren_2_0() {
            return {
                pane: 'pane_Pesantren_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(165,177,226,1.0)',
            }
        }
        map.createPane('pane_Pesantren_2');
        map.getPane('pane_Pesantren_2').style.zIndex = 402;
        map.getPane('pane_Pesantren_2').style['mix-blend-mode'] = 'normal';
        var layer_Pesantren_2 = new L.geoJson(json_Pesantren_2, {
            attribution: '<a href=""></a>',
            pane: 'pane_Pesantren_2',
            onEachFeature: pop_Pesantren_2,
            style: style_Pesantren_2_0,
        });
        bounds_group.addLayer(layer_Pesantren_2);
        
        function pop_Mojoroto_3(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">ID</th>\
                        <td>' + (feature.properties['ID'] !== null ? Autolinker.link(String(feature.properties['ID'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kecamatan</th>\
                        <td>' + (feature.properties['Kecamatan'] !== null ? Autolinker.link(String(feature.properties['Kecamatan'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Mojoroto_3_0() {
            return {
                pane: 'pane_Mojoroto_3',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,223,63,1.0)',
            }
        }
        map.createPane('pane_Mojoroto_3');
        map.getPane('pane_Mojoroto_3').style.zIndex = 403;
        map.getPane('pane_Mojoroto_3').style['mix-blend-mode'] = 'normal';
        var layer_Mojoroto_3 = new L.geoJson(json_Mojoroto_3, {
            attribution: '<a href=""></a>',
            pane: 'pane_Mojoroto_3',
            onEachFeature: pop_Mojoroto_3,
            style: style_Mojoroto_3_0,
        });
        bounds_group.addLayer(layer_Mojoroto_3);
        
        function pop_KotaKediri_4(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">ID</th>\
                        <td>' + (feature.properties['ID'] !== null ? Autolinker.link(String(feature.properties['ID'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kecamatan</th>\
                        <td>' + (feature.properties['Kecamatan'] !== null ? Autolinker.link(String(feature.properties['Kecamatan'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KotaKediri_4_0() {
            return {
                pane: 'pane_KotaKediri_4',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(186,136,187,1.0)',
            }
        }
        map.createPane('pane_KotaKediri_4');
        map.getPane('pane_KotaKediri_4').style.zIndex = 404;
        map.getPane('pane_KotaKediri_4').style['mix-blend-mode'] = 'normal';
        var layer_KotaKediri_4 = new L.geoJson(json_KotaKediri_4, {
            attribution: '<a href=""></a>',
            pane: 'pane_KotaKediri_4',
            onEachFeature: pop_KotaKediri_4,
            style: style_KotaKediri_4_0,
        });
        bounds_group.addLayer(layer_KotaKediri_4);
        
        var baseMaps = {};
        var legend_kotakediri = L.control.layers(baseMaps,{'<img src="{{ asset('MAPPERKOTA/legend/KOTAKEDIRI/KotaKediri_4.png') }}" /> Kota Kediri': layer_KotaKediri_4,'<img src="{{ asset('MAPPERKOTA/legend/KOTAKEDIRI/Mojoroto_3.png') }}" /> Mojoroto': layer_Mojoroto_3,'<img src="{{ asset('MAPPERKOTA/legend/KOTAKEDIRI/Pesantren_2.png') }}" /> Pesantren': layer_Pesantren_2,'<img src="{{ asset('MAPPERKOTA/legend/LingkupKerja_1.png') }}" /> Lingkup Kerja': layer_LingkupKerja_1,'<img src="{{ asset('MAPPERKOTA/legend/LAINYA_0.png') }}" /> LAINYA': layer_LAINYA_0,});