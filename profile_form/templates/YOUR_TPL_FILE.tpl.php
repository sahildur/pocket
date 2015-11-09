<!DOCTYPE html>

<html>    
    
<head>
<title>GeoJSON example</title>

<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://openlayers.org/en/v3.10.1/css/ol.css" type="text/css">
<script src="http://openlayers.org/en/v3.10.1/build/ol.js"></script>
<style>

.axis text {
  font: 10px sans-serif;
}

.axis path,
.axis line {
  fill: none;
  stroke: #000;
  shape-rendering: crispEdges;
}

.axis path {
  display: none;
}

.isoline {
  fill: none;
  stroke: #fff;
}

#time-project span
{
    font: 20px sans-serif;
}
</style>
</head>


<body>
    <div id="time-project"><span id="timer">Time:</span><span id="day-time"></span></div>
<div class="container-fluid">

<div class="row-fluid">
  <div class="span12">
    <div id="map" class="map"></div>
  </div>
</div>

</div>
<script>
    //type in windows run
    //chrome.exe --user-data-dir="C:/Chrome dev session" --disable-web-security
    
var extent = [0, 0, 1024, 968];
var projection = new ol.proj.Projection({
  code: 'xkcd-image',
  units: 'pixels',
  extent: extent
});

//var map = new ol.Map({
//  layers: [
//    new ol.layer.Image({
//      source: new ol.source.ImageStatic({
//        attributions: [
//          new ol.Attribution({
//            html: '&copy; <a href="http://xkcd.com/license.html">xkcd</a>'
//          })
//        ],
//        url: 'http://imgs.xkcd.com/comics/online_communities.png',
//        projection: projection,
//        imageExtent: extent
//      })
//    })
//  ],
//  target: 'map',
//  view: new ol.View({
//    projection: projection,
//    center: ol.extent.getCenter(extent),
//    zoom: 2
//  })
//});
    
    
    
var vector = new ol.layer.Heatmap({
  
  
  source: new ol.source.Vector({
  url: 'http://dev-pocketcare.pantheon.io/sites/default/files/1.kml',
  format: new ol.format.KML({
    extractStyles: false
  })
}),
  
  
  radius: 7
});

var vector2 = new ol.layer.Heatmap({
  
  
  source: new ol.source.Vector({
      //url: 'http://dev-pocketcare.pantheon.io/<?php print drupal_get_path('module', 'profile_form') . '/templates/Mag5_2.kml'?>',
  //url: 'Mag5_2.kml',
  url: 'http://dev-pocketcare.pantheon.io/sites/default/files/5.kml',
  format: new ol.format.KML({
    extractStyles: false
  })
}),
  
  
  radius: 5
});

var vector3 = new ol.layer.Heatmap({
  
  
  source: new ol.source.Vector({
  //url: 'Mag5_3.kml',
  url: 'http://dev-pocketcare.pantheon.io/sites/default/files/5.kml',
  format: new ol.format.KML({
    extractStyles: false
  })
}),
  
  
  radius: 9
});


var markers0 = [];
 var markers1 = [];

