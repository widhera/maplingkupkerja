function pop_KecWonosalam_2(feature, layer) {
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

        function style_KecWonosalam_2_0() {
            return {
                pane: 'pane_KecWonosalam_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(131,255,137,1.0)',
            }
        }
        map.createPane('pane_KecWonosalam_2');
        map.getPane('pane_KecWonosalam_2').style.zIndex = 402;
        map.getPane('pane_KecWonosalam_2').style['mix-blend-mode'] = 'normal';
        var layer_KecWonosalam_2 = new L.geoJson(json_KecWonosalam_2, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecWonosalam_2',
            onEachFeature: pop_KecWonosalam_2,
            style: style_KecWonosalam_2_0,
        });
        bounds_group.addLayer(layer_KecWonosalam_2);
        map.removeLayer(layer_KecWonosalam_2);
        function pop_KecTembelang_3(feature, layer) {
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

        function style_KecTembelang_3_0() {
            return {
                pane: 'pane_KecTembelang_3',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,67,158,1.0)',
            }
        }
        map.createPane('pane_KecTembelang_3');
        map.getPane('pane_KecTembelang_3').style.zIndex = 403;
        map.getPane('pane_KecTembelang_3').style['mix-blend-mode'] = 'normal';
        var layer_KecTembelang_3 = new L.geoJson(json_KecTembelang_3, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecTembelang_3',
            onEachFeature: pop_KecTembelang_3,
            style: style_KecTembelang_3_0,
        });
        bounds_group.addLayer(layer_KecTembelang_3);
        map.removeLayer(layer_KecTembelang_3);
        function pop_KecSumobito_4(feature, layer) {
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

        function style_KecSumobito_4_0() {
            return {
                pane: 'pane_KecSumobito_4',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(181,184,141,1.0)',
            }
        }
        map.createPane('pane_KecSumobito_4');
        map.getPane('pane_KecSumobito_4').style.zIndex = 404;
        map.getPane('pane_KecSumobito_4').style['mix-blend-mode'] = 'normal';
        var layer_KecSumobito_4 = new L.geoJson(json_KecSumobito_4, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecSumobito_4',
            onEachFeature: pop_KecSumobito_4,
            style: style_KecSumobito_4_0,
        });
        bounds_group.addLayer(layer_KecSumobito_4);
        map.removeLayer(layer_KecSumobito_4);
        function pop_KecPloso_5(feature, layer) {
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

        function style_KecPloso_5_0() {
            return {
                pane: 'pane_KecPloso_5',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(39,201,126,1.0)',
            }
        }
        map.createPane('pane_KecPloso_5');
        map.getPane('pane_KecPloso_5').style.zIndex = 405;
        map.getPane('pane_KecPloso_5').style['mix-blend-mode'] = 'normal';
        var layer_KecPloso_5 = new L.geoJson(json_KecPloso_5, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecPloso_5',
            onEachFeature: pop_KecPloso_5,
            style: style_KecPloso_5_0,
        });
        bounds_group.addLayer(layer_KecPloso_5);
        map.removeLayer(layer_KecPloso_5);
        function pop_KecPlandaan_6(feature, layer) {
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

        function style_KecPlandaan_6_0() {
            return {
                pane: 'pane_KecPlandaan_6',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(0,22,190,1.0)',
            }
        }
        map.createPane('pane_KecPlandaan_6');
        map.getPane('pane_KecPlandaan_6').style.zIndex = 406;
        map.getPane('pane_KecPlandaan_6').style['mix-blend-mode'] = 'normal';
        var layer_KecPlandaan_6 = new L.geoJson(json_KecPlandaan_6, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecPlandaan_6',
            onEachFeature: pop_KecPlandaan_6,
            style: style_KecPlandaan_6_0,
        });
        bounds_group.addLayer(layer_KecPlandaan_6);
        map.removeLayer(layer_KecPlandaan_6);
        function pop_KecPeterongan_7(feature, layer) {
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

        function style_KecPeterongan_7_0() {
            return {
                pane: 'pane_KecPeterongan_7',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(225,198,129,1.0)',
            }
        }
        map.createPane('pane_KecPeterongan_7');
        map.getPane('pane_KecPeterongan_7').style.zIndex = 407;
        map.getPane('pane_KecPeterongan_7').style['mix-blend-mode'] = 'normal';
        var layer_KecPeterongan_7 = new L.geoJson(json_KecPeterongan_7, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecPeterongan_7',
            onEachFeature: pop_KecPeterongan_7,
            style: style_KecPeterongan_7_0,
        });
        bounds_group.addLayer(layer_KecPeterongan_7);
        map.removeLayer(layer_KecPeterongan_7);
        function pop_KecPerak_8(feature, layer) {
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

        function style_KecPerak_8_0() {
            return {
                pane: 'pane_KecPerak_8',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(202,214,214,1.0)',
            }
        }
        map.createPane('pane_KecPerak_8');
        map.getPane('pane_KecPerak_8').style.zIndex = 408;
        map.getPane('pane_KecPerak_8').style['mix-blend-mode'] = 'normal';
        var layer_KecPerak_8 = new L.geoJson(json_KecPerak_8, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecPerak_8',
            onEachFeature: pop_KecPerak_8,
            style: style_KecPerak_8_0,
        });
        bounds_group.addLayer(layer_KecPerak_8);
        map.removeLayer(layer_KecPerak_8);
        function pop_KecNgusikan_9(feature, layer) {
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

        function style_KecNgusikan_9_0() {
            return {
                pane: 'pane_KecNgusikan_9',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(204,160,160,1.0)',
            }
        }
        map.createPane('pane_KecNgusikan_9');
        map.getPane('pane_KecNgusikan_9').style.zIndex = 409;
        map.getPane('pane_KecNgusikan_9').style['mix-blend-mode'] = 'normal';
        var layer_KecNgusikan_9 = new L.geoJson(json_KecNgusikan_9, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecNgusikan_9',
            onEachFeature: pop_KecNgusikan_9,
            style: style_KecNgusikan_9_0,
        });
        bounds_group.addLayer(layer_KecNgusikan_9);
        map.removeLayer(layer_KecNgusikan_9);
        function pop_KecKudu_10(feature, layer) {
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

        function style_KecKudu_10_0() {
            return {
                pane: 'pane_KecKudu_10',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(78,0,14,1.0)',
            }
        }
        map.createPane('pane_KecKudu_10');
        map.getPane('pane_KecKudu_10').style.zIndex = 410;
        map.getPane('pane_KecKudu_10').style['mix-blend-mode'] = 'normal';
        var layer_KecKudu_10 = new L.geoJson(json_KecKudu_10, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecKudu_10',
            onEachFeature: pop_KecKudu_10,
            style: style_KecKudu_10_0,
        });
        bounds_group.addLayer(layer_KecKudu_10);
        map.removeLayer(layer_KecKudu_10);
        function pop_KecNgoro_11(feature, layer) {
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

        function style_KecNgoro_11_0() {
            return {
                pane: 'pane_KecNgoro_11',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(53,131,57,1.0)',
            }
        }
        map.createPane('pane_KecNgoro_11');
        map.getPane('pane_KecNgoro_11').style.zIndex = 411;
        map.getPane('pane_KecNgoro_11').style['mix-blend-mode'] = 'normal';
        var layer_KecNgoro_11 = new L.geoJson(json_KecNgoro_11, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecNgoro_11',
            onEachFeature: pop_KecNgoro_11,
            style: style_KecNgoro_11_0,
        });
        bounds_group.addLayer(layer_KecNgoro_11);
        map.removeLayer(layer_KecNgoro_11);
        function pop_KecMojowarno_12(feature, layer) {
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

        function style_KecMojowarno_12_0() {
            return {
                pane: 'pane_KecMojowarno_12',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(114,233,188,1.0)',
            }
        }
        map.createPane('pane_KecMojowarno_12');
        map.getPane('pane_KecMojowarno_12').style.zIndex = 412;
        map.getPane('pane_KecMojowarno_12').style['mix-blend-mode'] = 'normal';
        var layer_KecMojowarno_12 = new L.geoJson(json_KecMojowarno_12, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecMojowarno_12',
            onEachFeature: pop_KecMojowarno_12,
            style: style_KecMojowarno_12_0,
        });
        bounds_group.addLayer(layer_KecMojowarno_12);
        map.removeLayer(layer_KecMojowarno_12);
        function pop_KecMojoagung_13(feature, layer) {
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

        function style_KecMojoagung_13_0() {
            return {
                pane: 'pane_KecMojoagung_13',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(84,158,0,1.0)',
            }
        }
        map.createPane('pane_KecMojoagung_13');
        map.getPane('pane_KecMojoagung_13').style.zIndex = 413;
        map.getPane('pane_KecMojoagung_13').style['mix-blend-mode'] = 'normal';
        var layer_KecMojoagung_13 = new L.geoJson(json_KecMojoagung_13, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecMojoagung_13',
            onEachFeature: pop_KecMojoagung_13,
            style: style_KecMojoagung_13_0,
        });
        bounds_group.addLayer(layer_KecMojoagung_13);
        map.removeLayer(layer_KecMojoagung_13);
        function pop_KecMegaluh_14(feature, layer) {
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

        function style_KecMegaluh_14_0() {
            return {
                pane: 'pane_KecMegaluh_14',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(131,88,53,1.0)',
            }
        }
        map.createPane('pane_KecMegaluh_14');
        map.getPane('pane_KecMegaluh_14').style.zIndex = 414;
        map.getPane('pane_KecMegaluh_14').style['mix-blend-mode'] = 'normal';
        var layer_KecMegaluh_14 = new L.geoJson(json_KecMegaluh_14, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecMegaluh_14',
            onEachFeature: pop_KecMegaluh_14,
            style: style_KecMegaluh_14_0,
        });
        bounds_group.addLayer(layer_KecMegaluh_14);
        map.removeLayer(layer_KecMegaluh_14);
        function pop_KecKesamben_15(feature, layer) {
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

        function style_KecKesamben_15_0() {
            return {
                pane: 'pane_KecKesamben_15',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(137,63,95,1.0)',
            }
        }
        map.createPane('pane_KecKesamben_15');
        map.getPane('pane_KecKesamben_15').style.zIndex = 415;
        map.getPane('pane_KecKesamben_15').style['mix-blend-mode'] = 'normal';
        var layer_KecKesamben_15 = new L.geoJson(json_KecKesamben_15, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecKesamben_15',
            onEachFeature: pop_KecKesamben_15,
            style: style_KecKesamben_15_0,
        });
        bounds_group.addLayer(layer_KecKesamben_15);
        map.removeLayer(layer_KecKesamben_15);
        function pop_KecKabuh_16(feature, layer) {
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

        function style_KecKabuh_16_0() {
            return {
                pane: 'pane_KecKabuh_16',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(216,54,57,1.0)',
            }
        }
        map.createPane('pane_KecKabuh_16');
        map.getPane('pane_KecKabuh_16').style.zIndex = 416;
        map.getPane('pane_KecKabuh_16').style['mix-blend-mode'] = 'normal';
        var layer_KecKabuh_16 = new L.geoJson(json_KecKabuh_16, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecKabuh_16',
            onEachFeature: pop_KecKabuh_16,
            style: style_KecKabuh_16_0,
        });
        bounds_group.addLayer(layer_KecKabuh_16);
        map.removeLayer(layer_KecKabuh_16);
        function pop_KecJombang_17(feature, layer) {
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

        function style_KecJombang_17_0() {
            return {
                pane: 'pane_KecJombang_17',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(235,124,27,1.0)',
            }
        }
        map.createPane('pane_KecJombang_17');
        map.getPane('pane_KecJombang_17').style.zIndex = 417;
        map.getPane('pane_KecJombang_17').style['mix-blend-mode'] = 'normal';
        var layer_KecJombang_17 = new L.geoJson(json_KecJombang_17, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecJombang_17',
            onEachFeature: pop_KecJombang_17,
            style: style_KecJombang_17_0,
        });
        bounds_group.addLayer(layer_KecJombang_17);
        map.removeLayer(layer_KecJombang_17);
        function pop_KecJogoroto_18(feature, layer) {
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

        function style_KecJogoroto_18_0() {
            return {
                pane: 'pane_KecJogoroto_18',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(76,94,213,1.0)',
            }
        }
        map.createPane('pane_KecJogoroto_18');
        map.getPane('pane_KecJogoroto_18').style.zIndex = 418;
        map.getPane('pane_KecJogoroto_18').style['mix-blend-mode'] = 'normal';
        var layer_KecJogoroto_18 = new L.geoJson(json_KecJogoroto_18, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecJogoroto_18',
            onEachFeature: pop_KecJogoroto_18,
            style: style_KecJogoroto_18_0,
        });
        bounds_group.addLayer(layer_KecJogoroto_18);
        map.removeLayer(layer_KecJogoroto_18);
        function pop_KecGudo_19(feature, layer) {
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

        function style_KecGudo_19_0() {
            return {
                pane: 'pane_KecGudo_19',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(25,63,26,1.0)',
            }
        }
        map.createPane('pane_KecGudo_19');
        map.getPane('pane_KecGudo_19').style.zIndex = 419;
        map.getPane('pane_KecGudo_19').style['mix-blend-mode'] = 'normal';
        var layer_KecGudo_19 = new L.geoJson(json_KecGudo_19, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecGudo_19',
            onEachFeature: pop_KecGudo_19,
            style: style_KecGudo_19_0,
        });
        bounds_group.addLayer(layer_KecGudo_19);
        map.removeLayer(layer_KecGudo_19);
        function pop_KecDiwek_20(feature, layer) {
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

        function style_KecDiwek_20_0() {
            return {
                pane: 'pane_KecDiwek_20',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(53,131,126,1.0)',
            }
        }
        map.createPane('pane_KecDiwek_20');
        map.getPane('pane_KecDiwek_20').style.zIndex = 420;
        map.getPane('pane_KecDiwek_20').style['mix-blend-mode'] = 'normal';
        var layer_KecDiwek_20 = new L.geoJson(json_KecDiwek_20, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecDiwek_20',
            onEachFeature: pop_KecDiwek_20,
            style: style_KecDiwek_20_0,
        });
        bounds_group.addLayer(layer_KecDiwek_20);
        map.removeLayer(layer_KecDiwek_20);
        function pop_KecBareng_21(feature, layer) {
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

        function style_KecBareng_21_0() {
            return {
                pane: 'pane_KecBareng_21',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(133,39,47,1.0)',
            }
        }
        map.createPane('pane_KecBareng_21');
        map.getPane('pane_KecBareng_21').style.zIndex = 421;
        map.getPane('pane_KecBareng_21').style['mix-blend-mode'] = 'normal';
        var layer_KecBareng_21 = new L.geoJson(json_KecBareng_21, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecBareng_21',
            onEachFeature: pop_KecBareng_21,
            style: style_KecBareng_21_0,
        });
        bounds_group.addLayer(layer_KecBareng_21);
        map.removeLayer(layer_KecBareng_21);
        function pop_KecBandarKedungmulyo_22(feature, layer) {
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

        function style_KecBandarKedungmulyo_22_0() {
            return {
                pane: 'pane_KecBandarKedungmulyo_22',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(85,255,93,1.0)',
            }
        }
        map.createPane('pane_KecBandarKedungmulyo_22');
        map.getPane('pane_KecBandarKedungmulyo_22').style.zIndex = 422;
        map.getPane('pane_KecBandarKedungmulyo_22').style['mix-blend-mode'] = 'normal';
        var layer_KecBandarKedungmulyo_22 = new L.geoJson(json_KecBandarKedungmulyo_22, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecBandarKedungmulyo_22',
            onEachFeature: pop_KecBandarKedungmulyo_22,
            style: style_KecBandarKedungmulyo_22_0,
        });
        bounds_group.addLayer(layer_KecBandarKedungmulyo_22);
        map.removeLayer(layer_KecBandarKedungmulyo_22);
        var baseMaps = {};
        var legend_jombang = L.control.layers(baseMaps,{'<img src="{{ asset('MAPPERKOTA/legend/JOMBANG/KecBandarKedungmulyo_22.png') }}" /> Kec. Bandar Kedungmulyo': layer_KecBandarKedungmulyo_22,'<img src="{{ asset('MAPPERKOTA/legend/JOMBANG/KecBareng_21.png') }}" /> Kec. Bareng': layer_KecBareng_21,'<img src="{{ asset('MAPPERKOTA/legend/JOMBANG/KecDiwek_20.png') }}" /> Kec. Diwek': layer_KecDiwek_20,'<img src="{{ asset('MAPPERKOTA/legend/JOMBANG/KecGudo_19.png') }}" /> Kec. Gudo': layer_KecGudo_19,'<img src="{{ asset('MAPPERKOTA/legend/JOMBANG/KecJogoroto_18.png') }}" /> Kec. Jogoroto': layer_KecJogoroto_18,'<img src="{{ asset('MAPPERKOTA/legend/JOMBANG/KecJombang_17.png') }}" /> Kec. Jombang': layer_KecJombang_17,'<img src="{{ asset('MAPPERKOTA/legend/JOMBANG/KecKabuh_16.png') }}" /> Kec. Kabuh': layer_KecKabuh_16,'<img src="{{ asset('MAPPERKOTA/legend/JOMBANG/KecKesamben_15.png') }}" /> Kec. Kesamben': layer_KecKesamben_15,'<img src="{{ asset('MAPPERKOTA/legend/JOMBANG/KecMegaluh_14.png') }}" /> Kec. Megaluh': layer_KecMegaluh_14,'<img src="{{ asset('MAPPERKOTA/legend/JOMBANG/KecMojoagung_13.png') }}" /> Kec. Mojoagung': layer_KecMojoagung_13,'<img src="{{ asset('MAPPERKOTA/legend/JOMBANG/KecMojowarno_12.png') }}" /> Kec. Mojowarno': layer_KecMojowarno_12,'<img src="{{ asset('MAPPERKOTA/legend/JOMBANG/KecNgoro_11.png') }}" /> Kec. Ngoro': layer_KecNgoro_11,'<img src="{{ asset('MAPPERKOTA/legend/JOMBANG/KecKudu_10.png') }}" /> Kec. Kudu': layer_KecKudu_10,'<img src="{{ asset('MAPPERKOTA/legend/JOMBANG/KecNgusikan_9.png') }}" /> Kec. Ngusikan': layer_KecNgusikan_9,'<img src="{{ asset('MAPPERKOTA/legend/JOMBANG/KecPerak_8.png') }}" /> Kec. Perak': layer_KecPerak_8,'<img src="{{ asset('MAPPERKOTA/legend/JOMBANG/KecPeterongan_7.png') }}" /> Kec. Peterongan': layer_KecPeterongan_7,'<img src="{{ asset('MAPPERKOTA/legend/JOMBANG/KecPlandaan_6.png') }}" /> Kec. Plandaan': layer_KecPlandaan_6,'<img src="{{ asset('MAPPERKOTA/legend/JOMBANG/KecPloso_5.png') }}" /> Kec. Ploso': layer_KecPloso_5,'<img src="{{ asset('MAPPERKOTA/legend/JOMBANG/KecSumobito_4.png') }}" /> Kec. Sumobito': layer_KecSumobito_4,'<img src="{{ asset('MAPPERKOTA/legend/JOMBANG/KecTembelang_3.png') }}" /> Kec.Tembelang': layer_KecTembelang_3,'<img src="{{ asset('MAPPERKOTA/legend/JOMBANG/KecWonosalam_2.png') }}" /> Kec. Wonosalam': layer_KecWonosalam_2,'<img src="{{ asset('MAPPERKOTA/legend/LingkupKerja_1.png') }}" /> Lingkup Kerja': layer_LingkupKerja_1,'<img src="{{ asset('MAPPERKOTA/legend/LAINYA_0.png') }}" /> LAINYA': layer_LAINYA_0,});