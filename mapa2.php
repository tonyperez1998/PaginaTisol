
<!-- https://github.com/Esri/calcite-maps  -->


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
  <meta name="description" content="ArcGIS JS v4, Calcite Maps and Bootstrap Example">
 
  <title>TISOL</title>

  <!-- Calcite Maps Bootstrap -->
  <link rel="stylesheet" href="https://esri.github.io/calcite-maps/dist/css/calcite-maps-bootstrap.min-v0.5.css">

  <!-- Calcite Maps -->
  <link rel="stylesheet" href="https://esri.github.io/calcite-maps/dist/css/calcite-maps-arcgis-4.x.min-v0.5.css">

  <!-- ArcGIS JS 4 -->
  <link rel="stylesheet" href="https://js.arcgis.com/4.5/esri/css/main.css">

  <style>
    html,
    body {
      margin: 0;
      padding: 0;
      height: 100%;
    }
  </style>

</head>

<body class="calcite-maps calcite-nav-top">
  <!-- Navbar -->

  <nav class="navbar calcite-navbar navbar-fixed-top calcite-text-light calcite-bg-dark">
    <!-- Menu -->
    <div class="dropdown calcite-dropdown calcite-text-dark calcite-bg-light" role="presentation">
      <a class="dropdown-toggle" role="menubutton" aria-haspopup="true" aria-expanded="false" tabindex="0">
        <div class="calcite-dropdown-toggle">
          <span class="sr-only">Toggle dropdown menu</span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </a>
      <ul class="dropdown-menu" role="menu">
        <li><a role="menuitem" tabindex="0" href="#" data-target="#panelBasemaps" aria-haspopup="true"><span class="glyphicon glyphicon-th-large"></span> Basemaps</a></li>
        <li><a role="menuitem" tabindex="0" href="#" data-target="#panelLegend" aria-haspopup="true"><span class="glyphicon glyphicon-list-alt"></span> Legend</a></li>
        <li><a role="menuitem" tabindex="0" href="#" data-target="#panelLayers" aria-haspopup="true"><span class="glyphicon glyphicon-list"></span> Layers</a></li>
        <li><a role="menuitem" tabindex="0" href="#" data-target="#panelPrint" aria-haspopup="true"><span class="glyphicon glyphicon-print"></span> Print</a></li>
        <li><a role="menuitem" tabindex="0" href="#" id="calciteToggleNavbar" aria-haspopup="true"><span class="glyphicon glyphicon-fullscreen"></span> Full Map</a></li>
      </ul>
    </div>
    <!-- Title -->
    <div class="calcite-title calcite-overflow-hidden">
      <span class="calcite-title-main">Mapa de ubicacion</span>
      <span class="calcite-title-divider hidden-xs"></span>
      <span class="calcite-title-sub hidden-xs">A Bootstrap theme for building modern map apps</span>
    </div>
    <!-- Nav -->
    <ul class="nav navbar-nav calcite-nav">
      <li>
        <div class="calcite-navbar-search calcite-search-expander">
          <div id="searchWidgetDiv"></div>
        </div>
      </li>
    </ul>
  </nav>
  <!--/.calcite-navbar -->

  <!-- Map  -->

  <div class="calcite-map calcite-map-absolute">
    <div id="mapViewDiv"></div>
  </div>

  <!-- /.calcite-map -->

  <!-- Panels -->

  <div class="calcite-panels calcite-panels-right calcite-text-light calcite-bg-dark panel-group">

    <!-- Panel - Basemaps -->

    <div id="panelBasemaps" class="panel collapse">
      <div id="headingBasemaps" class="panel-heading" role="tab">
        <div class="panel-title">
          <a class="panel-toggle collapsed" role="button" data-toggle="collapse" href="#collapseBasemaps"
            aria-expanded="false" aria-controls="collapseBasemaps"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span><span class="panel-label">Basemaps</span></a>
          <a class="panel-close" role="button" data-toggle="collapse" tabindex="0" href="#panelBasemaps"><span class="esri-icon esri-icon-close" aria-hidden="true"></span></a>
        </div>
      </div>
      <div id="collapseBasemaps" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingBasemaps">
        <div class="panel-body">
          <div id="basemapGalleryDiv">
          </div>
        </div>
      </div>
    </div>

    <!-- Panel - Legend -->

    <div id="panelLegend" class="panel collapse in">
      <div id="headingLegend" class="panel-heading" role="tab">
        <div class="panel-title">
          <a class="panel-toggle" role="button" data-toggle="collapse" href="#collapseLegend" aria-expanded="false" aria-controls="collapseLegend"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span><span class="panel-label">Legend</span></a> 
          <a class="panel-close" role="button" data-toggle="collapse" tabindex="0" href="#panelLegend"><span class="esri-icon esri-icon-close" aria-hidden="true"></span></a> 
        </div>
      </div>
      <div id="collapseLegend" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingLegend">
        <div class="panel-body">            
          <div id="legendDiv"></div>
        </div>
      </div>
    </div>

    <!-- Panel - Layers -->

    <div id="panelLayers" class="panel collapse">
      <div id="headingLayers" class="panel-heading" role="tab">
        <div class="panel-title">
          <a class="panel-toggle" role="button" data-toggle="collapse" href="#collapseLayers" aria-expanded="false" aria-controls="collapseLayers"><span class="glyphicon glyphicon-list" aria-hidden="true"></span><span class="panel-label">Layers</span></a> 
          <a class="panel-close" role="button" data-toggle="collapse" tabindex="0" href="#panelLayers"><span class="esri-icon esri-icon-close" aria-hidden="true"></span></a> 
        </div>
      </div>
      <div id="collapseLayers" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingLayers">
        <div class="panel-body">            
          <div id="layersDiv"></div>
        </div>
      </div>
    </div>
    
    <!-- Panel - Print -->

    <div id="panelPrint" class="panel collapse">
      <div id="headingPrint" class="panel-heading">
        <div class="panel-title">
          <a class="panel-toggle collapsed" role="button" data-toggle="collapse" href="#collapsePrint" aria-expanded="false" aria-controls="collapsePrint"><span class="glyphicon glyphicon-print" aria-hidden="true"></span><span class="panel-label">Print</span></a> 
          <a class="panel-close" role="button" data-toggle="collapse" tabindex="0" href="#panelPrint"><span class="esri-icon esri-icon-close" aria-hidden="true"></span></a>
        </div>
      </div>
      <div id="collapsePrint" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingPrint">
        <div class="panel-body">
           <div id="printDiv"></div>
        </div>
      </div>
    </div>

  </div>

  <!-- /.calcite-panels -->

  <script type="text/javascript">
    var dojoConfig = {
      packages: [{
        name: "bootstrap",
        location: "https://esri.github.io/calcite-maps/dist/vendor/dojo-bootstrap"
      },
      {
        name: "calcite-maps",
        location: "https://esri.github.io/calcite-maps/dist/js/dojo"
      }]
    };
  </script>

  <!-- ArcGIS JS 4 -->
  <script src="https://js.arcgis.com/4.5/"></script>

  <script>
    
    require([
      // ArcGIS
      "esri/WebMap",
      "esri/views/MapView",

      // Widgets
      "esri/widgets/BasemapGallery",
      "esri/widgets/Search",
      "esri/widgets/Legend",
      "esri/widgets/LayerList",
      "esri/widgets/Print",
      "esri/widgets/BasemapToggle",
      "esri/widgets/ScaleBar",

      // Bootstrap
      "bootstrap/Collapse",
      "bootstrap/Dropdown",

      // Calcite Maps
      "calcite-maps/calcitemaps-v0.5",
      // Calcite Maps ArcGIS Support
      "calcite-maps/calcitemaps-arcgis-support-v0.5",

      "dojo/domReady!"
    ], function(WebMap, MapView, Basemaps, Search, Legend, LayerList, Print, BasemapToggle, ScaleBar, Collapse, Dropdown, CalciteMaps, CalciteMapArcGISSupport) {

      /******************************************************************
       *
       * Create the map, view and widgets
       * 
       ******************************************************************/

      // Map
      var map = new WebMap({
        portalItem: {
          id: "9f91f911f58540ceaac0300c55e18fbb"
        }
      });
      
      // View
      var mapView = new MapView({
        container: "mapViewDiv",
        map: map,
        padding: {
          top: 50,
          bottom: 0
        }
      });

      // Popup and panel sync
      mapView.then(function(){
        CalciteMapArcGISSupport.setPopupPanelSync(mapView);
      });

      // Search - add to navbar
      var searchWidget = new Search({
        container: "searchWidgetDiv",
        view: mapView
      });
      CalciteMapArcGISSupport.setSearchExpandEvents(searchWidget);

      // Basemaps
      var basemaps = new Basemaps({
        container: "basemapGalleryDiv",
        view: mapView
      })
      
      // Legend
      var legendWidget = new Legend({
        container: "legendDiv",
        view: mapView
      });

      // LayerList
      var layerWidget = new LayerList({
        container: "layersDiv",
        view: mapView
      });

      // Print
      var printWidget = new Print({
        container: "printDiv",
        view: mapView,
        printServiceUrl: "https://utility.arcgisonline.com/arcgis/rest/services/Utilities/PrintingTools/GPServer/Export%20Web%20Map%20Task"
      });

      // BasemapToggle
      var basemapToggle = new BasemapToggle({
        view: mapView,
        secondBasemap: "satellite"
      });
      mapView.ui.add(basemapToggle, "bottom-right");          
      
      // Scalebar
      var scaleBar = new ScaleBar({
        view: mapView
      });
      mapView.ui.add(scaleBar, "bottom-left");

    });
  </script>

</body>
</html>