markers1[0] =ol.proj.transform([ -78.791516,42.999994], 'EPSG:4326', 'EPSG:3857');
markers1[1] =ol.proj.transform([ -78.791198,43.000196], 'EPSG:4326', 'EPSG:3857');
markers1[2] =ol.proj.transform([ -78.79097,43.000446], 'EPSG:4326', 'EPSG:3857');
markers1[3] =ol.proj.transform([ -78.790281,43.000457], 'EPSG:4326', 'EPSG:3857');
markers1[4] =ol.proj.transform([ -78.789677,43.000248], 'EPSG:4326', 'EPSG:3857');
markers1[5] =ol.proj.transform([ -78.789677,43.000248], 'EPSG:4326', 'EPSG:3857');
markers1[6] =ol.proj.transform([ -78.788546,43.000422], 'EPSG:4326', 'EPSG:3857');
markers1[7] =ol.proj.transform([ -78.788399,43.000738], 'EPSG:4326', 'EPSG:3857');
markers1[8] =ol.proj.transform([ -78.787444,43.000724], 'EPSG:4326', 'EPSG:3857');
markers1[9] =ol.proj.transform([ -78.786522,43.000735], 'EPSG:4326', 'EPSG:3857');
markers1[10] =ol.proj.transform([ -78.785377,43.000745], 'EPSG:4326', 'EPSG:3857');
markers1[11] =ol.proj.transform([ -78.785348,42.999831], 'EPSG:4326', 'EPSG:3857');
markers1[12] =ol.proj.transform([ -78.785363,42.999247], 'EPSG:4326', 'EPSG:3857');
markers1[13] =ol.proj.transform([ -78.787054,42.999192], 'EPSG:4326', 'EPSG:3857');
markers1[14] =ol.proj.transform([ -78.787498,42.999171], 'EPSG:4326', 'EPSG:3857');
markers1[15] =ol.proj.transform([ -78.789164,42.999077], 'EPSG:4326', 'EPSG:3857');
markers1[16] =ol.proj.transform([ -78.78913,42.998065], 'EPSG:4326', 'EPSG:3857');
markers1[17] =ol.proj.transform([ -78.790865,42.99804], 'EPSG:4326', 'EPSG:3857');
markers1[18] =ol.proj.transform([ -78.790951,42.997519], 'EPSG:4326', 'EPSG:3857');
markers1[19] =ol.proj.transform([ -78.792325,42.99718], 'EPSG:4326', 'EPSG:3857');
markers1[20] =ol.proj.transform([ -78.792024,42.995911], 'EPSG:4326', 'EPSG:3857');
markers1[21] =ol.proj.transform([ -78.795456,42.997296], 'EPSG:4326', 'EPSG:3857');
markers1[22] =ol.proj.transform([ -78.796612,42.99989], 'EPSG:4326', 'EPSG:3857');
markers1[23] =ol.proj.transform([ -78.798685,42.999963], 'EPSG:4326', 'EPSG:3857');
markers1[24] =ol.proj.transform([ -78.798784,43.004291], 'EPSG:4326', 'EPSG:3857');
markers1[25] =ol.proj.transform([ -78.80279,43.004321], 'EPSG:4326', 'EPSG:3857');
markers1[26] =ol.proj.transform([ -78.802771,43.003428], 'EPSG:4326', 'EPSG:3857');
markers1[27] =ol.proj.transform([ -78.802897,43.001632], 'EPSG:4326', 'EPSG:3857');
markers1[28] =ol.proj.transform([ -78.803778,42.99979], 'EPSG:4326', 'EPSG:3857');
markers1[29] =ol.proj.transform([ -78.806424,42.997763], 'EPSG:4326', 'EPSG:3857');
markers1[30] =ol.proj.transform([ -78.809069,42.997855], 'EPSG:4326', 'EPSG:3857');
markers1[31] =ol.proj.transform([ -78.810958,42.999606], 'EPSG:4326', 'EPSG:3857');
markers1[32] =ol.proj.transform([ -78.813225,43.001264], 'EPSG:4326', 'EPSG:3857');
markers1[33] =ol.proj.transform([ -78.815744,43.002553], 'EPSG:4326', 'EPSG:3857');
markers1[34] =ol.proj.transform([ -78.817823,43.003521], 'EPSG:4326', 'EPSG:3857');
markers1[35] =ol.proj.transform([ -78.820342,43.003889], 'EPSG:4326', 'EPSG:3857');
markers1[36] =ol.proj.transform([ -78.822231,43.004073], 'EPSG:4326', 'EPSG:3857');
markers1[37] =ol.proj.transform([ -78.822483,43.001816], 'EPSG:4326', 'EPSG:3857');
markers1[38] =ol.proj.transform([ -78.822483,42.998869], 'EPSG:4326', 'EPSG:3857');
markers1[39] =ol.proj.transform([ -78.822609,42.995875], 'EPSG:4326', 'EPSG:3857');
markers1[40] =ol.proj.transform([ -78.822609,42.991959], 'EPSG:4326', 'EPSG:3857');
markers1[41] =ol.proj.transform([ -78.822861,42.987352], 'EPSG:4326', 'EPSG:3857');
markers1[42] =ol.proj.transform([ -78.82305,42.980856], 'EPSG:4326', 'EPSG:3857');
markers1[43] =ol.proj.transform([ -78.813981,42.980073], 'EPSG:4326', 'EPSG:3857');
markers1[44] =ol.proj.transform([ -78.813666,42.975235], 'EPSG:4326', 'EPSG:3857');
markers1[45] =ol.proj.transform([ -78.813792,42.969936], 'EPSG:4326', 'EPSG:3857');
markers1[46] =ol.proj.transform([ -78.813981,42.965189], 'EPSG:4326', 'EPSG:3857');
markers1[47] =ol.proj.transform([ -78.813918,42.96058], 'EPSG:4326', 'EPSG:3857');
markers1[48] =ol.proj.transform([ -78.817823,42.957861], 'EPSG:4326', 'EPSG:3857');
markers1[49] =ol.proj.transform([ -78.821161,42.955326], 'EPSG:4326', 'EPSG:3857');
markers1[50] =ol.proj.transform([ -78.821058,42.954501], 'EPSG:4326', 'EPSG:3857');
markers1[51] =ol.proj.transform([ -78.819815,42.953806], 'EPSG:4326', 'EPSG:3857');

