
<!DOCTYPE html>
<?php require("_authentication.php") ?>
<html class="no-js before-run" lang="en">
<html class="js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths after-run" lang="en" style="height: 100%;"><head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<link href="images/discordLogo.png" rel="icon" type="image/png">
<title>Jabel Sifah Water Management</title>

<link href="https://cdn.jsdelivr.net/npm/remixicon@2.4.0/fonts/remixicon.css" rel="stylesheet">

<link rel="stylesheet" href="../plugins/bootstrap/bootstrap.css">
<link rel="stylesheet" href="../plugins/bootstrap/bootstrap-extend.css">

<link rel="stylesheet" href="../plugins/asscrollable/asScrollable.css">
<link rel="stylesheet" href="../plugins/ionicons/ionicons.min.css">
<link rel="stylesheet" href="../plugins/font-awesome/font-awesome.css">
<link rel="stylesheet" href="../plugins/bootstrap-datepicker/bootstrap-datepicker.css">
<link rel="stylesheet" href="../plugins/bootstrap-select/bootstrap-select.css">
<link rel="stylesheet" href="../plugins/c3/c3.css">
<link rel="stylesheet" href="../plugins/flag-icon-css/flag-icon.css">
<link rel="stylesheet" href="../plugins/circle/circle.css">
<link rel="stylesheet" href="../plugins/slick-carousel/slick.css">
<link rel="stylesheet" href="../plugins/styles/global.css?1021072362">
<link rel="stylesheet" href="css/style.css?1478311509">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
<script src="../plugins/bootstrap/bootstrap.js"></script>
<script src="../plugins/asscroll/jquery-asScroll.js"></script>
<script src="../plugins/mousewheel/jquery.mousewheel.js"></script>
<script src="../plugins/asscrollable/jquery.asScrollable.all.js"></script>
<script src="../plugins/ashoverscroll/jquery-asHoverScroll.js"></script>
<script src="../plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
<script src="../plugins/slick-carousel/slick.js"></script>
<script src="../plugins/slimscroll/jquery.slimscroll.js"></script>
<script src="../plugins/bootstrap-select/bootstrap-select.min.js"></script>


<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"> -->
<link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.bootstrap4.min.css">
<!--<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css">-->
<link rel="stylesheet" href="css/responsive.bootstrap4.min.css">
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">

<link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css"><script type="text/javascript" charset="UTF-8" src="https://translate.googleapis.com/translate_static/js/element/main.js"></script><style type="text/css">.apexcharts-canvas {
  position: relative;
  user-select: none;
  /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
}


/* scrollbar is not visible by default for legend, hence forcing the visibility */
.apexcharts-canvas ::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 6px;
}

.apexcharts-canvas ::-webkit-scrollbar-thumb {
  border-radius: 4px;
  background-color: rgba(0, 0, 0, .5);
  box-shadow: 0 0 1px rgba(255, 255, 255, .5);
  -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
}


.apexcharts-inner {
  position: relative;
}

.apexcharts-text tspan {
  font-family: inherit;
}

.legend-mouseover-inactive {
  transition: 0.15s ease all;
  opacity: 0.20;
}

.apexcharts-series-collapsed {
  opacity: 0;
}

.apexcharts-tooltip {
  border-radius: 5px;
  box-shadow: 2px 2px 6px -4px #999;
  cursor: default;
  font-size: 14px;
  left: 62px;
  opacity: 0;
  pointer-events: none;
  position: absolute;
  top: 20px;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  white-space: nowrap;
  z-index: 12;
  transition: 0.15s ease all;
}

.apexcharts-tooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-tooltip.apexcharts-theme-light {
  border: 1px solid #e3e3e3;
  background: rgba(255, 255, 255, 0.96);
}

.apexcharts-tooltip.apexcharts-theme-dark {
  color: #fff;
  background: rgba(30, 30, 30, 0.8);
}

.apexcharts-tooltip * {
  font-family: inherit;
}


.apexcharts-tooltip-title {
  padding: 6px;
  font-size: 15px;
  margin-bottom: 4px;
}

.apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
  background: #ECEFF1;
  border-bottom: 1px solid #ddd;
}

.apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
  background: rgba(0, 0, 0, 0.7);
  border-bottom: 1px solid #333;
}

.apexcharts-tooltip-text-y-value,
.apexcharts-tooltip-text-goals-value,
.apexcharts-tooltip-text-z-value {
  display: inline-block;
  font-weight: 600;
  margin-left: 5px;
}

.apexcharts-tooltip-text-y-label:empty,
.apexcharts-tooltip-text-y-value:empty,
.apexcharts-tooltip-text-goals-label:empty,
.apexcharts-tooltip-text-goals-value:empty,
.apexcharts-tooltip-text-z-value:empty {
  display: none;
}

.apexcharts-tooltip-text-y-value,
.apexcharts-tooltip-text-goals-value,
.apexcharts-tooltip-text-z-value {
  font-weight: 600;
}

.apexcharts-tooltip-text-goals-label, 
.apexcharts-tooltip-text-goals-value {
  padding: 6px 0 5px;
}

.apexcharts-tooltip-goals-group, 
.apexcharts-tooltip-text-goals-label, 
.apexcharts-tooltip-text-goals-value {
  display: flex;
}
.apexcharts-tooltip-text-goals-label:not(:empty),
.apexcharts-tooltip-text-goals-value:not(:empty) {
  margin-top: -6px;
}

.apexcharts-tooltip-marker {
  width: 12px;
  height: 12px;
  position: relative;
  top: 0px;
  margin-right: 10px;
  border-radius: 50%;
}

.apexcharts-tooltip-series-group {
  padding: 0 10px;
  display: none;
  text-align: left;
  justify-content: left;
  align-items: center;
}

.apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
  opacity: 1;
}

.apexcharts-tooltip-series-group.apexcharts-active,
.apexcharts-tooltip-series-group:last-child {
  padding-bottom: 4px;
}

.apexcharts-tooltip-series-group-hidden {
  opacity: 0;
  height: 0;
  line-height: 0;
  padding: 0 !important;
}

.apexcharts-tooltip-y-group {
  padding: 6px 0 5px;
}

.apexcharts-tooltip-box, .apexcharts-custom-tooltip {
  padding: 4px 8px;
}

.apexcharts-tooltip-boxPlot {
  display: flex;
  flex-direction: column-reverse;
}

.apexcharts-tooltip-box>div {
  margin: 4px 0;
}

.apexcharts-tooltip-box span.value {
  font-weight: bold;
}

.apexcharts-tooltip-rangebar {
  padding: 5px 8px;
}

.apexcharts-tooltip-rangebar .category {
  font-weight: 600;
  color: #777;
}

.apexcharts-tooltip-rangebar .series-name {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
}

.apexcharts-xaxistooltip {
  opacity: 0;
  padding: 9px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
  transition: 0.15s ease all;
}

.apexcharts-xaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-xaxistooltip:after,
.apexcharts-xaxistooltip:before {
  left: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.apexcharts-xaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-left: -6px;
}

.apexcharts-xaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-left: -7px;
}

.apexcharts-xaxistooltip-bottom:after,
.apexcharts-xaxistooltip-bottom:before {
  bottom: 100%;
}

.apexcharts-xaxistooltip-top:after,
.apexcharts-xaxistooltip-top:before {
  top: 100%;
}

.apexcharts-xaxistooltip-bottom:after {
  border-bottom-color: #ECEFF1;
}

.apexcharts-xaxistooltip-bottom:before {
  border-bottom-color: #90A4AE;
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top:after {
  border-top-color: #ECEFF1
}

.apexcharts-xaxistooltip-top:before {
  border-top-color: #90A4AE;
}

.apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
  border-top-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
  border-top-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-yaxistooltip {
  opacity: 0;
  padding: 4px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
}

.apexcharts-yaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-yaxistooltip:after,
.apexcharts-yaxistooltip:before {
  top: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.apexcharts-yaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-top: -6px;
}

.apexcharts-yaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-top: -7px;
}

.apexcharts-yaxistooltip-left:after,
.apexcharts-yaxistooltip-left:before {
  left: 100%;
}

.apexcharts-yaxistooltip-right:after,
.apexcharts-yaxistooltip-right:before {
  right: 100%;
}

.apexcharts-yaxistooltip-left:after {
  border-left-color: #ECEFF1;
}

.apexcharts-yaxistooltip-left:before {
  border-left-color: #90A4AE;
}

.apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
  border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
  border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right:after {
  border-right-color: #ECEFF1;
}

.apexcharts-yaxistooltip-right:before {
  border-right-color: #90A4AE;
}

.apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
  border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
  border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip.apexcharts-active {
  opacity: 1;
}

.apexcharts-yaxistooltip-hidden {
  display: none;
}

.apexcharts-xcrosshairs,
.apexcharts-ycrosshairs {
  pointer-events: none;
  opacity: 0;
  transition: 0.15s ease all;
}

.apexcharts-xcrosshairs.apexcharts-active,
.apexcharts-ycrosshairs.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-ycrosshairs-hidden {
  opacity: 0;
}

.apexcharts-selection-rect {
  cursor: move;
}

.svg_select_boundingRect, .svg_select_points_rot {
  pointer-events: none;
  opacity: 0;
  visibility: hidden;
}
.apexcharts-selection-rect + g .svg_select_boundingRect,
.apexcharts-selection-rect + g .svg_select_points_rot {
  opacity: 0;
  visibility: hidden;
}

.apexcharts-selection-rect + g .svg_select_points_l,
.apexcharts-selection-rect + g .svg_select_points_r {
  cursor: ew-resize;
  opacity: 1;
  visibility: visible;
}

.svg_select_points {
  fill: #efefef;
  stroke: #333;
  rx: 2;
}

.apexcharts-svg.apexcharts-zoomable.hovering-zoom {
  cursor: crosshair
}

.apexcharts-svg.apexcharts-zoomable.hovering-pan {
  cursor: move
}

.apexcharts-zoom-icon,
.apexcharts-zoomin-icon,
.apexcharts-zoomout-icon,
.apexcharts-reset-icon,
.apexcharts-pan-icon,
.apexcharts-selection-icon,
.apexcharts-menu-icon,
.apexcharts-toolbar-custom-icon {
  cursor: pointer;
  width: 20px;
  height: 20px;
  line-height: 24px;
  color: #6E8192;
  text-align: center;
}

.apexcharts-zoom-icon svg,
.apexcharts-zoomin-icon svg,
.apexcharts-zoomout-icon svg,
.apexcharts-reset-icon svg,
.apexcharts-menu-icon svg {
  fill: #6E8192;
}

.apexcharts-selection-icon svg {
  fill: #444;
  transform: scale(0.76)
}

.apexcharts-theme-dark .apexcharts-zoom-icon svg,
.apexcharts-theme-dark .apexcharts-zoomin-icon svg,
.apexcharts-theme-dark .apexcharts-zoomout-icon svg,
.apexcharts-theme-dark .apexcharts-reset-icon svg,
.apexcharts-theme-dark .apexcharts-pan-icon svg,
.apexcharts-theme-dark .apexcharts-selection-icon svg,
.apexcharts-theme-dark .apexcharts-menu-icon svg,
.apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
  fill: #f3f4f5;
}

.apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
  fill: #008FFB;
}

.apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
.apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
.apexcharts-theme-light .apexcharts-reset-icon:hover svg,
.apexcharts-theme-light .apexcharts-menu-icon:hover svg {
  fill: #333;
}

.apexcharts-selection-icon,
.apexcharts-menu-icon {
  position: relative;
}

.apexcharts-reset-icon {
  margin-left: 5px;
}

.apexcharts-zoom-icon,
.apexcharts-reset-icon,
.apexcharts-menu-icon {
  transform: scale(0.85);
}

.apexcharts-zoomin-icon,
.apexcharts-zoomout-icon {
  transform: scale(0.7)
}

.apexcharts-zoomout-icon {
  margin-right: 3px;
}

.apexcharts-pan-icon {
  transform: scale(0.62);
  position: relative;
  left: 1px;
  top: 0px;
}

.apexcharts-pan-icon svg {
  fill: #fff;
  stroke: #6E8192;
  stroke-width: 2;
}

.apexcharts-pan-icon.apexcharts-selected svg {
  stroke: #008FFB;
}

.apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
  stroke: #333;
}

