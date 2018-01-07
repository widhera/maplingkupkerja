function pop_KabupatenNganjuk_2(feature, layer) {
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
                        <th scope="row">Kabupaten_</th>\
                        <td>' + (feature.properties['Kabupaten_'] !== null ? Autolinker.link(String(feature.properties['Kabupaten_'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KabupatenNganjuk_2_0() {
            return {
                pane: 'pane_KabupatenNganjuk_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(102,62,148,1.0)',
            }
        }
        map.createPane('pane_KabupatenNganjuk_2');
        map.getPane('pane_KabupatenNganjuk_2').style.zIndex = 402;
        map.getPane('pane_KabupatenNganjuk_2').style['mix-blend-mode'] = 'normal';
        var layer_KabupatenNganjuk_2 = new L.geoJson(json_KabupatenNganjuk_2, {
            attribution: '<a href=""></a>',
            pane: 'pane_KabupatenNganjuk_2',
            onEachFeature: pop_KabupatenNganjuk_2,
            style: style_KabupatenNganjuk_2_0,
        });
        bounds_group.addLayer(layer_KabupatenNganjuk_2);
        map.addLayer(layer_KabupatenNganjuk_2);
        function pop_KabupatenJombang_3(feature, layer) {
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
                        <th scope="row">Kabupaten_</th>\
                        <td>' + (feature.properties['Kabupaten_'] !== null ? Autolinker.link(String(feature.properties['Kabupaten_'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KabupatenJombang_3_0() {
            return {
                pane: 'pane_KabupatenJombang_3',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(92,119,170,1.0)',
            }
        }
        map.createPane('pane_KabupatenJombang_3');
        map.getPane('pane_KabupatenJombang_3').style.zIndex = 403;
        map.getPane('pane_KabupatenJombang_3').style['mix-blend-mode'] = 'normal';
        var layer_KabupatenJombang_3 = new L.geoJson(json_KabupatenJombang_3, {
            attribution: '<a href=""></a>',
            pane: 'pane_KabupatenJombang_3',
            onEachFeature: pop_KabupatenJombang_3,
            style: style_KabupatenJombang_3_0,
        });
        bounds_group.addLayer(layer_KabupatenJombang_3);
        map.addLayer(layer_KabupatenJombang_3);
        function pop_KabupatenKediri_4(feature, layer) {
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
                        <th scope="row">Kabupaten_</th>\
                        <td>' + (feature.properties['Kabupaten_'] !== null ? Autolinker.link(String(feature.properties['Kabupaten_'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KabupatenKediri_4_0() {
            return {
                pane: 'pane_KabupatenKediri_4',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(244,125,119,1.0)',
            }
        }
        map.createPane('pane_KabupatenKediri_4');
        map.getPane('pane_KabupatenKediri_4').style.zIndex = 404;
        map.getPane('pane_KabupatenKediri_4').style['mix-blend-mode'] = 'normal';
        var layer_KabupatenKediri_4 = new L.geoJson(json_KabupatenKediri_4, {
            attribution: '<a href=""></a>',
            pane: 'pane_KabupatenKediri_4',
            onEachFeature: pop_KabupatenKediri_4,
            style: style_KabupatenKediri_4_0,
        });
        bounds_group.addLayer(layer_KabupatenKediri_4);
        map.addLayer(layer_KabupatenKediri_4);
        function pop_KotaKediri_5(feature, layer) {
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
                        <th scope="row">Kabupaten_</th>\
                        <td>' + (feature.properties['Kabupaten_'] !== null ? Autolinker.link(String(feature.properties['Kabupaten_'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KotaKediri_5_0() {
            return {
                pane: 'pane_KotaKediri_5',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(1,255,98,1.0)',
            }
        }
        map.createPane('pane_KotaKediri_5');
        map.getPane('pane_KotaKediri_5').style.zIndex = 405;
        map.getPane('pane_KotaKediri_5').style['mix-blend-mode'] = 'normal';
        var layer_KotaKediri_5 = new L.geoJson(json_KotaKediri_5, {
            attribution: '<a href=""></a>',
            pane: 'pane_KotaKediri_5',
            onEachFeature: pop_KotaKediri_5,
            style: style_KotaKediri_5_0,
        });
        bounds_group.addLayer(layer_KotaKediri_5);
        map.addLayer(layer_KotaKediri_5);
        var baseMaps = {};
        var legend_perkota = L.control.layers(baseMaps,{'<img src="{{ asset('MAPPERKOTA/legend/KotaKediri_5.png') }}" /> Kota Kediri': layer_KotaKediri_5,'<img src="{{ asset('MAPPERKOTA/legend/KabupatenKediri_4.png') }}" /> Kabupaten Kediri': layer_KabupatenKediri_4,'<img src="{{ asset('MAPPERKOTA/legend/KabupatenJombang_3.png') }}" /> Kabupaten Jombang': layer_KabupatenJombang_3,'<img src="{{ asset('MAPPERKOTA/legend/KabupatenNganjuk_2.png') }}" /> Kabupaten Nganjuk': layer_KabupatenNganjuk_2,'<img src="{{ asset('MAPPERKOTA/legend/LingkupKerja_1.png') }}" /> Lingkup Kerja': layer_LingkupKerja_1,'<img src="{{ asset('MAPPERKOTA/legend/LAINYA_0.png') }}" /> LAINYA': layer_LAINYA_0,});
