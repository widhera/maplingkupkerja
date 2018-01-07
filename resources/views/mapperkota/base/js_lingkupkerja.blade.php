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
                color: 'rgba(0,0,0,0.572549)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(223,245,150,0.572549)',
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