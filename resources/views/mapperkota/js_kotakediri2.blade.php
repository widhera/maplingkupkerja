function setBounds() {
        }
       
        function pop_LingkupKerja_1(feature, layer) {
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

        function style_LingkupKerja_1_0() {
            return {
                pane: 'pane_LingkupKerja_1',
                opacity: 1,
                color: 'rgba(0,0,0,0.509804)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(202,241,161,0.509804)',
            }
        }
        map.createPane('pane_LingkupKerja_1');
        map.getPane('pane_LingkupKerja_1').style.zIndex = 401;
        map.getPane('pane_LingkupKerja_1').style['mix-blend-mode'] = 'normal';
        var layer_LingkupKerja_1 = new L.geoJson(json_LingkupKerja_1, {
            attribution: '<a href=""></a>',
            pane: 'pane_LingkupKerja_1',
            onEachFeature: pop_LingkupKerja_1,
            style: style_LingkupKerja_1_0,
        });
        bounds_group.addLayer(layer_LingkupKerja_1);
        map.addLayer(layer_LingkupKerja_1);
        function pop_KecPesantren_2(feature, layer) {
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

        function style_KecPesantren_2_0() {
            return {
                pane: 'pane_KecPesantren_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(204,77,202,1.0)',
            }
        }
        map.createPane('pane_KecPesantren_2');
        map.getPane('pane_KecPesantren_2').style.zIndex = 402;
        map.getPane('pane_KecPesantren_2').style['mix-blend-mode'] = 'normal';
        var layer_KecPesantren_2 = new L.geoJson(json_KecPesantren_2, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecPesantren_2',
            onEachFeature: pop_KecPesantren_2,
            style: style_KecPesantren_2_0,
        });
        bounds_group.addLayer(layer_KecPesantren_2);
        map.addLayer(layer_KecPesantren_2);
        function pop_KecMojoroto_3(feature, layer) {
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

        function style_KecMojoroto_3_0() {
            return {
                pane: 'pane_KecMojoroto_3',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(31,154,175,1.0)',
            }
        }
        map.createPane('pane_KecMojoroto_3');
        map.getPane('pane_KecMojoroto_3').style.zIndex = 403;
        map.getPane('pane_KecMojoroto_3').style['mix-blend-mode'] = 'normal';
        var layer_KecMojoroto_3 = new L.geoJson(json_KecMojoroto_3, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecMojoroto_3',
            onEachFeature: pop_KecMojoroto_3,
            style: style_KecMojoroto_3_0,
        });
        bounds_group.addLayer(layer_KecMojoroto_3);
        map.addLayer(layer_KecMojoroto_3);
        function pop_KecKotaKediri_4(feature, layer) {
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

        function style_KecKotaKediri_4_0() {
            return {
                pane: 'pane_KecKotaKediri_4',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(231,222,39,1.0)',
            }
        }
        map.createPane('pane_KecKotaKediri_4');
        map.getPane('pane_KecKotaKediri_4').style.zIndex = 404;
        map.getPane('pane_KecKotaKediri_4').style['mix-blend-mode'] = 'normal';
        var layer_KecKotaKediri_4 = new L.geoJson(json_KecKotaKediri_4, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecKotaKediri_4',
            onEachFeature: pop_KecKotaKediri_4,
            style: style_KecKotaKediri_4_0,
        });
        bounds_group.addLayer(layer_KecKotaKediri_4);
        map.addLayer(layer_KecKotaKediri_4);