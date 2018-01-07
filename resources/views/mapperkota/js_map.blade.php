        var southWest = L.latLng(-7.3475, 111.4893),
        northEast = L.latLng(-8.0212, 112.6511),
        bounds = L.latLngBounds(southWest, northEast);
        var map = L.map('map', {
              maxBounds: bounds,zoomControl:true, maxZoom:28, minZoom:10
        }).fitBounds([[-8.04156298976,111.599830039],[-7.32391633019,112.569282544]]);
        var hash = new L.Hash(map);
        map.attributionControl.addAttribution('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a>');
        var bounds_group = new L.featureGroup([]);
        var basemap0 = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors,<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
            maxZoom: 28
        });
        basemap0.addTo(map);