var extent = [0, 0, 1024, 968];
var projection = new ol.proj.Projection({
  code: 'xkcd-image',
  units: 'pixels',
  extent: extent
});
var image_test_layer=new ol.layer.Image({
      source: new ol.source.ImageStatic({
        attributions: [
          new ol.Attribution({
            html: '&copy; <a href="http://xkcd.com/license.html">xkcd</a>'
          })
        ],
        url: 'http://imgs.xkcd.com/comics/online_communities.png',
        projection: projection,
        imageExtent: extent
      })
    });



var geojsonObject = {
  'type': 'FeatureCollection',
  'crs': {
    'type': 'name',
    'properties': {
      'name': 'EPSG:3857'
    }
  },
  'features': [
    {
      'type': 'Feature',
      'geometry': {
        'type': 'Point',
        'coordinates': ol.proj.transform([ -78.791516,42.999997], 'EPSG:4326', 'EPSG:3857')
      }
    },
    {
      'type': 'Feature',
      'geometry': {
        'type': 'LineString',
        'coordinates': [[4e6, -2e6], [8e6, 2e6]]
      }
    },
    {
      'type': 'Feature',
      'geometry': {
        'type': 'LineString',
        'coordinates': [[4e6, 2e6], [8e6, -2e6]]
      }
    },
    {
      'type': 'Feature',
      'geometry': {
        'type': 'LineString',
        'coordinates': markers0
      }
    },
    {
      'type': 'Feature',
      'geometry': {
        'type': 'Polygon',
        'coordinates': [[[-5e6, -1e6], [-4e6, 1e6], [-3e6, -1e6]]]
      }
    },
    {
      'type': 'Feature',
      'geometry': {
        'type': 'MultiLineString',
        'coordinates': [
          [[-1e6, 7.5e5], [-1e6, 7.5e5]],
          [[-1e6, 7.5e5], [1e6, 7.5e5]],
          [[1e6, 7.5e5], [7.5e5, -1e6]],
          [[7.5e5, -1e6], [7.5e5, 1e6]]
        ]
      }
    },
    {
      'type': 'Feature',
      'geometry': {
        'type': 'MultiPolygon',
        'coordinates': [
          [[[-5e6, 6e6], [-5e6, 8e6], [-3e6, 8e6], [-3e6, 6e6]]],
          [[[-2e6, 6e6], [-2e6, 8e6], [0, 8e6], [0, 6e6]]],
          [[[1e6, 6e6], [1e6, 8e6], [3e6, 8e6], [3e6, 6e6]]]
        ]
      }
    },
    {
      'type': 'Feature',
      'geometry': {
        'type': 'GeometryCollection',
        'geometries': [
          {
            'type': 'LineString',
            'coordinates': [[-5e6, -5e6], [0, -5e6]]
          },
          {
            'type': 'Point',
            'coordinates': [4e6, -5e6]
          },
          {
            'type': 'Polygon',
            'coordinates': [[[1e6, -6e6], [2e6, -4e6], [3e6, -6e6]]]
          }
        ]
      }
    }
  ]
};

var image = new ol.style.Circle({
  radius: 5,
  fill: null,
  stroke: new ol.style.Stroke({color: 'red', width: 1})
});

var styles = {
  'Point': [new ol.style.Style({
    image: image,
    width:5
  })],
  'LineString': [new ol.style.Style({
    stroke: new ol.style.Stroke({
      color: 'maroon',
      width: 4
    })
  })],
  'MultiLineString': [new ol.style.Style({
    stroke: new ol.style.Stroke({
      color: 'purple',
      width: 1
    })
  })],
  'MultiPoint': [new ol.style.Style({
    image: image
  })],
  'MultiPolygon': [new ol.style.Style({
    stroke: new ol.style.Stroke({
      color: 'yellow',
      width: 1
    }),
    fill: new ol.style.Fill({
      color: 'rgba(255, 255, 0, 0.1)'
    })
  })],
  'Polygon': [new ol.style.Style({
    stroke: new ol.style.Stroke({
      color: 'blue',
      lineDash: [4],
      width: 3
    }),
    fill: new ol.style.Fill({
      color: 'rgba(0, 0, 255, 0.1)'
    })
  })],
  'GeometryCollection': [new ol.style.Style({
    stroke: new ol.style.Stroke({
      color: 'magenta',
      width: 2
    }),
    fill: new ol.style.Fill({
      color: 'magenta'
    }),
    image: new ol.style.Circle({
      radius: 10,
      fill: null,
      stroke: new ol.style.Stroke({
        color: 'magenta'
      })
    })
  })],
  'Circle': [new ol.style.Style({
    stroke: new ol.style.Stroke({
      color: 'rgb(165,42,42)',
      width: 10
    }),
    fill: new ol.style.Fill({
      color: 'rgb(165,42,42)'//'rgba(255,0,0,0.2)'
    })
  })]
};

