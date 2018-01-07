
        function pop_KecWilangan_2(feature, layer) {
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

        function style_KecWilangan_2_0() {
            return {
                pane: 'pane_KecWilangan_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(201,201,117,1.0)',
            }
        }
        map.createPane('pane_KecWilangan_2');
        map.getPane('pane_KecWilangan_2').style.zIndex = 402;
        map.getPane('pane_KecWilangan_2').style['mix-blend-mode'] = 'normal';
        var layer_KecWilangan_2 = new L.geoJson(json_KecWilangan_2, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecWilangan_2',
            onEachFeature: pop_KecWilangan_2,
            style: style_KecWilangan_2_0,
        });
        bounds_group.addLayer(layer_KecWilangan_2);
        map.removeLayer(layer_KecWilangan_2);
        function pop_KecTanjunganom_3(feature, layer) {
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

        function style_KecTanjunganom_3_0() {
            return {
                pane: 'pane_KecTanjunganom_3',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(148,31,29,1.0)',
            }
        }
        map.createPane('pane_KecTanjunganom_3');
        map.getPane('pane_KecTanjunganom_3').style.zIndex = 403;
        map.getPane('pane_KecTanjunganom_3').style['mix-blend-mode'] = 'normal';
        var layer_KecTanjunganom_3 = new L.geoJson(json_KecTanjunganom_3, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecTanjunganom_3',
            onEachFeature: pop_KecTanjunganom_3,
            style: style_KecTanjunganom_3_0,
        });
        bounds_group.addLayer(layer_KecTanjunganom_3);
        map.removeLayer(layer_KecTanjunganom_3);
        function pop_KecSukomoro_4(feature, layer) {
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

        function style_KecSukomoro_4_0() {
            return {
                pane: 'pane_KecSukomoro_4',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(219,240,171,1.0)',
            }
        }
        map.createPane('pane_KecSukomoro_4');
        map.getPane('pane_KecSukomoro_4').style.zIndex = 404;
        map.getPane('pane_KecSukomoro_4').style['mix-blend-mode'] = 'normal';
        var layer_KecSukomoro_4 = new L.geoJson(json_KecSukomoro_4, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecSukomoro_4',
            onEachFeature: pop_KecSukomoro_4,
            style: style_KecSukomoro_4_0,
        });
        bounds_group.addLayer(layer_KecSukomoro_4);
        map.removeLayer(layer_KecSukomoro_4);
        function pop_KecSawahan_5(feature, layer) {
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

        function style_KecSawahan_5_0() {
            return {
                pane: 'pane_KecSawahan_5',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(155,173,104,1.0)',
            }
        }
        map.createPane('pane_KecSawahan_5');
        map.getPane('pane_KecSawahan_5').style.zIndex = 405;
        map.getPane('pane_KecSawahan_5').style['mix-blend-mode'] = 'normal';
        var layer_KecSawahan_5 = new L.geoJson(json_KecSawahan_5, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecSawahan_5',
            onEachFeature: pop_KecSawahan_5,
            style: style_KecSawahan_5_0,
        });
        bounds_group.addLayer(layer_KecSawahan_5);
        map.removeLayer(layer_KecSawahan_5);
        function pop_KecRejoso_6(feature, layer) {
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

        function style_KecRejoso_6_0() {
            return {
                pane: 'pane_KecRejoso_6',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(245,22,6,1.0)',
            }
        }
        map.createPane('pane_KecRejoso_6');
        map.getPane('pane_KecRejoso_6').style.zIndex = 406;
        map.getPane('pane_KecRejoso_6').style['mix-blend-mode'] = 'normal';
        var layer_KecRejoso_6 = new L.geoJson(json_KecRejoso_6, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecRejoso_6',
            onEachFeature: pop_KecRejoso_6,
            style: style_KecRejoso_6_0,
        });
        bounds_group.addLayer(layer_KecRejoso_6);
        map.removeLayer(layer_KecRejoso_6);
        function pop_KecPrambon_7(feature, layer) {
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

        function style_KecPrambon_7_0() {
            return {
                pane: 'pane_KecPrambon_7',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(83,78,45,1.0)',
            }
        }
        map.createPane('pane_KecPrambon_7');
        map.getPane('pane_KecPrambon_7').style.zIndex = 407;
        map.getPane('pane_KecPrambon_7').style['mix-blend-mode'] = 'normal';
        var layer_KecPrambon_7 = new L.geoJson(json_KecPrambon_7, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecPrambon_7',
            onEachFeature: pop_KecPrambon_7,
            style: style_KecPrambon_7_0,
        });
        bounds_group.addLayer(layer_KecPrambon_7);
        map.removeLayer(layer_KecPrambon_7);
        function pop_KecPatianrowo_8(feature, layer) {
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

        function style_KecPatianrowo_8_0() {
            return {
                pane: 'pane_KecPatianrowo_8',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(239,219,63,1.0)',
            }
        }
        map.createPane('pane_KecPatianrowo_8');
        map.getPane('pane_KecPatianrowo_8').style.zIndex = 408;
        map.getPane('pane_KecPatianrowo_8').style['mix-blend-mode'] = 'normal';
        var layer_KecPatianrowo_8 = new L.geoJson(json_KecPatianrowo_8, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecPatianrowo_8',
            onEachFeature: pop_KecPatianrowo_8,
            style: style_KecPatianrowo_8_0,
        });
        bounds_group.addLayer(layer_KecPatianrowo_8);
        map.removeLayer(layer_KecPatianrowo_8);
        function pop_KecPace_9(feature, layer) {
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

        function style_KecPace_9_0() {
            return {
                pane: 'pane_KecPace_9',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(53,131,57,1.0)',
            }
        }
        map.createPane('pane_KecPace_9');
        map.getPane('pane_KecPace_9').style.zIndex = 409;
        map.getPane('pane_KecPace_9').style['mix-blend-mode'] = 'normal';
        var layer_KecPace_9 = new L.geoJson(json_KecPace_9, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecPace_9',
            onEachFeature: pop_KecPace_9,
            style: style_KecPace_9_0,
        });
        bounds_group.addLayer(layer_KecPace_9);
        map.removeLayer(layer_KecPace_9);
        function pop_KecNgronggot_10(feature, layer) {
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

        function style_KecNgronggot_10_0() {
            return {
                pane: 'pane_KecNgronggot_10',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(143,193,234,1.0)',
            }
        }
        map.createPane('pane_KecNgronggot_10');
        map.getPane('pane_KecNgronggot_10').style.zIndex = 410;
        map.getPane('pane_KecNgronggot_10').style['mix-blend-mode'] = 'normal';
        var layer_KecNgronggot_10 = new L.geoJson(json_KecNgronggot_10, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecNgronggot_10',
            onEachFeature: pop_KecNgronggot_10,
            style: style_KecNgronggot_10_0,
        });
        bounds_group.addLayer(layer_KecNgronggot_10);
        map.removeLayer(layer_KecNgronggot_10);
        function pop_KecNgluyu_11(feature, layer) {
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

        function style_KecNgluyu_11_0() {
            return {
                pane: 'pane_KecNgluyu_11',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(10,72,147,1.0)',
            }
        }
        map.createPane('pane_KecNgluyu_11');
        map.getPane('pane_KecNgluyu_11').style.zIndex = 411;
        map.getPane('pane_KecNgluyu_11').style['mix-blend-mode'] = 'normal';
        var layer_KecNgluyu_11 = new L.geoJson(json_KecNgluyu_11, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecNgluyu_11',
            onEachFeature: pop_KecNgluyu_11,
            style: style_KecNgluyu_11_0,
        });
        bounds_group.addLayer(layer_KecNgluyu_11);
        map.removeLayer(layer_KecNgluyu_11);
        function pop_KecNgetos_12(feature, layer) {
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

        function style_KecNgetos_12_0() {
            return {
                pane: 'pane_KecNgetos_12',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(223,76,91,1.0)',
            }
        }
        map.createPane('pane_KecNgetos_12');
        map.getPane('pane_KecNgetos_12').style.zIndex = 412;
        map.getPane('pane_KecNgetos_12').style['mix-blend-mode'] = 'normal';
        var layer_KecNgetos_12 = new L.geoJson(json_KecNgetos_12, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecNgetos_12',
            onEachFeature: pop_KecNgetos_12,
            style: style_KecNgetos_12_0,
        });
        bounds_group.addLayer(layer_KecNgetos_12);
        map.removeLayer(layer_KecNgetos_12);
        function pop_KecNganjuk_13(feature, layer) {
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

        function style_KecNganjuk_13_0() {
            return {
                pane: 'pane_KecNganjuk_13',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(23,238,228,1.0)',
            }
        }
        map.createPane('pane_KecNganjuk_13');
        map.getPane('pane_KecNganjuk_13').style.zIndex = 413;
        map.getPane('pane_KecNganjuk_13').style['mix-blend-mode'] = 'normal';
        var layer_KecNganjuk_13 = new L.geoJson(json_KecNganjuk_13, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecNganjuk_13',
            onEachFeature: pop_KecNganjuk_13,
            style: style_KecNganjuk_13_0,
        });
        bounds_group.addLayer(layer_KecNganjuk_13);
        map.removeLayer(layer_KecNganjuk_13);
        function pop_KecLoceret_14(feature, layer) {
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

        function style_KecLoceret_14_0() {
            return {
                pane: 'pane_KecLoceret_14',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(255,230,35,1.0)',
            }
        }
        map.createPane('pane_KecLoceret_14');
        map.getPane('pane_KecLoceret_14').style.zIndex = 414;
        map.getPane('pane_KecLoceret_14').style['mix-blend-mode'] = 'normal';
        var layer_KecLoceret_14 = new L.geoJson(json_KecLoceret_14, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecLoceret_14',
            onEachFeature: pop_KecLoceret_14,
            style: style_KecLoceret_14_0,
        });
        bounds_group.addLayer(layer_KecLoceret_14);
        map.removeLayer(layer_KecLoceret_14);
        function pop_KecLengkong_15(feature, layer) {
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

        function style_KecLengkong_15_0() {
            return {
                pane: 'pane_KecLengkong_15',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(57,255,67,1.0)',
            }
        }
        map.createPane('pane_KecLengkong_15');
        map.getPane('pane_KecLengkong_15').style.zIndex = 415;
        map.getPane('pane_KecLengkong_15').style['mix-blend-mode'] = 'normal';
        var layer_KecLengkong_15 = new L.geoJson(json_KecLengkong_15, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecLengkong_15',
            onEachFeature: pop_KecLengkong_15,
            style: style_KecLengkong_15_0,
        });
        bounds_group.addLayer(layer_KecLengkong_15);
        map.removeLayer(layer_KecLengkong_15);
        function pop_KecKertosono_16(feature, layer) {
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

        function style_KecKertosono_16_0() {
            return {
                pane: 'pane_KecKertosono_16',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(139,206,138,1.0)',
            }
        }
        map.createPane('pane_KecKertosono_16');
        map.getPane('pane_KecKertosono_16').style.zIndex = 416;
        map.getPane('pane_KecKertosono_16').style['mix-blend-mode'] = 'normal';
        var layer_KecKertosono_16 = new L.geoJson(json_KecKertosono_16, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecKertosono_16',
            onEachFeature: pop_KecKertosono_16,
            style: style_KecKertosono_16_0,
        });
        bounds_group.addLayer(layer_KecKertosono_16);
        map.removeLayer(layer_KecKertosono_16);
        function pop_KecJatikalen_17(feature, layer) {
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

        function style_KecJatikalen_17_0() {
            return {
                pane: 'pane_KecJatikalen_17',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(169,153,128,1.0)',
            }
        }
        map.createPane('pane_KecJatikalen_17');
        map.getPane('pane_KecJatikalen_17').style.zIndex = 417;
        map.getPane('pane_KecJatikalen_17').style['mix-blend-mode'] = 'normal';
        var layer_KecJatikalen_17 = new L.geoJson(json_KecJatikalen_17, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecJatikalen_17',
            onEachFeature: pop_KecJatikalen_17,
            style: style_KecJatikalen_17_0,
        });
        bounds_group.addLayer(layer_KecJatikalen_17);
        map.removeLayer(layer_KecJatikalen_17);
        function pop_KecGondang_18(feature, layer) {
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

        function style_KecGondang_18_0() {
            return {
                pane: 'pane_KecGondang_18',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(176,143,8,1.0)',
            }
        }
        map.createPane('pane_KecGondang_18');
        map.getPane('pane_KecGondang_18').style.zIndex = 418;
        map.getPane('pane_KecGondang_18').style['mix-blend-mode'] = 'normal';
        var layer_KecGondang_18 = new L.geoJson(json_KecGondang_18, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecGondang_18',
            onEachFeature: pop_KecGondang_18,
            style: style_KecGondang_18_0,
        });
        bounds_group.addLayer(layer_KecGondang_18);
        map.removeLayer(layer_KecGondang_18);
        function pop_KecBerbek_19(feature, layer) {
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

        function style_KecBerbek_19_0() {
            return {
                pane: 'pane_KecBerbek_19',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(154,155,191,1.0)',
            }
        }
        map.createPane('pane_KecBerbek_19');
        map.getPane('pane_KecBerbek_19').style.zIndex = 419;
        map.getPane('pane_KecBerbek_19').style['mix-blend-mode'] = 'normal';
        var layer_KecBerbek_19 = new L.geoJson(json_KecBerbek_19, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecBerbek_19',
            onEachFeature: pop_KecBerbek_19,
            style: style_KecBerbek_19_0,
        });
        bounds_group.addLayer(layer_KecBerbek_19);
        map.removeLayer(layer_KecBerbek_19);
        function pop_KecBaron_20(feature, layer) {
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

        function style_KecBaron_20_0() {
            return {
                pane: 'pane_KecBaron_20',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(131,124,53,1.0)',
            }
        }
        map.createPane('pane_KecBaron_20');
        map.getPane('pane_KecBaron_20').style.zIndex = 420;
        map.getPane('pane_KecBaron_20').style['mix-blend-mode'] = 'normal';
        var layer_KecBaron_20 = new L.geoJson(json_KecBaron_20, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecBaron_20',
            onEachFeature: pop_KecBaron_20,
            style: style_KecBaron_20_0,
        });
        bounds_group.addLayer(layer_KecBaron_20);
        map.removeLayer(layer_KecBaron_20);
        function pop_KecBagor_21(feature, layer) {
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

        function style_KecBagor_21_0() {
            return {
                pane: 'pane_KecBagor_21',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(53,131,57,1.0)',
            }
        }
        map.createPane('pane_KecBagor_21');
        map.getPane('pane_KecBagor_21').style.zIndex = 421;
        map.getPane('pane_KecBagor_21').style['mix-blend-mode'] = 'normal';
        var layer_KecBagor_21 = new L.geoJson(json_KecBagor_21, {
            attribution: '<a href=""></a>',
            pane: 'pane_KecBagor_21',
            onEachFeature: pop_KecBagor_21,
            style: style_KecBagor_21_0,
        });
        bounds_group.addLayer(layer_KecBagor_21);
        map.removeLayer(layer_KecBagor_21);
        var baseMaps = {};
        var legend_nganjuk = L.control.layers(baseMaps,{'<img src="{{ asset('MAPPERKOTA/legend/NGANJUK/KecBagor_21.png') }}" /> Kec. Bagor': layer_KecBagor_21,'<img src="{{ asset('MAPPERKOTA/legend/NGANJUK/KecBaron_20.png') }}" /> Kec. Baron': layer_KecBaron_20,'<img src="{{ asset('MAPPERKOTA/legend/NGANJUK/KecBerbek_19.png') }}" /> Kec. Berbek': layer_KecBerbek_19,'<img src="{{ asset('MAPPERKOTA/legend/NGANJUK/KecGondang_18.png') }}" /> Kec. Gondang': layer_KecGondang_18,'<img src="{{ asset('MAPPERKOTA/legend/NGANJUK/KecJatikalen_17.png') }}" /> Kec. Jatikalen': layer_KecJatikalen_17,'<img src="{{ asset('MAPPERKOTA/legend/NGANJUK/KecKertosono_16.png') }}" /> Kec. Kertosono': layer_KecKertosono_16,'<img src="{{ asset('MAPPERKOTA/legend/NGANJUK/KecLengkong_15.png') }}" /> Kec. Lengkong': layer_KecLengkong_15,'<img src="{{ asset('MAPPERKOTA/legend/NGANJUK/KecLoceret_14.png') }}" /> Kec. Loceret': layer_KecLoceret_14,'<img src="{{ asset('MAPPERKOTA/legend/NGANJUK/KecNganjuk_13.png') }}" /> Kec. Nganjuk': layer_KecNganjuk_13,'<img src="{{ asset('MAPPERKOTA/legend/NGANJUK/KecNgetos_12.png') }}" /> Kec. Ngetos': layer_KecNgetos_12,'<img src="{{ asset('MAPPERKOTA/legend/NGANJUK/KecNgluyu_11.png') }}" /> Kec. Ngluyu': layer_KecNgluyu_11,'<img src="{{ asset('MAPPERKOTA/legend/NGANJUK/KecNgronggot_10.png') }}" /> Kec. Ngronggot': layer_KecNgronggot_10,'<img src="{{ asset('MAPPERKOTA/legend/NGANJUK/KecPace_9.png') }}" /> Kec. Pace': layer_KecPace_9,'<img src="{{ asset('MAPPERKOTA/legend/NGANJUK/KecPatianrowo_8.png') }}" /> Kec. Patianrowo': layer_KecPatianrowo_8,'<img src="{{ asset('MAPPERKOTA/legend/NGANJUK/KecPrambon_7.png') }}" /> Kec. Prambon': layer_KecPrambon_7,'<img src="{{ asset('MAPPERKOTA/legend/NGANJUK/KecRejoso_6.png') }}" /> Kec. Rejoso': layer_KecRejoso_6,'<img src="{{ asset('MAPPERKOTA/legend/NGANJUK/KecSawahan_5.png') }}" /> Kec. Sawahan': layer_KecSawahan_5,'<img src="{{ asset('MAPPERKOTA/legend/NGANJUK/KecSukomoro_4.png') }}" /> Kec. Sukomoro': layer_KecSukomoro_4,'<img src="{{ asset('MAPPERKOTA/legend/NGANJUK/KecTanjunganom_3.png') }}" /> Kec. Tanjunganom': layer_KecTanjunganom_3,'<img src="{{ asset('MAPPERKOTA/legend/NGANJUK/KecWilangan_2.png') }}" /> Kec. Wilangan': layer_KecWilangan_2,'<img src="{{ asset('MAPPERKOTA/legend/LingkupKerja_1.png') }}" /> Lingkup Kerja': layer_LingkupKerja_1,'<img src="{{ asset('MAPPERKOTA/legend/LAINYA_0.png') }}" /> LAINYA': layer_LAINYA_0,});