.apexcharts-toolbar {
  position: absolute;
  z-index: 11;
  max-width: 176px;
  text-align: right;
  border-radius: 3px;
  padding: 0px 6px 2px 6px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.apexcharts-menu {
  background: #fff;
  position: absolute;
  top: 100%;
  border: 1px solid #ddd;
  border-radius: 3px;
  padding: 3px;
  right: 10px;
  opacity: 0;
  min-width: 110px;
  transition: 0.15s ease all;
  pointer-events: none;
}

.apexcharts-menu.apexcharts-menu-open {
  opacity: 1;
  pointer-events: all;
  transition: 0.15s ease all;
}

.apexcharts-menu-item {
  padding: 6px 7px;
  font-size: 12px;
  cursor: pointer;
}

.apexcharts-theme-light .apexcharts-menu-item:hover {
  background: #eee;
}

.apexcharts-theme-dark .apexcharts-menu {
  background: rgba(0, 0, 0, 0.7);
  color: #fff;
}

@media screen and (min-width: 768px) {
  .apexcharts-canvas:hover .apexcharts-toolbar {
    opacity: 1;
  }
}

.apexcharts-datalabel.apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-pie-label,
.apexcharts-datalabels,
.apexcharts-datalabel,
.apexcharts-datalabel-label,
.apexcharts-datalabel-value {
  cursor: default;
  pointer-events: none;
}

.apexcharts-pie-label-delay {
  opacity: 0;
  animation-name: opaque;
  animation-duration: 0.3s;
  animation-fill-mode: forwards;
  animation-timing-function: ease;
}

.apexcharts-canvas .apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-hide .apexcharts-series-points {
  opacity: 0;
}

.apexcharts-gridline,
.apexcharts-annotation-rect,
.apexcharts-tooltip .apexcharts-marker,
.apexcharts-area-series .apexcharts-area,
.apexcharts-line,
.apexcharts-zoom-rect,
.apexcharts-toolbar svg,
.apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-radar-series path,
.apexcharts-radar-series polygon {
  pointer-events: none;
}


/* markers */

.apexcharts-marker {
  transition: 0.15s ease all;
}

@keyframes opaque {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}


/* Resize generated styles */

@keyframes resizeanim {
  from {
    opacity: 0;
  }
  to {
    opacity: 0;
  }
}

.resize-triggers {
  animation: 1ms resizeanim;
  visibility: hidden;
  opacity: 0;
}

.resize-triggers,
.resize-triggers>div,
.contract-trigger:before {
  content: " ";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  overflow: hidden;
}

.resize-triggers>div {
  background: #eee;
  overflow: auto;
}

.contract-trigger:before {
  width: 200%;
  height: 200%;
}</style><style type="text/css">@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://fonts.gstatic.com/s/sourcesanspro/v11/6xK3dSBYKcSV-LCoeQqfX1RYOo3qOK7lujVj9w.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
  font-family: 'Source Sans Pro Light';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://fonts.gstatic.com/s/sourcesanspro/v11/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwlxdu3cOWxw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
  font-family: 'Source Sans Pro SemiBold';
  font-style: normal;
  font-weight: 600;
  src: local('Source Sans Pro SemiBold'), local('SourceSansPro-SemiBold'), url(https://fonts.gstatic.com/s/sourcesanspro/v11/6xKydSBYKcSV-LCoeQqfX1RYOo3i54rwlxdu3cOWxw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* ft calendar customization */
.fc-cal-date-normal-fusion {
  color: #5F5F5F;
  font-family: 'Source Sans Pro';
  font-size: 11px;
}

.fc-cal-date-selected-fusion {
  color: #FEFEFE;
  font-family: 'Source Sans Pro SemiBold';
  font-size: 11px;
}</style><script type="text/javascript" charset="UTF-8" src="https://translate.googleapis.com/element/TE_20210503_00/e/js/element/element_main.js"></script></head><body class="dashboard site-menubar-unfold" data-new-gr-c-s-check-loaded="14.1029.0" data-gr-ext-installed="" style="position: relative; min-height: 100%; top: 0px;">﻿<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.min.css">
<link rel="stylesheet" href="../plugins/styles/global-ar.css?1734147641">    -->




<style>
    body {
        top: 0px !important;
    }
    
    .goog-te-banner-frame {
        display: none !important;
    }
</style>


<script src="../plugins/modernizr/modernizr.js"></script>
<script src="../plugins/breakpoints/breakpoints.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>













<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/plugins/sunburst.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/dataviz.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/kelly.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/material.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/dark.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/frozen.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/moonrisekingdom.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/spiritedaway.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
<script>
    am4core.ready(function() {
        am4core.useTheme(am4themes_animated);
        am4core.useTheme(am4themes_frozen);
        am4core.useTheme(am4themes_material);
        am4core.useTheme(am4themes_spiritedaway);
        am4core.useTheme(am4themes_dataviz);
        am4core.useTheme(am4themes_kelly);

    });
</script>






<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>



<script>
    Breakpoints();
</script>


    ﻿<style>
    .modal-backdrop {
        z-index: 999 !important;
    }
</style>
<nav class="site-navbar navbar navbar-default bg-grey-800 navbar-fixed-top navbar-mega  " role="navigation">
<?php include_once('_leftmenu.php'); ?>
    
	  <div class="page ">

        <div class="breadcrumb-box">
            <ol class="breadcrumb breadcrumb-arrow ">
                <li><a href="javascript:void(0)"> Dashboard </a> </li>

            </ol>
        </div>

        <div class="">



            <div class=" page-content Container-fluid">

                <div class="row ">
                    <div class="col-lg-6 ">
                        <div class="row ">
                            <div class="col-lg-6 ">
                                <div class="padding-15 bg-blue-800 text-center relative shadow card white margin-bottom-30 ">
                                    <div class="vertical-align-middle">
                                        <div class="font-size-14  margin-top-0 margin-bottom-0 ">
                                            Total Buildings
                                        </div>
                                        <div class="font-size-30 font-weight-200 margin-bottom-0">07</div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="padding-15 bg-blue-800 text-center relative shadow card white margin-bottom-30 ">
                                    <div class="vertical-align-middle">
                                        <div class="font-size-14  margin-top-0 margin-bottom-0 ">
                                            Total Floors
                                        </div>
                                        <div class="font-size-30 font-weight-200 margin-bottom-0">10</div>
                                        
                                    </div>
                                </div>
                            </div>
 <div class="padding-15 bg-blue-800 text-center relative shadow card white margin-bottom-30">
                        <div class="font-size-14 margin-bottom-10  text-uppercase ">
                            Total Device
                        </div>
                        <div class=" margin-bottom-5 ">
                            <i> <img src="images/icon-employees.png" alt="img" height="40"> </i>
                        </div>
                        <div class="font-size-18 font-weight-600 margin-bottom-10">
                            250
                        </div>
                        <div class="row no-space">
                            <div class="col-md-6">
                                <div class="  bg-blue-600   font-size-10 padding-5  ">
                                    Active
                                    <div class="font-size-16">150</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="  bg-blue-600   font-size-10 padding-5  ">
                                    Offline
                                    <div class="font-size-16">100</div>
                                </div>
                            </div>
                        </div>
                    </div>


                        </div>
                       <div class="col-lg-6 ">
                                <div class="padding-15 bg-blue-800 text-center relative shadow card white margin-bottom-30 ">
                                    <div class="vertical-align-middle">
                                        <div class="font-size-14  margin-top-0 margin-bottom-0 ">
                                            Total Villas
                                        </div>
                                        <div class="font-size-30 font-weight-200 margin-bottom-0">10</div>
                                        
                                    </div>
                                </div>
                            </div>
                       <div class="col-lg-6 ">
                                <div class="padding-15 bg-blue-800 text-center relative shadow card white margin-bottom-30 ">
                                    <div class="vertical-align-middle">
                                        <div class="font-size-14  margin-top-0 margin-bottom-0 ">
                                            Total Consumption
                                        </div>
                                        <div class="font-size-30 font-weight-200 margin-bottom-0">10000L</div>
                                        
                                    </div>
                                </div>
                            </div>



                    </div>
<div class="col-lg-6 ">
                        <div class="panel panel-default  card round light shadow " style="    height: 335px;">
                            <div class="panel-heading     ">
                                <h3 class="panel-title  font-weight-600 "> Recent Activity
                                </h3>
                               
                            </div>
                            <div class="panel-body">
                                <div>
                                    <div class="vscroll padding-right-10" style="height:270px;">
                                        <table class="table nowrap margin-bottom-0">
                                            <tbody>
                                                <tr class="alert alert-alt alert-danger alert-dismissible bg-white">
                                                    
                                                   
                                                    <td>
                                                        <div class=""> Device 4 has high flow rate </div>
                                                    </td>
                                                    <td class="text-right"> <span class="small">25,07,21 04:20pm</span> </td>
                                                </tr>
                                                <tr class="alert alert-alt alert-warning alert-dismissible bg-white">
                                                    
                                                    
                                                    <td>
                                                        <div class=""> New Device has be added</div>
                                                    </td>
                                                    <td class="text-right"> <span class="small">25,07,21 07:50pm</span> </td>
                                                </tr>
                                                <tr class="alert alert-alt alert-info alert-dismissible bg-white">
                                                   
                                                    <td>
                                                        <div class=""> All device have been shutdown
                                                        </div>
                                                    </td>
                                                    <td class="text-right"> <span class="small">25,07,21 08:10pm</span> </td>
                                                </tr>
                                               
                                                <tr class="alert alert-alt alert-info alert-dismissible bg-white">
                                                   
                                                    <td>
                                                        <div class=""> New Device has be added </div>
                                                    </td>
                                                    <td class="text-right"> <span class="small">25,07,21 10:54pm</span> </td>
                                                </tr> <tr class="alert alert-alt alert-info alert-dismissible bg-white">
                                                   
                                                    <td>
                                                        <div class=""> New Device has be added </div>
                                                    </td>
                                                    <td class="text-right"> <span class="small">25,07,21 11:54pm</span> </td>
                                                </tr> <tr class="alert alert-alt alert-info alert-dismissible bg-white">
                                                   
                                                    <td>
                                                        <div class=""> New Device has be added </div>
                                                    </td>
                                                    <td class="text-right"> <span class="small">25,07,21 12:54pm</span> </td>
                                                </tr>
                                                <tr class="alert alert-alt alert-warning alert-dismissible bg-white">
                                                    
                                                    
                                                    <td>
                                                        <div class=""> New Device has be added</div>
                                                    </td>
                                                    <td class="text-right"> <span class="small">25,07,21 07:50pm</span> </td>
                                                </tr>
                                                <tr class="alert alert-alt alert-info alert-dismissible bg-white">
                                                   
                                                    <td>
                                                        <div class=""> All device have been shutdown
                                                        </div>
                                                    </td>
                                                    <td class="text-right"> <span class="small">25,07,21 08:10pm</span> </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    
                   
                </div>
<div class="row">
<div class="col-lg-12   ">
                        <div class="width-full">


                            <div class="panel panel-default card round shadow  ">
                                <div class="panel-heading margin-bottom-0">
                                    <h3 class="panel-title font-weight-600 bg-teal-8001 white1 ">Live Map</h3>
                                    <div class="panel-actions">
                                        <a></a>
                                    </div>
                                </div>
                                <div class="panel-body padding-15">
                                    <div class="mapbox   margin-bottom-0  ">
                                        <div class="mapfilters" style="right: 15px; left: auto;">





                                        </div>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319" width="100%" height="635" frameborder="0" style="border:0" class="pull-left map"></iframe>


                                        <div class="icon" style="left:11%; top:38%;">
                                            <img src="images/map-zone1.png" class="1">
                                        </div>

                                        <div class="icon" style="left:54%; top:17%;">
                                            <img src="images/map-zone1.png" class="1">
                                        </div>


                                        <div class="icon" style="left:60%; top:67%;">
                                            <a data-toggle="popover" data-original-title="Building 1" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start1">
                                                <img src="images/map-zone1.png" class="img">
                                            </a>
                                            <div id="popover-content-start1" class="hide">
                                                <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                                                    <tbody>
                                                        <tr>
                                                            <th> Floors </th>
                                                            <td class="text-left">3</td>
                                                        </tr>
                                                        <tr>
                                                            <th> Meters </th>
                                                            <td class="text-left">3</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                        <div class="icon" style="left:45%; top:17%;">
                                            <a data-toggle="popover" data-original-title="Building 2" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start1">
                                                <img src="images/map-zone1.png" class="img">
                                            </a>
                                            <div id="popover-content-start1" class="hide">
                                                <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                                                    <tbody>
                                                        <tr>
                                                            <th> Floors </th>
                                                            <td class="text-left">3</td>
                                                        </tr>
                                                        <tr>
                                                            <th> Meters </th>
                                                            <td class="text-left">3</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>







</div>
                    </div>

               

                <div class="row">
                    <div class="col-lg-12">
                        <div class="row ">
                            <div class="col-lg-6  ">
                                <div class="panel panel-default  card round light  shadow">
                                    <div class="panel-heading     ">
                                        <h3 class="panel-title font-weight-600  "> Total Consumption Analysis
                                        </h3>
                                        
                                    </div>
                                   <div class="panel-body">
                                        <div class="filters margin-bottom-10 padding-bottom-10" style="border-bottom: 1px solid #eee;">
                                            <div class="inline-block">
                                                <select class="form-control input-xs">
                                                    <option>Sites</option>
                                                    <option>Sites 01</option>
                                                    <option>Sites 02</option>
                                                    <option>Sites 03</option>
                                                    <option>Sites 04</option>
                                                </select>
                                            </div>
                                            
                                        </div>

                                       >
                                        <div>
                                            <div class="chartbox">
                                                <div id="space1" style="height:355px;"><div style="width: 100%; height: 100%; position: relative; top: 0.390625px;"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="group" style="width: 100%; height: 100%; overflow: visible;"><defs><clipPath id="id-46"><rect width="719" height="355"></rect></clipPath><linearGradient id="gradient-id-69" x1="1%" x2="99%" y1="59%" y2="41%"><stop stop-color="#474758" offset="0"></stop><stop stop-color="#474758" stop-opacity="1" offset="0.75"></stop><stop stop-color="#3cabff" stop-opacity="1" offset="0.755"></stop></linearGradient><clipPath id="id-78"></clipPath><filter id="filter-id-51" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-66" filterUnits="objectBoundingBox" width="120%" height="120%" x="-10%" y="-10%"><feColorMatrix type="saturate" values="0"></feColorMatrix></filter><filter id="filter-id-83" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter></defs><g><g fill="#ffffff" fill-opacity="0"><rect width="719" height="355"></rect></g><g><g role="region" clip-path="url(&quot;#id-46&quot;)" opacity="1" aria-label="Chart"><g><g><g><g><g><g transform="translate(359.5,138.5)"><g><g role="group" opacity="1" aria-label="Series"><g><g clip-path="url(&quot;#id-78&quot;)"><g></g></g><g></g><g><g><g stroke-opacity="1" role="menuitem" focusable="true" tabindex="0" id="id-1024" fill="#f3c300" stroke="#f3c300"><g><g><path d=" M0,0  L0,-104.8  A6,6,0,0,1,5.9978,-110.6375 a110.8,110.8,0,0,1,103.2245,92.0059 A6,6,0,0,1,104.1102,-12.0046 L0,0 "></path></g><g></g></g></g><g stroke-opacity="1" role="menuitem" focusable="true" tabindex="0" id="id-1058" fill="#a1caf1" stroke="#a1caf1"><g><g><path d=" M0,0  L91.4097,-10.5402  A6,6,0,0,1,97.8748,-5.2487 a98.01538461538463,98.01538461538463,0,0,1,-54.4644,93.1268 A6,6,0,0,1,35.6289,84.8376 L0,0 "></path></g><g></g></g></g><g stroke-opacity="1" role="menuitem" focusable="true" tabindex="0" id="id-1091" fill="#848482" stroke="#848482"><g><g><path d=" M0,0  L30.6786,73.0502  A6,6,0,0,1,27.3915,80.7093 a85.23076923076924,85.23076923076924,0,0,1,-79.1067,-12.961 A6,6,0,0,1,-52.3863,59.4407 L0,0 "></path></g><g></g></g></g><g stroke-opacity="1" role="menuitem" focusable="true" tabindex="0" id="id-1124" fill="#0067a5" stroke="#0067a5" transform="translate(0,0)"><g><g><path d=" M0,0  L-42.5244,48.2508  A6,6,0,0,1,-50.8195,48.5966 a70.31538461538463,70.31538461538463,0,0,1,-19.4925,-47.9106 A6,6,0,0,1,-64.1317,-4.8576 L0,0 "></path></g><g></g></g></g><g stroke-opacity="1" role="menuitem" focusable="true" tabindex="0" id="id-1157" fill="#f6a600" stroke="#f6a600"><g><g><path d=" M0,0  L-53.0833,-4.0208  A6,6,0,0,1,-58.3106,-10.4262 a59.235384615384625,59.235384615384625,0,0,1,15.0764,-30.0663 A6,6,0,0,1,-34.9743,-40.1348 L0,0 "></path></g><g></g></g></g><g stroke-opacity="1" role="menuitem" focusable="true" tabindex="0" id="id-1190" fill="#882d17" stroke="#882d17"><g><g><path d=" M0,0  L-31.8946,-36.6007  A6,6,0,0,1,-31.103,-44.8113 a54.547692307692316,54.547692307692316,0,0,1,25.1121,-9.4064 A6,6,0,0,1,0,-48.5477 L0,0 "></path></g><g></g></g></g></g></g><g><g><g fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1"><polyline points="73.72373643208,-82.71306236747999,116.34,-91.328,122.34,-91.328"></polyline></g><g fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1"><polyline points="84.6080410706431,49.48226962673232,115.701,54.985,121.701,54.985"></polyline></g><g fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1"><polyline points="-13.780683196123078,84.10931454812308,-115.062,94.236,-121.062,94.236"></polyline></g><g fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1"><polyline points="-65.13117772541771,26.498735847870005,-114.316,30.085,-120.316,30.085"></polyline></g><g fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1"><polyline points="-52.95120451678232,-26.551849858876622,-113.762,-30.569,-119.762,-30.569"></polyline></g><g fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1"><polyline points="-19.13399749049108,-51.081707839291084,-113.527,-59.255,-119.527,-59.255"></polyline></g></g></g><g><g><g fill="#000000" aria-label="Parking Sensors: 23.2%" transform="translate(122.34,-91.328)"><g transform="translate(5,-6.5)" style="user-select: none;"><text x="0" y="12.8125" dy="-3.459"><tspan>Parking Sensors: 23.2%</tspan></text></g></g><g fill="#000000" aria-label="Sockets: 20.5%" transform="translate(121.701,54.985)"><g transform="translate(5,-6.5)" style="user-select: none;"><text x="0" y="12.8125" dy="-3.459"><tspan>Sockets: 20.5%</tspan></text></g></g><g fill="#000000" aria-label="Switches: 17.8%" transform="translate(-121.062,94.236)"><g transform="translate(-87,-6.5)" style="user-select: none;"><text x="0" y="12.8125" dy="-3.459"><tspan>Switches: 17.8%</tspan></text></g></g><g fill="#000000" aria-label="Cams: 14.7%" transform="translate(-120.316,30.085)"><g transform="translate(-71,-6.5)" style="user-select: none;"><text x="0" y="12.8125" dy="-3.459"><tspan>Cams: 14.7%</tspan></text></g></g><g fill="#000000" aria-label="Bulbs: 12.4%" transform="translate(-119.762,-30.569)"><g transform="translate(-72,-6.5)" style="user-select: none;"><text x="0" y="12.8125" dy="-3.459"><tspan>Bulbs: 12.4%</tspan></text></g></g><g fill="#000000" aria-label="Electric Meter: 11.4%" transform="translate(-119.527,-59.255)"><g transform="translate(-113,-6.5)" style="user-select: none;"><text x="0" y="12.8125" dy="-3.459"><tspan>Electric Meter: 11.4%</tspan></text></g></g></g></g></g></g></g></g><g transform="translate(259,177.5)"><g><g><g></g></g></g></g></g></g><g role="group" aria-label="Legend" transform="translate(0,277)"><g><g focusable="true" tabindex="0" role="switch" aria-controls="id-1024" aria-labelledby="id-1024" aria-checked="true" transform="translate(48.5,0)" style="cursor: pointer;"><g fill="#ffffff" fill-opacity="0"><rect width="163" height="39"></rect></g><g transform="translate(0,8)"><g style="pointer-events: none;"><g fill="#ffffff" fill-opacity="0" stroke-opacity="0"><rect width="23" height="23"></rect></g><g><g stroke-opacity="1" fill="#f3c300" stroke="#f3c300"><path d="M3,0 L20,0 a3,3 0 0 1 3,3 L23,20 a3,3 0 0 1 -3,3 L3,23 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3 Z"></path></g></g></g><g fill="#000000" aria-label="Parking Sensors" style="pointer-events: none;" transform="translate(28,4.5)"><g style="user-select: none;"><text x="0" y="14.015625" overflow="hidden" dy="-3.784"><tspan>Parking Sensors</tspan></text></g></g><g fill="#000000" aria-label="%" style="pointer-events: none;" transform="translate(108,5)"><g style="user-select: none;"><text x="50" y="12.8125" dy="-3.459" text-anchor="end"><tspan>23.2%</tspan></text></g></g></g></g><g focusable="true" tabindex="0" role="switch" aria-controls="id-1058" aria-labelledby="id-1058" aria-checked="true" transform="translate(231.5,0)" style="cursor: pointer;"><g fill="#ffffff" fill-opacity="0"><rect width="126" height="39"></rect></g><g transform="translate(0,8)"><g style="pointer-events: none;"><g fill="#ffffff" fill-opacity="0" stroke-opacity="0"><rect width="23" height="23"></rect></g><g><g stroke-opacity="1" fill="#a1caf1" stroke="#a1caf1"><path d="M3,0 L20,0 a3,3 0 0 1 3,3 L23,20 a3,3 0 0 1 -3,3 L3,23 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3 Z"></path></g></g></g><g fill="#000000" aria-label="Sockets" style="pointer-events: none;" transform="translate(28,4.5)"><g style="user-select: none;"><text x="0" y="14.015625" overflow="hidden" dy="-3.784"><tspan>Sockets</tspan></text></g></g><g fill="#000000" aria-label="%" style="pointer-events: none;" transform="translate(71,5)"><g style="user-select: none;"><text x="50" y="12.8125" dy="-3.459" text-anchor="end"><tspan>20.5%</tspan></text></g></g></g></g><g focusable="true" tabindex="0" role="switch" aria-controls="id-1091" aria-labelledby="id-1091" aria-checked="true" transform="translate(405.5,0)" style="cursor: pointer;"><g fill="#ffffff" fill-opacity="0"><rect width="130" height="39"></rect></g><g transform="translate(0,8)"><g style="pointer-events: none;"><g fill="#ffffff" fill-opacity="0" stroke-opacity="0"><rect width="23" height="23"></rect></g><g><g stroke-opacity="1" fill="#848482" stroke="#848482"><path d="M3,0 L20,0 a3,3 0 0 1 3,3 L23,20 a3,3 0 0 1 -3,3 L3,23 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3 Z"></path></g></g></g><g fill="#000000" aria-label="Switches" style="pointer-events: none;" transform="translate(28,4.5)"><g style="user-select: none;"><text x="0" y="14.015625" overflow="hidden" dy="-3.784"><tspan>Switches</tspan></text></g></g><g fill="#000000" aria-label="%" style="pointer-events: none;" transform="translate(75,5)"><g style="user-select: none;"><text x="50" y="12.8125" dy="-3.459" text-anchor="end"><tspan>17.8%</tspan></text></g></g></g></g><g focusable="true" tabindex="0" role="switch" aria-controls="id-1124" aria-labelledby="id-1124" aria-checked="true" transform="translate(555.5,0)" style="cursor: pointer;"><g fill="#ffffff" fill-opacity="0"><rect width="115" height="39"></rect></g><g transform="translate(0,8)"><g style="pointer-events: none;"><g fill="#ffffff" fill-opacity="0" stroke-opacity="0"><rect width="23" height="23"></rect></g><g><g stroke-opacity="1" fill="#0067a5" stroke="#0067a5"><path d="M3,0 L20,0 a3,3 0 0 1 3,3 L23,20 a3,3 0 0 1 -3,3 L3,23 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3 Z"></path></g></g></g><g fill="#000000" aria-label="Cams" style="pointer-events: none;" transform="translate(28,4.5)"><g style="user-select: none;"><text x="0" y="14.015625" overflow="hidden" dy="-3.784"><tspan>Cams</tspan></text></g></g><g fill="#000000" aria-label="%" style="pointer-events: none;" transform="translate(60,5)"><g style="user-select: none;"><text x="50" y="12.8125" dy="-3.459" text-anchor="end"><tspan>14.7%</tspan></text></g></g></g></g><g focusable="true" tabindex="0" role="switch" aria-controls="id-1157" aria-labelledby="id-1157" aria-checked="true" transform="translate(48.5,39)" style="cursor: pointer;"><g fill="#ffffff" fill-opacity="0"><rect width="115" height="39"></rect></g><g transform="translate(0,8)"><g style="pointer-events: none;"><g fill="#ffffff" fill-opacity="0" stroke-opacity="0"><rect width="23" height="23"></rect></g><g><g stroke-opacity="1" fill="#f6a600" stroke="#f6a600"><path d="M3,0 L20,0 a3,3 0 0 1 3,3 L23,20 a3,3 0 0 1 -3,3 L3,23 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3 Z"></path></g></g></g><g fill="#000000" aria-label="Bulbs" style="pointer-events: none;" transform="translate(28,4.5)"><g style="user-select: none;"><text x="0" y="14.015625" overflow="hidden" dy="-3.784"><tspan>Bulbs</tspan></text></g></g><g fill="#000000" aria-label="%" style="pointer-events: none;" transform="translate(60,5)"><g style="user-select: none;"><text x="50" y="12.8125" dy="-3.459" text-anchor="end"><tspan>12.4%</tspan></text></g></g></g></g><g focusable="true" tabindex="0" role="switch" aria-controls="id-1190" aria-labelledby="id-1190" aria-checked="true" transform="translate(231.5,39)" style="cursor: pointer;"><g fill="#ffffff" fill-opacity="0"><rect width="154" height="39"></rect></g><g transform="translate(0,8)"><g style="pointer-events: none;"><g fill="#ffffff" fill-opacity="0" stroke-opacity="0"><rect width="23" height="23"></rect></g><g><g stroke-opacity="1" fill="#882d17" stroke="#882d17"><path d="M3,0 L20,0 a3,3 0 0 1 3,3 L23,20 a3,3 0 0 1 -3,3 L3,23 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3 Z"></path></g></g></g><g fill="#000000" aria-label="Electric Meter" style="pointer-events: none;" transform="translate(28,4.5)"><g style="user-select: none;"><text x="0" y="14.015625" overflow="hidden" dy="-3.784"><tspan>Electric Meter</tspan></text></g></g><g fill="#000000" aria-label="%" style="pointer-events: none;" transform="translate(99,5)"><g style="user-select: none;"><text x="50" y="12.8125" dy="-3.459" text-anchor="end"><tspan>11.4%</tspan></text></g></g></g></g></g></g></g></g></g></g><g><g><g role="tooltip" visibility="hidden" opacity="0"><g fill="#ffffff" fill-opacity="0.9" stroke-width="1" stroke-opacity="1" stroke="#ffffff" filter="url(&quot;#filter-id-51&quot;)" style="pointer-events: none;" transform="translate(0,6)"><path d="M3,0 L3,0 L0,-6 L13,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(12,6)"><g transform="translate(0,7)" display="none"></g></g></g></g><g visibility="hidden" display="none" style="pointer-events: none;"><g fill="#ffffff" opacity="1"><rect width="719" height="355"></rect></g><g><g transform="translate(259,177.5)"><g><g stroke-opacity="1" fill="#f3f3f3" fill-opacity="0.8"><g><g><path d=" M53,0  a53,53,0,0,1,-106,0 a53,53,0,0,1,106,0 M42,0  a42,42,0,0,0,-84,0 a42,42,0,0,0,84,0 L42,0 "></path></g></g></g><g stroke-opacity="1" fill="#000000" fill-opacity="0.2"><g><g><path d=" M50,0  a50,50,0,0,1,-100,0 a50,50,0,0,1,100,0 M45,0  a45,45,0,0,0,-90,0 a45,45,0,0,0,90,0 L45,0 "></path></g></g></g><g fill="#000000" fill-opacity="0.4"><g transform="translate(-14.5,-6.5)" style="user-select: none;"><text x="14.5px" y="12.8125" dy="-3.459" text-anchor="middle"><tspan>100%</tspan></text></g></g></g></g></g></g><g opacity="0.3" aria-labelledby="id-66-title" filter="url(&quot;#filter-id-66&quot;)" style="cursor: pointer;" transform="translate(0,334)"><g fill="#ffffff" opacity="0"><rect width="66" height="21"></rect></g><g><g shape-rendering="auto" fill="none" stroke-opacity="1" stroke-width="1.7999999999999998" stroke="#3cabff"><path d=" M15,15  C17.4001,15 22.7998,15.0001 27,15 C31.2002,14.9999 33.2999,6 36,6 C38.7001,6 38.6999,10.5 40.5,10.5 C42.3001,10.5 42.2999,6 45,6 C47.7001,6 50.9999,14.9999 54,15 C57.0002,15.0001 58.7999,15 60,15"></path></g><g shape-rendering="auto" fill="none" stroke-opacity="1" stroke-width="1.7999999999999998" stroke="url(&quot;#gradient-id-69&quot;)"><path d=" M6,15  C8.2501,15 9.7498,15.0001 15,15 C20.2502,14.9999 20.7748,3.6 27,3.6 C33.2252,3.6 33.8998,14.9999 39.9,15 C45.9002,15.0001 45.9748,15 51,15 C56.0252,15 57.7499,15 60,15"></path></g></g><title id="id-66-title">Chart created using amCharts library</title></g><g role="tooltip" opacity="0" aria-describedby="id-1124" transform="translate(326.9344,151.7494)" aria-hidden="true" visibility="hidden"><g fill="#0067a5" fill-opacity="0.9" stroke-width="1" stroke-opacity="1" stroke="#ffffff" filter="url(&quot;#filter-id-83&quot;)" style="pointer-events: none;" transform="translate(-55.5,-31)"><path d="M3,0 L108,0 a3,3 0 0 1 3,3 L111,22 a3,3 0 0 1 -3,3 L108,25 L60.5,25 L55.5,31 L50.5,25 L3,25 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(0,-31)"><g transform="translate(-43.5,7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>Cams: 14.7% (165)</tspan></text></g></g></g></g></g></g></g></g></svg></div></div>
                                                <script>
                                                    am4core.ready(function () {

                                                        // Themes begin
                                                        am4core.useTheme(am4themes_kelly);
                                                        am4core.useTheme(am4themes_animated);
                                                        // Themes end

                                                        // Create chart
                                                        var chart = am4core.create("space1", am4charts.PieChart);
                                                        chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

                                                        chart.data = [
                                                            {
                                                                country: "Device#1",
                                                                value: 260
                                                            },
                                                            {
                                                                country: "Device#2",
                                                                value: 230
                                                            },
                                                            {
                                                                country: "Device#3",
                                                                value: 200
                                                            },
                                                            {
                                                                country: "Device#4",
                                                                value: 165
                                                            },
                                                            {
                                                                country: "Device#5",
                                                                value: 139
                                                            },
                                                            {
                                                                country: "Device#6",
                                                                value: 128
                                                            }
                                                        ];

                                                        var series = chart.series.push(new am4charts.PieSeries());
                                                        series.dataFields.value = "value";
                                                        series.dataFields.radiusValue = "value";
                                                        series.dataFields.category = "country";
                                                        series.slices.template.cornerRadius = 6;
                                                        series.colors.step = 3;

                                                        series.hiddenState.properties.endAngle = -90;

                                                        chart.legend = new am4charts.Legend();

                                                    }); // end am4core.ready()
                                                </script>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 card-group-row__col">
                                <div class="panel panel-default  card round light  shadow">
                                    <div class="panel-heading     ">
                                        <h3 class="panel-title font-weight-600  "> Offline vs Online
                                        </h3>
                                        
                                    </div>
                                    <div class="panel-body">
                                        <div class="filters margin-bottom-10 padding-bottom-10" style="border-bottom: 1px solid #eee;">
                                            <div class="inline-block">
                                                <select class="form-control input-xs">
                                                    <option>Buildings</option>
                                                    <option>Building 01</option>
                                                    <option>Building 02</option>
                                                    <option>Building 03</option>
                                                    <option>Building 04</option>
                                                </select>
                                            </div>
                                            <div class="inline-block">
                                                <select class="form-control input-xs">

                                                    <option>Floor </option>
                                                    <option>Floor 01</option>
                                                    <option>Floor 02</option>
                                                    <option>Floor 03</option>
                                                </select>
                                            </div>
                                            <div class="inline-block">
                                                <select class="form-control input-xs">
                                                    <option>Apartment/Offices</option>
                                                    <option>Apartment/Office 01</option>
                                                    <option>Apartment/Office 02</option>
                                                    <option>Apartment/Office 03</option>

                                                </select>
                                            </div>
                                        </div>

                                       
                                        <div>
                                            <div class="chartbox">
                                                <div id="space2" style="height:355px;"><div style="width: 100%; height: 100%; position: relative;"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="group" style="width: 100%; height: 100%; overflow: visible;"><defs><clipPath id="id-133"><rect width="719" height="355"></rect></clipPath><linearGradient id="gradient-id-156" x1="1%" x2="99%" y1="59%" y2="41%"><stop stop-color="#474758" offset="0"></stop><stop stop-color="#474758" stop-opacity="1" offset="0.75"></stop><stop stop-color="#3cabff" stop-opacity="1" offset="0.755"></stop></linearGradient><clipPath id="id-165"></clipPath><filter id="filter-id-138" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-153" filterUnits="objectBoundingBox" width="120%" height="120%" x="-10%" y="-10%"><feColorMatrix type="saturate" values="0"></feColorMatrix></filter><filter id="filter-id-170" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter></defs><g><g fill="#ffffff" fill-opacity="0"><rect width="719" height="355"></rect></g><g><g role="region" clip-path="url(&quot;#id-133&quot;)" opacity="1" aria-label="Chart"><g><g><g><g><g><g transform="translate(359.5,268.6)"><g><g role="group" opacity="1" aria-label="Series"><g><g clip-path="url(&quot;#id-165&quot;)"><g></g></g><g></g><g><g><g stroke-opacity="1" role="menuitem" focusable="true" tabindex="0" id="id-957" style="touch-action: none; user-select: none; -webkit-user-drag: none;" fill="#f3c300" stroke="#f3c300"><g><g><path d=" M-133.4,0  L-211.2,0  A10,10,0,0,1,-220.974,-9.9974 a221.2,221.2,0,0,1,286.2579,-201.3493 A10,10,0,0,1,71.3892,-198.7688 L45.0915,-125.5481  A7.1938291138,7.1938291138,0,0,1,36.0744,-121.1429 a126.4,126.4,0,0,0,-162.2805,114.1456 A7.1938291138,7.1938291138,0,0,1,-133.4,0 L-133.4,0 "></path></g><g></g></g></g><g stroke-opacity="1" role="menuitem" focusable="true" tabindex="0" id="id-991" style="touch-action: none; user-select: none; -webkit-user-drag: none;" fill="#875692" stroke="#875692"><g><g><path d=" M45.0915,-125.5481  L71.3892,-198.7688  A10,10,0,0,1,84.1019,-204.5881 a221.2,221.2,0,0,1,136.872,194.5907 A10,10,0,0,1,211.2,0 L133.4,0  A7.1938291138,7.1938291138,0,0,1,126.2062,-6.9973 a126.4,126.4,0,0,0,-76.9609,-109.4152 A7.1938291138,7.1938291138,0,0,1,45.0915,-125.5481 L45.0915,-125.5481 "></path></g><g></g></g></g></g></g><g><g><g fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1"><polyline points="-127.26048763623999,-180.92597460896,-133.623512018052,-189.972273339408,-133.623512018052,-189.972273339408"></polyline></g><g fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1"><polyline points="180.92597460896,-127.26048763623999,189.972273339408,-133.623512018052,189.972273339408,-133.623512018052"></polyline></g></g></g><g><g><g fill="#000000" aria-label="Online Devices : 61.0%" transform="translate(-166.992,-199.787)"><g transform="translate(-53,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>Online Devices : 61.0%</tspan></text></g></g><g fill="#000000" aria-label="Offline Devices: 39.0%" transform="translate(237.00300000000001,-140.528)"><g transform="translate(-52.5,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>Offline Devices: 39.0%</tspan></text></g></g></g></g></g></g></g></g><g transform="translate(349.5,299.825)"><g><g><g></g></g></g></g></g></g><g role="group" aria-label="Legend" transform="translate(0,316)"><g><g focusable="true" tabindex="0" role="switch" aria-controls="id-957" aria-labelledby="id-957" aria-checked="true" transform="translate(191,0)" style="cursor: pointer;"><g fill="#ffffff" fill-opacity="0"><rect width="158" height="39"></rect></g><g transform="translate(0,8)"><g style="pointer-events: none;"><g fill="#ffffff" fill-opacity="0" stroke-opacity="0"><rect width="23" height="23"></rect></g><g><g stroke-opacity="1" fill="#f3c300" stroke="#f3c300"><path d="M3,0 L20,0 a3,3 0 0 1 3,3 L23,20 a3,3 0 0 1 -3,3 L3,23 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3 Z"></path></g></g></g><g fill="#000000" aria-label="Online Devices " style="pointer-events: none;" transform="translate(28,4.5)"><g style="user-select: none;"><text x="0" y="14.015625" overflow="hidden" dy="-3.784"><tspan>Online Devices</tspan></text></g></g><g fill="#000000" aria-label="%" style="pointer-events: none;" transform="translate(103,4.5)"><g style="user-select: none;"><text x="50" y="14" dy="-3.78" text-anchor="end"><tspan>61.0%</tspan></text></g></g></g></g><g focusable="true" tabindex="0" role="switch" aria-controls="id-991" aria-labelledby="id-991" aria-checked="true" transform="translate(369,0)" style="cursor: pointer;"><g fill="#ffffff" fill-opacity="0"><rect width="159" height="39"></rect></g><g transform="translate(0,8)"><g style="pointer-events: none;"><g fill="#ffffff" fill-opacity="0" stroke-opacity="0"><rect width="23" height="23"></rect></g><g><g stroke-opacity="1" fill="#875692" stroke="#875692"><path d="M3,0 L20,0 a3,3 0 0 1 3,3 L23,20 a3,3 0 0 1 -3,3 L3,23 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3 Z"></path></g></g></g><g fill="#000000" aria-label="Offline Devices" style="pointer-events: none;" transform="translate(28,4.5)"><g style="user-select: none;"><text x="0" y="14.015625" overflow="hidden" dy="-3.784"><tspan>Offline Devices</tspan></text></g></g><g fill="#000000" aria-label="%" style="pointer-events: none;" transform="translate(104,4.5)"><g style="user-select: none;"><text x="50" y="14" dy="-3.78" text-anchor="end"><tspan>39.0%</tspan></text></g></g></g></g></g></g></g></g></g></g><g><g><g role="tooltip" visibility="hidden" opacity="0"><g fill="#ffffff" fill-opacity="0.9" stroke-width="1" stroke-opacity="1" stroke="#ffffff" filter="url(&quot;#filter-id-138&quot;)" style="pointer-events: none;" transform="translate(0,6)"><path d="M3,0 L3,0 L0,-6 L13,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(12,6)"><g transform="translate(0,7)" display="none"></g></g></g></g><g visibility="hidden" display="none" style="pointer-events: none;"><g fill="#ffffff" opacity="1"><rect width="719" height="355"></rect></g><g><g transform="translate(349.5,177.5)"><g><g stroke-opacity="1" fill="#f3f3f3" fill-opacity="0.8"><g><g><path d=" M53,0  a53,53,0,0,1,-106,0 a53,53,0,0,1,106,0 M42,0  a42,42,0,0,0,-84,0 a42,42,0,0,0,84,0 L42,0 "></path></g></g></g><g stroke-opacity="1" fill="#000000" fill-opacity="0.2"><g><g><path d=" M50,0  a50,50,0,0,1,-100,0 a50,50,0,0,1,100,0 M45,0  a45,45,0,0,0,-90,0 a45,45,0,0,0,90,0 L45,0 "></path></g></g></g><g fill="#000000" fill-opacity="0.4"><g transform="translate(-14,-7)" style="user-select: none;"><text x="14px" y="14" dy="-3.78" text-anchor="middle"><tspan>100%</tspan></text></g></g></g></g></g></g><g opacity="0.3" aria-labelledby="id-153-title" filter="url(&quot;#filter-id-153&quot;)" style="cursor: pointer;" transform="translate(0,334)"><g fill="#ffffff" opacity="0"><rect width="66" height="21"></rect></g><g><g shape-rendering="auto" fill="none" stroke-opacity="1" stroke-width="1.7999999999999998" stroke="#3cabff"><path d=" M15,15  C17.4001,15 22.7998,15.0001 27,15 C31.2002,14.9999 33.2999,6 36,6 C38.7001,6 38.6999,10.5 40.5,10.5 C42.3001,10.5 42.2999,6 45,6 C47.7001,6 50.9999,14.9999 54,15 C57.0002,15.0001 58.7999,15 60,15"></path></g><g shape-rendering="auto" fill="none" stroke-opacity="1" stroke-width="1.7999999999999998" stroke="url(&quot;#gradient-id-156&quot;)"><path d=" M6,15  C8.2501,15 9.7498,15.0001 15,15 C20.2502,14.9999 20.7748,3.6 27,3.6 C33.2252,3.6 33.8998,14.9999 39.9,15 C45.9002,15.0001 45.9748,15 51,15 C56.0252,15 57.7499,15 60,15"></path></g></g><title id="id-153-title">Chart created using amCharts library</title></g><g role="tooltip" visibility="hidden" opacity="0"><g fill="#ffffff" fill-opacity="0.9" stroke-width="1" stroke-opacity="1" stroke="#ffffff" filter="url(&quot;#filter-id-170&quot;)" style="pointer-events: none;" transform="translate(0,6)"><path d="M3,0 L3,0 L0,-6 L13,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(12,6)"><g transform="translate(0,7)" display="none"></g></g></g></g></g></g></g></g></svg></div></div>
                                                <script>
                                                    am4core.ready(function () {

                                                        // Themes begin
                                                        am4core.useTheme(am4themes_animated);
                                                        // Themes end

                                                        var chart = am4core.create("space2", am4charts.PieChart);
                                                        chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

                                                        chart.data = [
                                                            {
                                                                country: "Online Devices ",
                                                                value: 200
                                                            }, {
                                                                country: "Offline Devices",
                                                                value: 128
                                                            }
                                                        ];
                                                        chart.radius = am4core.percent(70);
                                                        chart.innerRadius = am4core.percent(40);
                                                        chart.startAngle = 180;
                                                        chart.endAngle = 360;

                                                        var series = chart.series.push(new am4charts.PieSeries());
                                                        series.dataFields.value = "value";
                                                        series.dataFields.category = "country";

                                                        series.slices.template.cornerRadius = 10;
                                                        series.slices.template.innerCornerRadius = 7;
                                                        series.slices.template.draggable = true;
                                                        series.slices.template.inert = true;
                                                        series.alignLabels = false;

                                                        series.hiddenState.properties.startAngle = 90;
                                                        series.hiddenState.properties.endAngle = 90;

                                                        chart.legend = new am4charts.Legend();

                                                    }); // end am4core.ready()
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
 </div>




                            <div class="col-lg-6 card-group-row__col">
                                <div class="panel panel-default  card round light  shadow">
                                    <div class="panel-heading     ">
                                        <h3 class="panel-title font-weight-600  "> Critical Battery Level
                                        </h3>
                                        
                                    </div>
                                    <div class="panel-body">
                                        <div class="filters margin-bottom-10 padding-bottom-10" style="border-bottom: 1px solid #eee;">
                                            <div class="inline-block">
                                                <select class="form-control input-xs">
                                                    <option>Buildings</option>
                                                    <option>Building 01</option>
                                                    <option>Building 02</option>
                                                    <option>Building 03</option>
                                                    <option>Building 04</option>
                                                </select>
                                            </div>
                                            <div class="inline-block">
                                                <select class="form-control input-xs">

                                                    <option>Floor </option>
                                                    <option>Floor 01</option>
                                                    <option>Floor 02</option>
                                                    <option>Floor 03</option>
                                                </select>
                                            </div>
                                            <div class="inline-block">
                                                <select class="form-control input-xs">
                                                    <option>Apartment/Office</option>
                                                    <option>Apartment/Office1</option>
                                                    <option>Apartment/Office2</option>
                                                    <option>Apartment/Office3</option>

                                                </select>
                                            </div>
                                        </div>

                                       
                                        <div>
                                            <div class="chartbox">
                                                <div id="indoor" style="height:300px;"><div style="width: 100%; height: 100%; position: relative;"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="group" style="width: 100%; height: 100%; overflow: visible;"><defs><clipPath id="id-222"><rect width="719" height="300"></rect></clipPath><linearGradient id="gradient-id-245" x1="1%" x2="99%" y1="59%" y2="41%"><stop stop-color="#474758" offset="0"></stop><stop stop-color="#474758" stop-opacity="1" offset="0.75"></stop><stop stop-color="#3cabff" stop-opacity="1" offset="0.755"></stop></linearGradient><filter id="filter-id-254" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"></filter><filter id="filter-id-275" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"></filter><clipPath id="id-313"><path d=" M0,-21.6  L0,-108  a108,108,0,0,1,76.3675,184.3675 a108,108,0,0,1,-184.3675,-76.3675 L-21.6,0  a21.6,21.6,0,0,0,36.8735,15.2735 a21.6,21.6,0,0,0,-15.2735,-36.8735 L0,-21.6 "></path></clipPath><clipPath id="id-334"><path d=" M0,-21.6  L0,-108  a108,108,0,0,1,76.3675,184.3675 a108,108,0,0,1,-184.3675,-76.3675 L-21.6,0  a21.6,21.6,0,0,0,36.8735,15.2735 a21.6,21.6,0,0,0,-15.2735,-36.8735 L0,-21.6 "></path></clipPath><clipPath id="id-950"><path d=" M0,-21.6  L0,-108  a108,108,0,0,1,76.3675,184.3675 a108,108,0,0,1,-184.3675,-76.3675 L-21.6,0  a21.6,21.6,0,0,0,36.8735,15.2735 a21.6,21.6,0,0,0,-15.2735,-36.8735 L0,-21.6 " r="0"></path></clipPath><filter id="filter-id-227" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-242" filterUnits="objectBoundingBox" width="120%" height="120%" x="-10%" y="-10%"><feColorMatrix type="saturate" values="0"></feColorMatrix></filter><filter id="filter-id-318" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-339" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter></defs><g><g fill="#ffffff" fill-opacity="0"><rect width="719" height="300"></rect></g><g><g role="region" clip-path="url(&quot;#id-222&quot;)" opacity="1" aria-label="Chart"><g transform="translate(15,15)"><g><g><g><g><g><g><g transform="translate(0,0)" style="touch-action: none; user-select: none; -webkit-user-drag: none;"><g fill="#ffffff" fill-opacity="0" transform="translate(0,0)"><rect width="689" height="270"></rect></g><g><g transform="translate(344.5,135)"><g><g opacity="0"></g><g><g></g></g><g aria-hidden="true"><g><g fill="#000000" transform="translate(0,-43.2) rotate(90)"><g display="none"></g></g><g><g><g fill="#000000" aria-label="L" fill-opacity="0" opacity="0" stroke-opacity="0" font-weight="500" style="pointer-events: none;" transform="translate(0,-64.8)"><g transform="translate(-68,-7)" style="user-select: none;"><text x="0" y="14.015625" dy="-3.784"><tspan>Study Room</tspan></text></g></g><g><g><g stroke="#000000" stroke-opacity="0" fill="none"><path d=" M0,-21.6  a21.6,21.6,0,0,1,15.2735,36.8735 a21.6,21.6,0,0,1,-36.8735,-15.2735" transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0" fill="none"><path d=" M0,-43.2  a43.2,43.2,0,0,1,30.547,73.747 a43.2,43.2,0,0,1,-73.747,-30.547" transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0" fill="none"><path d=" M0,-64.8  a64.8,64.8,0,0,1,45.8205,110.6205 a64.8,64.8,0,0,1,-110.6205,-45.8205" transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0" fill="none"><path d=" M0,-86.4  a86.4,86.4,0,0,1,61.094,147.494 a86.4,86.4,0,0,1,-147.494,-61.094" transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0" fill="none"><path d=" M0,-108  a108,108,0,0,1,76.3675,184.3675 a108,108,0,0,1,-184.3675,-76.3675" transform="translate(-0.5,-0.5)"></path></g></g></g><g><g></g></g><g fill="#f3c300" font-weight="500" transform="translate(0,-32.4)"><g transform="translate(-95,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>Conference Room</tspan></text></g></g><g fill="#875692" font-weight="500" transform="translate(0,-54)"><g transform="translate(-88,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>Meeting Room 2</tspan></text></g></g><g fill="#f38400" font-weight="500" transform="translate(0,-75.6)"><g transform="translate(-88,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>Meeting Room 1</tspan></text></g></g><g fill="#a1caf1" font-weight="500" transform="translate(0,-97.2)"><g transform="translate(-68,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>Study Room</tspan></text></g></g><g fill="#000000" font-weight="500" display="none" transform="translate(0,-118.8)"><g transform="translate(-10,0)" display="none"></g></g></g></g><g stroke="#000000" stroke-opacity="0.15" fill="none" display="none"><path transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0" fill="none" style="pointer-events: none;"><path d=" M0,-21.6  L0,-108 " transform="translate(-0.5,-0.5)"></path></g></g></g><g><g></g></g><g aria-hidden="true"><g><g><g><g><g><g stroke="#000000" stroke-opacity="0" fill="none" display="none"><path d=" M-17.4748,-12.6962  L-87.3738,-63.4808 "></path></g><g stroke="#000000" stroke-opacity="0" fill="none" display="none"><path d=" M-9.8062,-19.2457  L-49.031,-96.2287 "></path></g><g stroke="#000000" stroke-opacity="0" fill="none"><path d=" M0,-21.6  L0,-108 "></path></g><g stroke="#000000" stroke-opacity="0" fill="none"><path d=" M9.8062,-19.2457  L49.031,-96.2287 "></path></g><g stroke="#000000" stroke-opacity="0" fill="none"><path d=" M17.4748,-12.6962  L87.3738,-63.4808 "></path></g><g stroke="#000000" stroke-opacity="0" fill="none"><path d=" M21.3341,-3.379  L106.6703,-16.8949 "></path></g><g stroke="#000000" stroke-opacity="0" fill="none"><path d=" M20.5428,6.6748  L102.7141,33.3738 "></path></g><g stroke="#000000" stroke-opacity="0" fill="none"><path d=" M15.2735,15.2735  L76.3675,76.3675 "></path></g><g stroke="#000000" stroke-opacity="0" fill="none"><path d=" M6.6748,20.5428  L33.3738,102.7141 "></path></g><g stroke="#000000" stroke-opacity="0" fill="none"><path d=" M-3.379,21.3341  L-16.8949,106.6703 "></path></g><g stroke="#000000" stroke-opacity="0" fill="none"><path d=" M-12.6962,17.4748  L-63.4808,87.3738 "></path></g><g stroke="#000000" stroke-opacity="0" fill="none"><path d=" M-19.2457,9.8062  L-96.2287,49.031 "></path></g><g stroke="#000000" stroke-opacity="0" fill="none"><path d=" M-21.6,0  L-108,0 "></path></g><g stroke="#000000" stroke-opacity="0" fill="none" display="none"><path d=" M-19.2457,-9.8062  L-96.2287,-49.031 "></path></g></g></g><g fill="#000000" aria-label="L" fill-opacity="0" opacity="0" stroke-opacity="0" style="pointer-events: none;" transform="translate(0,-130)"><g transform="translate(-3,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>L</tspan></text></g></g><g fill="#000000" transform="translate(-109.622,-76.412)" display="none"><g transform="translate(-12.5,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>-20%</tspan></text></g></g><g fill="#000000" transform="translate(-61.516,-115.83099999999999)" display="none"><g transform="translate(-12.5,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>-10%</tspan></text></g></g><g fill="#000000" transform="translate(0,-130)"><g transform="translate(-8,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>0%</tspan></text></g></g><g fill="#000000" transform="translate(60.835,-115.83099999999999)"><g transform="translate(-11,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>10%</tspan></text></g></g><g fill="#000000" transform="translate(108.408,-76.412)"><g transform="translate(-11,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>20%</tspan></text></g></g><g fill="#000000" transform="translate(132.351,-20.336)"><g transform="translate(-11,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>30%</tspan></text></g></g><g fill="#000000" transform="translate(127.44200000000001,40.172)"><g transform="translate(-11,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>40%</tspan></text></g></g><g fill="#000000" transform="translate(94.75200000000001,91.924)"><g transform="translate(-11,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>50%</tspan></text></g></g><g fill="#000000" transform="translate(41.408,123.637)"><g transform="translate(-11,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>60%</tspan></text></g></g><g fill="#000000" transform="translate(-20.962,128.4)"><g transform="translate(-11,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>70%</tspan></text></g></g><g fill="#000000" transform="translate(-78.764,105.172)"><g transform="translate(-11,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>80%</tspan></text></g></g><g fill="#000000" transform="translate(-119.395,59.019)"><g transform="translate(-11,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>90%</tspan></text></g></g><g fill="#000000" transform="translate(-137,0)"><g transform="translate(-14,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>100%</tspan></text></g></g><g fill="#000000" transform="translate(-122.068,-59.019)" display="none"><g transform="translate(-14,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>110%</tspan></text></g></g><g><g></g></g></g></g><g fill="#000000"><g display="none"></g></g><g stroke="#000000" stroke-opacity="0.15" fill="none"><path transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0" fill="none" style="pointer-events: none;"><path d=" M0,-108  a108,108,0,0,1,76.3675,184.3675 a108,108,0,0,1,-184.3675,-76.3675" transform="translate(-0.5,-0.5)"></path></g></g></g><g><g><g role="group" stroke-opacity="0" fill-opacity="1" stroke="#f3c300" aria-label="Series"><g><g clip-path="url(&quot;#id-313&quot;)"><g><g><g><g stroke-opacity="1" fill="#000000" fill-opacity="0.08" stroke-width="0" stroke="#f3c300"><g><g><g><g><path d=" M0,-32.4  L0,-32.4  A8.6,8.6,0,0,1,8.5526,-40.098 a41,41,0,0,1,20.4388,69.0894 a41,41,0,0,1,-69.0894,-20.4388 A8.6,8.6,0,0,1,-32.4,0 L-32.4,0  A10.15378151254,10.15378151254,0,0,1,-22.2462,8.4585 a23.8,23.8,0,0,0,39.0754,8.3707 a23.8,23.8,0,0,0,-8.3707,-39.0754 A10.15378151254,10.15378151254,0,0,1,0,-32.4 L0,-32.4 "></path></g><g></g><g></g></g></g></g></g><g stroke-opacity="1" fill="#000000" fill-opacity="0.08" stroke-width="0" stroke="#f3c300"><g><g><g><g><path d=" M0,-54  L0,-54  A8.6,8.6,0,0,1,8.5797,-62.0093 a62.6,62.6,0,0,1,35.6852,106.2741 a62.6,62.6,0,0,1,-106.2742,-35.6851 A8.6,8.6,0,0,1,-54,0 L-54,0  A9.414537445039999,9.414537445039999,0,0,1,-44.5855,8.5613 a45.4,45.4,0,0,0,76.6881,23.5413 a45.4,45.4,0,0,0,-23.5413,-76.6881 A9.414537445039999,9.414537445039999,0,0,1,0,-54 L0,-54 "></path></g><g></g><g></g></g></g></g></g><g stroke-opacity="1" fill="#000000" fill-opacity="0.08" stroke-width="0" stroke="#f3c300"><g><g><g><g><path d=" M0,-75.6  L0,-75.6  A8.6,8.6,0,0,1,8.5888,-83.7608 a84.2,84.2,0,0,1,50.9496,143.2992 a84.2,84.2,0,0,1,-143.2992,-50.9496 A8.6,8.6,0,0,1,-75.6,0 L-75.6,0  A9.1519402987,9.1519402987,0,0,1,-66.4481,8.5823 a67,67,0,0,0,113.8242,38.7939 a67,67,0,0,0,-38.7939,-113.8242 A9.1519402987,9.1519402987,0,0,1,0,-75.6 L0,-75.6 "></path></g><g></g><g></g></g></g></g></g><g stroke-opacity="1" fill="#000000" fill-opacity="0.08" stroke-width="0" stroke="#f3c300"><g><g><g><g><path d=" M0,-97.2  L0,-97.2  A8.6,8.6,0,0,1,8.5929,-105.4505 a105.8,105.8,0,0,1,66.219,180.2624 a105.8,105.8,0,0,1,-180.2624,-66.219 A8.6,8.6,0,0,1,-97.2,0 L-97.2,0  A9.01738149004,9.01738149004,0,0,1,-88.1826,8.5899 a88.6,88.6,0,0,0,150.8323,54.0598 a88.6,88.6,0,0,0,-54.0598,-150.8323 A9.01738149004,9.01738149004,0,0,1,0,-97.2 L0,-97.2 "></path></g><g></g><g></g></g></g></g></g></g></g></g></g><g></g></g></g><g role="group" stroke-opacity="0" fill-opacity="1" stroke="#875692" aria-label="Series"><g><g clip-path="url(&quot;#id-334&quot;)"><g><g><g><g stroke-opacity="1" stroke-width="0" fill="#f3c300" fill-opacity="1" stroke="#875692"><g><g><g><g><path d=" M0,-32.4  L0,-32.4  A8.6,8.6,0,0,1,8.5526,-40.098 a41,41,0,0,1,30.4407,52.7677 a41,41,0,0,1,-55.6431,24.7974 A8.6,8.6,0,0,1,-19.0442,26.2122 L-19.0442,26.2122  A10.15378151254,10.15378151254,0,0,1,-6.233,22.9693 a23.8,23.8,0,0,0,14.6914,-45.2156 A10.15378151254,10.15378151254,0,0,1,0,-32.4 L0,-32.4 "></path></g><g></g><g></g></g></g></g></g><g stroke-opacity="1" stroke-width="0" fill="#875692" fill-opacity="1" stroke="#875692"><g><g><g><g><path d=" M0,-54  L0,-54  A8.6,8.6,0,0,1,8.5797,-62.0093 a62.6,62.6,0,0,1,53.9116,58.3212 A8.6,8.6,0,0,1,53.8335,4.2368 L53.8335,4.2368  A9.414537445039999,9.414537445039999,0,0,1,45.1197,-5.0368 a45.4,45.4,0,0,0,-36.5584,-39.5487 A9.414537445039999,9.414537445039999,0,0,1,0,-54 L0,-54 "></path></g><g></g><g></g></g></g></g></g><g stroke-opacity="1" stroke-width="0" fill="#f38400" fill-opacity="1" stroke="#875692"><g><g><g><g><path d=" M0,-75.6  L0,-75.6  A8.6,8.6,0,0,1,8.5888,-83.7608 a84.2,84.2,0,0,1,61.0514,131.0882 a84.2,84.2,0,0,1,-144.3573,-8.5073 A8.6,8.6,0,0,1,-70.2911,27.8302 L-70.2911,27.8302  A9.1519402987,9.1519402987,0,0,1,-58.6225,32.4408 a67,67,0,0,0,114.0369,5.2188 a67,67,0,0,0,-46.8321,-104.1076 A9.1519402987,9.1519402987,0,0,1,0,-75.6 L0,-75.6 "></path></g><g></g><g></g></g></g></g></g><g stroke-opacity="1" stroke-width="0" fill="#a1caf1" fill-opacity="1" stroke="#875692"><g><g><g><g><path d=" M0,-97.2  L0,-97.2  A8.6,8.6,0,0,1,8.5929,-105.4505 a105.8,105.8,0,0,1,-6.6382,211.2324 A8.6,8.6,0,0,1,-6.1032,97.0082 L-6.1032,97.0082  A9.01738149004,9.01738149004,0,0,1,3.0359,88.548 a88.6,88.6,0,0,0,5.554,-176.7306 A9.01738149004,9.01738149004,0,0,1,0,-97.2 L0,-97.2 "></path></g><g></g><g></g></g></g></g></g></g></g></g></g><g></g></g></g></g></g><g clip-path="url(&quot;#id-950&quot;)"><g><g fill="#f3c300" stroke="#f3c300"><g></g></g><g fill="#875692" stroke="#875692"><g></g></g></g></g><g opacity="0" visibility="hidden" aria-hidden="true" style="touch-action: none; user-select: none; -webkit-user-drag: none;"><g><g fill-opacity="0.2" fill="#000000" visibility="hidden" style="pointer-events: none;"><path></path></g><g stroke="#000000" fill="none" stroke-dasharray="3,3" stroke-opacity="0.4" style="pointer-events: none;"><path></path></g><g stroke="#000000" fill="none" stroke-dasharray="3,3" stroke-opacity="0.4" style="pointer-events: none;"><path></path></g></g></g></g></g><g><g></g></g><g role="button" focusable="true" tabindex="0" opacity="0" visibility="hidden" aria-hidden="true" transform="translate(649,-3)" aria-labelledby="id-211-title"><g fill="#6794dc" stroke="#ffffff" fill-opacity="1" stroke-opacity="0" transform="translate(0,8)"><path d="M17,0 L18,0 a17,17 0 0 1 17,17 L35,17 a17,17 0 0 1 -17,17 L17,34 a17,17 0 0 1 -17,-17 L0,17 a17,17 0 0 1 17,-17 Z"></path></g><g transform="translate(9,9)"><g stroke="#ffffff" style="pointer-events: none;" transform="translate(0,8)"><path d=" M0,0  L11,0 " transform="translate(2.5,7.5)"></path></g><g fill="#000000" style="pointer-events: none;" transform="translate(17,8)"><g display="none"></g></g></g><title id="id-211-title">Zoom Out</title></g></g></g><g><g></g></g><g transform="translate(689,0)"><g></g></g></g></g><g><g></g></g><g transform="translate(0,270)"><g></g></g></g></g></g></g></g></g><g><g><g role="tooltip" visibility="hidden" opacity="0"><g fill="#ffffff" fill-opacity="0.9" stroke-width="1" stroke-opacity="1" stroke="#ffffff" filter="url(&quot;#filter-id-227&quot;)" style="pointer-events: none;" transform="translate(0,6)"><path d="M3,0 L3,0 L0,-6 L13,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(12,6)"><g transform="translate(0,7)" display="none"></g></g></g></g><g visibility="hidden" display="none" style="pointer-events: none;"><g fill="#ffffff" opacity="1"><rect width="719" height="300"></rect></g><g><g transform="translate(349.5,150)"><g><g stroke-opacity="1" fill="#f3f3f3" fill-opacity="0.8"><g><g><path d=" M53,0  a53,53,0,0,1,-106,0 a53,53,0,0,1,106,0 M42,0  a42,42,0,0,0,-84,0 a42,42,0,0,0,84,0 L42,0 "></path></g></g></g><g stroke-opacity="1" fill="#000000" fill-opacity="0.2"><g><g><path d=" M50,0  a50,50,0,0,1,-100,0 a50,50,0,0,1,100,0 M45,0  a45,45,0,0,0,-90,0 a45,45,0,0,0,90,0 L45,0 "></path></g></g></g><g fill="#000000" fill-opacity="0.4"><g transform="translate(-14,-7)" style="user-select: none;"><text x="14px" y="14" dy="-3.78" text-anchor="middle"><tspan>100%</tspan></text></g></g></g></g></g></g><g opacity="0.3" aria-labelledby="id-242-title" filter="url(&quot;#filter-id-242&quot;)" style="cursor: pointer;" transform="translate(0,279)"><g fill="#ffffff" opacity="0"><rect width="66" height="21"></rect></g><g><g shape-rendering="auto" fill="none" stroke-opacity="1" stroke-width="1.7999999999999998" stroke="#3cabff"><path d=" M15,15  C17.4001,15 22.7998,15.0001 27,15 C31.2002,14.9999 33.2999,6 36,6 C38.7001,6 38.6999,10.5 40.5,10.5 C42.3001,10.5 42.2999,6 45,6 C47.7001,6 50.9999,14.9999 54,15 C57.0002,15.0001 58.7999,15 60,15"></path></g><g shape-rendering="auto" fill="none" stroke-opacity="1" stroke-width="1.7999999999999998" stroke="url(&quot;#gradient-id-245&quot;)"><path d=" M6,15  C8.2501,15 9.7498,15.0001 15,15 C20.2502,14.9999 20.7748,3.6 27,3.6 C33.2252,3.6 33.8998,14.9999 39.9,15 C45.9002,15.0001 45.9748,15 51,15 C56.0252,15 57.7499,15 60,15"></path></g></g><title id="id-242-title">Chart created using amCharts library</title></g><g role="tooltip" visibility="hidden" opacity="0"><g fill="#000000" fill-opacity="1" stroke-width="1" stroke-opacity="1" stroke="#000000" style="pointer-events: none;" transform="translate(5,-5)"><path d="M0,0 L20,0 a0,0 0 0 1 0,0 L20,10 a0,0 0 0 1 -0,0 L0,10 a0,0 0 0 1 -0,-0 L0,10 L0,10 L-5,5 L0,0 L0,0 a0,0 0 0 1 0,-0"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(15,-5)"><g transform="translate(0,5)" display="none"></g></g></g></g><g role="tooltip" visibility="hidden" opacity="0" transform="translate(259.8282111981768,108.41232734277199)"><g fill="#000000" fill-opacity="1" stroke-width="1" stroke-opacity="1" stroke="#000000" style="pointer-events: none;" transform="translate(-10,-15)"><path d="M0,0 L20,0 a0,0 0 0 1 0,0 L20,10 a0,0 0 0 1 -0,0 L20,10 L15,10 L10,15 L5,10 L0,10 a0,0 0 0 1 -0,-0 L0,0 a0,0 0 0 1 0,-0"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(0,-15)"><g transform="translate(0,5)" display="none"></g></g></g></g><g role="tooltip" visibility="hidden" opacity="0"><g fill="#ffffff" fill-opacity="0.9" stroke-width="1" stroke-opacity="1" stroke="#ffffff" filter="url(&quot;#filter-id-318&quot;)" style="pointer-events: none;" transform="translate(6,0)"><path d="M3,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,8 L0,8 L-6,0 L0,-2 L0,3 a3,3 0 0 1 3,-3"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(18,0)"><g transform="translate(0,7)" display="none"></g></g></g></g><g role="tooltip" visibility="hidden" opacity="0"><g fill="#ffffff" fill-opacity="0.9" stroke-width="1" stroke-opacity="1" stroke="#ffffff" filter="url(&quot;#filter-id-339&quot;)" style="pointer-events: none;" transform="translate(6,0)"><path d="M3,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,8 L0,8 L-6,0 L0,-2 L0,3 a3,3 0 0 1 3,-3"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(18,0)"><g transform="translate(0,7)" display="none"></g></g></g></g></g></g></g></g></svg></div></div>
                                                <script>
                                                    am4core.ready(function () {

                                                        // Themes begin
                                                        am4core.useTheme(am4themes_kelly);
                                                        am4core.useTheme(am4themes_animated);
                                                        // Themes end



                                                        // Create chart instance
                                                        var chart = am4core.create("indoor", am4charts.RadarChart);

                                                        // Add data
                                                        chart.data = [{
                                                            "category": "Device#2",
                                                            "value": 40,
                                                            "full": 100
                                                        }, {
                                                            "category": "Device#4",
                                                            "value": 35,
                                                            "full": 100
                                                        }, {
                                                            "category": "Device#1",
                                                            "value": 22,
                                                            "full": 100
                                                        }, {
                                                            "category": "Device#5",
                                                            "value": 18,
                                                            "full": 100
                                                        }];

                                                        // Make chart not full circle
                                                        chart.startAngle = -90;
                                                        chart.endAngle = 180;
                                                        chart.innerRadius = am4core.percent(20);

                                                        // Set number format
                                                        chart.numberFormatter.numberFormat = "#.#'%'";

                                                        // Create axes
                                                        var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
                                                        categoryAxis.dataFields.category = "category";
                                                        categoryAxis.renderer.grid.template.location = 0;
                                                        categoryAxis.renderer.grid.template.strokeOpacity = 0;
                                                        categoryAxis.renderer.labels.template.horizontalCenter = "right";
                                                        categoryAxis.renderer.labels.template.fontWeight = 500;
                                                        categoryAxis.renderer.labels.template.adapter.add("fill", function (fill, target) {
                                                            return (target.dataItem.index >= 0) ? chart.colors.getIndex(target.dataItem.index) : fill;
                                                        });
                                                        categoryAxis.renderer.minGridDistance = 10;

                                                        var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
                                                        valueAxis.renderer.grid.template.strokeOpacity = 0;
                                                        valueAxis.min = 0;
                                                        valueAxis.max = 100;
                                                        valueAxis.strictMinMax = true;

                                                        // Create series
                                                        var series1 = chart.series.push(new am4charts.RadarColumnSeries());
                                                        series1.dataFields.valueX = "full";
                                                        series1.dataFields.categoryY = "category";
                                                        series1.clustered = false;
                                                        series1.columns.template.fill = new am4core.InterfaceColorSet().getFor("alternativeBackground");
                                                        series1.columns.template.fillOpacity = 0.08;
                                                        series1.columns.template.cornerRadiusTopLeft = 20;
                                                        series1.columns.template.strokeWidth = 0;
                                                        series1.columns.template.radarColumn.cornerRadius = 20;

                                                        var series2 = chart.series.push(new am4charts.RadarColumnSeries());
                                                        series2.dataFields.valueX = "value";
                                                        series2.dataFields.categoryY = "category";
                                                        series2.clustered = false;
                                                        series2.columns.template.strokeWidth = 0;
                                                        series2.columns.template.tooltipText = "{category}: [bold]{value}[/]";
                                                        series2.columns.template.radarColumn.cornerRadius = 20;

                                                        series2.columns.template.adapter.add("fill", function (fill, target) {
                                                            return chart.colors.getIndex(target.dataItem.index);
                                                        });

                                                        // Add cursor
                                                        chart.cursor = new am4charts.RadarCursor();

                                                    }); // end am4core.ready()
                                                </script>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                          
                            <div class="col-lg-6  ">
                                <div class="panel panel-default  card round light  shadow">
                                    <div class="panel-heading     ">
                                        <h3 class="panel-title font-weight-600  "> Alerts
                                        </h3>
                                        
                                    </div>
                                   <div class="panel-body">
                                        <div class="filters margin-bottom-10 padding-bottom-10" style="border-bottom: 1px solid #eee;">
                                            <div class="inline-block">
                                                <select class="form-control input-xs">
                                                    <option>Sites</option>
                                                    <option>Sites 01</option>
                                                    <option>Sites 02</option>
                                                    <option>Sites 03</option>
                                                    <option>Sites 04</option>
                                                </select>
                                            </div>
                                            <div class="inline-block">
                                                <select class="form-control input-xs">
                                                    <option>Device</option>
                                                    <option>Device 01</option>
                                                    <option>Device 02</option>
                                                    <option>Device 03</option>
                                                    <option>Device 04</option>
                                                </select>
                                            </div>
                                        </div>

                                       
                                        <div>
                                            <div class="chartbox">
                                                <div id="space_4" style="height:355px;"><div style="width: 100%; height: 100%; position: relative; top: 0.390625px;"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="group" style="width: 100%; height: 100%; overflow: visible;"><defs><clipPath id="id-46"><rect width="719" height="355"></rect></clipPath><linearGradient id="gradient-id-69" x1="1%" x2="99%" y1="59%" y2="41%"><stop stop-color="#474758" offset="0"></stop><stop stop-color="#474758" stop-opacity="1" offset="0.75"></stop><stop stop-color="#3cabff" stop-opacity="1" offset="0.755"></stop></linearGradient><clipPath id="id-78"></clipPath><filter id="filter-id-51" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-66" filterUnits="objectBoundingBox" width="120%" height="120%" x="-10%" y="-10%"><feColorMatrix type="saturate" values="0"></feColorMatrix></filter><filter id="filter-id-83" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter></defs><g><g fill="#ffffff" fill-opacity="0"><rect width="719" height="355"></rect></g><g><g role="region" clip-path="url(&quot;#id-46&quot;)" opacity="1" aria-label="Chart"><g><g><g><g><g><g transform="translate(359.5,138.5)"><g><g role="group" opacity="1" aria-label="Series"><g><g clip-path="url(&quot;#id-78&quot;)"><g></g></g><g></g><g><g><g stroke-opacity="1" role="menuitem" focusable="true" tabindex="0" id="id-1024" fill="#f3c300" stroke="#f3c300"><g><g><path d=" M0,0  L0,-104.8  A6,6,0,0,1,5.9978,-110.6375 a110.8,110.8,0,0,1,103.2245,92.0059 A6,6,0,0,1,104.1102,-12.0046 L0,0 "></path></g><g></g></g></g><g stroke-opacity="1" role="menuitem" focusable="true" tabindex="0" id="id-1058" fill="#a1caf1" stroke="#a1caf1"><g><g><path d=" M0,0  L91.4097,-10.5402  A6,6,0,0,1,97.8748,-5.2487 a98.01538461538463,98.01538461538463,0,0,1,-54.4644,93.1268 A6,6,0,0,1,35.6289,84.8376 L0,0 "></path></g><g></g></g></g><g stroke-opacity="1" role="menuitem" focusable="true" tabindex="0" id="id-1091" fill="#848482" stroke="#848482"><g><g><path d=" M0,0  L30.6786,73.0502  A6,6,0,0,1,27.3915,80.7093 a85.23076923076924,85.23076923076924,0,0,1,-79.1067,-12.961 A6,6,0,0,1,-52.3863,59.4407 L0,0 "></path></g><g></g></g></g><g stroke-opacity="1" role="menuitem" focusable="true" tabindex="0" id="id-1124" fill="#0067a5" stroke="#0067a5" transform="translate(0,0)"><g><g><path d=" M0,0  L-42.5244,48.2508  A6,6,0,0,1,-50.8195,48.5966 a70.31538461538463,70.31538461538463,0,0,1,-19.4925,-47.9106 A6,6,0,0,1,-64.1317,-4.8576 L0,0 "></path></g><g></g></g></g><g stroke-opacity="1" role="menuitem" focusable="true" tabindex="0" id="id-1157" fill="#f6a600" stroke="#f6a600"><g><g><path d=" M0,0  L-53.0833,-4.0208  A6,6,0,0,1,-58.3106,-10.4262 a59.235384615384625,59.235384615384625,0,0,1,15.0764,-30.0663 A6,6,0,0,1,-34.9743,-40.1348 L0,0 "></path></g><g></g></g></g><g stroke-opacity="1" role="menuitem" focusable="true" tabindex="0" id="id-1190" fill="#882d17" stroke="#882d17"><g><g><path d=" M0,0  L-31.8946,-36.6007  A6,6,0,0,1,-31.103,-44.8113 a54.547692307692316,54.547692307692316,0,0,1,25.1121,-9.4064 A6,6,0,0,1,0,-48.5477 L0,0 "></path></g><g></g></g></g></g></g><g><g><g fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1"><polyline points="73.72373643208,-82.71306236747999,116.34,-91.328,122.34,-91.328"></polyline></g><g fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1"><polyline points="84.6080410706431,49.48226962673232,115.701,54.985,121.701,54.985"></polyline></g><g fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1"><polyline points="-13.780683196123078,84.10931454812308,-115.062,94.236,-121.062,94.236"></polyline></g><g fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1"><polyline points="-65.13117772541771,26.498735847870005,-114.316,30.085,-120.316,30.085"></polyline></g><g fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1"><polyline points="-52.95120451678232,-26.551849858876622,-113.762,-30.569,-119.762,-30.569"></polyline></g><g fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1"><polyline points="-19.13399749049108,-51.081707839291084,-113.527,-59.255,-119.527,-59.255"></polyline></g></g></g><g><g><g fill="#000000" aria-label="Parking Sensors: 23.2%" transform="translate(122.34,-91.328)"><g transform="translate(5,-6.5)" style="user-select: none;"><text x="0" y="12.8125" dy="-3.459"><tspan>Parking Sensors: 23.2%</tspan></text></g></g><g fill="#000000" aria-label="Sockets: 20.5%" transform="translate(121.701,54.985)"><g transform="translate(5,-6.5)" style="user-select: none;"><text x="0" y="12.8125" dy="-3.459"><tspan>Sockets: 20.5%</tspan></text></g></g><g fill="#000000" aria-label="Switches: 17.8%" transform="translate(-121.062,94.236)"><g transform="translate(-87,-6.5)" style="user-select: none;"><text x="0" y="12.8125" dy="-3.459"><tspan>Switches: 17.8%</tspan></text></g></g><g fill="#000000" aria-label="Cams: 14.7%" transform="translate(-120.316,30.085)"><g transform="translate(-71,-6.5)" style="user-select: none;"><text x="0" y="12.8125" dy="-3.459"><tspan>Cams: 14.7%</tspan></text></g></g><g fill="#000000" aria-label="Bulbs: 12.4%" transform="translate(-119.762,-30.569)"><g transform="translate(-72,-6.5)" style="user-select: none;"><text x="0" y="12.8125" dy="-3.459"><tspan>Bulbs: 12.4%</tspan></text></g></g><g fill="#000000" aria-label="Electric Meter: 11.4%" transform="translate(-119.527,-59.255)"><g transform="translate(-113,-6.5)" style="user-select: none;"><text x="0" y="12.8125" dy="-3.459"><tspan>Electric Meter: 11.4%</tspan></text></g></g></g></g></g></g></g></g><g transform="translate(259,177.5)"><g><g><g></g></g></g></g></g></g><g role="group" aria-label="Legend" transform="translate(0,277)"><g><g focusable="true" tabindex="0" role="switch" aria-controls="id-1024" aria-labelledby="id-1024" aria-checked="true" transform="translate(48.5,0)" style="cursor: pointer;"><g fill="#ffffff" fill-opacity="0"><rect width="163" height="39"></rect></g><g transform="translate(0,8)"><g style="pointer-events: none;"><g fill="#ffffff" fill-opacity="0" stroke-opacity="0"><rect width="23" height="23"></rect></g><g><g stroke-opacity="1" fill="#f3c300" stroke="#f3c300"><path d="M3,0 L20,0 a3,3 0 0 1 3,3 L23,20 a3,3 0 0 1 -3,3 L3,23 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3 Z"></path></g></g></g><g fill="#000000" aria-label="Parking Sensors" style="pointer-events: none;" transform="translate(28,4.5)"><g style="user-select: none;"><text x="0" y="14.015625" overflow="hidden" dy="-3.784"><tspan>Parking Sensors</tspan></text></g></g><g fill="#000000" aria-label="%" style="pointer-events: none;" transform="translate(108,5)"><g style="user-select: none;"><text x="50" y="12.8125" dy="-3.459" text-anchor="end"><tspan>23.2%</tspan></text></g></g></g></g><g focusable="true" tabindex="0" role="switch" aria-controls="id-1058" aria-labelledby="id-1058" aria-checked="true" transform="translate(231.5,0)" style="cursor: pointer;"><g fill="#ffffff" fill-opacity="0"><rect width="126" height="39"></rect></g><g transform="translate(0,8)"><g style="pointer-events: none;"><g fill="#ffffff" fill-opacity="0" stroke-opacity="0"><rect width="23" height="23"></rect></g><g><g stroke-opacity="1" fill="#a1caf1" stroke="#a1caf1"><path d="M3,0 L20,0 a3,3 0 0 1 3,3 L23,20 a3,3 0 0 1 -3,3 L3,23 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3 Z"></path></g></g></g><g fill="#000000" aria-label="Sockets" style="pointer-events: none;" transform="translate(28,4.5)"><g style="user-select: none;"><text x="0" y="14.015625" overflow="hidden" dy="-3.784"><tspan>Sockets</tspan></text></g></g><g fill="#000000" aria-label="%" style="pointer-events: none;" transform="translate(71,5)"><g style="user-select: none;"><text x="50" y="12.8125" dy="-3.459" text-anchor="end"><tspan>20.5%</tspan></text></g></g></g></g><g focusable="true" tabindex="0" role="switch" aria-controls="id-1091" aria-labelledby="id-1091" aria-checked="true" transform="translate(405.5,0)" style="cursor: pointer;"><g fill="#ffffff" fill-opacity="0"><rect width="130" height="39"></rect></g><g transform="translate(0,8)"><g style="pointer-events: none;"><g fill="#ffffff" fill-opacity="0" stroke-opacity="0"><rect width="23" height="23"></rect></g><g><g stroke-opacity="1" fill="#848482" stroke="#848482"><path d="M3,0 L20,0 a3,3 0 0 1 3,3 L23,20 a3,3 0 0 1 -3,3 L3,23 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3 Z"></path></g></g></g><g fill="#000000" aria-label="Switches" style="pointer-events: none;" transform="translate(28,4.5)"><g style="user-select: none;"><text x="0" y="14.015625" overflow="hidden" dy="-3.784"><tspan>Switches</tspan></text></g></g><g fill="#000000" aria-label="%" style="pointer-events: none;" transform="translate(75,5)"><g style="user-select: none;"><text x="50" y="12.8125" dy="-3.459" text-anchor="end"><tspan>17.8%</tspan></text></g></g></g></g><g focusable="true" tabindex="0" role="switch" aria-controls="id-1124" aria-labelledby="id-1124" aria-checked="true" transform="translate(555.5,0)" style="cursor: pointer;"><g fill="#ffffff" fill-opacity="0"><rect width="115" height="39"></rect></g><g transform="translate(0,8)"><g style="pointer-events: none;"><g fill="#ffffff" fill-opacity="0" stroke-opacity="0"><rect width="23" height="23"></rect></g><g><g stroke-opacity="1" fill="#0067a5" stroke="#0067a5"><path d="M3,0 L20,0 a3,3 0 0 1 3,3 L23,20 a3,3 0 0 1 -3,3 L3,23 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3 Z"></path></g></g></g><g fill="#000000" aria-label="Cams" style="pointer-events: none;" transform="translate(28,4.5)"><g style="user-select: none;"><text x="0" y="14.015625" overflow="hidden" dy="-3.784"><tspan>Cams</tspan></text></g></g><g fill="#000000" aria-label="%" style="pointer-events: none;" transform="translate(60,5)"><g style="user-select: none;"><text x="50" y="12.8125" dy="-3.459" text-anchor="end"><tspan>14.7%</tspan></text></g></g></g></g><g focusable="true" tabindex="0" role="switch" aria-controls="id-1157" aria-labelledby="id-1157" aria-checked="true" transform="translate(48.5,39)" style="cursor: pointer;"><g fill="#ffffff" fill-opacity="0"><rect width="115" height="39"></rect></g><g transform="translate(0,8)"><g style="pointer-events: none;"><g fill="#ffffff" fill-opacity="0" stroke-opacity="0"><rect width="23" height="23"></rect></g><g><g stroke-opacity="1" fill="#f6a600" stroke="#f6a600"><path d="M3,0 L20,0 a3,3 0 0 1 3,3 L23,20 a3,3 0 0 1 -3,3 L3,23 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3 Z"></path></g></g></g><g fill="#000000" aria-label="Bulbs" style="pointer-events: none;" transform="translate(28,4.5)"><g style="user-select: none;"><text x="0" y="14.015625" overflow="hidden" dy="-3.784"><tspan>Bulbs</tspan></text></g></g><g fill="#000000" aria-label="%" style="pointer-events: none;" transform="translate(60,5)"><g style="user-select: none;"><text x="50" y="12.8125" dy="-3.459" text-anchor="end"><tspan>12.4%</tspan></text></g></g></g></g><g focusable="true" tabindex="0" role="switch" aria-controls="id-1190" aria-labelledby="id-1190" aria-checked="true" transform="translate(231.5,39)" style="cursor: pointer;"><g fill="#ffffff" fill-opacity="0"><rect width="154" height="39"></rect></g><g transform="translate(0,8)"><g style="pointer-events: none;"><g fill="#ffffff" fill-opacity="0" stroke-opacity="0"><rect width="23" height="23"></rect></g><g><g stroke-opacity="1" fill="#882d17" stroke="#882d17"><path d="M3,0 L20,0 a3,3 0 0 1 3,3 L23,20 a3,3 0 0 1 -3,3 L3,23 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3 Z"></path></g></g></g><g fill="#000000" aria-label="Electric Meter" style="pointer-events: none;" transform="translate(28,4.5)"><g style="user-select: none;"><text x="0" y="14.015625" overflow="hidden" dy="-3.784"><tspan>Electric Meter</tspan></text></g></g><g fill="#000000" aria-label="%" style="pointer-events: none;" transform="translate(99,5)"><g style="user-select: none;"><text x="50" y="12.8125" dy="-3.459" text-anchor="end"><tspan>11.4%</tspan></text></g></g></g></g></g></g></g></g></g></g><g><g><g role="tooltip" visibility="hidden" opacity="0"><g fill="#ffffff" fill-opacity="0.9" stroke-width="1" stroke-opacity="1" stroke="#ffffff" filter="url(&quot;#filter-id-51&quot;)" style="pointer-events: none;" transform="translate(0,6)"><path d="M3,0 L3,0 L0,-6 L13,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(12,6)"><g transform="translate(0,7)" display="none"></g></g></g></g><g visibility="hidden" display="none" style="pointer-events: none;"><g fill="#ffffff" opacity="1"><rect width="719" height="355"></rect></g><g><g transform="translate(259,177.5)"><g><g stroke-opacity="1" fill="#f3f3f3" fill-opacity="0.8"><g><g><path d=" M53,0  a53,53,0,0,1,-106,0 a53,53,0,0,1,106,0 M42,0  a42,42,0,0,0,-84,0 a42,42,0,0,0,84,0 L42,0 "></path></g></g></g><g stroke-opacity="1" fill="#000000" fill-opacity="0.2"><g><g><path d=" M50,0  a50,50,0,0,1,-100,0 a50,50,0,0,1,100,0 M45,0  a45,45,0,0,0,-90,0 a45,45,0,0,0,90,0 L45,0 "></path></g></g></g><g fill="#000000" fill-opacity="0.4"><g transform="translate(-14.5,-6.5)" style="user-select: none;"><text x="14.5px" y="12.8125" dy="-3.459" text-anchor="middle"><tspan>100%</tspan></text></g></g></g></g></g></g><g opacity="0.3" aria-labelledby="id-66-title" filter="url(&quot;#filter-id-66&quot;)" style="cursor: pointer;" transform="translate(0,334)"><g fill="#ffffff" opacity="0"><rect width="66" height="21"></rect></g><g><g shape-rendering="auto" fill="none" stroke-opacity="1" stroke-width="1.7999999999999998" stroke="#3cabff"><path d=" M15,15  C17.4001,15 22.7998,15.0001 27,15 C31.2002,14.9999 33.2999,6 36,6 C38.7001,6 38.6999,10.5 40.5,10.5 C42.3001,10.5 42.2999,6 45,6 C47.7001,6 50.9999,14.9999 54,15 C57.0002,15.0001 58.7999,15 60,15"></path></g><g shape-rendering="auto" fill="none" stroke-opacity="1" stroke-width="1.7999999999999998" stroke="url(&quot;#gradient-id-69&quot;)"><path d=" M6,15  C8.2501,15 9.7498,15.0001 15,15 C20.2502,14.9999 20.7748,3.6 27,3.6 C33.2252,3.6 33.8998,14.9999 39.9,15 C45.9002,15.0001 45.9748,15 51,15 C56.0252,15 57.7499,15 60,15"></path></g></g><title id="id-66-title">Chart created using amCharts library</title></g><g role="tooltip" opacity="0" aria-describedby="id-1124" transform="translate(326.9344,151.7494)" aria-hidden="true" visibility="hidden"><g fill="#0067a5" fill-opacity="0.9" stroke-width="1" stroke-opacity="1" stroke="#ffffff" filter="url(&quot;#filter-id-83&quot;)" style="pointer-events: none;" transform="translate(-55.5,-31)"><path d="M3,0 L108,0 a3,3 0 0 1 3,3 L111,22 a3,3 0 0 1 -3,3 L108,25 L60.5,25 L55.5,31 L50.5,25 L3,25 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(0,-31)"><g transform="translate(-43.5,7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>Cams: 14.7% (165)</tspan></text></g></g></g></g></g></g></g></g></svg></div></div>
                                                <script>
                                                    am4core.ready(function () {

                                                        // Themes begin
                                                        am4core.useTheme(am4themes_kelly);
                                                        am4core.useTheme(am4themes_animated);
                                                        // Themes end

                                                        // Create chart
                                                        var chart = am4core.create("space_4", am4charts.PieChart);
                                                        chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

                                                        chart.data = [
                                                            {
                                                                country: "Low Battery",
                                                                value: 260
                                                            },
                                                            {
                                                                country: "Empty Pipe",
                                                                value: 230
                                                            },
                                                            {
                                                                country: "Reverse Flow",
                                                                value: 200
                                                            },
                                                            {
                                                                country: "Temperature ",
                                                                value: 165
                                                            },
                                                            {
                                                                country: "Tamper",
                                                                value: 139
                                                            },
                                                            
                                                        ];

                                                        var series = chart.series.push(new am4charts.PieSeries());
                                                        series.dataFields.value = "value";
                                                        series.dataFields.radiusValue = "value";
                                                        series.dataFields.category = "country";
                                                        series.slices.template.cornerRadius = 6;
                                                        series.colors.step = 3;

                                                        series.hiddenState.properties.endAngle = -90;

                                                        chart.legend = new am4charts.Legend();

                                                    }); // end am4core.ready()
                                                </script>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                         
                           
                            <div class="col-lg-6  card-group-row__col">
                                <div class="panel panel-default card round shadow font-size-12">
                                    <div class="panel-heading margin-bottom-0">
                                        <h3 class="panel-title font-weight-600 bg-theme1 white1 "> Most Utilized Meter
                                            <a data-toggle="popover" class="  font-weight-200 margin-left-10 grey-400" data-original-title="" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="help1">
                                            <i class="ri-question-line"></i>
                                        </a>
                                    </h3>
                                    <div id="popover-content-help1" class="hide">
                                        Some help information goes here
                                    </div>
        
        
        
                                   
                                </div>
                                    <div class="panel-body padding-15">
                                           <div class="filters margin-bottom-10 padding-bottom-10" style="border-bottom: 1px solid #eee;">
                                            <div class="inline-block">
                                                <select class="form-control input-xs">
                                                    <option>Buildings</option>
                                                    <option>Building 01</option>
                                                    <option>Building 02</option>
                                                    <option>Building 03</option>
                                                    <option>Building 04</option>
                                                </select>
                                            </div>
                                            <div class="inline-block">
                                                <select class="form-control input-xs">

                                                    <option>Floor </option>
                                                    <option>Floor 01</option>
                                                    <option>Floor 02</option>
                                                    <option>Floor 03</option>
                                                </select>
                                            </div>
                                            <div class="inline-block" style="float:right;">
                         
                            </div>
                                        </div>
                                       
                                       
                                        <div>
                                            <div class="chartbox">
                                                <div id="sssss0s1" style="height:300px;"><div style="width: 100%; height: 100%; position: relative; left: -0.34375px;"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="group" style="width: 100%; height: 100%; overflow: visible;"><defs><clipPath id="id-541"><rect width="459" height="300"></rect></clipPath><linearGradient id="gradient-id-564" x1="1%" x2="99%" y1="59%" y2="41%"><stop stop-color="#474758" offset="0"></stop><stop stop-color="#474758" stop-opacity="1" offset="0.75"></stop><stop stop-color="#3cabff" stop-opacity="1" offset="0.755"></stop></linearGradient><clipPath id="id-588"></clipPath><filter id="filter-id-546" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-561" filterUnits="objectBoundingBox" width="120%" height="120%" x="-10%" y="-10%"><feColorMatrix type="saturate" values="0"></feColorMatrix></filter><filter id="filter-id-593" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><clipPath id="id-1709" transform="translate(162,135) scale(11.25)"><path d="M1 24v-2h2v-4h-2l1.996-4h.004v-14h18v14h.004l1.996 4h-2v4h2v2h-22zm4-1h4v-4h-4v4zm14-4h-4v4h4v-4zm-5 0h-4v4h4v-4zm6.386-4h-16.772l-1 2h18.772l-1-2zm-13.386-5h-2v2h2v-2zm8 0h-2v2h2v-2zm-4 0h-2v2h2v-2zm8 0h-2v2h2v-2zm-12-4h-2v2h2v-2zm8 0h-2v2h2v-2zm-4 0h-2v2h2v-2zm8 0h-2v2h2v-2zm-12-4h-2v2h2v-2zm8 0h-2v2h2v-2zm-4 0h-2v2h2v-2zm8 0h-2v2h2v-2z" transform="translate(-12,-12)"></path></clipPath></defs><g><g fill="#ffffff" fill-opacity="0"><rect width="459" height="300"></rect></g><g><g role="region" clip-path="url(&quot;#id-541&quot;)" opacity="1" aria-label="Chart"><g transform="translate(0,15)"><g><g><g><g><g><g><g role="group" opacity="1" aria-label="Series"><g><g clip-path="url(&quot;#id-588&quot;)"><g></g></g><g></g><g transform="translate(0,0)" clip-path="url(&quot;#id-1709&quot;)"><g><g visibility="hidden" transform="translate(162,135) scale(11.25)"></g><g fill-opacity="0.5" opacity="1" fill="#f3c300" transform="translate(162,162)"><g><g><path d=" M-125.75,0  L125.75,0  Q125.75,0 125.75,0 L-125.75,0  Q-125.75,0 -125.75,0"></path></g></g></g><g fill-opacity="0.5" opacity="0" aria-hidden="true" display="none" fill="#875692"><g><g><path d=" M0,0  L0,0  Q0,0 0,0 L0,0  Q0,0 0,0"></path></g></g></g><g role="menuitem" focusable="true" tabindex="0" fill="#f3c300" stroke="#f3c300"><g><g><path d=" M36.25,0  L287.75,0  L287.75,162  L36.25,162  L36.25,0 "></path></g></g></g><g role="menuitem" focusable="true" tabindex="0" fill="#875692" stroke="#875692" transform="translate(0,162)"><g><g><path d=" M36.25,0  L287.75,0  L287.75,108  L36.25,108  L36.25,0 "></path></g></g></g></g></g><g transform="translate(0,0)"><g><g fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="1"><path d=" M287.75,0  L328,0  L354,0 "></path></g><g fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="1"><path d=" M287.75,162  L328,162  L334,162 "></path></g></g></g><g transform="translate(334,0)"><g><g fill="#000000" opacity="1" aria-label="Occupied: 0.0%" transform="translate(20,0)"><g transform="translate(5,-7)" style="user-select: none;"><text x="0" y="14.015625" dy="-3.784"><tspan>Occupied: 60.0%</tspan></text></g></g><g fill="#000000" opacity="1" aria-label=" Not Occupied: 0.0%" transform="translate(0,162)"><g transform="translate(5,-7)" style="user-select: none;"><text x="0" y="14.015625" dy="-3.784"><tspan> Not Occupied: 40.0%</tspan></text></g></g></g></g></g></g></g></g><g><g><g><g></g></g></g></g></g></g></g></g></g></g><g><g><g role="tooltip" visibility="hidden" opacity="0"><g fill="#ffffff" fill-opacity="0.9" stroke-width="1" stroke-opacity="1" stroke="#ffffff" filter="url(&quot;#filter-id-546&quot;)" style="pointer-events: none;" transform="translate(0,6)"><path d="M3,0 L3,0 L0,-6 L13,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(12,6)"><g transform="translate(0,7)" display="none"></g></g></g></g><g visibility="hidden" display="none" style="pointer-events: none;"><g fill="#ffffff" opacity="1"><rect width="459" height="300"></rect></g><g><g transform="translate(223,150)"><g><g stroke-opacity="1" fill="#f3f3f3" fill-opacity="0.8"><g><g><path d=" M53,0  a53,53,0,0,1,-106,0 a53,53,0,0,1,106,0 M42,0  a42,42,0,0,0,-84,0 a42,42,0,0,0,84,0 L42,0 "></path></g></g></g><g stroke-opacity="1" fill="#000000" fill-opacity="0.2"><g><g><path d=" M50,0  a50,50,0,0,1,-100,0 a50,50,0,0,1,100,0 M45,0  a45,45,0,0,0,-90,0 a45,45,0,0,0,90,0 L45,0 "></path></g></g></g><g fill="#000000" fill-opacity="0.4"><g transform="translate(-14,-7)" style="user-select: none;"><text x="14px" y="14" dy="-3.78" text-anchor="middle"><tspan>100%</tspan></text></g></g></g></g></g></g><g opacity="0.3" aria-labelledby="id-561-title" filter="url(&quot;#filter-id-561&quot;)" style="cursor: pointer;" transform="translate(0,279)"><g fill="#ffffff" opacity="0"><rect width="66" height="21"></rect></g><g><g shape-rendering="auto" fill="none" stroke-opacity="1" stroke-width="1.7999999999999998" stroke="#3cabff"><path d=" M15,15  C17.4001,15 22.7998,15.0001 27,15 C31.2002,14.9999 33.2999,6 36,6 C38.7001,6 38.6999,10.5 40.5,10.5 C42.3001,10.5 42.2999,6 45,6 C47.7001,6 50.9999,14.9999 54,15 C57.0002,15.0001 58.7999,15 60,15"></path></g><g shape-rendering="auto" fill="none" stroke-opacity="1" stroke-width="1.7999999999999998" stroke="url(&quot;#gradient-id-564&quot;)"><path d=" M6,15  C8.2501,15 9.7498,15.0001 15,15 C20.2502,14.9999 20.7748,3.6 27,3.6 C33.2252,3.6 33.8998,14.9999 39.9,15 C45.9002,15.0001 45.9748,15 51,15 C56.0252,15 57.7499,15 60,15"></path></g></g><title id="id-561-title">Chart created using amCharts library</title></g><g role="tooltip" visibility="hidden" opacity="0"><g fill="#ffffff" fill-opacity="0.9" stroke-width="1" stroke-opacity="1" stroke="#ffffff" filter="url(&quot;#filter-id-593&quot;)" style="pointer-events: none;" transform="translate(0,6)"><path d="M3,0 L3,0 L0,-6 L13,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(12,6)"><g transform="translate(0,7)" display="none"></g></g></g></g></g></g></g></g></svg></div></div>
        
                                                <script>
                                                    am4core.ready(function() {


                                                        var iconPath = "M1 24v-2h2v-4h-2l1.996-4h.004v-14h18v14h.004l1.996 4h-2v4h2v2h-22zm4-1h4v-4h-4v4zm14-4h-4v4h4v-4zm-5 0h-4v4h4v-4zm6.386-4h-16.772l-1 2h18.772l-1-2zm-13.386-5h-2v2h2v-2zm8 0h-2v2h2v-2zm-4 0h-2v2h2v-2zm8 0h-2v2h2v-2zm-12-4h-2v2h2v-2zm8 0h-2v2h2v-2zm-4 0h-2v2h2v-2zm8 0h-2v2h2v-2zm-12-4h-2v2h2v-2zm8 0h-2v2h2v-2zm-4 0h-2v2h2v-2zm8 0h-2v2h2v-2z"

                                                        var chart = am4core.create("sssss0s1", am4charts.SlicedChart);
                                                        chart.hiddenState.properties.opacity = 0; // this makes initial fade in effect
                                                        chart.paddingLeft = 0;

                                                        chart.data = [{
                                                            "name": "Device#3",
                                                            "value": 60,

                                                        }, {
                                                            "name": " Rest",
                                                            "value": 40,

                                                        }];

                                                        var series = chart.series.push(new am4charts.PictorialStackedSeries());
                                                        series.dataFields.value = "value";
                                                        series.dataFields.category = "name";
                                                        series.alignLabels = true;
                                                        // this makes only A label to be visible
                                                        series.labels.template.propertyFields.disabled = "disabled";
                                                        series.ticks.template.propertyFields.disabled = "disabled";


                                                        series.maskSprite.path = iconPath;
                                                        series.ticks.template.locationX = 1;
                                                        series.ticks.template.locationY = 0;

                                                        series.labelsContainer.width = 100;
                                                        series.labelsContainer.template.disabled = true;



                                                        chart.logo.height = -505;
                                                        // chart.legend = new am4charts.Legend();
                                                        // chart.legend.useDefaultMarker = false;
                                                        // let markerTemplate = chart.legend.markers.template;
                                                        // markerTemplate.width = 10;
                                                        // markerTemplate.height = 10;
                                                        // chart.legend.position = "left";
                                                        // chart.legend.valueLabels.template.disabled = false;



                                                        

                                                        marker.cornerRadius(20, 20, 20, 20);
                                                        var title = chart.createChild(am4core.Label);
                                                            title.text = "Office2 Meter"
                                                            title.fontSize = 16;
                                                            title.fill = am4core.color("#00000");
                                                            title.isMeasured = false;
                                                            title.x = am4core.percent(62);
                                                            title.y = am4core.percent(97);
                                                            title.horizontalCenter = "right";
                                                            title.fontWeight = "500";
                                                        

                                                    }); // end am4core.ready()
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6  card-group-row__col">
                                <div class="panel panel-default card round shadow font-size-12">
                                    <div class="panel-heading margin-bottom-0">
                                        <h3 class="panel-title font-weight-600 bg-theme1 white1 "> Highest Water Consumption
                                            <a data-toggle="popover" class="  font-weight-200 margin-left-10 grey-400" data-original-title="" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="help1">
                                            <i class="ri-question-line"></i>
                                        </a>
                                    </h3>
                                    <div id="popover-content-help1" class="hide">
                                        Some help information goes here
                                    </div>
        
        
        
                                   
                                </div>
                                    <div class="panel-body padding-15">
                                           <div class="filters margin-bottom-10 padding-bottom-10" style="border-bottom: 1px solid #eee;">
                                            <div class="inline-block">
                                                <select class="form-control input-xs">
                                                    <option>Buildings</option>
                                                    <option>Building 01</option>
                                                    <option>Building 02</option>
                                                    <option>Building 03</option>
                                                    <option>Building 04</option>
                                                </select>
                                            </div>
                                            <div class="inline-block">
                                                <select class="form-control input-xs">

                                                    <option>Floor </option>
                                                    <option>Floor 01</option>
                                                    <option>Floor 02</option>
                                                    <option>Floor 03</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div>
                                            <div>
                                                <div class="chartbox">
                                                    <div id="hwc" style="height:268px;"><div style="width: 100%; height: 100%; position: relative; left: 0.3125px;"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="group" style="width: 100%; height: 100%; overflow: visible;"><defs><clipPath id="id-608"><rect width="459" height="268"></rect></clipPath><linearGradient id="gradient-id-631" x1="1%" x2="99%" y1="59%" y2="41%"><stop stop-color="#474758" offset="0"></stop><stop stop-color="#474758" stop-opacity="1" offset="0.75"></stop><stop stop-color="#3cabff" stop-opacity="1" offset="0.755"></stop></linearGradient><clipPath id="id-639" transform="translate(0,49.206)"><circle r="107.2"></circle></clipPath><filter id="filter-id-613" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-628" filterUnits="objectBoundingBox" width="120%" height="120%" x="-10%" y="-10%"><feColorMatrix type="saturate" values="0"></feColorMatrix></filter><path d=" M-127.2,0  A127.2,127.2,0,0,0,127.2,0" id="text-path-id-642"></path></defs><g><g fill="#ffffff" fill-opacity="0"><rect width="459" height="268"></rect></g><g><g clip-path="url(&quot;#id-608&quot;)"><g><g transform="translate(229.5,134)"><g><g fill="#dadada"><circle r="107.2"></circle></g><g transform="translate(0,49.206)"></g><g fill="#34a4eb" clip-path="url(&quot;#id-639&quot;)" transform="translate(0,-49.206)"><path transform="translate(-229.5,0)" width="459" height="268" d=" M0,0  C3.0602,2.9999 9.1797,-5 15.3,-5 C21.4203,-5 24.4797,5 30.6,5 C36.7203,5 39.7797,-5 45.9,-5 C52.0203,-5 55.0797,5 61.2,5 C67.3203,5 70.3797,-5 76.5,-5 C82.6203,-5 85.6797,5 91.8,5 C97.9203,5 100.9797,-5 107.1,-5 C113.2203,-5 116.2797,5 122.4,5 C128.5203,5 131.5797,-5 137.7,-5 C143.8203,-5 146.8797,5 153,5 C159.1203,5 162.1797,-5 168.3,-5 C174.4203,-5 177.4797,5 183.6,5 C189.7203,5 192.7797,-5 198.9,-5 C205.0203,-5 208.0797,5 214.2,5 C220.3203,5 223.3797,-5 229.5,-5 C235.6203,-5 238.6797,5 244.8,5 C250.9203,5 253.9797,-5 260.1,-5 C266.2203,-5 269.2797,5 275.4,5 C281.5203,5 284.5797,-5 290.7,-5 C296.8203,-5 299.8797,5 306,5 C312.1203,5 315.1797,-5 321.3,-5 C327.4203,-5 330.4797,5 336.6,5 C342.7203,5 345.7797,-5 351.9,-5 C358.0203,-5 361.0797,5 367.2,5 C373.3203,5 376.3797,-5 382.5,-5 C388.6203,-5 391.6797,5 397.8,5 C403.9203,5 406.9797,-5 413.1,-5 C419.2203,-5 422.2797,5 428.4,5 C434.5203,5 437.5797,-5 443.7,-5 C449.8203,-5 455.9398,2.9999 459,5 L459,0  C456.0001,2.9779 464,8.933 464,14.8889 C464,20.8447 454,23.8219 454,29.7778 C454,35.7336 464,38.7108 464,44.6667 C464,50.6225 454,53.5997 454,59.5556 C454,65.5114 464,68.4886 464,74.4444 C464,80.4003 454,83.3775 454,89.3333 C454,95.2892 464,98.2664 464,104.2222 C464,110.1781 454,113.1553 454,119.1111 C454,125.067 464,128.0441 464,134 C464,139.9559 454,142.933 454,148.8889 C454,154.8447 464,157.8219 464,163.7778 C464,169.7336 454,172.7108 454,178.6667 C454,184.6225 464,187.5997 464,193.5556 C464,199.5114 454,202.4886 454,208.4444 C454,214.4003 464,217.3775 464,223.3333 C464,229.2892 454,232.2664 454,238.2222 C454,244.1781 464,247.1553 464,253.1111 C464,259.067 456.0001,265.0221 454,268 L459,268  C455.9398,270.9999 449.8203,263 443.7,263 C437.5797,263 434.5203,273 428.4,273 C422.2797,273 419.2203,263 413.1,263 C406.9797,263 403.9203,273 397.8,273 C391.6797,273 388.6203,263 382.5,263 C376.3797,263 373.3203,273 367.2,273 C361.0797,273 358.0203,263 351.9,263 C345.7797,263 342.7203,273 336.6,273 C330.4797,273 327.4203,263 321.3,263 C315.1797,263 312.1203,273 306,273 C299.8797,273 296.8203,263 290.7,263 C284.5797,263 281.5203,273 275.4,273 C269.2797,273 266.2203,263 260.1,263 C253.9797,263 250.9203,273 244.8,273 C238.6797,273 235.6203,263 229.5,263 C223.3797,263 220.3203,273 214.2,273 C208.0797,273 205.0203,263 198.9,263 C192.7797,263 189.7203,273 183.6,273 C177.4797,273 174.4203,263 168.3,263 C162.1797,263 159.1203,273 153,273 C146.8797,273 143.8203,263 137.7,263 C131.5797,263 128.5203,273 122.4,273 C116.2797,273 113.2203,263 107.1,263 C100.9797,263 97.9203,273 91.8,273 C85.6797,273 82.6203,263 76.5,263 C70.3797,263 67.3203,273 61.2,273 C55.0797,273 52.0203,263 45.9,263 C39.7797,263 36.7203,273 30.6,273 C24.4797,273 21.4203,263 15.3,263 C9.1797,263 3.0602,270.9999 0,273 L0,268  C-2.9999,265.0221 5,259.067 5,253.1111 C5,247.1553 -5,244.1781 -5,238.2222 C-5,232.2664 5,229.2892 5,223.3333 C5,217.3775 -5,214.4003 -5,208.4444 C-5,202.4886 5,199.5114 5,193.5556 C5,187.5997 -5,184.6225 -5,178.6667 C-5,172.7108 5,169.7336 5,163.7778 C5,157.8219 -5,154.8447 -5,148.8889 C-5,142.933 5,139.9559 5,134 C5,128.0441 -5,125.067 -5,119.1111 C-5,113.1553 5,110.1781 5,104.2222 C5,98.2664 -5,95.2892 -5,89.3333 C-5,83.3775 5,80.4003 5,74.4444 C5,68.4886 -5,65.5114 -5,59.5556 C-5,53.5997 5,50.6225 5,44.6667 C5,38.7108 -5,35.7336 -5,29.7778 C-5,23.8219 5,20.8447 5,14.8889 C5,8.933 -2.9999,2.9779 -5,0z"></path></g><g fill="#ffffff" font-size="30"><g transform="translate(-51,0)" style="user-select: none;"><text x="0" y="34" dy="-9.18"><tspan>4K Litres</tspan></text></g></g><g fill="#34a4eb" font-size="20"><g style="user-select: none;"><text dy="0" text-anchor="middle"><textPath xlink:href="#text-path-id-642" path=" M-127.2,0  A127.2,127.2,0,0,0,127.2,0" startOffset="50%">Floor 2 Meter</textPath></text></g></g></g></g></g></g><g><g><g role="tooltip" visibility="hidden" opacity="0"><g fill="#ffffff" fill-opacity="0.9" stroke-width="1" stroke-opacity="1" stroke="#ffffff" filter="url(&quot;#filter-id-613&quot;)" style="pointer-events: none;" transform="translate(0,6)"><path d="M3,0 L3,0 L0,-6 L13,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(12,6)"><g transform="translate(0,7)" display="none"></g></g></g></g><g visibility="hidden" display="none"><g fill="#ffffff" opacity="1"><rect width="459" height="268"></rect></g><g><g><g><g stroke-opacity="1" fill="#f3f3f3" fill-opacity="0.8"><g><g><path d=" M53,0  a53,53,0,0,1,-106,0 a53,53,0,0,1,106,0 M42,0  a42,42,0,0,0,-84,0 a42,42,0,0,0,84,0 L42,0 "></path></g></g></g><g stroke-opacity="1" fill="#000000" fill-opacity="0.2"><g><g><path d=""></path></g></g></g><g fill="#000000" fill-opacity="0.4"><g display="none"></g></g></g></g></g></g><g opacity="0.3" aria-labelledby="id-628-title" filter="url(&quot;#filter-id-628&quot;)" style="cursor: pointer;" transform="translate(0,247)"><g fill="#ffffff" opacity="0"><rect width="66" height="21"></rect></g><g><g shape-rendering="auto" fill="none" stroke-opacity="1" stroke-width="1.7999999999999998" stroke="#3cabff"><path d=" M15,15  C17.4001,15 22.7998,15.0001 27,15 C31.2002,14.9999 33.2999,6 36,6 C38.7001,6 38.6999,10.5 40.5,10.5 C42.3001,10.5 42.2999,6 45,6 C47.7001,6 50.9999,14.9999 54,15 C57.0002,15.0001 58.7999,15 60,15"></path></g><g shape-rendering="auto" fill="none" stroke-opacity="1" stroke-width="1.7999999999999998" stroke="url(&quot;#gradient-id-631&quot;)"><path d=" M6,15  C8.2501,15 9.7498,15.0001 15,15 C20.2502,14.9999 20.7748,3.6 27,3.6 C33.2252,3.6 33.8998,14.9999 39.9,15 C45.9002,15.0001 45.9748,15 51,15 C56.0252,15 57.7499,15 60,15"></path></g></g><title id="id-628-title">Chart created using amCharts library</title></g></g></g></g></g></svg></div></div>
                                                    <!-- <h6 style="text-align: center;">Floor 02 Meter</h6> -->
                                                    <script>
                                                        am4core.ready(function () {
    
                                                            // Themes begin
                                                            am4core.useTheme(am4themes_kelly);
                                                            am4core.useTheme(am4themes_animated);
                                                            // Themes end
    
                                                            var capacity = 6000;
                                                            var value = 4000;
                                                            var circleSize = 0.8;
    
                                                            var component = am4core.create("hwc", am4core.Container)
                                                            component.width = am4core.percent(100);
                                                            component.height = am4core.percent(100);
    
                                                            var chartContainer = component.createChild(am4core.Container);
                                                            chartContainer.x = am4core.percent(50)
                                                            chartContainer.y = am4core.percent(50)
    
                                                            var circle = chartContainer.createChild(am4core.Circle);
                                                            circle.fill = am4core.color("#dadada");
    
                                                            var circleMask = chartContainer.createChild(am4core.Circle);
    
                                                            var waves = chartContainer.createChild(am4core.WavedRectangle);
                                                            waves.fill = am4core.color("#34a4eb");
                                                            waves.mask = circleMask;
                                                            waves.horizontalCenter = "middle";
                                                            waves.waveHeight = 10;
                                                            waves.waveLength = 30;
                                                            waves.y = 500;
                                                            circleMask.y = -500;
    
                                                            component.events.on("maxsizechanged", function () {
                                                                var smallerSize = Math.min(component.pixelWidth, component.pixelHeight);
                                                                var radius = smallerSize * circleSize / 2;
    
                                                                circle.radius = radius;
                                                                circleMask.radius = radius;
                                                                waves.height = smallerSize;
                                                                waves.width = Math.max(component.pixelWidth, component.pixelHeight);
    
                                                                //capacityLabel.y = radius;
    
                                                                var labelRadius = radius + 20
    
                                                                capacityLabel.path = am4core.path.moveTo({ x: -labelRadius, y: 0 }) + am4core.path.arcToPoint({ x: labelRadius, y: 0 }, labelRadius, labelRadius);
                                                                capacityLabel.locationOnPath = 0.5;
    
                                                                setValue(value);
                                                            })
    
    
                                                            function setValue(value) {
                                                                var y = - circle.radius - waves.waveHeight + (1 - value / capacity) * circle.pixelRadius * 2;
                                                                waves.animate([{ property: "y", to: y }, { property: "waveHeight", to: 10, from: 15 }, { property: "x", from: -50, to: 0 }], 5000, am4core.ease.elasticOut);
                                                                circleMask.animate([{ property: "y", to: -y }, { property: "x", from: 50, to: 0 }], 5000, am4core.ease.elasticOut);
                                                            }
    
    
                                                            var label = chartContainer.createChild(am4core.Label)
                                                            var formattedValue = component.numberFormatter.format(value, "#.#a");
                                                            formattedValue = formattedValue.toUpperCase();
    
                                                            label.text = formattedValue + " Litres";
                                                            label.fill = am4core.color("#fff");
                                                            label.fontSize = 30;
                                                            label.horizontalCenter = "middle";
    
    
                                                            var capacityLabel = chartContainer.createChild(am4core.Label)
    
                                                            var formattedCapacity = component.numberFormatter.format(capacity, "#.#a").toUpperCase();;
    
                                                            capacityLabel.text = "Floor 2 Meter";
                                                            capacityLabel.fill = am4core.color("#34a4eb");
                                                            capacityLabel.fontSize = 20;
                                                            capacityLabel.textAlign = "middle";
                                                            capacityLabel.padding(0, 0, 0, 0);
    
                                                        }); // end am4core.ready()
                                                    </script>
    
    
                                                </div>

                                            </div>
                                        </div>
                                        <div class="font-size-14  margin-bottom-10 font-weight-100 relative text-center" style="top:-0px; z-index:20; color: white;"> K (kWh) </div>
                                    
                                    </div>
                                </div>
                            </div>
                           

                            
                            <div class="col-lg-12  ">
                                <div class="panel panel-default  card round light  shadow">
                                    <div class="panel-heading     ">
                                        <h3 class="panel-title font-weight-600  "> Highest Water Temperature 
                                        </h3>
                                        <!-- <div class="panel-actions">
                                            <a class="panel-action icon ion-loop " data-toggle="tooltip"
                                                data-original-title="Refresh"></a>
                                        </div> -->
                                    </div>
                                    <div class="panel-body">
                                        <div class="filters margin-bottom-10 padding-bottom-10" style="border-bottom: 1px solid #eee;">
                                            <div class="inline-block">
                                                <select class="form-control input-xs">
                                                    <option>Buildings</option>
                                                    <option>Building 01</option>
                                                    <option>Building 02</option>
                                                    <option>Building 03</option>
                                                    <option>Building 04</option>
                                                </select>
                                            </div>
                                            <div class="inline-block">
                                                <select class="form-control input-xs">

                                                    <option>Floor </option>
                                                    <option>Floor 01</option>
                                                    <option>Floor 02</option>
                                                    <option>Floor 03</option>
                                                </select>
                                            </div>
                                            <div class="inline-block">
                                                <select class="form-control input-xs">
                                                    <option>Apartment/Office</option>
                                                    <option>Apartment/Office1</option>
                                                    <option>Apartment/Office2</option>
                                                    <option>Apartment/Office3</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="chartdiv" style="height:300px;  "><div style="width: 100%; height: 100%; position: relative;"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="group" style="width: 100%; height: 100%; overflow: visible;"><defs><clipPath id="id-669"><rect width="1498" height="300"></rect></clipPath><linearGradient id="gradient-id-692" x1="1%" x2="99%" y1="59%" y2="41%"><stop stop-color="#474758" offset="0"></stop><stop stop-color="#474758" stop-opacity="1" offset="0.75"></stop><stop stop-color="#3cabff" stop-opacity="1" offset="0.755"></stop></linearGradient><filter id="filter-id-722" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"></filter><filter id="filter-id-743" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"></filter><clipPath id="id-776"><path d="M0,0 L1418,0 L1418,119 L0,119 L0,0"></path></clipPath><clipPath id="id-796"><rect width="1418" height="119"></rect></clipPath><clipPath id="id-1217"><rect width="1418" height="119"></rect></clipPath><filter id="filter-id-674" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-689" filterUnits="objectBoundingBox" width="120%" height="120%" x="-10%" y="-10%"><feColorMatrix type="saturate" values="0"></feColorMatrix></filter><filter id="filter-id-781" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter></defs><g><g fill="#ffffff" fill-opacity="0"><rect width="1498" height="300"></rect></g><g><g role="region" clip-path="url(&quot;#id-669&quot;)" opacity="1" aria-label="Chart" id="id-645"><g transform="translate(15,15)"><g><g><g><g><g transform="translate(0,32)"><g><g transform="translate(50,0)" style="touch-action: none; user-select: none; -webkit-user-drag: none;"><g fill="#ffffff" fill-opacity="0"><rect width="1418" height="119"></rect></g><g><g><g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,129)" display="none"><path d=" M0,0  L1418,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,119)"><path d=" M0,0  L1418,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,109)" display="none"><path d=" M0,0  L1418,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,99)" display="none"><path d=" M0,0  L1418,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,89)" display="none"><path d=" M0,0  L1418,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,79)"><path d=" M0,0  L1418,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,69)" display="none"><path d=" M0,0  L1418,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,-40)" display="none"><path d=" M0,0  L1418,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none"><path d=" M0,0  L1418,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,40)"><path d=" M0,0  L1418,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,159)" display="none"><path d=" M0,0  L1418,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,198)" display="none"><path d=" M0,0  L1418,0 " transform="translate(-0.5,-0.5)"></path></g></g></g><g><g><g stroke="#000000" stroke-opacity="0.15" fill="none"><path d=" M0,0  L0,119 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(473,0)"><path d=" M0,0  L0,119 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(945,0)"><path d=" M0,0  L0,119 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(1418,0)"><path d=" M0,0  L0,119 " transform="translate(-0.5,-0.5)"></path></g></g></g><g><g><g role="group" stroke-opacity="0" fill-opacity="1" stroke="#f3c300" aria-label="Series"><g><g clip-path="url(&quot;#id-776&quot;)"><g><g><g><g stroke-opacity="1" stroke-width="0" fill="#f3c300" fill-opacity="1" stroke="#f3c300" role="menuitem" focusable="true" tabindex="0" transform="translate(47.262,39.667)"><g><g fill-opacity="0.8"><path d="M10,0 L368.138,0 a10,10 0 0 1 10,10 L378.138,79.333 a0,0 0 0 1 -0,0 L0,79.333 a0,0 0 0 1 -0,-0 L0,10 a10,10 0 0 1 10,-10 Z"></path></g></g></g><g stroke-opacity="1" stroke-width="0" fill="#875692" fill-opacity="1" stroke="#f3c300" role="menuitem" focusable="true" tabindex="0" transform="translate(519.938,59.5)"><g><g fill-opacity="0.8"><path d="M10,0 L368.124,0 a10,10 0 0 1 10,10 L378.124,59.5 a0,0 0 0 1 -0,0 L0,59.5 a0,0 0 0 1 -0,-0 L0,10 a10,10 0 0 1 10,-10 Z"></path></g></g></g><g stroke-opacity="1" stroke-width="0" fill="#f38400" fill-opacity="1" stroke="#f3c300" role="menuitem" focusable="true" tabindex="0" transform="translate(992.6,99.167)"><g><g fill-opacity="0.8"><path d="M9.9165,0 L368.2215,0 a9.9165,9.9165 0 0 1 9.9165,9.9165 L378.138,19.833 a0,0 0 0 1 -0,0 L0,19.833 a0,0 0 0 1 -0,-0 L0,9.9165 a9.9165,9.9165 0 0 1 9.9165,-9.9165 Z"></path></g></g></g></g></g></g></g><g></g></g></g></g></g><g clip-path="url(&quot;#id-1217&quot;)"><g><g fill="#f3c300" stroke="#f3c300"><g></g></g></g></g><g><g><g><g></g></g><g><g></g></g></g></g><g><g></g></g><g><g></g></g><g opacity="0" visibility="hidden" aria-hidden="true" clip-path="url(&quot;#id-796&quot;)" style="touch-action: none; user-select: none; -webkit-user-drag: none;"><g><g fill-opacity="0.2" fill="#000000" visibility="hidden" style="pointer-events: none;"><path></path></g><g stroke="#000000" fill="none" stroke-dasharray="3,3" stroke-opacity="0.4" style="pointer-events: none;"><path d=" M0,0  L0,119 "></path></g><g stroke="#000000" fill="none" stroke-dasharray="3,3" stroke-opacity="0.4" style="pointer-events: none;"><path d=" M0,0  L1418,0 "></path></g></g></g><g role="button" focusable="true" tabindex="0" opacity="0" visibility="hidden" aria-hidden="true" transform="translate(1378,-3)" aria-labelledby="id-660-title"><g fill="#6794dc" stroke="#ffffff" fill-opacity="1" stroke-opacity="0" transform="translate(0,8)"><path d="M17,0 L18,0 a17,17 0 0 1 17,17 L35,17 a17,17 0 0 1 -17,17 L17,34 a17,17 0 0 1 -17,-17 L0,17 a17,17 0 0 1 17,-17 Z"></path></g><g transform="translate(9,9)"><g stroke="#ffffff" style="pointer-events: none;" transform="translate(0,8)"><path d=" M0,0  L11,0 " transform="translate(2.5,7.5)"></path></g><g fill="#000000" style="pointer-events: none;" transform="translate(17,8)"><g display="none"></g></g></g><title id="id-660-title">Zoom Out</title></g></g></g><g><g><g aria-hidden="true"><g><g fill="#000000" transform="translate(0,59.5) rotate(-90)"><g display="none"></g></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,300)" opacity="0" visibility="hidden" aria-hidden="true"><path transform="translate(-0.5,-0.5)" d=" M0,0  L1458,0 "></path></g><g><g><g fill="#000000" aria-label="L" fill-opacity="0" opacity="0" stroke-opacity="0" style="pointer-events: none;" transform="translate(50,59.5)"><g transform="translate(-25,-8)" style="user-select: none;"><text x="0" y="16.015625" dy="-4.324"><tspan>25</tspan></text></g></g><g fill="#000000" transform="translate(50,128.917)" display="none"><g transform="translate(-25,-8)" style="user-select: none;"><text x="0" y="16.015625" dy="-4.324"><tspan>15</tspan></text></g></g><g fill="#000000" transform="translate(50,119)"><g transform="translate(-25,-8)" style="user-select: none;"><text x="0" y="16.015625" dy="-4.324"><tspan>20</tspan></text></g></g><g fill="#000000" transform="translate(50,109.083)" display="none"><g transform="translate(-25,-8)" style="user-select: none;"><text x="0" y="16.015625" dy="-4.324"><tspan>25</tspan></text></g></g><g fill="#000000" transform="translate(50,99.167)" display="none"><g transform="translate(-25,-8)" style="user-select: none;"><text x="0" y="16.015625" dy="-4.324"><tspan>30</tspan></text></g></g><g fill="#000000" transform="translate(50,89.25)" display="none"><g transform="translate(-25,-8)" style="user-select: none;"><text x="0" y="16.015625" dy="-4.324"><tspan>35</tspan></text></g></g><g fill="#000000" transform="translate(50,79.333)"><g transform="translate(-25,-8)" style="user-select: none;"><text x="0" y="16" dy="-4.32"><tspan>40</tspan></text></g></g><g fill="#000000" transform="translate(50,69.417)" display="none"><g transform="translate(-25,-8)" style="user-select: none;"><text x="0" y="16.015625" dy="-4.324"><tspan>45</tspan></text></g></g><g fill="#000000" transform="translate(50,-39.667)" display="none"><g transform="translate(-32,-8)" style="user-select: none;"><text x="0" y="16.015625" dy="-4.324"><tspan>100</tspan></text></g></g><g fill="#000000" transform="translate(50,0)"><g transform="translate(-25,-8)" style="user-select: none;"><text x="0" y="16.015625" dy="-4.324"><tspan>80</tspan></text></g></g><g fill="#000000" transform="translate(50,39.667)"><g transform="translate(-25,-8)" style="user-select: none;"><text x="0" y="16" dy="-4.32"><tspan>60</tspan></text></g></g><g fill="#000000" transform="translate(50,158.667)" display="none"><g transform="translate(-18,-8)" style="user-select: none;"><text x="0" y="16.015625" dy="-4.324"><tspan>0</tspan></text></g></g><g fill="#000000" transform="translate(50,198.333)" display="none"><g transform="translate(-29,-8)" style="user-select: none;"><text x="0" y="16.015625" dy="-4.324"><tspan>-20</tspan></text></g></g></g></g><g stroke="#000000" stroke-opacity="0" fill="none" style="pointer-events: none;" transform="translate(50,0)"><path d=" M0,0  L0,119 " transform="translate(-0.5,-0.5)"></path></g></g></g></g></g><g transform="translate(1468,0)"><g></g></g></g></g><g><g transform="translate(50,0)"><g role="scrollbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" aria-valuetext="From Study Room to Conference Room" aria-labelledby="id-696-title" aria-orientation="horizontal" aria-controls="id-645" transform="translate(0,10)"><g fill="#f3f3f3" fill-opacity="0.5"><path d="M6,0 L1412,0 a6,6 0 0 1 6,6 L1418,6 a6,6 0 0 1 -6,6 L6,12 a6,6 0 0 1 -6,-6 L0,6 a6,6 0 0 1 6,-6 Z"></path></g><g><g role="slider" focusable="true" tabindex="0" aria-valuemin="0" aria-valuemax="100" aria-live="polite" aria-labelledby="id-710-title" aria-valuenow="0" aria-valuetext="From Study Room to Conference Room" aria-describedby="id-710-description" transform="translate(0,6)" style="touch-action: none; user-select: none; -webkit-user-drag: none; cursor: -webkit-grab;"><g fill="#d9d9d9" stroke="#ffffff" fill-opacity="1" stroke-opacity="1" transform="translate(0,-6)"><path d="M6,0 L1412,0 a6,6 0 0 1 6,6 L1418,6 a6,6 0 0 1 -6,6 L6,12 a6,6 0 0 1 -6,-6 L0,6 a6,6 0 0 1 6,-6 Z"></path></g><g transform="translate(0,-6)"><g fill="#000000" style="pointer-events: none;" transform="translate(709,6)"><g display="none"></g></g></g><title id="id-710-title">From Study Room to Conference Room</title><desc id="id-710-description">Use left and right arrows to move selection</desc></g><g role="slider" focusable="true" tabindex="0" aria-valuemin="0" aria-valuemax="100" aria-labelledby="id-698-title" aria-valuenow="0" aria-valuetext="From Study Room" aria-describedby="id-698-description" transform="translate(0,6)" style="touch-action: none; user-select: none; -webkit-user-drag: none; cursor: ew-resize;"><g fill="#d9d9d9" stroke="#ffffff" fill-opacity="1" stroke-opacity="1" transform="translate(-14,-14)"><path d="M14,0 L14,0 a14,14 0 0 1 14,14 L28,14 a14,14 0 0 1 -14,14 L14,28 a14,14 0 0 1 -14,-14 L0,14 a14,14 0 0 1 14,-14 Z"></path></g><g transform="translate(-6,-12)"><g stroke="#ffffff" stroke-opacity="0.7" style="pointer-events: none;" transform="translate(2,12)"><path d=" M-2,-6  L-2,6  M2,-6  L2,6 " transform="translate(3.5,-0.5)"></path></g></g><title id="id-698-title">From Study Room</title><desc id="id-698-description">Use left and right arrows to move left selection</desc></g><g role="slider" focusable="true" tabindex="0" aria-valuemin="0" aria-valuemax="100" aria-labelledby="id-704-title" aria-valuenow="100" aria-valuetext="To Conference Room" aria-describedby="id-704-description" transform="translate(1418,6)" style="touch-action: none; user-select: none; -webkit-user-drag: none; cursor: ew-resize;"><g fill="#d9d9d9" stroke="#ffffff" fill-opacity="1" stroke-opacity="1" transform="translate(-14,-14)"><path d="M14,0 L14,0 a14,14 0 0 1 14,14 L28,14 a14,14 0 0 1 -14,14 L14,28 a14,14 0 0 1 -14,-14 L0,14 a14,14 0 0 1 14,-14 Z"></path></g><g transform="translate(-6,-12)"><g stroke="#ffffff" stroke-opacity="0.7" style="pointer-events: none;" transform="translate(2,12)"><path d=" M-2,-6  L-2,6  M2,-6  L2,6 " transform="translate(3.5,-0.5)"></path></g></g><title id="id-704-title">To Conference Room</title><desc id="id-704-description">Use left and right arrows to move right selection</desc></g></g><title id="id-696-title">Use TAB to select grip buttons or left and right arrows to change selection</title></g></g></g><g transform="translate(0,151)"><g transform="translate(50,0)"><g aria-hidden="true"><g><g stroke="#000000" stroke-opacity="0" fill="none" style="pointer-events: none;"><path d=" M0,0  L1418,0 " transform="translate(-0.5,-0.5)"></path></g><g><g><g fill="#000000" aria-label="L" fill-opacity="0" opacity="0" stroke-opacity="0" style="pointer-events: none;" transform="translate(709,0) rotate(270)"><g transform="translate(-109,-8)" style="user-select: none;"><text x="0" y="16.015625" dy="-4.324"><tspan>Conference Room</tspan></text></g></g><g fill="#000000" transform="translate(236.331,0) rotate(270)"><g transform="translate(-77,-8)" style="user-select: none;"><text x="0" y="16" dy="-4.32"><tspan>Study Room</tspan></text></g></g><g fill="#000000" transform="translate(709,0) rotate(270)"><g transform="translate(-91,-8)" style="user-select: none;"><text x="0" y="16" dy="-4.32"><tspan>Meeting Room</tspan></text></g></g><g fill="#000000" transform="translate(1181.669,0) rotate(270)"><g transform="translate(-109,-8)" style="user-select: none;"><text x="0" y="16" dy="-4.32"><tspan>Conference Room</tspan></text></g></g><g fill="#000000" display="none" transform="translate(1654.331,0) rotate(270)"><g transform="translate(-10,0)" display="none"></g></g></g></g><g stroke="#000000" stroke-opacity="0.15" fill="none" display="none" transform="translate(1418,-119)" opacity="0" visibility="hidden" aria-hidden="true"><path transform="translate(-0.5,-0.5)" d=" M0,0  L0,119 "></path></g><g fill="#000000" transform="translate(709,119)"><g display="none"></g></g></g></g></g></g></g></g></g></g></g></g><g><g><g role="tooltip" visibility="hidden" opacity="0"><g fill="#ffffff" fill-opacity="0.9" stroke-width="1" stroke-opacity="1" stroke="#ffffff" filter="url(&quot;#filter-id-674&quot;)" style="pointer-events: none;" transform="translate(0,6)"><path d="M3,0 L3,0 L0,-6 L13,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(12,6)"><g transform="translate(0,7)" display="none"></g></g></g></g><g visibility="hidden" display="none" style="pointer-events: none;"><g fill="#ffffff" opacity="1"><rect width="1498" height="300"></rect></g><g><g transform="translate(729,150)"><g><g stroke-opacity="1" fill="#f3f3f3" fill-opacity="0.8"><g><g><path d=" M53,0  a53,53,0,0,1,-106,0 a53,53,0,0,1,106,0 M42,0  a42,42,0,0,0,-84,0 a42,42,0,0,0,84,0 L42,0 "></path></g></g></g><g stroke-opacity="1" fill="#000000" fill-opacity="0.2"><g><g><path d=" M50,0  a50,50,0,0,1,-100,0 a50,50,0,0,1,100,0 M45,0  a45,45,0,0,0,-90,0 a45,45,0,0,0,90,0 L45,0 "></path></g></g></g><g fill="#000000" fill-opacity="0.4"><g transform="translate(-16,-8)" style="user-select: none;"><text x="16px" y="16" dy="-4.32" text-anchor="middle"><tspan>100%</tspan></text></g></g></g></g></g></g><g opacity="0.3" aria-labelledby="id-689-title" filter="url(&quot;#filter-id-689&quot;)" style="cursor: pointer;" transform="translate(0,279)"><g fill="#ffffff" opacity="0"><rect width="66" height="21"></rect></g><g><g shape-rendering="auto" fill="none" stroke-opacity="1" stroke-width="1.7999999999999998" stroke="#3cabff"><path d=" M15,15  C17.4001,15 22.7998,15.0001 27,15 C31.2002,14.9999 33.2999,6 36,6 C38.7001,6 38.6999,10.5 40.5,10.5 C42.3001,10.5 42.2999,6 45,6 C47.7001,6 50.9999,14.9999 54,15 C57.0002,15.0001 58.7999,15 60,15"></path></g><g shape-rendering="auto" fill="none" stroke-opacity="1" stroke-width="1.7999999999999998" stroke="url(&quot;#gradient-id-692&quot;)"><path d=" M6,15  C8.2501,15 9.7498,15.0001 15,15 C20.2502,14.9999 20.7748,3.6 27,3.6 C33.2252,3.6 33.8998,14.9999 39.9,15 C45.9002,15.0001 45.9748,15 51,15 C56.0252,15 57.7499,15 60,15"></path></g></g><title id="id-689-title">Chart created using amCharts library</title></g><g role="tooltip" visibility="hidden" opacity="0" display="none"><g fill="#000000" fill-opacity="1" stroke-width="1" stroke-opacity="1" stroke="#000000" style="pointer-events: none;"><path></path></g><g><g fill="#ffffff" style="pointer-events: none;"><g transform="translate(0,5)"></g></g></g></g><g role="tooltip" visibility="hidden" opacity="0"><g fill="#000000" fill-opacity="1" stroke-width="1" stroke-opacity="1" stroke="#000000" style="pointer-events: none;" transform="translate(-25,47)"><path d="M0,0 L20,0 a0,0 0 0 1 0,0 L20,0 L20,0 L25,0 L20,10 L20,10 a0,0 0 0 1 -0,0 L0,10 a0,0 0 0 1 -0,-0 L0,0 a0,0 0 0 1 0,-0"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(-15,47)"><g transform="translate(0,5)" display="none"></g></g></g></g><g role="tooltip" visibility="hidden" opacity="0"><g fill="#ffffff" fill-opacity="0.9" stroke-width="1" stroke-opacity="1" stroke="#ffffff" filter="url(&quot;#filter-id-781&quot;)" style="pointer-events: none;" transform="translate(0,6)"><path d="M3,0 L3,0 L0,-6 L13,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(12,6)"><g transform="translate(0,7)" display="none"></g></g></g></g></g></g></g></g></svg></div></div>
                                            <script>
                                                am4core.ready(function () {

                                                    // Themes begin
                                                    am4core.useTheme(am4themes_kelly);
                                                    am4core.useTheme(am4themes_animated);
                                                    // Themes end

                                                    // Create chart instance
                                                    var chart = am4core.create("chartdiv", am4charts.XYChart);
                                                    chart.scrollbarX = new am4core.Scrollbar();

                                                    // Add data
                                                    chart.data = [{
                                                        "country": "Device#3",
                                                        "visits": 60
                                                    }, {
                                                        "country": "Device#1",
                                                        "visits": 50
                                                    }, {
                                                        "country": "Device#4",
                                                        "visits": 30
                                                    }];

                                                    // Create axes
                                                    var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
                                                    categoryAxis.dataFields.category = "country";
                                                    categoryAxis.renderer.grid.template.location = 0;
                                                    categoryAxis.renderer.minGridDistance = 30;
                                                    categoryAxis.renderer.labels.template.horizontalCenter = "right";
                                                    categoryAxis.renderer.labels.template.verticalCenter = "middle";
                                                    categoryAxis.renderer.labels.template.rotation = 270;
                                                    categoryAxis.tooltip.disabled = true;
                                                    categoryAxis.renderer.minHeight = 110;

                                                    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                                                    valueAxis.renderer.minWidth = 50;

                                                    // Create series
                                                    var series = chart.series.push(new am4charts.ColumnSeries());
                                                    series.sequencedInterpolation = true;
                                                    series.dataFields.valueY = "visits";
                                                    series.dataFields.categoryX = "country";
                                                    series.tooltipText = "[{categoryX}: bold]{valueY}[/]";
                                                    series.columns.template.strokeWidth = 0;

                                                    series.tooltip.pointerOrientation = "vertical";

                                                    series.columns.template.column.cornerRadiusTopLeft = 10;
                                                    series.columns.template.column.cornerRadiusTopRight = 10;
                                                    series.columns.template.column.fillOpacity = 0.8;

                                                    // on hover, make corner radiuses bigger
                                                    var hoverState = series.columns.template.column.states.create("hover");
                                                    hoverState.properties.cornerRadiusTopLeft = 0;
                                                    hoverState.properties.cornerRadiusTopRight = 0;
                                                    hoverState.properties.fillOpacity = 1;

                                                    series.columns.template.adapter.add("fill", function (fill, target) {
                                                        return chart.colors.getIndex(target.dataItem.index);
                                                    });

                                                    // Cursor
                                                    chart.cursor = new am4charts.XYCursor();

                                                }); // end am4core.ready()
                                            </script>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>

                </div>

            </div>




















        </div>
    </div>
    






    <script src="../plugins/d3/d3.min.js "></script>
    <script src="../plugins/c3/c3.js "></script>
    <script src="../plugins/js/core.js "></script>
    <script src="js/scripts.js "></script>




<div hidden="" style="width: 1px; height: 1px; position: absolute; z-index: -1000000;"><div style="width: 100%; height: 100%; position: relative;"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="group" style="width: 100%; height: 100%; overflow: visible;"><defs><clipPath id="id-35"></clipPath><clipPath id="id-122"></clipPath><clipPath id="id-296"><path></path></clipPath><clipPath id="id-499"></clipPath><clipPath id="id-573"></clipPath><clipPath id="id-763"><path></path></clipPath><clipPath id="id-830"><path></path></clipPath><filter id="filter-id-835" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-768" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-578" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-504" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-301" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-127" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-40" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter></defs></svg></div></div><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="https://www.gstatic.com/images/branding/product/1x/translate_24dp.png" width="20" height="20" alt="Google Translate"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Original text</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Contribute a better translation</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div><svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg><div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div><iframe frameborder="0" class="goog-te-menu-frame skiptranslate" title="Language Translate Widget" style="visibility: visible; box-sizing: content-box; width: 1046px; height: 263px; display: none;"></iframe></body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>