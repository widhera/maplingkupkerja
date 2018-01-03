var wms_layers = [];
var format_INDONESIA_KEC_0 = new ol.format.GeoJSON();
var features_INDONESIA_KEC_0 = format_INDONESIA_KEC_0.readFeatures(json_INDONESIA_KEC_0, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_INDONESIA_KEC_0 = new ol.source.Vector({
    attributions: [new ol.Attribution({html: '<a href=""></a>'})],
});
jsonSource_INDONESIA_KEC_0.addFeatures(features_INDONESIA_KEC_0);var lyr_INDONESIA_KEC_0 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_INDONESIA_KEC_0, 
                style: style_INDONESIA_KEC_0,
                title: '<img src="styles/legend/INDONESIA_KEC_0.png" /> INDONESIA_KEC'
            });

lyr_INDONESIA_KEC_0.setVisible(true);
var layersList = [lyr_INDONESIA_KEC_0];
lyr_INDONESIA_KEC_0.set('fieldAliases', {'ID': 'ID', 'ID_Kec': 'ID_Kec', 'Kecamatan': 'Kecamatan', 'xcoord': 'xcoord', 'ycoord': 'ycoord', 'kode_prop': 'kode_prop', 'kode_kab': 'kode_kab', 'orig_ogc_fid': 'orig_ogc_fid', });
lyr_INDONESIA_KEC_0.set('fieldImages', {'ID': 'TextEdit', 'ID_Kec': 'TextEdit', 'Kecamatan': 'TextEdit', 'xcoord': 'TextEdit', 'ycoord': 'TextEdit', 'kode_prop': 'TextEdit', 'kode_kab': 'TextEdit', 'orig_ogc_fid': 'TextEdit', });
lyr_INDONESIA_KEC_0.set('fieldLabels', {'ID': 'no label', 'ID_Kec': 'no label', 'Kecamatan': 'no label', 'xcoord': 'no label', 'ycoord': 'no label', 'kode_prop': 'no label', 'kode_kab': 'no label', 'orig_ogc_fid': 'no label', });
lyr_INDONESIA_KEC_0.on('precompose', function(evt) {
    evt.context.globalCompositeOperation = 'normal';
});