var styleFunction = function(feature, resolution) {
  return styles[feature.getGeometry().getType()];
};

var vectorSource = new ol.source.Vector({
  features: (new ol.format.GeoJSON()).readFeatures(geojsonObject)
});

var vectorLayer = new ol.layer.Vector({
  source: vectorSource,
  style: styleFunction
});




//vectorSource.addFeature(new ol.Feature(new ol.geom.Circle(ol.proj.transform([ -78.791516,42.999994], 'EPSG:4326', 'EPSG:3857'), 4)));
//vectorSource.addFeature(new ol.Feature(new ol.geom.Circle(ol.proj.transform([ -78.788546,43.000422], 'EPSG:4326', 'EPSG:3857'), 20)));
//vectorSource.addFeature(new ol.Feature(new ol.geom.Circle(ol.proj.transform([ -78.792024,42.995911], 'EPSG:4326', 'EPSG:3857'), 15)));
 
 var headOuterImageStyle = new ol.style.Circle({
  radius: 5,
  snapToPixel: false,
  fill: new ol.style.Fill({color: 'black'})
});



vector.getSource().on('addfeature', function(event) {
  // 2012_Earthquakes_Mag5.kml stores the magnitude of each earthquake in a
  // standards-violating <magnitude> tag in each Placemark.  We extract it from
  // the Placemark's name instead.
  var name = event.feature.get('name');
  var magnitude = parseFloat(name.substr(2));
  event.feature.set('weight', magnitude - 5);
});

var raster = new ol.layer.Tile({
  source: new ol.source.Stamen({
    layer: 'toner'
  })
});



var map = new ol.Map({
  layers: [
    new ol.layer.Tile({
      source: new ol.source.OSM()
    }),
    vectorLayer
  ],
  target: 'map',
  controls: ol.control.defaults({
    attributionOptions: /** @type {olx.control.AttributionOptions} */ ({
      collapsible: false
    })
  }),
  view: new ol.View({
    center: ol.proj.transform([ -78.78958,42.99900], 'EPSG:4326', 'EPSG:3857'), 
    //projection: projection,
    zoom: 16
  })
});
//window.setTimeout(myFunction, 3000);
//function myFunction() {
//map.removeLayer(vectorLayer);
//}
function createCircleOutOverlay(position) {
                var elem = document.createElement('div');
                elem.setAttribute('class', 'circleOut');

                return new ol.Overlay({
                    element: elem,
                    position: position,
                    positioning: 'center-center'
                });
            }
var myVar = setInterval(myTimer, 1500);
overlay = createCircleOutOverlay(markers1[1]);
                        map.addOverlay(overlay);
var tempo=1;
var upto=27;
var r=1;

var timer=1

function myTimer() {

    if(timer==24)
    {timer=1;
    }
    if(r<upto)
    {
        var temarr=[];
        temarr=markers1.slice(0,0+r);
       // console.log(temarr);
      //  console.log(r);
        //[markers1[0],markers1[1],markers1[2],markers1[3]]
        vectorSource.clear();
        vectorSource.addFeature(new ol.Feature(new ol.geom.LineString(temarr)));
            var headPoint = new ol.geom.Point(temarr[temarr.length - 1]);
  var headFeature = new ol.Feature(headPoint);
  //vectorSource.removeFeature(a);
vectorSource.addFeature(headFeature, headOuterImageStyle);
        
    }
    
    r++;
    if(r==upto)
    {
        r=1;
        vectorSource.clear();
    }
    //console.log(r);
        
        if (tempo==1)
    {tempo=2;
    map.removeLayer(vector3);
   map.addLayer(vector);
   console.log('helo');
            map.addLayer(image_test_layer);
   
   document.getElementById("day-time").innerHTML=timer+":00 hours";
    timer++;
        }
    else if (tempo==2)
    {
        tempo=0;
   map.addLayer(vector2);
            map.removeLayer(vector);
   document.getElementById("day-time").innerHTML=timer+":00 hours";
    timer++; 
    }
    else
    {
        tempo=1;
        map.addLayer(vector3);
            map.removeLayer(vector2);
   document.getElementById("day-time").innerHTML=timer+":00 hours";
    timer++;         
    }
        console.log(tempo);
}


$( document ).ready(function() {
   //alert('document is ready');
});
</script>
</body>
</html>