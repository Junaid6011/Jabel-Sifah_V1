
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
                <li><a href="javascript:void(0)"> Water/Meter Detail </a> </li>

            </ol>
        </div>







        <div class=" page-content container-fluid">






            <div class="row card-group-row  ">

                <div class="col-lg-12  card-group-row__col ">
                    <div class="panel panel-default  round shadow  ">
                        <div class="panel-heading margin-bottom-0 ">
                            <h3 class="panel-title font-weight-600 bg-teal-8001 white1 "> Meter Details</h3>
                            <div class="panel-actions">
                                <a></a>
                            </div>
                        </div>
                        <div class="panel-body padding-15">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="margin-bottom-25">

                                        <div class="form-group margin-bottom-10 text-center">
                                            <img src="images/smart-meter.png" style="height: 150px;">
                                        </div>

                                        <div class="form-group margin-bottom-10 text-center">
                                            <div class="font-size-24 font-weight-200 margin-bottom-0 grey-800">
                                                Xvg-1271
                                            </div>
                                        </div>
                                        <div class="form-group margin-bottom-0 text-center" style="margin-left: 48%;">

                                            <span style="    vertical-align: inherit;">
                                                <div class="">
                                                    <div class="onoffswitch ">
                                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch1" checked="">
                                                        <label class="onoffswitch-label" for="myonoffswitch1">
                                                            <span class="onoffswitch-inner"></span>
                                                            <span class="onoffswitch-switch"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group margin-bottom-10">


                                                <table class="table margin-bottom-0 table-bordered1     table-condensed   ">
                                                    <tbody>

                                                        <tr>
                                                            <th> <b> Name</b> </th>
                                                            <td> Xvg Meter</td>
                                                        </tr>

                                                        <tr>
                                                            <th> <b>Serial Number</b> </th>
                                                            <td> 1732992</td>
                                                        </tr>
                                                        <tr>
                                                            <th> <b>Address</b> </th>
                                                            <td>St-02 Jabel Sifah Oman</td>
                                                        </tr>
                                                        <tr>
                                                            <th> <b>Serial Number</b> </th>
                                                            <td>Tbs1238241</td>
                                                        </tr>
                                                        <tr>
                                                            <th> <b>Devcie ID> </th>
                                                            <td>2A 3E 55 FF 22</td>
                                                        </tr>

                                                    </tbody>
                                                </table>



                                            </div>


                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group margin-bottom-10">


                                                <table class="table margin-bottom-0 table-bordered1     table-condensed   ">
                                                    <tbody>
                                                        <tr>
                                                            <th> <b>State</b> </th>
                                                            <td> Active</td>
                                                        </tr>
                                                        <tr>
                                                            <th> <b>Activation Date</b> </th>
                                                            <td> 12/02/2021</td>
                                                        </tr>
                                                        <tr>
                                                            <th> <b>Status</b> </th>
                                                            <td>ON</td>
                                                        </tr>
                                                        <tr>
                                                            <th> <b>Building</b> </th>
                                                            <td> Building1</td>
                                                        </tr>
                                                        <tr>
                                                            <th> <b>Floor</b> </th>
                                                            <td> Floor4</td>
                                                        </tr>
                                                    </tbody>
                                                </table>



                                            </div>


                                        </div>

                                    </div>
                                    <div class="col-md-4">

                                        <div class="form-group margin-bottom-10">

                                            <table class="table margin-bottom-0 table-bordered1     table-condensed   ">
                                                <tbody>





                                                </tbody>
                                            </table>



                                        </div>

                                    </div>
                                    <div class="col-md-4">

                                        <div class="form-group margin-bottom-10">

                                            <table class="table margin-bottom-0 table-bordered1     table-condensed   ">
                                                <tbody>




                                                </tbody>
                                            </table>



                                        </div>

                                    </div>




                                </div>
                            </div>
                        </div>




                    </div>



                </div>
                <div class="col-lg-6  card-group-row__col ">
                    <div class="panel panel-default  round shadow  ">
                        <div class="panel-heading margin-bottom-0 ">
                            <h3 class="panel-title font-weight-600 bg-teal-8001 white1 "> Current Flow Rate</h3>
                            <div class="panel-actions">
                                <a></a>
                            </div>
                        </div>
                        <div class="panel-body">

                              <!-- <div class="filters margin-bottom-10 padding-bottom-10"
                              style="border-bottom: 1px solid #eee;">
                              <div class="inline-block">
                              <select class="form-control input-xs">
                              <option>Offices</option>
                              <option>Floors</option>
                              </select>
                              </div>
                             </div> -->
                            <div>
                                <div class="chartbox">
                                    <div id="space1" style="height:355px;">
									<div style="width: 100%; height: 100%; position: relative;">
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="group" style="width: 100%; height: 100%; overflow: visible;"><defs><clipPath id="id-51"><rect width="719" height="355"></rect></clipPath><linearGradient id="gradient-id-74" x1="1%" x2="99%" y1="59%" y2="41%"><stop stop-color="#474758" offset="0"></stop><stop stop-color="#474758" stop-opacity="1" offset="0.75"></stop><stop stop-color="#3cabff" stop-opacity="1" offset="0.755"></stop></linearGradient><filter id="filter-id-83" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"></filter><clipPath id="id-933"><path d=" M-260,0  L-325,0  a325,325,0,0,1,650,0 L260,0  a260,260,0,0,0,-520,0 L-260,0 " r="0"></path></clipPath><filter id="filter-id-56" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-71" filterUnits="objectBoundingBox" width="120%" height="120%" x="-10%" y="-10%"><feColorMatrix type="saturate" values="0"></feColorMatrix></filter></defs><g><g fill="#ffffff" fill-opacity="0"><rect width="719" height="355"></rect></g><g><g role="region" clip-path="url(&quot;#id-51&quot;)" opacity="1" aria-label="Chart"><g transform="translate(15,15)"><g><g><g><g><g><g><g transform="translate(0,0)"><g fill="#ffffff" fill-opacity="0" transform="translate(0,0)"><rect width="689" height="325"></rect></g><g><g transform="translate(344.5,292.5)"><g><g opacity="0"></g><g><g></g></g><g aria-hidden="true"><g><g><g><g><g><g fill="#f3c300" fill-opacity="1" style="pointer-events: none;"><path d=" M-195,0  L-260,0  a260,260,0,0,1,192.707,-251.1407 L-50.4697,-188.3555  a195,195,0,0,0,-144.5303,188.3555 L-195,0 "></path></g><g fill="#f38400" fill-opacity="1" style="pointer-events: none;"><path d=" M-50.4697,-188.3555  L-67.293,-251.1407  a260,260,0,0,1,292.4596,121.1407 L168.875,-97.5  a195,195,0,0,0,-219.3447,-90.8555 L-50.4697,-188.3555 "></path></g><g fill="#be0032" fill-opacity="1" style="pointer-events: none;"><path d=" M168.875,-97.5  L225.1666,-130  a260,260,0,0,1,34.8334,130 L195,0  a195,195,0,0,0,-26.125,-97.5 L168.875,-97.5 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none" display="none"><path d=" M-188.3555,50.4697  L-251.1407,67.293 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none" display="none"><path d=" M-193.3317,25.4526  L-257.7757,33.9368 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none"><path d=" M-195,0  L-260,0 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none"><path d=" M-193.3317,-25.4526  L-257.7757,-33.9368 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none"><path d=" M-188.3555,-50.4697  L-251.1407,-67.293 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none"><path d=" M-180.1565,-74.6233  L-240.2087,-99.4977 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none"><path d=" M-168.875,-97.5  L-225.1666,-130 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none"><path d=" M-154.7039,-118.7085  L-206.2719,-158.278 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none"><path d=" M-137.8858,-137.8858  L-183.8478,-183.8478 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none"><path d=" M-118.7085,-154.7039  L-158.278,-206.2719 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none"><path d=" M-97.5,-168.875  L-130,-225.1666 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none"><path d=" M-74.6233,-180.1565  L-99.4977,-240.2087 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none"><path d=" M-50.4697,-188.3555  L-67.293,-251.1407 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none"><path d=" M-25.4526,-193.3317  L-33.9368,-257.7757 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none"><path d=" M0,-195  L0,-260 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none"><path d=" M25.4526,-193.3317  L33.9368,-257.7757 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none"><path d=" M50.4697,-188.3555  L67.293,-251.1407 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none"><path d=" M74.6233,-180.1565  L99.4977,-240.2087 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none"><path d=" M97.5,-168.875  L130,-225.1666 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none"><path d=" M118.7085,-154.7039  L158.278,-206.2719 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none"><path d=" M137.8858,-137.8858  L183.8478,-183.8478 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none"><path d=" M154.7039,-118.7085  L206.2719,-158.278 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none"><path d=" M168.875,-97.5  L225.1666,-130 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none"><path d=" M180.1565,-74.6233  L240.2087,-99.4977 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none"><path d=" M188.3555,-50.4697  L251.1407,-67.293 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none"><path d=" M193.3317,-25.4526  L257.7757,-33.9368 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none"><path d=" M195,0  L260,0 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none" display="none"><path d=" M193.3317,25.4526  L257.7757,33.9368 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none"><path d=" M-195,0  L-260,0 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none"><path d=" M-50.4697,-188.3555  L-67.293,-251.1407 "></path></g><g stroke="#ffffff" stroke-opacity="0.3" fill="none"><path d=" M168.875,-97.5  L225.1666,-130 "></path></g><g fill-opacity="0" stroke-opacity="0" stroke="#000000" stroke-width="1"><path d=" M-260,0  L-265,0 "></path></g><g fill-opacity="0" stroke-opacity="0" stroke="#000000" stroke-width="1"><path d=" M-67.293,-251.1407  L-68.587,-255.9703 "></path></g><g fill-opacity="0" stroke-opacity="0" stroke="#000000" stroke-width="1"><path d=" M225.1666,-130  L229.4967,-132.5 "></path></g></g></g><g fill="#000000" aria-label="L" fill-opacity="0" opacity="0" stroke-opacity="0" style="pointer-events: none;" transform="translate(-278.5,0)"><g transform="translate(-3.5,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>L</tspan></text></g></g><g fill="#000000" transform="translate(-274.806,72.987)" display="none"><g transform="translate(-9.5,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>-20</tspan></text></g></g><g fill="#000000" transform="translate(-282.066,36.809000000000005)" display="none"><g transform="translate(-9.5,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>-10</tspan></text></g></g><g fill="#000000" transform="translate(-278.5,0)"><g transform="translate(-3.5,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>0</tspan></text></g></g><g fill="#000000" transform="translate(-279.587,-36.809000000000005)"><g transform="translate(-7,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>10</tspan></text></g></g><g fill="#000000" transform="translate(-272.391,-72.987)"><g transform="translate(-7,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>20</tspan></text></g></g><g fill="#000000" transform="translate(-260.534,-107.917)"><g transform="translate(-7,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>30</tspan></text></g></g><g fill="#000000" transform="translate(-244.21900000000002,-141)"><g transform="translate(-7,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>40</tspan></text></g></g><g fill="#000000" transform="translate(-223.725,-171.67)"><g transform="translate(-7,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>50</tspan></text></g></g><g fill="#000000" transform="translate(-199.404,-199.404)"><g transform="translate(-7,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>60</tspan></text></g></g><g fill="#000000" transform="translate(-171.67,-223.725)"><g transform="translate(-7,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>70</tspan></text></g></g><g fill="#000000" transform="translate(-141,-244.21900000000002)"><g transform="translate(-7,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>80</tspan></text></g></g><g fill="#000000" transform="translate(-107.917,-260.534)"><g transform="translate(-7,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>90</tspan></text></g></g><g fill="#000000" transform="translate(-73.893,-272.391)"><g transform="translate(-10.5,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>100</tspan></text></g></g><g fill="#000000" transform="translate(-37.266000000000005,-279.587)"><g transform="translate(-10.5,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>110</tspan></text></g></g><g fill="#000000" transform="translate(0,-282)"><g transform="translate(-10.5,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>120</tspan></text></g></g><g fill="#000000" transform="translate(37.266000000000005,-279.587)"><g transform="translate(-10.5,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>130</tspan></text></g></g><g fill="#000000" transform="translate(73.893,-272.391)"><g transform="translate(-10.5,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>140</tspan></text></g></g><g fill="#000000" transform="translate(109.256,-260.534)"><g transform="translate(-10.5,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>150</tspan></text></g></g><g fill="#000000" transform="translate(142.75,-244.21900000000002)"><g transform="translate(-10.5,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>160</tspan></text></g></g><g fill="#000000" transform="translate(173.801,-223.725)"><g transform="translate(-10.5,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>170</tspan></text></g></g><g fill="#000000" transform="translate(201.87900000000002,-199.404)"><g transform="translate(-10.5,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>180</tspan></text></g></g><g fill="#000000" transform="translate(226.502,-171.67)"><g transform="translate(-10.5,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>190</tspan></text></g></g><g fill="#000000" transform="translate(247.25,-141)"><g transform="translate(-10.5,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>200</tspan></text></g></g><g fill="#000000" transform="translate(263.76800000000003,-107.917)"><g transform="translate(-10.5,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>210</tspan></text></g></g><g fill="#000000" transform="translate(275.772,-72.987)"><g transform="translate(-10.5,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>220</tspan></text></g></g><g fill="#000000" transform="translate(283.057,-36.809000000000005)"><g transform="translate(-10.5,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>230</tspan></text></g></g><g fill="#000000" transform="translate(285.5,0)"><g transform="translate(-10.5,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>240</tspan></text></g></g><g fill="#000000" transform="translate(283.057,36.809000000000005)" display="none"><g transform="translate(-10.5,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>250</tspan></text></g></g><g fill="#000000" transform="translate(-275,0)"><g display="none"></g></g><g fill="#000000" transform="translate(-71.175,-265.63)"><g display="none"></g></g><g fill="#000000" transform="translate(238.157,-137.5)"><g display="none"></g></g><g fill="#000000" stroke="#000000" transform="translate(0,0) rotate(263.05)"><g><g><circle r="5"></circle></g><g transform="translate(0,-2.5)"><path d=" M0,0  L260,2  L260,3  L0,5 "></path></g></g></g><g><g></g></g></g></g><g fill="#000000"><g display="none"></g></g><g stroke="#000000" stroke-opacity="0.15" fill="none"><path transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0" fill="none" style="pointer-events: none;"><path d=" M-260,0  a260,260,0,0,1,520,0" transform="translate(-0.5,-0.5)"></path></g></g></g><g><g></g></g><g clip-path="url(&quot;#id-933&quot;)"><g></g></g></g></g><g><g></g></g><g role="button" focusable="true" tabindex="0" opacity="0" visibility="hidden" aria-hidden="true" transform="translate(649,-3)" aria-labelledby="id-37-title"><g fill="#6794dc" stroke="#ffffff" fill-opacity="1" stroke-opacity="0" transform="translate(0,8)"><path d="M17,0 L18,0 a17,17 0 0 1 17,17 L35,17 a17,17 0 0 1 -17,17 L17,34 a17,17 0 0 1 -17,-17 L0,17 a17,17 0 0 1 17,-17 Z"></path></g><g transform="translate(9,9)"><g stroke="#ffffff" style="pointer-events: none;" transform="translate(0,8)">
									<path d=" M0,0  L11,0 " transform="translate(2.5,7.5)"></path></g><g fill="#000000" style="pointer-events: none;" transform="translate(17,8)">
									<g display="none"></g></g></g><title id="id-37-title">Zoom Out</title></g></g></g><g><g></g></g><g transform="translate(689,0)"><g></g></g></g></g>
									<g><g></g></g><g transform="translate(0,325)"><g></g></g></g></g></g></g></g></g><g><g><g role="tooltip" visibility="hidden" opacity="0">
									<g fill="#ffffff" fill-opacity="0.9" stroke-width="1" stroke-opacity="1" stroke="#ffffff" filter="url(&quot;#filter-id-56&quot;)" style="pointer-events: none;" transform="translate(0,6)"><path d="M3,0 L3,0 L0,-6 L13,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(12,6)"><g transform="translate(0,7)" display="none"></g></g></g></g><g visibility="hidden" display="none"><g fill="#ffffff" opacity="1"><rect width="719" height="355"></rect></g><g><g><g><g stroke-opacity="1" fill="#f3f3f3" fill-opacity="0.8"><g><g><path d=" M53,0  a53,53,0,0,1,-106,0 a53,53,0,0,1,106,0 M42,0  a42,42,0,0,0,-84,0 a42,42,0,0,0,84,0 L42,0 "></path></g></g></g><g stroke-opacity="1" fill="#000000" fill-opacity="0.2"><g><g><path d=""></path></g></g></g><g fill="#000000" fill-opacity="0.4"><g display="none"></g></g></g></g></g></g><g opacity="0.3" aria-labelledby="id-71-title" filter="url(&quot;#filter-id-71&quot;)" style="cursor: pointer;" transform="translate(0,334)"><g fill="#ffffff" opacity="0"><rect width="66" height="21"></rect></g><g><g shape-rendering="auto" fill="none" stroke-opacity="1" stroke-width="1.7999999999999998" stroke="#3cabff"><path d=" M15,15  C17.4001,15 22.7998,15.0001 27,15 C31.2002,14.9999 33.2999,6 36,6 C38.7001,6 38.6999,10.5 40.5,10.5 C42.3001,10.5 42.2999,6 45,6 C47.7001,6 50.9999,14.9999 54,15 C57.0002,15.0001 58.7999,15 60,15"></path></g><g shape-rendering="auto" fill="none" stroke-opacity="1" stroke-width="1.7999999999999998" stroke="url(&quot;#gradient-id-74&quot;)"><path d=" M6,15  C8.2501,15 9.7498,15.0001 15,15 C20.2502,14.9999 20.7748,3.6 27,3.6 C33.2252,3.6 33.8998,14.9999 39.9,15 C45.9002,15.0001 45.9748,15 51,15 C56.0252,15 57.7499,15 60,15"></path></g></g><title id="id-71-title">Chart created using amCharts library</title></g><g role="tooltip" visibility="hidden" opacity="0" transform="translate(161.9188096414942,138.49800824689703)"><g fill="#000000" fill-opacity="1" stroke-width="1" stroke-opacity="1" stroke="#000000" style="pointer-events: none;" transform="translate(-10,-15)"><path d="M0,0 L20,0 a0,0 0 0 1 0,0 L20,10 a0,0 0 0 1 -0,0 L20,10 L15,10 L10,15 L5,10 L0,10 a0,0 0 0 1 -0,-0 L0,0 a0,0 0 0 1 0,-0"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(0,-15)"><g transform="translate(0,5)" display="none"></g></g></g></g></g></g></g></g></svg></div></div>
                                    <script>
                                        am4core.ready(function() {
                                        
                                        // Themes begin
                                        am4core.useTheme(am4themes_animated);
                                        // Themes end
                                        
                                        // create chart
                                        var chart = am4core.create("space1", am4charts.GaugeChart);
                                        chart.hiddenState.properties.opacity = 0; // this makes initial fade in effect
                                        
                                        chart.innerRadius = -65;
                                        
                                        var axis = chart.xAxes.push(new am4charts.ValueAxis());
                                        axis.min = 0;
                                        axis.max = 240;
                                        axis.strictMinMax = true;
                                        axis.renderer.grid.template.stroke = new am4core.InterfaceColorSet().getFor("background");
                                        axis.renderer.grid.template.strokeOpacity = 0.3;
                                        
                                        var colorSet = new am4core.ColorSet();
                                        
                                        var range0 = axis.axisRanges.create();
                                        range0.value = 0;
                                        range0.endValue = 100;
                                        range0.axisFill.fillOpacity = 1;
                                        range0.axisFill.fill = colorSet.getIndex(0);
                                        range0.axisFill.zIndex = - 1;
                                        
                                        var range1 = axis.axisRanges.create();
                                        range1.value = 100;
                                        range1.endValue = 200;
                                        range1.axisFill.fillOpacity = 1;
                                        range1.axisFill.fill = colorSet.getIndex(2);
                                        range1.axisFill.zIndex = -1;
                                        
                                        var range2 = axis.axisRanges.create();
                                        range2.value = 200;
                                        range2.endValue = 240;
                                        range2.axisFill.fillOpacity = 1;
                                        range2.axisFill.fill = colorSet.getIndex(4);
                                        range2.axisFill.zIndex = -1;
                                        
                                        var hand = chart.hands.push(new am4charts.ClockHand());
                                        
                                        // using chart.setTimeout method as the timeout will be disposed together with a chart
                                        chart.setTimeout(randomValue, 2000);
                                        
                                        function randomValue() {
                                            hand.showValue(Math.random() * 240, 1000, am4core.ease.cubicOut);
                                            chart.setTimeout(randomValue, 2000);
                                        }
                                        
                                        }); // end am4core.ready()
                                        </script>
                                </div>
                            </div>
                        </div>




                    </div>



                </div>
                <div class="col-lg-6  card-group-row__col ">
                    <div class="panel panel-default  round shadow  ">
                        <div class="panel-heading margin-bottom-0 ">
                            <h3 class="panel-title font-weight-600 bg-teal-8001 white1 "> Battery Level</h3>
                            <div class="panel-actions">
                                <a></a>
                            </div>
                        </div>
                        <div class="panel-body">

                              <!-- <div class="filters margin-bottom-10 padding-bottom-10"
                              style="border-bottom: 1px solid #eee;">
                              <div class="inline-block">
                              <select class="form-control input-xs">
                              <option>Offices</option>
                              <option>Floors</option>
                              </select>
                              </div>
                             </div> -->
                            <div>
                                <div class="chartbox">
                                    <div id="space12" style="height:355px;"><div style="width: 100%; height: 100%; position: relative;"><svg version="1.1" 
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="group" style="width: 100%; height: 100%; overflow: visible;"><defs>
                                      <clipPath id="id-145"><rect width="719" height="355"></rect></clipPath><linearGradient id="gradient-id-168" x1="1%" x2="99%" y1="59%" y2="41%">
                                        <stop stop-color="#474758" offset="0"></stop><stop stop-color="#474758" stop-opacity="1" offset="0.75">

                                        </stop><stop stop-color="#3cabff" stop-opacity="1" offset="0.755"></stop></linearGradient><clipPath id="id-177"></clipPath><clipPath id="id-200"></clipPath>
                                        <filter id="filter-id-150" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-165" filterUnits="objectBoundingBox" width="120%" height="120%" x="-10%" y="-10%"><feColorMatrix type="saturate" values="0"></feColorMatrix></filter><filter id="filter-id-182" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-205" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter></defs><g><g fill="#ffffff" fill-opacity="0"><rect width="719" height="355"></rect></g><g><g role="region" clip-path="url(&quot;#id-145&quot;)" opacity="1" aria-label="Chart"><g><g><g><g><g><g transform="translate(359.5,247.1213)"><g><g role="group" opacity="1" aria-label="Series"><g><g clip-path="url(&quot;#id-177&quot;)"><g></g></g><g></g><g><g><g stroke-opacity="1" stroke="#ffffff" stroke-width="1" role="menuitem" focusable="true" tabindex="0" fill="#f3c300"><g><g><path d=" M-129.2583,47.0462  L-139.2013,50.6651  a148.13488530146415,148.13488530146415,0,0,1,207.304,-182.2172 L63.2383,-122.1555  a137.5538220656,137.5538220656,0,0,0,-192.4966,169.2017 L-129.2583,47.0462 "></path></g><g></g></g></g><g stroke-opacity="1" stroke="#ffffff" stroke-width="1" role="menuitem" focusable="true" tabindex="0" fill="#f3c300"><g><g><path d=" M63.2383,-122.1555  L68.1028,-131.5521  a148.13488530146415,148.13488530146415,0,0,1,71.0985,182.2172 L129.2583,47.0462  a137.5538220656,137.5538220656,0,0,0,-66.02,-169.2017 L63.2383,-122.1555 "></path></g><g></g></g></g></g></g><g><g></g></g><g><g></g></g></g></g><g role="group" opacity="1" aria-label="Series"><g><g clip-path="url(&quot;#id-200&quot;)"><g></g></g><g></g><g><g><g stroke-opacity="1" stroke="#ffffff" stroke-width="1" role="menuitem" focusable="true" tabindex="0" fill="#f3c300"><g><g><path d=" M-149.1442,54.2841  L-198.8589,72.3787  a211.62126471637737,211.62126471637737,0,0,1,135.9308,-274.4273 a211.62126471637737,211.62126471637737,0,0,1,267.7174,148.7109 L153.592,-40.0033  a158.7159485373,158.7159485373,0,0,0,-200.788,-111.5331 a158.7159485373,158.7159485373,0,0,0,-101.9482,205.8204 L-149.1442,54.2841 "></path></g><g></g></g></g><g stroke-opacity="1" stroke="#ffffff" stroke-width="1" role="menuitem" focusable="true" tabindex="0" fill="#875692"><g><g><path d=" M153.592,-40.0033  L204.7893,-53.3377  a211.62126471637737,211.62126471637737,0,0,1,-5.9303,125.7164 L149.1442,54.2841  a158.7159485373,158.7159485373,0,0,0,4.4478,-94.2873 L153.592,-40.0033 "></path></g><g></g></g></g></g></g><g><g></g></g><g><g></g></g></g></g><g fill="#000000"><g transform="translate(-67,-29.5)" style="user-select: none;"><text x="67px" y="22.015625" dy="-5.944" text-anchor="middle"><tspan style="font-size:18px">
									Current Level</tspan><tspan>:</tspan></text><text x="67px" y="59.015625" dy="-9.99" text-anchor="middle">
									<tspan style="font-weight:bold;font-size:30px">11.8 V</tspan></text></g></g></g></g><g transform="translate(455.3106,247.1213)"><g><g><g></g></g><g><g></g></g></g></g></g></g></g></g></g></g><g><g><g role="tooltip" visibility="hidden" opacity="0"><g fill="#ffffff" fill-opacity="0.9" stroke-width="1" stroke-opacity="1" stroke="#ffffff" filter="url(&quot;#filter-id-150&quot;)" style="pointer-events: none;" transform="translate(0,6)"><path d="M3,0 L3,0 L0,-6 L13,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(12,6)"><g transform="translate(0,7)" display="none"></g></g></g></g><g visibility="hidden" display="none" style="pointer-events: none;"><g fill="#ffffff" opacity="1"><rect width="719" height="355"></rect></g><g><g transform="translate(349.5,177.5)"><g><g stroke-opacity="1" fill="#f3f3f3" fill-opacity="0.8"><g><g><path d=" M53,0  a53,53,0,0,1,-106,0 a53,53,0,0,1,106,0 M42,0  a42,42,0,0,0,-84,0 a42,42,0,0,0,84,0 L42,0 "></path></g></g></g><g stroke-opacity="1" fill="#000000" fill-opacity="0.2"><g><g><path d=" M50,0  a50,50,0,0,1,-100,0 a50,50,0,0,1,100,0 M45,0  a45,45,0,0,0,-90,0 a45,45,0,0,0,90,0 L45,0 "></path></g></g></g><g fill="#000000" fill-opacity="0.4"><g transform="translate(-15,-7)" style="user-select: none;"><text x="15px" y="14" dy="-3.78" text-anchor="middle"><tspan>100%</tspan></text></g></g></g></g></g></g><g opacity="0.3" aria-labelledby="id-165-title" filter="url(&quot;#filter-id-165&quot;)" style="cursor: pointer;" transform="translate(0,334)"><g fill="#ffffff" opacity="0"><rect width="66" height="21"></rect></g><g><g shape-rendering="auto" fill="none" stroke-opacity="1" stroke-width="1.7999999999999998" stroke="#3cabff"><path d=" M15,15  C17.4001,15 22.7998,15.0001 27,15 C31.2002,14.9999 33.2999,6 36,6 C38.7001,6 38.6999,10.5 40.5,10.5 C42.3001,10.5 42.2999,6 45,6 C47.7001,6 50.9999,14.9999 54,15 C57.0002,15.0001 58.7999,15 60,15"></path></g><g shape-rendering="auto" fill="none" stroke-opacity="1" stroke-width="1.7999999999999998" stroke="url(&quot;#gradient-id-168&quot;)"><path d=" M6,15  C8.2501,15 9.7498,15.0001 15,15 C20.2502,14.9999 20.7748,3.6 27,3.6 C33.2252,3.6 33.8998,14.9999 39.9,15 C45.9002,15.0001 45.9748,15 51,15 C56.0252,15 57.7499,15 60,15"></path></g></g><title id="id-165-title">Chart created using amCharts library</title></g><g role="tooltip" visibility="hidden" opacity="0"><g fill="#ffffff" fill-opacity="0.9" stroke-width="1" stroke-opacity="1" stroke="#ffffff" filter="url(&quot;#filter-id-182&quot;)" style="pointer-events: none;" transform="translate(0,6)"><path d="M3,0 L3,0 L0,-6 L13,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(12,6)"><g transform="translate(0,7)" display="none"></g></g></g></g><g role="tooltip" visibility="hidden" opacity="0"><g fill="#ffffff" fill-opacity="0.9" stroke-width="1" stroke-opacity="1" stroke="#ffffff" filter="url(&quot;#filter-id-205&quot;)" style="pointer-events: none;" transform="translate(0,6)"><path d="M3,0 L3,0 L0,-6 L13,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(12,6)"><g transform="translate(0,7)" display="none"></g></g></g></g></g></g></g></g></svg></div></div>
                                    <script>
                                        am4core.ready(function() {
                                        
                                        // Themes begin
                                        am4core.useTheme(am4themes_animated);
                                        // Themes end
                                        
                                        // Create chart instance
                                        var chart = am4core.create("space12", am4charts.PieChart);
                                        chart.startAngle = 160;
                                        chart.endAngle = 380;
                                        
                                        // Let's cut a hole in our Pie chart the size of 40% the radius
                                        chart.innerRadius = am4core.percent(40);
                                        
                                        // Add data
                                        chart.data = [{
                                          "country": "Remaining",
                                          "litres": 9,
                                          "bottles": 9
                                        }, {
                                          "country": "Used",
                                          "litres": 2,
                                          "bottles": 2
                                        }];
                                        
                                        // Add and configure Series
                                        var pieSeries = chart.series.push(new am4charts.PieSeries());
                                        pieSeries.dataFields.value = "litres";
                                        pieSeries.dataFields.category = "country";
                                        pieSeries.slices.template.stroke = new am4core.InterfaceColorSet().getFor("background");
                                        pieSeries.slices.template.strokeWidth = 1;
                                        pieSeries.slices.template.strokeOpacity = 1;
                                        
                                        // Disabling labels and ticks on inner circle
                                        pieSeries.labels.template.disabled = true;
                                        pieSeries.ticks.template.disabled = true;
                                        
                                        // Disable sliding out of slices
                                        pieSeries.slices.template.states.getKey("hover").properties.shiftRadius = 0;
                                        pieSeries.slices.template.states.getKey("hover").properties.scale = 1;
                                        pieSeries.radius = am4core.percent(40);
                                        pieSeries.innerRadius = am4core.percent(30);
                                        
                                        var cs = pieSeries.colors;
                                        cs.list = [am4core.color(new am4core.ColorSet().getIndex(0))];
                                        
                                        cs.stepOptions = {
                                          lightness: -0.05,
                                          hue: 0
                                        };
                                        cs.wrap = false;
                                        
                                        
                                        // Add second series
                                        var pieSeries2 = chart.series.push(new am4charts.PieSeries());
                                        pieSeries2.dataFields.value = "bottles";
                                        pieSeries2.dataFields.category = "country";
                                        pieSeries2.slices.template.stroke = new am4core.InterfaceColorSet().getFor("background");
                                        pieSeries2.slices.template.strokeWidth = 1;
                                        pieSeries2.slices.template.strokeOpacity = 1;
                                        pieSeries2.slices.template.states.getKey("hover").properties.shiftRadius = 0.05;
                                        pieSeries2.slices.template.states.getKey("hover").properties.scale = 1;
                                        
                                        pieSeries2.labels.template.disabled = true;
                                        pieSeries2.ticks.template.disabled = true;
                                        
                                        
                                        var label = chart.seriesContainer.createChild(am4core.Label);
                                        label.textAlign = "middle";
                                        label.horizontalCenter = "middle";
                                        label.verticalCenter = "middle";
                                        label.adapter.add("text", function(text, target){
                                          return "[font-size:18px]Battery Level[/]:\n[bold font-size:30px]" + pieSeries.dataItem.values.value.sum + "[/]";
                                        })
                                        
                                        }); // end am4core.ready()
                                        </script>
                                        
                                </div>
                            </div>
                        </div>




                    </div>



                </div>
                <div class="col-lg-12  card-group-row__col ">
                    <div class="panel panel-default  round shadow  ">
                        <div class="panel-heading margin-bottom-0 ">
                            <h3 class="panel-title font-weight-600 bg-teal-8001 white1 "> Current Statistics</h3>
                            <div class="panel-actions">
                                <a></a>
                            </div>
                        </div>
                        <div class="panel-body">

                              <!-- <div class="filters margin-bottom-10 padding-bottom-10"
                              style="border-bottom: 1px solid #eee;">
                              <div class="inline-block">
                              <select class="form-control input-xs">
                              <option>Offices</option>
                              <option>Floors</option>
                              </select>
                              </div>
                             </div> -->
                            <div>
                                <div class="chartbox">
                                    <div id="space123" style="height:355px;"><div style="width: 100%; height: 100%; position: relative;">
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="group" style="width: 100%; height: 100%; overflow: visible;"><defs><clipPath id="id-245"><rect width="1498" height="355"></rect></clipPath><linearGradient id="gradient-id-268" x1="1%" x2="99%" y1="59%" y2="41%"><stop stop-color="#474758" offset="0"></stop><stop stop-color="#474758" stop-opacity="1" offset="0.75"></stop><stop stop-color="#3cabff" stop-opacity="1" offset="0.755"></stop></linearGradient><filter id="filter-id-277" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"></filter><filter id="filter-id-298" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"></filter><clipPath id="id-331"><path d="M0,0 L1408,0 L1408,211 L0,211 L0,0"></path></clipPath><clipPath id="id-349"><rect width="1408" height="211"></rect></clipPath><clipPath id="id-402"><path d="M0,0 L1408,0 L1408,60 L0,60 L0,0"></path></clipPath><clipPath id="id-932"><rect width="1408" height="211"></rect></clipPath><filter id="filter-id-250" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-265" filterUnits="objectBoundingBox" width="120%" height="120%" x="-10%" y="-10%"><feColorMatrix type="saturate" values="0"></feColorMatrix></filter><filter id="filter-id-336" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-425" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-383" filterUnits="userSpaceOnUse" width="120%" height="120%" x="-10%" y="-10%"><feColorMatrix type="saturate" values="0"></feColorMatrix></filter><clipPath id="id-1156" transform="translate(3.3196508692975857e-15,0)"><rect width="1408" height="60"></rect></clipPath></defs><g><g fill="#ffffff" fill-opacity="0"><rect width="1498" height="355"></rect></g><g><g role="region" clip-path="url(&quot;#id-245&quot;)" opacity="1" aria-label="Chart" id="id-221"><g transform="translate(15,15)"><g><g><g><g><g transform="translate(0,80)"><g><g transform="translate(55,0)" style="touch-action: none; user-select: none; -webkit-user-drag: none;"><g fill="#ffffff" fill-opacity="0"><rect width="1408" height="211"></rect></g><g><g><g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,422)" display="none"><path d=" M0,0  L1408,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,338)" display="none"><path d=" M0,0  L1408,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,253)" display="none"><path d=" M0,0  L1408,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,169)"><path d=" M0,0  L1408,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,84)"><path d=" M0,0  L1408,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,-84)" display="none"><path d=" M0,0  L1408,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" display="none" transform="translate(0,-42)"><path d=" M0,0  L1408,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,0)"><path d=" M0,0  L1408,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,42)"><path d=" M0,0  L1408,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,127)"><path d=" M0,0  L1408,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,211)"><path d=" M0,0  L1408,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,295)" display="none"><path d=" M0,0  L1408,0 " transform="translate(-0.5,-0.5)"></path></g></g></g><g><g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(-70,0)" display="none"><path d=" M0,0  L0,211 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(282,0)"><path d=" M0,0  L0,211 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(634,0)"><path d=" M0,0  L0,211 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(986,0)"><path d=" M0,0  L0,211 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(1338,0)"><path d=" M0,0  L0,211 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(1690,0)" display="none"><path d=" M0,0  L0,211 " transform="translate(-0.5,-0.5)"></path></g></g></g><g><g><g role="group" stroke-opacity="1" fill-opacity="0.3" stroke="#f3c300" aria-label="Series"><g><g clip-path="url(&quot;#id-331&quot;)"><g><g><g><g fill="#f3c300" fill-opacity="0.3" stroke="#f3c300" stroke-opacity="1" style="pointer-events: none;"><g><g stroke-opacity="0"><path d=" M-35.4,164.38  M-35.2,164.58  L-35.2,164.58  L-35.2,164.58  L35.2,126.6  L105.6,168.8  L176,135.04  L246.4,101.28  L316.8,59.08  L387.2,21.1  L457.6,42.2  L528,67.52  L598.4,105.5  L668.8,92.84  L739.2,75.96  L809.6,42.2  L880,21.1  L950.4,42.2  L1020.8,37.98  L1091.2,54.86  L1161.6,29.54  L1232,50.64  L1302.4,21.1  L1372.8,25.32  L1372.8,84.4  L1372.8,84.4  L1372.8,84.4  L1302.4,84.4  L1232,84.4  L1161.6,84.4  L1091.2,84.4  L1020.8,84.4  L950.4,84.4  L880,84.4  L809.6,84.4  L739.2,84.4  L668.8,84.4  L598.4,84.4  L528,84.4  L457.6,84.4  L387.2,84.4  L316.8,84.4  L246.4,84.4  L176,84.4  L105.6,84.4  L35.2,84.4  L-35.2,84.4  L-35.2,164.58  Z"></path></g><g fill="none" fill-opacity="0"><path d=" M-35.4,164.38  M-35.2,164.58  L-35.2,164.58  L-35.2,164.58  L35.2,126.6  L105.6,168.8  L176,135.04  L246.4,101.28  L316.8,59.08  L387.2,21.1  L457.6,42.2  L528,67.52  L598.4,105.5  L668.8,92.84  L739.2,75.96  L809.6,42.2  L880,21.1  L950.4,42.2  L1020.8,37.98  L1091.2,54.86  L1161.6,29.54  L1232,50.64  L1302.4,21.1  L1372.8,25.32 "></path></g></g></g></g></g></g></g><g></g></g></g></g></g><g clip-path="url(&quot;#id-932&quot;)"><g><g fill="#f3c300" stroke="#f3c300"><g></g></g></g></g><g><g><g><g></g></g><g><g></g></g></g></g><g><g></g></g><g><g></g></g><g opacity="0" visibility="hidden" aria-hidden="true" clip-path="url(&quot;#id-349&quot;)" style="touch-action: none; user-select: none; -webkit-user-drag: none;"><g><g fill-opacity="0.2" fill="#000000" visibility="hidden" style="pointer-events: none;"><path></path></g><g stroke="#000000" fill="none" stroke-dasharray="3,3" stroke-opacity="0.4" style="pointer-events: none;"><path d=" M0,0  L0,211 "></path></g><g stroke="#000000" fill="none" stroke-dasharray="3,3" stroke-opacity="0.4" opacity="0" style="pointer-events: none;"><path d=" M0,0  L1408,0 "></path></g></g></g><g role="button" focusable="true" tabindex="0" opacity="1" aria-labelledby="id-236-title" transform="translate(1368,-3)"><g fill="#6794dc" stroke="#ffffff" fill-opacity="1" stroke-opacity="0" transform="translate(0,8)"><path d="M17,0 L18,0 a17,17 0 0 1 17,17 L35,17 a17,17 0 0 1 -17,17 L17,34 a17,17 0 0 1 -17,-17 L0,17 a17,17 0 0 1 17,-17 Z"></path></g><g transform="translate(9,9)"><g stroke="#ffffff" style="pointer-events: none;" transform="translate(0,8)"><path d=" M0,0  L11,0 " transform="translate(2.5,7.5)"></path></g><g fill="#000000" style="pointer-events: none;" transform="translate(17,8)"><g display="none"></g></g></g><title id="id-236-title">Zoom Out</title></g></g></g><g><g><g aria-hidden="true"><g><g fill="#000000" transform="translate(0,127) rotate(-90)"><g style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>Voltage</tspan></text></g></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(55,84)" opacity="1"><path transform="translate(-0.5,-0.5)" d=" M0,0  L1408,0 "></path></g><g transform="translate(14,0)"><g><g fill="#000000" aria-label="L" fill-opacity="0" opacity="0" stroke-opacity="0" style="pointer-events: none;" transform="translate(41,105.5)"><g transform="translate(-31,-7)" style="user-select: none;"><text x="0" y="14.015625" dy="-3.784"><tspan>100</tspan></text></g></g><g fill="#000000" transform="translate(41,422)" display="none"><g transform="translate(-29,-7)" style="user-select: none;"><text x="0" y="14.015625" dy="-3.784"><tspan>-80</tspan></text></g></g><g fill="#000000" transform="translate(41,337.6)" display="none"><g transform="translate(-29,-7)" style="user-select: none;"><text x="0" y="14.015625" dy="-3.784"><tspan>-60</tspan></text></g></g><g fill="#000000" transform="translate(41,253.2)" display="none"><g transform="translate(-29,-7)" style="user-select: none;"><text x="0" y="14.015625" dy="-3.784"><tspan>-40</tspan></text></g></g><g fill="#000000" transform="translate(41,168.8)"><g transform="translate(-29,-7)" style="user-select: none;"><text x="0" y="14.015625" dy="-3.784"><tspan>-20</tspan></text></g></g><g fill="#000000" transform="translate(41,84.4)"><g transform="translate(-17,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>0</tspan></text></g></g><g fill="#000000" transform="translate(41,-84.4)" display="none"><g transform="translate(-24,-7)" style="user-select: none;"><text x="0" y="14.015625" dy="-3.784"><tspan>40</tspan></text></g></g><g fill="#000000" transform="translate(41,-42.2)" display="none"><g transform="translate(-24,-7)" style="user-select: none;"><text x="0" y="14.015625" dy="-3.784"><tspan>30</tspan></text></g></g><g fill="#000000" transform="translate(41,0)"><g transform="translate(-24,-7)" style="user-select: none;"><text x="0" y="14.015625" dy="-3.784"><tspan>20</tspan></text></g></g><g fill="#000000" transform="translate(41,42.2)"><g transform="translate(-24,-7)" style="user-select: none;"><text x="0" y="14.015625" dy="-3.784"><tspan>10</tspan></text></g></g><g fill="#000000" transform="translate(41,126.6)"><g transform="translate(-29,-7)" style="user-select: none;"><text x="0" y="14.015625" dy="-3.784"><tspan>-10</tspan></text></g></g><g fill="#000000" transform="translate(41,211)"><g transform="translate(-29,-7)" style="user-select: none;"><text x="0" y="14.015625" dy="-3.784"><tspan>-30</tspan></text></g></g><g fill="#000000" transform="translate(41,295.4)" display="none"><g transform="translate(-29,-7)" style="user-select: none;"><text x="0" y="14.015625" dy="-3.784"><tspan>-50</tspan></text></g></g></g></g><g stroke="#000000" stroke-opacity="0" fill="none" style="pointer-events: none;" transform="translate(55,0)"><path d=" M0,0  L0,211 " transform="translate(-0.5,-0.5)"></path></g></g></g></g></g><g transform="translate(1463,0)"><g></g></g></g></g><g><g transform="translate(55,0)"><g role="scrollbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="80" aria-valuetext="From 16:06 to 16:26" aria-labelledby="id-350-title" aria-orientation="horizontal" aria-controls="id-221" transform="translate(0,10)"><g fill="#f3f3f3" fill-opacity="0.5"><path d="M0,0 L1408,0 a0,0 0 0 1 0,0 L1408,60 a0,0 0 0 1 -0,0 L0,60 a0,0 0 0 1 -0,-0 L0,0 a0,0 0 0 1 0,-0 Z"></path></g><g><g role="region" opacity="1" style="pointer-events: none;" aria-labelledby="id-371-title"><g><g><g><g><g><g><g><g filter="url(&quot;#filter-id-383&quot;)" transform="translate(0.0001,0)"><g fill="#ffffff" fill-opacity="0"><rect width="1408" height="60"></rect></g><g><g><g></g></g><g><g><g stroke="#000000" stroke-opacity="0.05" fill="none" transform="translate(-84,0)" display="none"><path d=" M0,0  L0,60 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.05" fill="none" transform="translate(56,0)"><path d=" M0,0  L0,60 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.05" fill="none" transform="translate(197,0)"><path d=" M0,0  L0,60 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.05" fill="none" transform="translate(338,0)"><path d=" M0,0  L0,60 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.05" fill="none" transform="translate(479,0)"><path d=" M0,0  L0,60 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.05" fill="none" transform="translate(620,0)"><path d=" M0,0  L0,60 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.05" fill="none" transform="translate(760,0)"><path d=" M0,0  L0,60 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.05" fill="none" transform="translate(901,0)"><path d=" M0,0  L0,60 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.05" fill="none" transform="translate(1042,0)"><path d=" M0,0  L0,60 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.05" fill="none" transform="translate(1183,0)"><path d=" M0,0  L0,60 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.05" fill="none" transform="translate(1324,0)"><path d=" M0,0  L0,60 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.05" fill="none" transform="translate(1464,0)" display="none"><path d=" M0,0  L0,60 " transform="translate(-0.5,-0.5)"></path></g></g></g><g><g><g role="group" stroke-opacity="1" fill-opacity="0.3" stroke="#f3c300" aria-label="Series"><g><g clip-path="url(&quot;#id-402&quot;)"><g><g><g><g fill="#f3c300" fill-opacity="0.3" stroke="#f3c300" stroke-opacity="1" style="pointer-events: none;"><g><g stroke-opacity="0"><path d=" M6.84,14.5  M7.04,14.7  L7.04,14.7  L7.04,14.7  L21.12,17.4  L35.2,18.3  L49.28,19.2  L63.36,17.1  L77.44,17.4  L91.52,20.1  L105.6,20.1  L119.68,22.8  L133.76,20.7  L147.84,23.4  L161.92,24.9  L176,25.8  L190.08,27.6  L204.16,27.3  L218.24,27.9  L232.32,26.1  L246.4,25.2  L260.48,22.8  L274.56,24.6  L288.64,25.5  L302.72,26.4  L316.8,27  L330.88,25.5  L344.96,26.1  L359.04,27.9  L373.12,24.9  L387.2,27.9  L401.28,29.1  L415.36,32.1  L429.44,31.5  L443.52,30  L457.6,29.4  L471.68,29.1  L485.76,27.3  L499.84,30  L513.92,27.6  L528,27.3  L542.08,27  L556.16,26.1  L570.24,28.5  L584.32,30.3  L598.4,29.4  L612.48,27.6  L626.56,28.8  L640.64,29.4  L654.72,27  L668.8,26.4  L682.88,24.3  L696.96,22.8  L711.04,24.9  L725.12,27.6  L739.2,28.2  L753.28,30  L767.36,32.4  L781.44,35.1  L795.52,38.1  L809.6,41.1  L823.68,43.8  L837.76,46.5  L851.84,48.9  L865.92,51  L880,49.5  L894.08,50.7  L908.16,49.2  L922.24,49.5  L936.32,51.3  L950.4,50.4  L964.48,49.2  L978.56,50.7  L992.64,49.5  L1006.72,50.1  L1020.8,51.3  L1034.88,50.4  L1048.96,51  L1063.04,53.7  L1077.12,54  L1091.2,52.8  L1105.28,52.5  L1119.36,50.7  L1133.44,48  L1147.52,51  L1161.6,48.6  L1175.68,46.2  L1189.76,43.2  L1203.84,40.5  L1217.92,42  L1232,43.8  L1246.08,46.5  L1260.16,45.6  L1274.24,44.4  L1288.32,42  L1302.4,40.5  L1316.48,42  L1330.56,41.7  L1344.64,42.9  L1358.72,41.1  L1372.8,42.6  L1386.88,40.5  L1400.96,40.8  L1400.96,45  L1400.96,45  L1400.96,45  L1386.88,45  L1372.8,45  L1358.72,45  L1344.64,45  L1330.56,45  L1316.48,45  L1302.4,45  L1288.32,45  L1274.24,45  L1260.16,45  L1246.08,45  L1232,45  L1217.92,45  L1203.84,45  L1189.76,45  L1175.68,45  L1161.6,45  L1147.52,45  L1133.44,45  L1119.36,45  L1105.28,45  L1091.2,45  L1077.12,45  L1063.04,45  L1048.96,45  L1034.88,45  L1020.8,45  L1006.72,45  L992.64,45  L978.56,45  L964.48,45  L950.4,45  L936.32,45  L922.24,45  L908.16,45  L894.08,45  L880,45  L865.92,45  L851.84,45  L837.76,45  L823.68,45  L809.6,45  L795.52,45  L781.44,45  L767.36,45  L753.28,45  L739.2,45  L725.12,45  L711.04,45  L696.96,45  L682.88,45  L668.8,45  L654.72,45  L640.64,45  L626.56,45  L612.48,45  L598.4,45  L584.32,45  L570.24,45  L556.16,45  L542.08,45  L528,45  L513.92,45  L499.84,45  L485.76,45  L471.68,45  L457.6,45  L443.52,45  L429.44,45  L415.36,45  L401.28,45  L387.2,45  L373.12,45  L359.04,45  L344.96,45  L330.88,45  L316.8,45  L302.72,45  L288.64,45  L274.56,45  L260.48,45  L246.4,45  L232.32,45  L218.24,45  L204.16,45  L190.08,45  L176,45  L161.92,45  L147.84,45  L133.76,45  L119.68,45  L105.6,45  L91.52,45  L77.44,45  L63.36,45  L49.28,45  L35.2,45  L21.12,45  L7.04,45  L7.04,14.7  Z"></path></g><g fill="none" fill-opacity="0"><path d=" M6.84,14.5  M7.04,14.7  L7.04,14.7  L7.04,14.7  L21.12,17.4  L35.2,18.3  L49.28,19.2  L63.36,17.1  L77.44,17.4  L91.52,20.1  L105.6,20.1  L119.68,22.8  L133.76,20.7  L147.84,23.4  L161.92,24.9  L176,25.8  L190.08,27.6  L204.16,27.3  L218.24,27.9  L232.32,26.1  L246.4,25.2  L260.48,22.8  L274.56,24.6  L288.64,25.5  L302.72,26.4  L316.8,27  L330.88,25.5  L344.96,26.1  L359.04,27.9  L373.12,24.9  L387.2,27.9  L401.28,29.1  L415.36,32.1  L429.44,31.5  L443.52,30  L457.6,29.4  L471.68,29.1  L485.76,27.3  L499.84,30  L513.92,27.6  L528,27.3  L542.08,27  L556.16,26.1  L570.24,28.5  L584.32,30.3  L598.4,29.4  L612.48,27.6  L626.56,28.8  L640.64,29.4  L654.72,27  L668.8,26.4  L682.88,24.3  L696.96,22.8  L711.04,24.9  L725.12,27.6  L739.2,28.2  L753.28,30  L767.36,32.4  L781.44,35.1  L795.52,38.1  L809.6,41.1  L823.68,43.8  L837.76,46.5  L851.84,48.9  L865.92,51  L880,49.5  L894.08,50.7  L908.16,49.2  L922.24,49.5  L936.32,51.3  L950.4,50.4  L964.48,49.2  L978.56,50.7  L992.64,49.5  L1006.72,50.1  L1020.8,51.3  L1034.88,50.4  L1048.96,51  L1063.04,53.7  L1077.12,54  L1091.2,52.8  L1105.28,52.5  L1119.36,50.7  L1133.44,48  L1147.52,51  L1161.6,48.6  L1175.68,46.2  L1189.76,43.2  L1203.84,40.5  L1217.92,42  L1232,43.8  L1246.08,46.5  L1260.16,45.6  L1274.24,44.4  L1288.32,42  L1302.4,40.5  L1316.48,42  L1330.56,41.7  L1344.64,42.9  L1358.72,41.1  L1372.8,42.6  L1386.88,40.5  L1400.96,40.8 "></path></g></g></g></g></g></g></g><g></g><g></g></g></g></g></g><g clip-path="url(&quot;#id-1156&quot;)"><g><g fill="#f3c300" stroke="#f3c300"><g></g></g></g></g><g><g><g><g></g></g><g><g></g></g></g></g><g><g></g></g><g><g></g></g><g role="button" focusable="true" tabindex="0" opacity="0" visibility="hidden" aria-hidden="true" display="none"><g fill="#6794dc" stroke="#ffffff" fill-opacity="1" stroke-opacity="0"><path></path></g><g transform="translate(9,9)"><g stroke="#ffffff" style="pointer-events: none;"><path d=" M0,0  L11,0 " transform="translate(2.5,7.5)"></path></g><g fill="#000000" style="pointer-events: none;"><g></g></g></g></g></g></g><g><g><g aria-hidden="true"><g><g fill="#000000" display="none" transform="translate(0,0) rotate(-90)"><g></g></g><g stroke="#000000" stroke-opacity="0.15" fill="none" display="none" transform="translate(0,45)" opacity="0" visibility="hidden" aria-hidden="true"><path transform="translate(-0.5,-0.5)" d=" M0,0  L1408,0 "></path></g><g><g><g fill="#000000" aria-label="L" fill-opacity="0.5" opacity="0" stroke-opacity="0" style="pointer-events: none;" display="none" transform="translate(0,30)"><g transform="translate(10,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>L</tspan></text></g></g></g></g><g stroke="#000000" stroke-opacity="0" fill="none" display="none" style="pointer-events: none;"><path transform="translate(-0.5,-0.5)" d=" M0,0  L0,60 "></path></g></g></g></g></g><g transform="translate(1408.0001,0)"><g></g></g></g></g><g><g transform="translate(0.0001,0)"></g></g><g transform="translate(0,60)"><g transform="translate(0.0001,0)"><g aria-hidden="true"><g><g stroke="#000000" stroke-opacity="0" fill="none" display="none" style="pointer-events: none;"><path transform="translate(-0.5,-0.5)" d=" M0,0  L1408,0 "></path></g><g><g><g fill="#000000" aria-label="L" fill-opacity="0.5" opacity="0" stroke-opacity="0" style="pointer-events: none;" display="none"><g transform="translate(-3.5,-24)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>L</tspan></text></g></g><g fill="#000000" fill-opacity="0.5" transform="translate(-84.48,0)" display="none"><g transform="translate(-15.5,-24)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>14:40</tspan></text></g></g><g fill="#000000" fill-opacity="0.5" transform="translate(56.32,0)"><g transform="translate(-15.5,-24)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>14:50</tspan></text></g></g><g fill="#000000" fill-opacity="0.5" transform="translate(197.12,0)"><g transform="translate(-15.5,-24)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>15:00</tspan></text></g></g><g fill="#000000" fill-opacity="0.5" transform="translate(337.92,0)"><g transform="translate(-15.5,-24)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>15:10</tspan></text></g></g><g fill="#000000" fill-opacity="0.5" transform="translate(478.72,0)"><g transform="translate(-15.5,-24)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>15:20</tspan></text></g></g><g fill="#000000" fill-opacity="0.5" transform="translate(619.52,0)"><g transform="translate(-15.5,-24)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>15:30</tspan></text></g></g><g fill="#000000" fill-opacity="0.5" transform="translate(760.32,0)"><g transform="translate(-15.5,-24)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>15:40</tspan></text></g></g><g fill="#000000" fill-opacity="0.5" transform="translate(901.12,0)"><g transform="translate(-15.5,-24)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>15:50</tspan></text></g></g><g fill="#000000" fill-opacity="0.5" transform="translate(1041.92,0)"><g transform="translate(-15.5,-24)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>16:00</tspan></text></g></g><g fill="#000000" fill-opacity="0.5" transform="translate(1182.72,0)"><g transform="translate(-15.5,-24)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>16:10</tspan></text></g></g><g fill="#000000" fill-opacity="0.5" transform="translate(1323.52,0)"><g transform="translate(-15.5,-24)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>16:20</tspan></text></g></g><g fill="#000000" fill-opacity="0.5" transform="translate(1464.32,0)" display="none"><g transform="translate(-15.5,-24)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>16:30</tspan></text></g></g></g></g><g stroke="#000000" stroke-opacity="0.15" fill="none" display="none" transform="translate(0,-60)"><path transform="translate(-0.5,-0.5)" d=" M0,0  L0,60 "></path></g><g fill="#000000" display="none"><g></g></g></g></g></g></g></g></g></g></g></g><title id="id-371-title">Chart</title></g><g fill="#ffffff" fill-opacity="0.8" style="pointer-events: none;"><path d="M-1,0 L1125.4,0 L1125.4,60 L-1,60 L-1,0M1408,0 L1408,0 L1408,60 L1408,60 L1408,0"></path></g><g role="slider" focusable="true" tabindex="0" aria-valuemin="0" aria-valuemax="100" aria-live="polite" aria-labelledby="id-364-title" aria-valuenow="80" aria-valuetext="From 16:06 to 16:26" aria-describedby="id-364-description" transform="translate(1126.4,30)" style="touch-action: none; user-select: none; -webkit-user-drag: none; cursor: -webkit-grab;"><g fill="#ffffff" stroke="#ffffff" fill-opacity="0" stroke-opacity="1" transform="translate(0,-30)"><path d="M0,0 L281.6,0 a0,0 0 0 1 0,0 L281.6,60 a0,0 0 0 1 -0,0 L0,60 a0,0 0 0 1 -0,-0 L0,0 a0,0 0 0 1 0,-0 Z"></path></g><g transform="translate(0,-30)"><g fill="#000000" style="pointer-events: none;" transform="translate(140.8,30)"><g display="none"></g></g></g><title id="id-364-title">From 16:06 to 16:26</title><desc id="id-364-description">Use left and right arrows to move selection</desc></g><g role="slider" focusable="true" tabindex="0" aria-valuemin="0" aria-valuemax="100" aria-labelledby="id-352-title" aria-valuenow="80" aria-valuetext="From 16:06" aria-describedby="id-352-description" transform="translate(1126.4,30)" style="touch-action: none; user-select: none; -webkit-user-drag: none; cursor: ew-resize;"><g fill="#d9d9d9" stroke="#ffffff" fill-opacity="1" stroke-opacity="1" transform="translate(-14,-14)"><path d="M14,0 L14,0 a14,14 0 0 1 14,14 L28,14 a14,14 0 0 1 -14,14 L14,28 a14,14 0 0 1 -14,-14 L0,14 a14,14 0 0 1 14,-14 Z"></path></g><g transform="translate(-6,-12)"><g stroke="#ffffff" stroke-opacity="0.7" style="pointer-events: none;" transform="translate(2,12)"><path d=" M-2,-6  L-2,6  M2,-6  L2,6 " transform="translate(3.5,-0.5)"></path></g></g><title id="id-352-title">From 16:06</title><desc id="id-352-description">Use left and right arrows to move left selection</desc></g><g role="slider" focusable="true" tabindex="0" aria-valuemin="0" aria-valuemax="100" aria-labelledby="id-358-title" aria-valuenow="100" aria-valuetext="To 16:26" aria-describedby="id-358-description" transform="translate(1408,30)" style="touch-action: none; user-select: none; -webkit-user-drag: none; cursor: ew-resize;"><g fill="#d9d9d9" stroke="#ffffff" fill-opacity="1" stroke-opacity="1" transform="translate(-14,-14)"><path d="M14,0 L14,0 a14,14 0 0 1 14,14 L28,14 a14,14 0 0 1 -14,14 L14,28 a14,14 0 0 1 -14,-14 L0,14 a14,14 0 0 1 14,-14 Z"></path></g><g transform="translate(-6,-12)"><g stroke="#ffffff" stroke-opacity="0.7" style="pointer-events: none;" transform="translate(2,12)"><path d=" M-2,-6  L-2,6  M2,-6  L2,6 " transform="translate(3.5,-0.5)"></path></g></g><title id="id-358-title">To 16:26</title><desc id="id-358-description">Use left and right arrows to move right selection</desc></g></g><title id="id-350-title">Use TAB to select grip buttons or left and right arrows to change selection</title></g></g></g><g transform="translate(0,291)"><g transform="translate(55,0)"><g aria-hidden="true"><g><g stroke="#000000" stroke-opacity="0" fill="none" style="pointer-events: none;"><path d=" M0,0  L1408,0 " transform="translate(-0.5,-0.5)"></path></g><g><g><g fill="#000000" aria-label="L" fill-opacity="0" opacity="0" stroke-opacity="0" style="pointer-events: none;"><g transform="translate(-3.5,10)" style="user-select: none;"><text x="0" y="14.015625" dy="-3.784"><tspan>L</tspan></text></g></g><g fill="#000000" transform="translate(-70.4,0)" display="none"><g transform="translate(-15.5,10)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>16:05</tspan></text></g></g><g fill="#000000" transform="translate(281.6,0)"><g transform="translate(-15.5,10)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>16:10</tspan></text></g></g><g fill="#000000" transform="translate(633.6,0)"><g transform="translate(-15.5,10)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>16:15</tspan></text></g></g><g fill="#000000" transform="translate(985.6,0)"><g transform="translate(-15.5,10)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>16:20</tspan></text></g></g><g fill="#000000" transform="translate(1337.6,0)"><g transform="translate(-15.5,10)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>16:25</tspan></text></g></g><g fill="#000000" transform="translate(1689.6,0)" display="none"><g transform="translate(-15.5,10)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>16:30</tspan></text></g></g></g></g><g stroke="#000000" stroke-opacity="0.15" fill="none" display="none" transform="translate(0,-211)"><path transform="translate(-0.5,-0.5)" d=" M0,0  L0,211 "></path></g><g fill="#000000" transform="translate(704,34)"><g display="none"></g></g></g></g></g></g></g></g></g></g></g></g><g><g><g role="tooltip" visibility="hidden" opacity="0"><g fill="#ffffff" fill-opacity="0.9" stroke-width="1" stroke-opacity="1" stroke="#ffffff" filter="url(&quot;#filter-id-250&quot;)" style="pointer-events: none;" transform="translate(0,6)"><path d="M3,0 L3,0 L0,-6 L13,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(12,6)"><g transform="translate(0,7)" display="none"></g></g></g></g><g visibility="hidden" display="none" style="pointer-events: none;"><g fill="#ffffff" opacity="1"><rect width="1498" height="355"></rect></g><g><g transform="translate(729,177.5)"><g><g stroke-opacity="1" fill="#f3f3f3" fill-opacity="0.8"><g><g><path d=" M53,0  a53,53,0,0,1,-106,0 a53,53,0,0,1,106,0 M42,0  a42,42,0,0,0,-84,0 a42,42,0,0,0,84,0 L42,0 "></path></g></g></g><g stroke-opacity="1" fill="#000000" fill-opacity="0.2"><g><g><path d=" M50,0  a50,50,0,0,1,-100,0 a50,50,0,0,1,100,0 M45,0  a45,45,0,0,0,-90,0 a45,45,0,0,0,90,0 L45,0 "></path></g></g></g><g fill="#000000" fill-opacity="0.4"><g transform="translate(-15,-7)" style="user-select: none;"><text x="15px" y="14" dy="-3.78" text-anchor="middle"><tspan>100%</tspan></text></g></g></g></g></g></g><g opacity="0.3" aria-labelledby="id-265-title" filter="url(&quot;#filter-id-265&quot;)" style="cursor: pointer;" transform="translate(0,334)"><g fill="#ffffff" opacity="0"><rect width="66" height="21"></rect></g><g><g shape-rendering="auto" fill="none" stroke-opacity="1" stroke-width="1.7999999999999998" stroke="#3cabff"><path d=" M15,15  C17.4001,15 22.7998,15.0001 27,15 C31.2002,14.9999 33.2999,6 36,6 C38.7001,6 38.6999,10.5 40.5,10.5 C42.3001,10.5 42.2999,6 45,6 C47.7001,6 50.9999,14.9999 54,15 C57.0002,15.0001 58.7999,15 60,15"></path></g><g shape-rendering="auto" fill="none" stroke-opacity="1" stroke-width="1.7999999999999998" stroke="url(&quot;#gradient-id-268&quot;)"><path d=" M6,15  C8.2501,15 9.7498,15.0001 15,15 C20.2502,14.9999 20.7748,3.6 27,3.6 C33.2252,3.6 33.8998,14.9999 39.9,15 C45.9002,15.0001 45.9748,15 51,15 C56.0252,15 57.7499,15 60,15"></path></g></g><title id="id-265-title">Chart created using amCharts library</title></g><g role="tooltip" visibility="hidden" opacity="0"><g fill="#000000" fill-opacity="1" stroke-width="1" stroke-opacity="1" stroke="#000000" style="pointer-events: none;" transform="translate(70,306)"><path d="M0,0 L20,0 a0,0 0 0 1 0,0 L20,10 a0,0 0 0 1 -0,0 L0,10 a0,0 0 0 1 -0,-0 L0,0 a0,0 0 0 1 0,-0"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(80,306)"><g transform="translate(0,5)" display="none"></g></g></g></g><g role="tooltip" visibility="hidden" opacity="0" display="none"><g fill="#000000" fill-opacity="1" stroke-width="1" stroke-opacity="1" stroke="#000000" style="pointer-events: none;"><path></path></g><g><g fill="#ffffff" style="pointer-events: none;"><g transform="translate(0,5)"></g></g></g></g><g role="tooltip" visibility="hidden" opacity="0"><g fill="#ffffff" fill-opacity="0.9" stroke-width="1" stroke-opacity="1" stroke="#ffffff" filter="url(&quot;#filter-id-336&quot;)" style="pointer-events: none;" transform="translate(6,0)"><path d="M3,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,8 L0,8 L-6,0 L0,-2 L0,3 a3,3 0 0 1 3,-3"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(18,0)"><g transform="translate(0,7)" display="none"></g></g></g></g><g role="tooltip" visibility="hidden" opacity="0"><g fill="#000000" fill-opacity="1" stroke-width="1" stroke-opacity="1" stroke="#000000" style="pointer-events: none;" transform="translate(70,-15)"><path d="M0,0 L20,0 a0,0 0 0 1 0,0 L20,10 a0,0 0 0 1 -0,0 L20,10 L10,10 L0.00010000000000331966,15 L0,10 L0,10 a0,0 0 0 1 -0,-0 L0,0 a0,0 0 0 1 0,-0"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(80,-15)"><g transform="translate(0,5)" display="none"></g></g></g></g><g role="tooltip" visibility="hidden" opacity="0" display="none"><g display="none" fill="#000000" fill-opacity="1" stroke-width="1" stroke-opacity="1" stroke="#000000" style="pointer-events: none;"><path></path></g><g><g fill="#ffffff" display="none" style="pointer-events: none;"><g transform="translate(0,5)"></g></g></g></g><g role="tooltip" visibility="hidden" opacity="0"><g filter="url(&quot;#filter-id-425&quot;)" fill="#ffffff" fill-opacity="0.9" stroke-width="1" stroke-opacity="1" stroke="#ffffff" style="pointer-events: none;" transform="translate(6,0)"><path d="M3,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,8 L0,8 L-6,0 L0,-2 L0,3 a3,3 0 0 1 3,-3"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(18,0)"><g transform="translate(0,7)" display="none"></g></g></g></g></g></g></g></g></svg></div></div>
                                    <script>
                                        am4core.ready(function() {
                                        
                                        // Themes begin
                                        am4core.useTheme(am4themes_kelly);
                                        am4core.useTheme(am4themes_animated);
                                        // Themes end
                                        
                                        // Create chart
                                        var chart = am4core.create("space123", am4charts.XYChart);
                                        chart.paddingRight = 20;
                                        
                                        chart.data = generateChartData();
                                        
                                        var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
                                        dateAxis.baseInterval = {
                                          "timeUnit": "minute",
                                          "count": 1
                                        };
                                        dateAxis.tooltipDateFormat = "HH:mm, d MMMM";
                                        
                                        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                                        valueAxis.tooltip.disabled = true;
                                        valueAxis.title.text = "Consumption";
                                        
                                        var series = chart.series.push(new am4charts.LineSeries());
                                        series.dataFields.dateX = "date";
                                        series.dataFields.valueY = "Voltage";
                                        series.tooltipText = "Voltage: [bold]{valueY}[/]";
                                        series.fillOpacity = 0.3;
                                        
                                        
                                        chart.cursor = new am4charts.XYCursor();
                                        chart.cursor.lineY.opacity = 0;
                                        chart.scrollbarX = new am4charts.XYChartScrollbar();
                                        chart.scrollbarX.series.push(series);
                                        
                                        
                                        dateAxis.start = 0.8;
                                        dateAxis.keepSelection = true;
                                        
                                        
                                        
                                        function generateChartData() {
                                            var chartData = [];
                                            // current date
                                            var firstDate = new Date();
                                            // now set 500 minutes back
                                            firstDate.setMinutes(firstDate.getDate() - 500);
                                        
                                            // and generate 500 data items
                                            var Voltage = 100;
                                            for (var i = 0; i < 100; i++) {
                                                var newDate = new Date(firstDate);
                                                // each time we add one minute
                                                newDate.setMinutes(newDate.getMinutes() + i);
                                                // some random number
                                                Voltage += Math.round((Math.random()<0.5?1:-1)*Math.random()*10);
                                                // add data item to the array
                                                chartData.push({
                                                    date: newDate,
                                                    Voltage: Voltage
                                                });
                                            }
                                            return chartData;
                                        }
                                        
                                        }); // end am4core.ready()
                                        </script>
                                        
                                </div>
                            </div>
                        </div>




                    </div>



                </div>


 <div class="row ">
                

                <div class="col-lg-12  card-group-row__col">
                    <div class="panel panel-default card round shadow font-size-12">
                        <div class="panel-heading margin-bottom-0">
                            <h3 class="panel-title font-weight-600 bg-theme1 white1 "> Consumption Analysis 
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
                                <option>Since Last month</option>    
                                <option>Today</option>
                                    <option>Yesterday </option>
                                    <option>Since Last Week</option>
                                    <option>Since Last month</option>
                                    <option>Since Last Year</option>
                                </select>
                            </div>
                         
                        </div>
                            <div>
                                <div class="chartbox">
                                    <div id="sssss0s1" style="height:300px;"><div style="width: 100%; height: 100%; position: relative;"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="group" style="width: 100%; height: 100%; overflow: visible;"><defs><clipPath id="id-46"><rect width="1498" height="300"></rect></clipPath><linearGradient id="gradient-id-69" x1="1%" x2="99%" y1="59%" y2="41%"><stop stop-color="#474758" offset="0"></stop><stop stop-color="#474758" stop-opacity="1" offset="0.75"></stop><stop stop-color="#3cabff" stop-opacity="1" offset="0.755"></stop></linearGradient><filter id="filter-id-78" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"></filter><filter id="filter-id-99" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"></filter><clipPath id="id-132"><path d="M0,0 L1435,0 L1435,204 L0,204 L0,0"></path></clipPath><clipPath id="id-153"><rect width="1435" height="204"></rect></clipPath><clipPath id="id-297"><rect width="1435" height="204"></rect></clipPath><filter id="filter-id-51" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-66" filterUnits="objectBoundingBox" width="120%" height="120%" x="-10%" y="-10%"><feColorMatrix type="saturate" values="0"></feColorMatrix></filter><filter id="filter-id-137" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter></defs><g><g fill="#ffffff" fill-opacity="0"><rect width="1498" height="300"></rect></g><g><g role="region" clip-path="url(&quot;#id-46&quot;)" opacity="1" aria-label="Chart" id="id-22"><g transform="translate(15,15)"><g><g><g><g><g><g><g transform="translate(33,0)" style="touch-action: none; user-select: none; -webkit-user-drag: none;"><g fill="#ffffff" fill-opacity="0"><rect width="1435" height="204"></rect></g><g><g><g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,272)" display="none"><path d=" M0,0  L1435,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,238)" display="none"><path d=" M0,0  L1435,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,204)"><path d=" M0,0  L1435,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,170)" display="none"><path d=" M0,0  L1435,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,136)"><path d=" M0,0  L1435,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,102)" display="none"><path d=" M0,0  L1435,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,68)"><path d=" M0,0  L1435,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,-68)" display="none"><path d=" M0,0  L1435,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none"><path d=" M0,0  L1435,0 " transform="translate(-0.5,-0.5)"></path></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(0,340)" display="none"><path d=" M0,0  L1435,0 " transform="translate(-0.5,-0.5)"></path></g></g></g><g><g></g></g><g><g><g role="group" stroke-opacity="1" fill-opacity="0.5" stroke="#a1caf1" stroke-width="3" aria-label="Series"><g><g clip-path="url(&quot;#id-132&quot;)"><g><g><g><g fill="#f3c300" fill-opacity="0.5" stroke="#f3c300" stroke-opacity="1" stroke-width="3" style="pointer-events: none;"><g><g stroke-opacity="0"><path d=" M12.6146,123.9  M12.8146,124.1  L12.8146,124.1  L12.8146,124.1  L140.9314,114.92  L269.0625,101.66  L397.1937,134.3  L525.3105,99.96  L525.3105,204  L525.3105,204  L525.3105,204  L397.1937,204  L269.0625,204  L140.9314,204  L12.8146,204  L12.8146,124.1  Z"></path></g><g fill="none" fill-opacity="0"><path d=" M12.6146,123.9  M12.8146,124.1  L12.8146,124.1  L12.8146,124.1  L140.9314,114.92  L269.0625,101.66  L397.1937,134.3  L525.3105,99.96 "></path></g></g></g><g fill="#875692" fill-opacity="0.5" stroke="#875692" stroke-opacity="1" stroke-width="3" style="pointer-events: none;"><g><g stroke-opacity="0"><path d=" M525.1105,99.76  M525.3105,99.96  L525.3105,99.96  L525.3105,99.96  L653.4416,88.06  L781.5584,88.06  L909.6896,88.06  L909.6896,204  L909.6896,204  L909.6896,204  L781.5584,204  L653.4416,204  L525.3105,204  L525.3105,99.96  Z"></path></g><g fill="none" fill-opacity="0"><path d=" M525.1105,99.76  M525.3105,99.96  L525.3105,99.96  L525.3105,99.96  L653.4416,88.06  L781.5584,88.06  L909.6896,88.06 "></path></g></g></g><g fill="#f38400" fill-opacity="0.5" stroke="#f38400" stroke-opacity="1" stroke-width="3" style="pointer-events: none;"><g><g stroke-opacity="0"><path d=" M909.4895,87.86  M909.6896,88.06  L909.6896,88.06  L909.6896,88.06  L1037.8064,88.06  L1165.9375,88.06  L1294.0687,88.06  L1422.1855,16.66  L1422.1855,204  L1422.1855,204  L1422.1855,204  L1294.0687,204  L1165.9375,204  L1037.8064,204  L909.6896,204  L909.6896,88.06  Z"></path></g><g fill="none" fill-opacity="0"><path d=" M909.4895,87.86  M909.6896,88.06  L909.6896,88.06  L909.6896,88.06  L1037.8064,88.06  L1165.9375,88.06  L1294.0687,88.06  L1422.1855,16.66 "></path></g></g></g></g></g></g></g><g></g></g></g></g></g><g clip-path="url(&quot;#id-297&quot;)"><g><g fill="#a1caf1" stroke="#a1caf1"><g><g focusable="true" tabindex="0" opacity="1" transform="translate(12.815,124.1)"><g><g fill="#ffffff" stroke-width="3"><circle r="6"></circle></g></g></g><g focusable="true" tabindex="0" opacity="1" transform="translate(140.931,114.92)"><g><g fill="#ffffff" stroke-width="3"><circle r="6"></circle></g></g></g><g focusable="true" tabindex="0" opacity="1" transform="translate(269.063,101.66)"><g><g fill="#ffffff" stroke-width="3"><circle r="6"></circle></g></g></g><g focusable="true" tabindex="0" opacity="1" transform="translate(397.194,134.3)"><g><g fill="#ffffff" stroke-width="3"><circle r="6"></circle></g></g></g><g focusable="true" tabindex="0" opacity="1" transform="translate(525.31,99.96)"><g><g fill="#ffffff" stroke-width="3"><circle r="6"></circle></g></g></g><g focusable="true" tabindex="0" opacity="1" transform="translate(653.442,88.06)"><g><g fill="#ffffff" stroke-width="3"><circle r="6"></circle></g></g></g><g focusable="true" tabindex="0" opacity="1" transform="translate(781.558,88.06)"><g><g fill="#ffffff" stroke-width="3"><circle r="6"></circle></g></g></g><g focusable="true" tabindex="0" opacity="1" transform="translate(909.69,88.06)"><g><g fill="#ffffff" stroke-width="3"><circle r="6"></circle></g></g></g><g focusable="true" tabindex="0" opacity="1" transform="translate(1037.806,88.06)"><g><g fill="#ffffff" stroke-width="3"><circle r="6"></circle></g></g></g><g focusable="true" tabindex="0" opacity="1" transform="translate(1165.938,88.06)"><g><g fill="#ffffff" stroke-width="3"><circle r="6"></circle></g></g></g><g focusable="true" tabindex="0" opacity="1" transform="translate(1294.069,88.06)"><g><g fill="#ffffff" stroke-width="3"><circle r="6"></circle></g></g></g><g focusable="true" tabindex="0" opacity="1" transform="translate(1422.185,16.66)"><g><g fill="#ffffff" stroke-width="3"><circle r="6"></circle></g></g></g></g></g></g></g><g><g><g><g></g></g><g><g></g></g></g></g><g><g></g></g><g><g></g></g><g opacity="0" visibility="hidden" aria-hidden="true" clip-path="url(&quot;#id-153&quot;)" style="touch-action: none; user-select: none; -webkit-user-drag: none;"><g><g fill-opacity="0.2" fill="#000000" visibility="hidden" style="pointer-events: none;"><path></path></g><g stroke="#000000" fill="none" stroke-dasharray="3,3" stroke-opacity="0.4" opacity="0" style="pointer-events: none;"><path d=" M0,0  L0,204 "></path></g><g stroke="#000000" fill="none" stroke-dasharray="3,3" stroke-opacity="0.4" opacity="0" style="pointer-events: none;"><path d=" M0,0  L1435,0 "></path></g></g></g><g role="button" focusable="true" tabindex="0" opacity="0" visibility="hidden" aria-hidden="true" transform="translate(1395,-3)" aria-labelledby="id-37-title"><g fill="#6794dc" stroke="#ffffff" fill-opacity="1" stroke-opacity="0" transform="translate(0,8)"><path d="M17,0 L18,0 a17,17 0 0 1 17,17 L35,17 a17,17 0 0 1 -17,17 L17,34 a17,17 0 0 1 -17,-17 L0,17 a17,17 0 0 1 17,-17 Z"></path></g><g transform="translate(9,9)"><g stroke="#ffffff" style="pointer-events: none;" transform="translate(0,8)"><path d=" M0,0  L11,0 " transform="translate(2.5,7.5)"></path></g><g fill="#000000" style="pointer-events: none;" transform="translate(17,8)"><g display="none"></g></g></g><title id="id-37-title">Zoom Out</title></g></g></g><g><g><g aria-hidden="true"><g><g fill="#000000" transform="translate(0,102) rotate(-90)"><g display="none"></g></g><g stroke="#000000" stroke-opacity="0.15" fill="none" transform="translate(33,204)" opacity="1"><path transform="translate(-0.5,-0.5)" d=" M0,0  L1435,0 "></path></g><g><g><g fill="#000000" aria-label="L" fill-opacity="0" opacity="0" stroke-opacity="0" style="pointer-events: none;" transform="translate(33,102)"><g transform="translate(-23,-7)" style="user-select: none;"><text x="0" y="14.015625" dy="-3.784"><tspan>10</tspan></text></g></g><g fill="#000000" transform="translate(33,272)" display="none"><g transform="translate(-26,-7)" style="user-select: none;"><text x="0" y="14.015625" dy="-3.784"><tspan>-20</tspan></text></g></g><g fill="#000000" transform="translate(33,238)" display="none"><g transform="translate(-26,-7)" style="user-select: none;"><text x="0" y="14.015625" dy="-3.784"><tspan>-10</tspan></text></g></g><g fill="#000000" transform="translate(33,204)"><g transform="translate(-17,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>0</tspan></text></g></g><g fill="#000000" transform="translate(33,170)" display="none"><g transform="translate(-23,-7)" style="user-select: none;"><text x="0" y="14.015625" dy="-3.784"><tspan>10</tspan></text></g></g><g fill="#000000" transform="translate(33,136)"><g transform="translate(-23,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>20</tspan></text></g></g><g fill="#000000" transform="translate(33,102)" display="none"><g transform="translate(-23,-7)" style="user-select: none;"><text x="0" y="14.015625" dy="-3.784"><tspan>30</tspan></text></g></g><g fill="#000000" transform="translate(33,68)"><g transform="translate(-23,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>40</tspan></text></g></g><g fill="#000000" transform="translate(33,-68)" display="none"><g transform="translate(-23,-7)" style="user-select: none;"><text x="0" y="14.015625" dy="-3.784"><tspan>80</tspan></text></g></g><g fill="#000000" transform="translate(33,0)"><g transform="translate(-23,-7)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>60</tspan></text></g></g><g fill="#000000" transform="translate(33,340)" display="none"><g transform="translate(-26,-7)" style="user-select: none;"><text x="0" y="14.015625" dy="-3.784"><tspan>-40</tspan></text></g></g></g></g><g stroke="#000000" stroke-opacity="0" fill="none" opacity="0" style="pointer-events: none;" transform="translate(33,0)"><path d=" M0,0  L0,204 " transform="translate(-0.5,-0.5)"></path></g></g></g></g></g><g transform="translate(1468,0)"><g></g></g></g></g><g><g transform="translate(33,0)"></g></g><g transform="translate(0,204)"><g transform="translate(33,0)"><g aria-hidden="true"><g><g stroke="#000000" stroke-opacity="0" fill="none" opacity="0" style="pointer-events: none;"><path d=" M0,0  L1435,0 " transform="translate(-0.5,-0.5)"></path></g><g><g><g fill="#000000" aria-label="L" fill-opacity="0" opacity="0" stroke-opacity="0" style="pointer-events: none;" transform="translate(717.5,0)"><g transform="translate(-3,10)" style="user-select: none;"><text x="0" y="14.015625" dy="-3.784"><tspan>L</tspan></text></g></g><g fill="#000000" transform="translate(12.815,0)"><g transform="translate(-8.5,10)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>Jan</tspan></text></g></g><g fill="#000000" transform="translate(140.939,0)"><g transform="translate(-8.5,10)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>Feb</tspan></text></g></g><g fill="#000000" transform="translate(269.063,0)"><g transform="translate(-14.5,10)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>March</tspan></text></g></g><g fill="#000000" transform="translate(397.186,0)"><g transform="translate(-12,10)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>April</tspan></text></g></g><g fill="#000000" transform="translate(525.31,0)"><g transform="translate(-10,10)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>May</tspan></text></g></g><g fill="#000000" transform="translate(653.434,0)"><g transform="translate(-12,10)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>June</tspan></text></g></g><g fill="#000000" transform="translate(781.566,0)"><g transform="translate(-10,10)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>July</tspan></text></g></g><g fill="#000000" transform="translate(909.69,0)"><g transform="translate(-10,10)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>Aug</tspan></text></g></g><g fill="#000000" transform="translate(1037.814,0)"><g transform="translate(-11,10)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>Sept</tspan></text></g></g><g fill="#000000" transform="translate(1165.938,0)"><g transform="translate(-8.5,10)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>Oct</tspan></text></g></g><g fill="#000000" transform="translate(1294.061,0)"><g transform="translate(-10,10)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>Nov</tspan></text></g></g><g fill="#000000" transform="translate(1422.185,0)"><g transform="translate(-9.5,10)" style="user-select: none;"><text x="0" y="14" dy="-3.78"><tspan>Dec</tspan></text></g></g><g fill="#000000" display="none" transform="translate(1550.309,0)"><g transform="translate(0,10)" display="none"></g></g></g></g><g stroke="#000000" stroke-opacity="0.15" fill="none" display="none" transform="translate(1435,-204)" opacity="0" visibility="hidden" aria-hidden="true"><path transform="translate(-0.5,-0.5)" d=" M0,0  L0,204 "></path></g><g fill="#000000" transform="translate(717.5,34)"><g display="none"></g></g></g></g><g role="scrollbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" aria-valuetext="From Jan to Dec" aria-labelledby="id-154-title" aria-orientation="horizontal" aria-controls="id-22" transform="translate(0,44)"><g fill="#f3f3f3" fill-opacity="0.5"><path d="M6,0 L1429,0 a6,6 0 0 1 6,6 L1435,6 a6,6 0 0 1 -6,6 L6,12 a6,6 0 0 1 -6,-6 L0,6 a6,6 0 0 1 6,-6 Z"></path></g><g><g role="slider" focusable="true" tabindex="0" aria-valuemin="0" aria-valuemax="100" aria-live="polite" aria-labelledby="id-168-title" aria-valuenow="0" aria-valuetext="From Jan to Dec" aria-describedby="id-168-description" transform="translate(0,6)" style="touch-action: none; user-select: none; -webkit-user-drag: none; cursor: -webkit-grab;"><g fill="#d9d9d9" stroke="#ffffff" fill-opacity="1" stroke-opacity="1" transform="translate(0,-6)"><path d="M6,0 L1429,0 a6,6 0 0 1 6,6 L1435,6 a6,6 0 0 1 -6,6 L6,12 a6,6 0 0 1 -6,-6 L0,6 a6,6 0 0 1 6,-6 Z"></path></g><g transform="translate(0,-6)"><g fill="#000000" style="pointer-events: none;" transform="translate(717.5,6)"><g display="none"></g></g></g><title id="id-168-title">From Jan to Dec</title><desc id="id-168-description">Use left and right arrows to move selection</desc></g><g role="slider" focusable="true" tabindex="0" aria-valuemin="0" aria-valuemax="100" aria-labelledby="id-156-title" aria-valuenow="0" aria-valuetext="From Jan" aria-describedby="id-156-description" transform="translate(0,6)" style="touch-action: none; user-select: none; -webkit-user-drag: none; cursor: ew-resize;"><g fill="#d9d9d9" stroke="#ffffff" fill-opacity="1" stroke-opacity="1" transform="translate(-14,-14)"><path d="M14,0 L14,0 a14,14 0 0 1 14,14 L28,14 a14,14 0 0 1 -14,14 L14,28 a14,14 0 0 1 -14,-14 L0,14 a14,14 0 0 1 14,-14 Z"></path></g><g transform="translate(-6,-12)"><g stroke="#ffffff" stroke-opacity="0.7" style="pointer-events: none;" transform="translate(2,12)"><path d=" M-2,-6  L-2,6  M2,-6  L2,6 " transform="translate(3.5,-0.5)"></path></g></g><title id="id-156-title">From Jan</title><desc id="id-156-description">Use left and right arrows to move left selection</desc></g><g role="slider" focusable="true" tabindex="0" aria-valuemin="0" aria-valuemax="100" aria-labelledby="id-162-title" aria-valuenow="100" aria-valuetext="To Dec" aria-describedby="id-162-description" transform="translate(1435,6)" style="touch-action: none; user-select: none; -webkit-user-drag: none; cursor: ew-resize;"><g fill="#d9d9d9" stroke="#ffffff" fill-opacity="1" stroke-opacity="1" transform="translate(-14,-14)"><path d="M14,0 L14,0 a14,14 0 0 1 14,14 L28,14 a14,14 0 0 1 -14,14 L14,28 a14,14 0 0 1 -14,-14 L0,14 a14,14 0 0 1 14,-14 Z"></path></g><g transform="translate(-6,-12)"><g stroke="#ffffff" stroke-opacity="0.7" style="pointer-events: none;" transform="translate(2,12)"><path d=" M-2,-6  L-2,6  M2,-6  L2,6 " transform="translate(3.5,-0.5)"></path></g></g><title id="id-162-title">To Dec</title><desc id="id-162-description">Use left and right arrows to move right selection</desc></g></g><title id="id-154-title">Use TAB to select grip buttons or left and right arrows to change selection</title></g></g></g></g></g></g></g></g></g><g><g><g role="tooltip" visibility="hidden" opacity="0"><g fill="#ffffff" fill-opacity="0.9" stroke-width="1" stroke-opacity="1" stroke="#ffffff" filter="url(&quot;#filter-id-51&quot;)" style="pointer-events: none;" transform="translate(0,6)"><path d="M3,0 L3,0 L0,-6 L13,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(12,6)"><g transform="translate(0,7)" display="none"></g></g></g></g><g visibility="hidden" display="none" style="pointer-events: none;"><g fill="#ffffff" opacity="1"><rect width="1498" height="300"></rect></g><g><g transform="translate(729,150)"><g><g stroke-opacity="1" fill="#f3f3f3" fill-opacity="0.8"><g><g><path d=" M53,0  a53,53,0,0,1,-106,0 a53,53,0,0,1,106,0 M42,0  a42,42,0,0,0,-84,0 a42,42,0,0,0,84,0 L42,0 "></path></g></g></g><g stroke-opacity="1" fill="#000000" fill-opacity="0.2"><g><g><path d=" M50,0  a50,50,0,0,1,-100,0 a50,50,0,0,1,100,0 M45,0  a45,45,0,0,0,-90,0 a45,45,0,0,0,90,0 L45,0 "></path></g></g></g><g fill="#000000" fill-opacity="0.4"><g transform="translate(-14,-7)" style="user-select: none;"><text x="14px" y="14" dy="-3.78" text-anchor="middle"><tspan>100%</tspan></text></g></g></g></g></g></g><g opacity="0.3" aria-labelledby="id-66-title" filter="url(&quot;#filter-id-66&quot;)" style="cursor: pointer;" transform="translate(0,279)"><g fill="#ffffff" opacity="0"><rect width="66" height="21"></rect></g><g><g shape-rendering="auto" fill="none" stroke-opacity="1" stroke-width="1.7999999999999998" stroke="#3cabff"><path d=" M15,15  C17.4001,15 22.7998,15.0001 27,15 C31.2002,14.9999 33.2999,6 36,6 C38.7001,6 38.6999,10.5 40.5,10.5 C42.3001,10.5 42.2999,6 45,6 C47.7001,6 50.9999,14.9999 54,15 C57.0002,15.0001 58.7999,15 60,15"></path></g><g shape-rendering="auto" fill="none" stroke-opacity="1" stroke-width="1.7999999999999998" stroke="url(&quot;#gradient-id-69&quot;)"><path d=" M6,15  C8.2501,15 9.7498,15.0001 15,15 C20.2502,14.9999 20.7748,3.6 27,3.6 C33.2252,3.6 33.8998,14.9999 39.9,15 C45.9002,15.0001 45.9748,15 51,15 C56.0252,15 57.7499,15 60,15"></path></g></g><title id="id-66-title">Chart created using amCharts library</title></g><g role="tooltip" visibility="hidden" opacity="0"><g fill="#000000" fill-opacity="1" stroke-width="1" stroke-opacity="1" stroke="#000000" style="pointer-events: none;" transform="translate(48,219)"><path d="M0,0 L20,0 a0,0 0 0 1 0,0 L20,10 a0,0 0 0 1 -0,0 L0,10 a0,0 0 0 1 -0,-0 L0,0 a0,0 0 0 1 0,-0"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(58,219)"><g transform="translate(0,5)" display="none"></g></g></g></g><g role="tooltip" visibility="hidden" opacity="0" display="none"><g fill="#000000" fill-opacity="1" stroke-width="1" stroke-opacity="1" stroke="#000000" style="pointer-events: none;"><path></path></g><g><g fill="#ffffff" style="pointer-events: none;"><g transform="translate(0,5)"></g></g></g></g><g role="tooltip" visibility="hidden" opacity="0"><g fill="#ffffff" fill-opacity="0.9" stroke-width="1" stroke-opacity="1" stroke="#ffffff" filter="url(&quot;#filter-id-137&quot;)" style="pointer-events: none;" transform="translate(6,0)"><path d="M3,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,8 L0,8 L-6,0 L0,-2 L0,3 a3,3 0 0 1 3,-3"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(18,0)"><g transform="translate(0,7)" display="none"></g></g></g></g></g></g></g></g></svg></div></div>

                                    <script>
                                        am4core.ready(function() {
                                        
                                        // Themes begin
                                        am4core.useTheme(am4themes_kelly);
                                        am4core.useTheme(am4themes_animated);
                                        // Themes end
                                        
                                        var chart = am4core.create("sssss0s1", am4charts.XYChart);
                                        
                                        var data = [];
                                        
                                        chart.data = [{
                                          "year": "Jan",
                                          "FlowRate": 23.5,
                                          "expenses": 21.1,
                                          "lineColor": chart.colors.next()
                                        }, {
                                          "year": "Feb",
                                          "FlowRate": 26.2,
                                          "expenses": 30.5
                                        }, {
                                          "year": "March",
                                          "FlowRate": 30.1,
                                          "expenses": 34.9
                                        }, {
                                          "year": "April",
                                          "FlowRate": 20.5,
                                          "expenses": 23.1
                                        }, {
                                          "year": "May",
                                          "FlowRate": 30.6,
                                          "expenses": 28.2,
                                          "lineColor": chart.colors.next()
                                        }, {
                                          "year": "June",
                                          "FlowRate": 34.1,
                                          "expenses": 31.9
                                        }, {
                                          "year": "July",
                                          "FlowRate": 34.1,
                                          "expenses": 31.9
                                        }, {
                                          "year": "Aug",
                                          "FlowRate": 34.1,
                                          "expenses": 31.9,
                                          "lineColor": chart.colors.next()
                                        }, {
                                          "year": "Sept",
                                          "FlowRate": 34.1,
                                          "expenses": 31.9
                                        }, {
                                          "year": "Oct",
                                          "FlowRate": 34.1,
                                          "expenses": 31.9
                                        }, {
                                          "year": "Nov",
                                          "FlowRate": 34.1,
                                          "expenses": 31.9
                                        }, {
                                          "year": "Dec",
                                          "FlowRate": 55.1,
                                          "expenses": 31.9
                                        }];
                                        
                                        var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
                                        categoryAxis.renderer.grid.template.location = 0;
                                        categoryAxis.renderer.ticks.template.disabled = true;
                                        categoryAxis.renderer.line.opacity = 0;
                                        categoryAxis.renderer.grid.template.disabled = true;
                                        categoryAxis.renderer.minGridDistance = 40;
                                        categoryAxis.dataFields.category = "year";
                                        categoryAxis.startLocation = 0.4;
                                        categoryAxis.endLocation = 0.6;
                                        
                                        
                                        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                                        valueAxis.tooltip.disabled = true;
                                        valueAxis.renderer.line.opacity = 0;
                                        valueAxis.renderer.ticks.template.disabled = true;
                                        valueAxis.min = 0;
                                        
                                        var lineSeries = chart.series.push(new am4charts.LineSeries());
                                        lineSeries.dataFields.categoryX = "year";
                                        lineSeries.dataFields.valueY = "FlowRate";
                                        lineSeries.tooltipText = "FlowRate: {valueY.value}";
                                        lineSeries.fillOpacity = 0.5;
                                        lineSeries.strokeWidth = 3;
                                        lineSeries.propertyFields.stroke = "lineColor";
                                        lineSeries.propertyFields.fill = "lineColor";
                                        
                                        var bullet = lineSeries.bullets.push(new am4charts.CircleBullet());
                                        bullet.circle.radius = 6;
                                        bullet.circle.fill = am4core.color("#fff");
                                        bullet.circle.strokeWidth = 3;
                                        
                                        chart.cursor = new am4charts.XYCursor();
                                        chart.cursor.behavior = "panX";
                                        chart.cursor.lineX.opacity = 0;
                                        chart.cursor.lineY.opacity = 0;
                                        
                                        chart.scrollbarX = new am4core.Scrollbar();
                                        chart.scrollbarX.parent = chart.bottomAxesContainer;
                                        
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
    






    <script src="../plugins/d3/d3.min.js "></script>
    <script src="../plugins/c3/c3.js "></script>
    <script src="../plugins/js/core.js "></script>
    <script src="js/scripts.js "></script>




<div hidden="" style="width: 1px; height: 1px; position: absolute; z-index: -1000000;"><div style="width: 100%; height: 100%; position: relative;"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="group" style="width: 100%; height: 100%; overflow: visible;"><defs><clipPath id="id-35"></clipPath><clipPath id="id-122"></clipPath><clipPath id="id-296"><path></path></clipPath><clipPath id="id-499"></clipPath><clipPath id="id-573"></clipPath><clipPath id="id-763"><path></path></clipPath><clipPath id="id-830"><path></path></clipPath><filter id="filter-id-835" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-768" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-578" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-504" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-301" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-127" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-40" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter></defs></svg></div></div><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="https://www.gstatic.com/images/branding/product/1x/translate_24dp.png" width="20" height="20" alt="Google Translate"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Original text</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Contribute a better translation</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div><svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg><div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div><iframe frameborder="0" class="goog-te-menu-frame skiptranslate" title="Language Translate Widget" style="visibility: visible; box-sizing: content-box; width: 1046px; height: 263px; display: none;"></iframe></body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>