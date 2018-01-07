function pop_LAINYA_0(feature, layer) {
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
                        <th scope="row">id</th>\
                        <td>' + (feature.properties['id'] !== null ? Autolinker.link(String(feature.properties['id'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_LAINYA_0_0() {
            return {
                pane: 'pane_LAINYA_0',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.1,
                fillColor: 'rgba(253,254,255,1.0)',
            }
        }
        map.createPane('pane_LAINYA_0');
        map.getPane('pane_LAINYA_0').style.zIndex = 400;
        map.getPane('pane_LAINYA_0').style['mix-blend-mode'] = 'normal';
        var layer_LAINYA_0 = new L.geoJson(json_LAINYA_0, {
            attribution: '<a href=""></a>',
            pane: 'pane_LAINYA_0',
            onEachFeature: pop_LAINYA_0,
            style: style_LAINYA_0_0,
        });
        bounds_group.addLayer(layer_LAINYA_0);
        map.addLayer(layer_LAINYA_0);