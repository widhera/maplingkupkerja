function pop_Wates_2(feature, layer) {
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
                    <tr>\
                        <th scope="row">orig_ogc_f</th>\
                        <td>' + (feature.properties['orig_ogc_f'] !== null ? Autolinker.link(String(feature.properties['orig_ogc_f'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Wates_2_0() {
            return {
                pane: 'pane_Wates_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(175,152,22,1.0)',
            }
        }
        map.createPane('pane_Wates_2');
        map.getPane('pane_Wates_2').style.zIndex = 402;
        map.getPane('pane_Wates_2').style['mix-blend-mode'] = 'normal';
        var layer_Wates_2 = new L.geoJson(json_Wates_2, {
            attribution: '<a href=""></a>',
            pane: 'pane_Wates_2',
            onEachFeature: pop_Wates_2,
            style: style_Wates_2_0,
        });
        bounds_group.addLayer(layer_Wates_2);
        map.removeLayer(layer_Wates_2);
        function pop_Tarokan_3(feature, layer) {
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
                    <tr>\
                        <th scope="row">orig_ogc_f</th>\
                        <td>' + (feature.properties['orig_ogc_f'] !== null ? Autolinker.link(String(feature.properties['orig_ogc_f'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Tarokan_3_0() {
            return {
                pane: 'pane_Tarokan_3',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(107,137,164,1.0)',
            }
        }
        map.createPane('pane_Tarokan_3');
        map.getPane('pane_Tarokan_3').style.zIndex = 403;
        map.getPane('pane_Tarokan_3').style['mix-blend-mode'] = 'normal';
        var layer_Tarokan_3 = new L.geoJson(json_Tarokan_3, {
            attribution: '<a href=""></a>',
            pane: 'pane_Tarokan_3',
            onEachFeature: pop_Tarokan_3,
            style: style_Tarokan_3_0,
        });
        bounds_group.addLayer(layer_Tarokan_3);
        map.removeLayer(layer_Tarokan_3);
        function pop_Semen_4(feature, layer) {
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
                    <tr>\
                        <th scope="row">orig_ogc_f</th>\
                        <td>' + (feature.properties['orig_ogc_f'] !== null ? Autolinker.link(String(feature.properties['orig_ogc_f'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Semen_4_0() {
            return {
                pane: 'pane_Semen_4',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(17,187,243,1.0)',
            }
        }
        map.createPane('pane_Semen_4');
        map.getPane('pane_Semen_4').style.zIndex = 404;
        map.getPane('pane_Semen_4').style['mix-blend-mode'] = 'normal';
        var layer_Semen_4 = new L.geoJson(json_Semen_4, {
            attribution: '<a href=""></a>',
            pane: 'pane_Semen_4',
            onEachFeature: pop_Semen_4,
            style: style_Semen_4_0,
        });
        bounds_group.addLayer(layer_Semen_4);
        map.removeLayer(layer_Semen_4);
        function pop_Ringinrejo_5(feature, layer) {
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
                    <tr>\
                        <th scope="row">orig_ogc_f</th>\
                        <td>' + (feature.properties['orig_ogc_f'] !== null ? Autolinker.link(String(feature.properties['orig_ogc_f'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Ringinrejo_5_0() {
            return {
                pane: 'pane_Ringinrejo_5',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(119,167,181,1.0)',
            }
        }
        map.createPane('pane_Ringinrejo_5');
        map.getPane('pane_Ringinrejo_5').style.zIndex = 405;
        map.getPane('pane_Ringinrejo_5').style['mix-blend-mode'] = 'normal';
        var layer_Ringinrejo_5 = new L.geoJson(json_Ringinrejo_5, {
            attribution: '<a href=""></a>',
            pane: 'pane_Ringinrejo_5',
            onEachFeature: pop_Ringinrejo_5,
            style: style_Ringinrejo_5_0,
        });
        bounds_group.addLayer(layer_Ringinrejo_5);
        map.removeLayer(layer_Ringinrejo_5);
        function pop_Purwoasri_6(feature, layer) {
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
                    <tr>\
                        <th scope="row">orig_ogc_f</th>\
                        <td>' + (feature.properties['orig_ogc_f'] !== null ? Autolinker.link(String(feature.properties['orig_ogc_f'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Purwoasri_6_0() {
            return {
                pane: 'pane_Purwoasri_6',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(148,46,65,1.0)',
            }
        }
        map.createPane('pane_Purwoasri_6');
        map.getPane('pane_Purwoasri_6').style.zIndex = 406;
        map.getPane('pane_Purwoasri_6').style['mix-blend-mode'] = 'normal';
        var layer_Purwoasri_6 = new L.geoJson(json_Purwoasri_6, {
            attribution: '<a href=""></a>',
            pane: 'pane_Purwoasri_6',
            onEachFeature: pop_Purwoasri_6,
            style: style_Purwoasri_6_0,
        });
        bounds_group.addLayer(layer_Purwoasri_6);
        map.removeLayer(layer_Purwoasri_6);
        function pop_Puncu_7(feature, layer) {
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
                    <tr>\
                        <th scope="row">orig_ogc_f</th>\
                        <td>' + (feature.properties['orig_ogc_f'] !== null ? Autolinker.link(String(feature.properties['orig_ogc_f'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Puncu_7_0() {
            return {
                pane: 'pane_Puncu_7',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(172,164,14,1.0)',
            }
        }
        map.createPane('pane_Puncu_7');
        map.getPane('pane_Puncu_7').style.zIndex = 407;
        map.getPane('pane_Puncu_7').style['mix-blend-mode'] = 'normal';
        var layer_Puncu_7 = new L.geoJson(json_Puncu_7, {
            attribution: '<a href=""></a>',
            pane: 'pane_Puncu_7',
            onEachFeature: pop_Puncu_7,
            style: style_Puncu_7_0,
        });
        bounds_group.addLayer(layer_Puncu_7);
        map.removeLayer(layer_Puncu_7);
        function pop_Plosoklaten_8(feature, layer) {
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
                    <tr>\
                        <th scope="row">orig_ogc_f</th>\
                        <td>' + (feature.properties['orig_ogc_f'] !== null ? Autolinker.link(String(feature.properties['orig_ogc_f'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Plosoklaten_8_0() {
            return {
                pane: 'pane_Plosoklaten_8',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(56,52,134,1.0)',
            }
        }
        map.createPane('pane_Plosoklaten_8');
        map.getPane('pane_Plosoklaten_8').style.zIndex = 408;
        map.getPane('pane_Plosoklaten_8').style['mix-blend-mode'] = 'normal';
        var layer_Plosoklaten_8 = new L.geoJson(json_Plosoklaten_8, {
            attribution: '<a href=""></a>',
            pane: 'pane_Plosoklaten_8',
            onEachFeature: pop_Plosoklaten_8,
            style: style_Plosoklaten_8_0,
        });
        bounds_group.addLayer(layer_Plosoklaten_8);
        map.removeLayer(layer_Plosoklaten_8);
        function pop_Plemahan_9(feature, layer) {
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
                    <tr>\
                        <th scope="row">orig_ogc_f</th>\
                        <td>' + (feature.properties['orig_ogc_f'] !== null ? Autolinker.link(String(feature.properties['orig_ogc_f'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Plemahan_9_0() {
            return {
                pane: 'pane_Plemahan_9',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(158,208,125,1.0)',
            }
        }
        map.createPane('pane_Plemahan_9');
        map.getPane('pane_Plemahan_9').style.zIndex = 409;
        map.getPane('pane_Plemahan_9').style['mix-blend-mode'] = 'normal';
        var layer_Plemahan_9 = new L.geoJson(json_Plemahan_9, {
            attribution: '<a href=""></a>',
            pane: 'pane_Plemahan_9',
            onEachFeature: pop_Plemahan_9,
            style: style_Plemahan_9_0,
        });
        bounds_group.addLayer(layer_Plemahan_9);
        map.removeLayer(layer_Plemahan_9);
        function pop_Pare_10(feature, layer) {
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
                    <tr>\
                        <th scope="row">orig_ogc_f</th>\
                        <td>' + (feature.properties['orig_ogc_f'] !== null ? Autolinker.link(String(feature.properties['orig_ogc_f'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Pare_10_0() {
            return {
                pane: 'pane_Pare_10',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(187,146,252,1.0)',
            }
        }
        map.createPane('pane_Pare_10');
        map.getPane('pane_Pare_10').style.zIndex = 410;
        map.getPane('pane_Pare_10').style['mix-blend-mode'] = 'normal';
        var layer_Pare_10 = new L.geoJson(json_Pare_10, {
            attribution: '<a href=""></a>',
            pane: 'pane_Pare_10',
            onEachFeature: pop_Pare_10,
            style: style_Pare_10_0,
        });
        bounds_group.addLayer(layer_Pare_10);
        map.removeLayer(layer_Pare_10);
        function pop_Papar_11(feature, layer) {
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
                    <tr>\
                        <th scope="row">orig_ogc_f</th>\
                        <td>' + (feature.properties['orig_ogc_f'] !== null ? Autolinker.link(String(feature.properties['orig_ogc_f'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Papar_11_0() {
            return {
                pane: 'pane_Papar_11',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(189,33,51,1.0)',
            }
        }
        map.createPane('pane_Papar_11');
        map.getPane('pane_Papar_11').style.zIndex = 411;
        map.getPane('pane_Papar_11').style['mix-blend-mode'] = 'normal';
        var layer_Papar_11 = new L.geoJson(json_Papar_11, {
            attribution: '<a href=""></a>',
            pane: 'pane_Papar_11',
            onEachFeature: pop_Papar_11,
            style: style_Papar_11_0,
        });
        bounds_group.addLayer(layer_Papar_11);
        map.removeLayer(layer_Papar_11);
        function pop_Pagu_12(feature, layer) {
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
                    <tr>\
                        <th scope="row">orig_ogc_f</th>\
                        <td>' + (feature.properties['orig_ogc_f'] !== null ? Autolinker.link(String(feature.properties['orig_ogc_f'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Pagu_12_0() {
            return {
                pane: 'pane_Pagu_12',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(69,184,245,1.0)',
            }
        }
        map.createPane('pane_Pagu_12');
        map.getPane('pane_Pagu_12').style.zIndex = 412;
        map.getPane('pane_Pagu_12').style['mix-blend-mode'] = 'normal';
        var layer_Pagu_12 = new L.geoJson(json_Pagu_12, {
            attribution: '<a href=""></a>',
            pane: 'pane_Pagu_12',
            onEachFeature: pop_Pagu_12,
            style: style_Pagu_12_0,
        });
        bounds_group.addLayer(layer_Pagu_12);
        map.removeLayer(layer_Pagu_12);
        function pop_Ngasem_13(feature, layer) {
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
                    <tr>\
                        <th scope="row">orig_ogc_f</th>\
                        <td>' + (feature.properties['orig_ogc_f'] !== null ? Autolinker.link(String(feature.properties['orig_ogc_f'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Ngasem_13_0() {
            return {
                pane: 'pane_Ngasem_13',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(234,142,134,1.0)',
            }
        }
        map.createPane('pane_Ngasem_13');
        map.getPane('pane_Ngasem_13').style.zIndex = 413;
        map.getPane('pane_Ngasem_13').style['mix-blend-mode'] = 'normal';
        var layer_Ngasem_13 = new L.geoJson(json_Ngasem_13, {
            attribution: '<a href=""></a>',
            pane: 'pane_Ngasem_13',
            onEachFeature: pop_Ngasem_13,
            style: style_Ngasem_13_0,
        });
        bounds_group.addLayer(layer_Ngasem_13);
        map.removeLayer(layer_Ngasem_13);
        function pop_Ngancar_14(feature, layer) {
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
                    <tr>\
                        <th scope="row">orig_ogc_f</th>\
                        <td>' + (feature.properties['orig_ogc_f'] !== null ? Autolinker.link(String(feature.properties['orig_ogc_f'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Ngancar_14_0() {
            return {
                pane: 'pane_Ngancar_14',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(130,88,185,1.0)',
            }
        }
        map.createPane('pane_Ngancar_14');
        map.getPane('pane_Ngancar_14').style.zIndex = 414;
        map.getPane('pane_Ngancar_14').style['mix-blend-mode'] = 'normal';
        var layer_Ngancar_14 = new L.geoJson(json_Ngancar_14, {
            attribution: '<a href=""></a>',
            pane: 'pane_Ngancar_14',
            onEachFeature: pop_Ngancar_14,
            style: style_Ngancar_14_0,
        });
        bounds_group.addLayer(layer_Ngancar_14);
        map.removeLayer(layer_Ngancar_14);
        function pop_Ngadiluwih_15(feature, layer) {
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
                    <tr>\
                        <th scope="row">orig_ogc_f</th>\
                        <td>' + (feature.properties['orig_ogc_f'] !== null ? Autolinker.link(String(feature.properties['orig_ogc_f'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Ngadiluwih_15_0() {
            return {
                pane: 'pane_Ngadiluwih_15',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(24,159,17,1.0)',
            }
        }
        map.createPane('pane_Ngadiluwih_15');
        map.getPane('pane_Ngadiluwih_15').style.zIndex = 415;
        map.getPane('pane_Ngadiluwih_15').style['mix-blend-mode'] = 'normal';
        var layer_Ngadiluwih_15 = new L.geoJson(json_Ngadiluwih_15, {
            attribution: '<a href=""></a>',
            pane: 'pane_Ngadiluwih_15',
            onEachFeature: pop_Ngadiluwih_15,
            style: style_Ngadiluwih_15_0,
        });
        bounds_group.addLayer(layer_Ngadiluwih_15);
        map.removeLayer(layer_Ngadiluwih_15);
        function pop_Mojo_16(feature, layer) {
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
                    <tr>\
                        <th scope="row">orig_ogc_f</th>\
                        <td>' + (feature.properties['orig_ogc_f'] !== null ? Autolinker.link(String(feature.properties['orig_ogc_f'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Mojo_16_0() {
            return {
                pane: 'pane_Mojo_16',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(139,80,73,1.0)',
            }
        }
        map.createPane('pane_Mojo_16');
        map.getPane('pane_Mojo_16').style.zIndex = 416;
        map.getPane('pane_Mojo_16').style['mix-blend-mode'] = 'normal';
        var layer_Mojo_16 = new L.geoJson(json_Mojo_16, {
            attribution: '<a href=""></a>',
            pane: 'pane_Mojo_16',
            onEachFeature: pop_Mojo_16,
            style: style_Mojo_16_0,
        });
        bounds_group.addLayer(layer_Mojo_16);
        map.removeLayer(layer_Mojo_16);
        function pop_Kunjang_17(feature, layer) {
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
                    <tr>\
                        <th scope="row">orig_ogc_f</th>\
                        <td>' + (feature.properties['orig_ogc_f'] !== null ? Autolinker.link(String(feature.properties['orig_ogc_f'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Kunjang_17_0() {
            return {
                pane: 'pane_Kunjang_17',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(168,79,195,1.0)',
            }
        }
        map.createPane('pane_Kunjang_17');
        map.getPane('pane_Kunjang_17').style.zIndex = 417;
        map.getPane('pane_Kunjang_17').style['mix-blend-mode'] = 'normal';
        var layer_Kunjang_17 = new L.geoJson(json_Kunjang_17, {
            attribution: '<a href=""></a>',
            pane: 'pane_Kunjang_17',
            onEachFeature: pop_Kunjang_17,
            style: style_Kunjang_17_0,
        });
        bounds_group.addLayer(layer_Kunjang_17);
        map.removeLayer(layer_Kunjang_17);
        function pop_Kraas_18(feature, layer) {
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
                    <tr>\
                        <th scope="row">orig_ogc_f</th>\
                        <td>' + (feature.properties['orig_ogc_f'] !== null ? Autolinker.link(String(feature.properties['orig_ogc_f'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Kraas_18_0() {
            return {
                pane: 'pane_Kraas_18',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(250,2,217,1.0)',
            }
        }
        map.createPane('pane_Kraas_18');
        map.getPane('pane_Kraas_18').style.zIndex = 418;
        map.getPane('pane_Kraas_18').style['mix-blend-mode'] = 'normal';
        var layer_Kraas_18 = new L.geoJson(json_Kraas_18, {
            attribution: '<a href=""></a>',
            pane: 'pane_Kraas_18',
            onEachFeature: pop_Kraas_18,
            style: style_Kraas_18_0,
        });
        bounds_group.addLayer(layer_Kraas_18);
        map.removeLayer(layer_Kraas_18);
        function pop_Kepung_19(feature, layer) {
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
                    <tr>\
                        <th scope="row">orig_ogc_f</th>\
                        <td>' + (feature.properties['orig_ogc_f'] !== null ? Autolinker.link(String(feature.properties['orig_ogc_f'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Kepung_19_0() {
            return {
                pane: 'pane_Kepung_19',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(146,163,118,1.0)',
            }
        }
        map.createPane('pane_Kepung_19');
        map.getPane('pane_Kepung_19').style.zIndex = 419;
        map.getPane('pane_Kepung_19').style['mix-blend-mode'] = 'normal';
        var layer_Kepung_19 = new L.geoJson(json_Kepung_19, {
            attribution: '<a href=""></a>',
            pane: 'pane_Kepung_19',
            onEachFeature: pop_Kepung_19,
            style: style_Kepung_19_0,
        });
        bounds_group.addLayer(layer_Kepung_19);
        map.removeLayer(layer_Kepung_19);
        function pop_Kendat_20(feature, layer) {
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
                    <tr>\
                        <th scope="row">orig_ogc_f</th>\
                        <td>' + (feature.properties['orig_ogc_f'] !== null ? Autolinker.link(String(feature.properties['orig_ogc_f'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Kendat_20_0() {
            return {
                pane: 'pane_Kendat_20',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(162,118,70,1.0)',
            }
        }
        map.createPane('pane_Kendat_20');
        map.getPane('pane_Kendat_20').style.zIndex = 420;
        map.getPane('pane_Kendat_20').style['mix-blend-mode'] = 'normal';
        var layer_Kendat_20 = new L.geoJson(json_Kendat_20, {
            attribution: '<a href=""></a>',
            pane: 'pane_Kendat_20',
            onEachFeature: pop_Kendat_20,
            style: style_Kendat_20_0,
        });
        bounds_group.addLayer(layer_Kendat_20);
        map.removeLayer(layer_Kendat_20);
        function pop_KayenKidul_21(feature, layer) {
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
                    <tr>\
                        <th scope="row">orig_ogc_f</th>\
                        <td>' + (feature.properties['orig_ogc_f'] !== null ? Autolinker.link(String(feature.properties['orig_ogc_f'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KayenKidul_21_0() {
            return {
                pane: 'pane_KayenKidul_21',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(135,134,52,1.0)',
            }
        }
        map.createPane('pane_KayenKidul_21');
        map.getPane('pane_KayenKidul_21').style.zIndex = 421;
        map.getPane('pane_KayenKidul_21').style['mix-blend-mode'] = 'normal';
        var layer_KayenKidul_21 = new L.geoJson(json_KayenKidul_21, {
            attribution: '<a href=""></a>',
            pane: 'pane_KayenKidul_21',
            onEachFeature: pop_KayenKidul_21,
            style: style_KayenKidul_21_0,
        });
        bounds_group.addLayer(layer_KayenKidul_21);
        map.removeLayer(layer_KayenKidul_21);
        function pop_Kandangan_22(feature, layer) {
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
                    <tr>\
                        <th scope="row">orig_ogc_f</th>\
                        <td>' + (feature.properties['orig_ogc_f'] !== null ? Autolinker.link(String(feature.properties['orig_ogc_f'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Kandangan_22_0() {
            return {
                pane: 'pane_Kandangan_22',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(22,95,252,1.0)',
            }
        }
        map.createPane('pane_Kandangan_22');
        map.getPane('pane_Kandangan_22').style.zIndex = 422;
        map.getPane('pane_Kandangan_22').style['mix-blend-mode'] = 'normal';
        var layer_Kandangan_22 = new L.geoJson(json_Kandangan_22, {
            attribution: '<a href=""></a>',
            pane: 'pane_Kandangan_22',
            onEachFeature: pop_Kandangan_22,
            style: style_Kandangan_22_0,
        });
        bounds_group.addLayer(layer_Kandangan_22);
        map.removeLayer(layer_Kandangan_22);
        function pop_Gurah_23(feature, layer) {
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
                    <tr>\
                        <th scope="row">orig_ogc_f</th>\
                        <td>' + (feature.properties['orig_ogc_f'] !== null ? Autolinker.link(String(feature.properties['orig_ogc_f'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Gurah_23_0() {
            return {
                pane: 'pane_Gurah_23',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(202,86,62,1.0)',
            }
        }
        map.createPane('pane_Gurah_23');
        map.getPane('pane_Gurah_23').style.zIndex = 423;
        map.getPane('pane_Gurah_23').style['mix-blend-mode'] = 'normal';
        var layer_Gurah_23 = new L.geoJson(json_Gurah_23, {
            attribution: '<a href=""></a>',
            pane: 'pane_Gurah_23',
            onEachFeature: pop_Gurah_23,
            style: style_Gurah_23_0,
        });
        bounds_group.addLayer(layer_Gurah_23);
        map.removeLayer(layer_Gurah_23);
        function pop_Grogol_24(feature, layer) {
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
                    <tr>\
                        <th scope="row">orig_ogc_f</th>\
                        <td>' + (feature.properties['orig_ogc_f'] !== null ? Autolinker.link(String(feature.properties['orig_ogc_f'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Grogol_24_0() {
            return {
                pane: 'pane_Grogol_24',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(219,217,52,1.0)',
            }
        }
        map.createPane('pane_Grogol_24');
        map.getPane('pane_Grogol_24').style.zIndex = 424;
        map.getPane('pane_Grogol_24').style['mix-blend-mode'] = 'normal';
        var layer_Grogol_24 = new L.geoJson(json_Grogol_24, {
            attribution: '<a href=""></a>',
            pane: 'pane_Grogol_24',
            onEachFeature: pop_Grogol_24,
            style: style_Grogol_24_0,
        });
        bounds_group.addLayer(layer_Grogol_24);
        map.removeLayer(layer_Grogol_24);
        function pop_Gampengrejo_25(feature, layer) {
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
                    <tr>\
                        <th scope="row">orig_ogc_f</th>\
                        <td>' + (feature.properties['orig_ogc_f'] !== null ? Autolinker.link(String(feature.properties['orig_ogc_f'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Gampengrejo_25_0() {
            return {
                pane: 'pane_Gampengrejo_25',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(74,204,34,1.0)',
            }
        }
        map.createPane('pane_Gampengrejo_25');
        map.getPane('pane_Gampengrejo_25').style.zIndex = 425;
        map.getPane('pane_Gampengrejo_25').style['mix-blend-mode'] = 'normal';
        var layer_Gampengrejo_25 = new L.geoJson(json_Gampengrejo_25, {
            attribution: '<a href=""></a>',
            pane: 'pane_Gampengrejo_25',
            onEachFeature: pop_Gampengrejo_25,
            style: style_Gampengrejo_25_0,
        });
        bounds_group.addLayer(layer_Gampengrejo_25);
        map.removeLayer(layer_Gampengrejo_25);
        function pop_Banyakan_26(feature, layer) {
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
                    <tr>\
                        <th scope="row">orig_ogc_f</th>\
                        <td>' + (feature.properties['orig_ogc_f'] !== null ? Autolinker.link(String(feature.properties['orig_ogc_f'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Banyakan_26_0() {
            return {
                pane: 'pane_Banyakan_26',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(123,181,147,1.0)',
            }
        }
        map.createPane('pane_Banyakan_26');
        map.getPane('pane_Banyakan_26').style.zIndex = 426;
        map.getPane('pane_Banyakan_26').style['mix-blend-mode'] = 'normal';
        var layer_Banyakan_26 = new L.geoJson(json_Banyakan_26, {
            attribution: '<a href=""></a>',
            pane: 'pane_Banyakan_26',
            onEachFeature: pop_Banyakan_26,
            style: style_Banyakan_26_0,
        });
        bounds_group.addLayer(layer_Banyakan_26);
        map.removeLayer(layer_Banyakan_26);
        function pop_Badas_27(feature, layer) {
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
                    <tr>\
                        <th scope="row">orig_ogc_f</th>\
                        <td>' + (feature.properties['orig_ogc_f'] !== null ? Autolinker.link(String(feature.properties['orig_ogc_f'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Badas_27_0() {
            return {
                pane: 'pane_Badas_27',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(105,133,219,1.0)',
            }
        }
        map.createPane('pane_Badas_27');
        map.getPane('pane_Badas_27').style.zIndex = 427;
        map.getPane('pane_Badas_27').style['mix-blend-mode'] = 'normal';
        var layer_Badas_27 = new L.geoJson(json_Badas_27, {
            attribution: '<a href=""></a>',
            pane: 'pane_Badas_27',
            onEachFeature: pop_Badas_27,
            style: style_Badas_27_0,
        });
        bounds_group.addLayer(layer_Badas_27);
        map.removeLayer(layer_Badas_27);
        var baseMaps = {};
        
        var legend_kediri = L.control.layers(baseMaps,{'<img src="{{ asset('MAPPERKOTA/legend/KEDIRI/Badas_27.png') }}" /> Badas': layer_Badas_27,'<img src="{{ asset('MAPPERKOTA/legend/KEDIRI/Banyakan_26.png') }}" /> Banyakan': layer_Banyakan_26,'<img src="{{ asset('MAPPERKOTA/legend/KEDIRI/Gampengrejo_25.png') }}" /> Gampengrejo': layer_Gampengrejo_25,'<img src="{{ asset('MAPPERKOTA/legend/KEDIRI/Grogol_24.png') }}" /> Grogol': layer_Grogol_24,'<img src="{{ asset('MAPPERKOTA/legend/KEDIRI/Gurah_23.png') }}" /> Gurah': layer_Gurah_23,'<img src="{{ asset('MAPPERKOTA/legend/KEDIRI/Kandangan_22.png') }}" /> Kandangan': layer_Kandangan_22,'<img src="{{ asset('MAPPERKOTA/legend/KEDIRI/KayenKidul_21.png') }}" /> Kayen Kidul': layer_KayenKidul_21,'<img src="{{ asset('MAPPERKOTA/legend/KEDIRI/Kendat_20.png') }}" /> Kendat': layer_Kendat_20,'<img src="{{ asset('MAPPERKOTA/legend/KEDIRI/Kepung_19.png') }}" /> Kepung': layer_Kepung_19,'<img src="{{ asset('MAPPERKOTA/legend/KEDIRI/Kraas_18.png') }}" /> Kraas': layer_Kraas_18,'<img src="{{ asset('MAPPERKOTA/legend/KEDIRI/Kunjang_17.png') }}" /> Kunjang': layer_Kunjang_17,'<img src="{{ asset('MAPPERKOTA/legend/KEDIRI/Mojo_16.png') }}" /> Mojo': layer_Mojo_16,'<img src="{{ asset('MAPPERKOTA/legend/KEDIRI/Ngadiluwih_15.png') }}" /> Ngadiluwih': layer_Ngadiluwih_15,'<img src="{{ asset('MAPPERKOTA/legend/KEDIRI/Ngancar_14.png') }}" /> Ngancar': layer_Ngancar_14,'<img src="{{ asset('MAPPERKOTA/legend/KEDIRI/Ngasem_13.png') }}" /> Ngasem': layer_Ngasem_13,'<img src="{{ asset('MAPPERKOTA/legend/KEDIRI/Pagu_12.png') }}" /> Pagu': layer_Pagu_12,'<img src="{{ asset('MAPPERKOTA/legend/KEDIRI/Papar_11.png') }}" /> Papar': layer_Papar_11,'<img src="{{ asset('MAPPERKOTA/legend/KEDIRI/Pare_10.png') }}" /> Pare': layer_Pare_10,'<img src="{{ asset('MAPPERKOTA/legend/KEDIRI/Plemahan_9.png') }}" /> Plemahan': layer_Plemahan_9,'<img src="{{ asset('MAPPERKOTA/legend/KEDIRI/Plosoklaten_8.png') }}" /> Plosoklaten': layer_Plosoklaten_8,'<img src="{{ asset('MAPPERKOTA/legend/KEDIRI/Puncu_7.png') }}" /> Puncu': layer_Puncu_7,'<img src="{{ asset('MAPPERKOTA/legend/KEDIRI/Purwoasri_6.png') }}" /> Purwoasri': layer_Purwoasri_6,'<img src="{{ asset('MAPPERKOTA/legend/KEDIRI/Ringinrejo_5.png') }}" /> Ringinrejo': layer_Ringinrejo_5,'<img src="{{ asset('MAPPERKOTA/legend/KEDIRI/Semen_4.png') }}" /> Semen': layer_Semen_4,'<img src="{{ asset('MAPPERKOTA/legend/KEDIRI/Tarokan_3.png') }}" /> Tarokan': layer_Tarokan_3,'<img src="{{ asset('MAPPERKOTA/legend/KEDIRI/Wates_2.png') }}" /> Wates': layer_Wates_2,'<img src="{{ asset('MAPPERKOTA/legend/LingkupKerja_1.png') }}" /> Lingkup Kerja': layer_LingkupKerja_1,'<img src="{{ asset('MAPPERKOTA/legend/LAINYA_0.png') }}" /> LAINYA': layer_LAINYA_0,});