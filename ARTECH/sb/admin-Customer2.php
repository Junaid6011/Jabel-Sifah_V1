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
   
    
	<div class="navbar-header ">
        <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided unfolded" data-toggle="menubar">
            <span class="sr-only">navigation</span>
            <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse" data-toggle="collapse">
            <i class="icon ion-android-apps"></i>
        </button>
        <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search" data-toggle="collapse">
            <span class="sr-only">Search</span>
            <i class="icon ion-ios-search-strong"></i>
        </button>
        <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
            <a href="dashboard.php">
                <img class="navbar-brand-logo" src="images/download.png" style="height:30px; margin-top:0px;" title="">
			
                <span class="navbar-brand-text hidden-xs"> <img class="navbar-brand-logo" src="images/discordLogo.png" style="height:40px; margin-top:0px;" title="img">
                </span>
                <!-- <span class="navbar-brand-text hidden-xs">  <b>Hypernet Platform</b> <i> Powered by HyperNym</i> </span> -->
            </a>
        </div>
    </div>
    <div class="navbar-container container-fluid">
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
            <ul class="nav navbar-toolbar">
                <li class="hidden-float" id="toggleMenubar">
                    <a data-toggle="menubar" href="#">
                        <i class="icon hamburger hamburger-arrow-left hided unfolded">
                            <span class="sr-only">Toggle menubar</span>
                            <span class="hamburger-bar"></span>
                        </i>
                    </a>
                </li>
                <li class="hidden-float">
                    <form class="navbar-form" role="search">
                        <div class="input-search">
                            <input type="text" class="form-control" placeholder="Search">
                            <button type="button" class="input-search-btn">
                                <i class="icon ion-ios-search-strong"></i>
                            </button>
                        </div>
                    </form>
                </li>

            </ul>
            <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                
                <li class="">
                    <a data-toggle="" href="admin-dashboard.php" title="Configurations">
                        <i class="ion-android-settings"></i>
                    </a>
                    <!-- <ul class="dropdown-menu ">
                    <li> <a href="admin-dashboard.php">Admin Portal</a></li>
                      <li><a href="">Choose Customer</a> </li> 
                    </ul> -->

                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" href="javascript:void(0)" title="Notifications">
                        <i class="ion-android-notifications"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                        <li class="dropdown-menu-header">
                            <h5>NOTIFICATIONS / ALERTS</h5>
                            <span class="label label-round label-danger">0</span>
                        </li>
                        <li class="list-group">
                            <div>
                                <div>
                                    <a class="list-group-item" href="">
                                        <div class="media"> No Notifications </div>
                                    </a>
                               
                                    <div class="dropdown-menu-footer text-center padding-10 bg-grey-100 font-size-12">
                                        <a href="javascript:void(0)" class="">See All Notifications</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>


                <li class="dropdown">
                    <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" title="Profile">

                        <span class="avatar avatar-online">
                            <img src="images/user-img1.jpg" alt="...">
                            <i></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu ">
                        <li>
                            <a href="profile.php" class=""><i class="icon ion-person"></i>Profile Settings</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <a href="login.php?logout=true"><i class="icon ion-power"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        
</div></nav>    ﻿<div class="site-menubar" style="z-index:1">
    <div class="site-menubar-body scrollable scrollable-inverse is-enabled scrollable-vertical">

        <ul class="site-menu scrollable-container" style="height: 543px; width: 221px;">
         
            <li class="site-menu-item has-sub    scrollable-content" style="width: 216px;">
                <a href="javascript:void(0)">
                    <i class="site-menu-icon icon "><i class="ri-pie-chart-box-line"></i> </i>
                    <span class="site-menu-title"> Dashboard </span>
                    <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                    <li class="site-menu-item">
                        <a class="" href="dashboard.php"> <span class="site-menu-title">Overall
                            </span> </a>
                    </li>
                   



                </ul>
            </li>

            <li class="site-menu-item has-sub    scrollable-content" style="width: 216px;">
                <a href="javascript:void(0)">
                    <i class="site-menu-icon icon "><i class="ri-boxing-line"></i> </i>
                    <span class="site-menu-title"> Utilities   </span>
                    <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                   
                    <li class="site-menu-item">
                        <a class="" href="water.php"> <span class="site-menu-title">Water </span> </a>
                    </li>
                   
                </ul>
            </li>

            <li class="site-menu-item has-sub    scrollable-content" style="width: 216px;">
                <a href="javascript:void(0)">
                    <i class="site-menu-icon icon "><i class="ri-building-line"></i> </i>
                    <span class="site-menu-title"> Manage Building  </span>
                    <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                    <li class="site-menu-item">
                        <a class="" href="manage-building.php"> <span class="site-menu-title">   Building  
                            </span> </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="" href="manage-floor.php"> <span class="site-menu-title">  Floor  </span> </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="" href="manage-offices.php"> <span class="site-menu-title">     Apartment/Office </span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="" href="manage-rooms.php"> <span class="site-menu-title">   Room  </span>
                        </a>
                    </li>
                   
        

                </ul>
            </li>

            <li class="site-menu-item has-sub    scrollable-content" style="width: 216px;">
                <a href="javascript:void(0)">
                    <i class="site-menu-icon icon "><i class="ri-user-2-line"></i> </i>
                    <span class="site-menu-title"> Manage Tenants  </span>
                    <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                    <li class="site-menu-item">
                        <a class="" href="manage-tannet.php"> <span class="site-menu-title">     Tenants 
                            </span> </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="" href="admin-contracts.php"> <span class="site-menu-title">      Contracts   </span> </a>
                    </li>

                </ul>
            </li>

            <li class="site-menu-item has-sub    scrollable-content" style="width: 216px;">
                <a href="javascript:void(0)">
                    <i class="site-menu-icon icon "><i class="ri-numbers-line"></i> </i>
                    <span class="site-menu-title"> Reports  </span>
                    <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                    
                    <li class="site-menu-item">
                        <a class="" href="water-consumption.php"> <span class="site-menu-title">     Water Consumption   </span> </a>
                    </li>
                    
                   

                </ul>
            </li>

            <li class="site-menu-item     scrollable-content" style="width: 216px;">
                <a href="alerts.php">
                    <i class="site-menu-icon icon "> <i class="ri-alert-line"></i></i>
                    <span class="site-menu-title"> Alerts </span>
                </a>
            </li>
         
            <li class="site-menu-item has-sub    scrollable-content" style="width: 216px;">
			
 <li class="site-menu-item has-sub    scrollable-content" style="width: 216px;">
                <a href="javascript:void(0)">
                    <i class="site-menu-icon icon "><i class="ri-user-2-line"></i> </i>
                    <span class="site-menu-title"> User & Admin  </span>
                    <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                    <li class="site-menu-item">
                        <a class="" href="role_access.php"> <span class="site-menu-title">     Role and Access 
                            </span> </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="" href="admin-Customer.php"> <span class="site-menu-title">      Customer   </span> </a>
                    </li>
					<li class="site-menu-item">
                        <a class="" href="admin-Customer2.php"> <span class="site-menu-title">      Customer 2  </span> </a>
                    </li>

                </ul>
            </li>
            
           
            <li class="site-menu-item     scrollable-content" style="width: 216px;">
                <a href="audit-reports.php">
                    <i class="site-menu-icon icon "> <i class="ri-file-text-line"></i></i>
                    <span class="site-menu-title"> Payment Gateway </span>
                </a>
            </li>
   


        </ul>
    <div class="scrollable-bar scrollable-bar-vertical scrollable-bar-hide is-disabled" draggable="false"><div class="scrollable-bar-handle"></div></div></div>
    

</div>   
     
  <div class="page ">

        <div class="breadcrumb-box">
            <ol class="breadcrumb breadcrumb-arrow ">
                 <li><a href="javascript:void(0)"> Documents </a> </li>
           
            </ol>
        </div>




        <div class=" page-content Container-fluid">




            <div class="row card-group-row  ">

                <div class="col-lg-4  card-group-row__col ">
                    <div class="panel panel-default card round shadow  ">
                        <div class="panel-heading margin-bottom-0">
                            <h3 class="panel-title font-weight-600 bg-teal-8001 white1 ">Choose Parameters</h3>
                            <div class="panel-actions">
                                <a></a>
                            </div>
                        </div>
                        <div class="panel-body padding-15">


                            <div class="form-group margin-bottom-10">
                                <a href="" class="btn btn-success btn-block bg-theme btn-round" data-toggle="modal" data-target="#add-maintenace">
								<i class="ri-add-circle-fill"></i> New Document</a>
                            </div>

                            <div class="modal fade" id="add-maintenace" role="dialog" style="display: none;">
                                <div class="modal-dialog modal-lg1">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">×</button>
                                            <h4 class="modal-title"> Documents </h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <div class="form-group margin-bottom-10">
                                                        <label>Choose  Building</label>
                                                        <div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle bs-placeholder btn-select" data-toggle="dropdown" role="button" title="Select"><span class="filter-option pull-left">Select</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox"><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Building1</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Building2</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="form-control selectpicker" title="Select" data-size="5" data-style="btn-select" tabindex="-98"><option class="bs-title-option" value="">Select</option>
                                                            <option>Building1</option>
                                                            <option>Building2</option>                                                          
                                                        </select></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group margin-bottom-10">
                                                        <label>Choose Floor </label>
                                                        <div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle bs-placeholder btn-select" data-toggle="dropdown" role="button" title="Select"><span class="filter-option pull-left">Select</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox"><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Floor1</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Floor2</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="form-control selectpicker" title="Select" data-size="5" data-style="btn-select" tabindex="-98"><option class="bs-title-option" value="">Select</option>
                                                            <option>Floor1</option>
                                                            <option>Floor2</option>                                                          
                                                        </select></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group margin-bottom-10">
                                                        <label>Choose Appartment/Office</label>
                                                        <div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle bs-placeholder btn-select" data-toggle="dropdown" role="button" title="Select" aria-expanded="false"><span class="filter-option pull-left">Select</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Appartment/Office1</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Appartment/Office2</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="form-control selectpicker" title="Select" data-size="5" data-style="btn-select" tabindex="-98"><option class="bs-title-option" value="">Select</option>
                                                            <option>Appartment/Office1</option>
                                                            <option>Appartment/Office2</option>                                                          
                                                        </select></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group margin-bottom-10">
                                                        <label>Choose Document Type </label>
                                                        <div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle bs-placeholder btn-select" data-toggle="dropdown" role="button" title="Select"><span class="filter-option pull-left">Select</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox"><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">-</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">-</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="form-control selectpicker" title="Select" data-size="5" data-style="btn-select" tabindex="-98"><option class="bs-title-option" value="">Select</option>
                                                            <option>-</option>
                                                            <option>-</option>                                                          
                                                        </select></div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group margin-bottom-10">
                                                        <label for="exampleFile" class="">Upload Files</label>
                                                        <input name="file" id="exampleFile" type="file" class="form-control-file  ">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group margin-bottom-0">
                                                        <label>Uploaded Documents  </label>
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <div class=" bg-grey-100 padding-10 text-center ">
                                                                    <img src="images/icon-xls.png" height="50">
                                                                    <div class="font-size-10 margin-bottom-5">Document name ad...</div>
                                                                    <a href="" class="btn-link">Remove</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class=" bg-grey-100 padding-10 text-center ">
                                                                    <img src="images/icon-xls.png" height="50">
                                                                    <div class="font-size-10 margin-bottom-5">Document name ad...</div>
                                                                    <a href="" class="btn-link">Remove</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class=" bg-grey-100 padding-10 text-center ">
                                                                    <img src="images/icon-xls.png" height="50">
                                                                    <div class="font-size-10 margin-bottom-5">Document name ad...</div>
                                                                    <a href="" class="btn-link">Remove</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class=" bg-grey-100 padding-10 text-center ">
                                                                    <img src="images/icon-xls.png" height="50">
                                                                    <div class="font-size-10 margin-bottom-5">Document name ad...</div>
                                                                    <a href="" class="btn-link">Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>





                                            </div>


                                            <hr>
                                                        <div class="form-group margin-bottom-10 text-center">
                                                            <a href="" class="btn btn-success btn-round "> <i class="ri-check-fill"></i> Save</a>
                                                            <a href="" class="btn btn-default btn-round "> <i class="ri-arrow-go-back-line"></i> Back</a>
                                                        </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="form-group margin-bottom-10">
                                <fieldset class="form-fieldset">
                                    <legend>Filter</legend>
                                    <div class="form-group margin-bottom-10">
                                        <div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle bs-placeholder btn-select" data-toggle="dropdown" role="button" title="Select Building"><span class="filter-option pull-left">Select Building</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox"><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Building1</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Building2</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="form-control selectpicker" title="Select Building" data-size="5" data-style="btn-select" tabindex="-98"><option class="bs-title-option" value="">Select Building</option>
                                            <option>Building1</option>
                                            <option>Building2</option> 
                                                                    
                                        </select></div>
                                    </div>
                                    <div class="form-group margin-bottom-10">
                                    <div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle bs-placeholder btn-select" data-toggle="dropdown" role="button" title="Select Floor"><span class="filter-option pull-left">Select Floor</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox"><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Floor1</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Floor2</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="form-control selectpicker" title="Select Floor" data-size="5" data-style="btn-select" tabindex="-98"><option class="bs-title-option" value="">Select Floor</option>
                                                            <option>Floor1</option>
                                                            <option>Floor2</option>                                                          
                                                        </select></div>
                                    </div>
                                    <div class="form-group margin-bottom-10">
                                    <div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle bs-placeholder btn-select" data-toggle="dropdown" role="button" title="Select Appartment/Office"><span class="filter-option pull-left">Select Appartment/Office</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox"><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Appartment/Office1</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Appartment/Office2</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="form-control selectpicker" title="Select Appartment/Office" data-size="5" data-style="btn-select" tabindex="-98"><option class="bs-title-option" value="">Select Appartment/Office</option>
                                                            <option>Appartment/Office1</option>
                                                            <option>Appartment/Office2</option>                                                          
                                                        </select></div>
                                    </div>
                                </fieldset>
                            </div>


                            <div class="form-group margin-bottom-10">
                                <a href="" class="btn btn-success btn-block bg-theme btn-round">List Documents</a>
                            </div>

                            <div class="form-group margin-bottom-0" style="margin-top:20px;">
                                <label class="font-size-14 font-weight-600 ">Export:</label>
                                <div class="btn-group btn-group-justified">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-outline btn-default"> <img src="images/icon-xls.png" height="50">
                                            <div class="font-size-12">Dowonload XLS</div>
                                        </button>
                                    </div>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-outline btn-default"> <img src="images/icon-pdf.png" height="50">
                                            <div class="font-size-12">Dowonload PDF</div>
                                        </button>
                                    </div>

                                </div>
                            </div>
<!-- 
                            <hr />
                            <div class="form-group margin-bottom-0">
                                <label class="font-size-14 font-weight-600 ">Export:</label>
                                <div class="btn-group btn-group-justified">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-outline btn-default"> <img
                                                src="images/icon-xls.png" height="50" />
                                            <div class="font-size-12">Dowonload XLS</div>
                                        </button>
                                    </div>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-outline btn-default"> <img
                                                src="images/icon-pdf.png" height="50" />
                                            <div class="font-size-12">Dowonload PDF</div>
                                        </button>
                                    </div>

                                </div>
                            </div> -->









                        </div>
                    </div>
                </div>

                <div class="col-lg-8  card-group-row__col ">
                    <div class="width-full">



                        <div class="panel panel-default card round shadow  ">
                            <div class="panel-heading margin-bottom-0">
                                <h3 class="panel-title font-weight-600 bg-theme1 white1 "> List
                                    <a data-toggle="popover" class="  font-weight-200 margin-left-10 grey-400" data-original-title="" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="help1">
                                        <i class="ri-question-line"></i>
                                    </a>
                                </h3>
                                <div id="popover-content-help1" class="hide">
                                    Some help information goes here
                                </div>



                                <div class="panel-actions">
                                    <a></a>
                                </div>
                            </div>
                            <div class="panel-body padding-15">
                            

                                <div class="table-responsive   vscroll" style="height: auto;">
                                    <table class="table nowrap margin-bottom-0 table-bordered  table-striped theme-table1  bg-white  table-condensed  text-wrap" id="ppp">
                                        <thead>
                                            <tr>
                                                <th> Id </th>
                                                <th> Building </th>
                                                
                                                <th> Uploaded Documents</th>
                                                <th> Uploaded Date </th>
                                                <th> Uploaded By </th>
                                                <th> Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> 1533 </td>
                                                <td>Name1</td>
                                               
                                                <td> <img src="images/icon-pdf.png" height="30">
                                                    <img src="images/icon-xls.png" height="30">
                                                    <img src="images/icon-pdf.png" height="30"></td>
                                                <td> 11/01/2021 </td>
                                                <td> James Potter </td>
                                                <td>  <button type="button" class="btn btn-icon  btn-info btn-xs " data-toggle="modal" data-target="#add-maintenace"> <i class="ri-pencil-fill"></i> </button>
                                                    <button type="button" class="btn btn-icon  btn-danger btn-xs "> <i class="ri-delete-bin-6-line"></i> </button> </td>
                                            </tr>
                                            <tr>
                                                <td> 1533 </td>
                                                <td>Name1</td>
                                               
                                                <td> <img src="images/icon-pdf.png" height="30">
                                                    <img src="images/icon-xls.png" height="30">
                                                    <img src="images/icon-pdf.png" height="30"></td>
                                                <td> 11/01/2021 </td>
                                                <td> James Potter </td>
                                                <td>  <button type="button" class="btn btn-icon  btn-info btn-xs " data-toggle="modal" data-target="#add-maintenace"> <i class="ri-pencil-fill"></i> </button>
                                                    <button type="button" class="btn btn-icon  btn-danger btn-xs "> <i class="ri-delete-bin-6-line"></i> </button> </td>
                                            </tr>
                                            <tr>
                                                <td> 1533 </td>
                                                <td>Name1</td>
                                               
                                                <td> <img src="images/icon-pdf.png" height="30">
                                                    <img src="images/icon-xls.png" height="30">
                                                    <img src="images/icon-pdf.png" height="30"></td>
                                                <td> 11/01/2021 </td>
                                                <td> James Potter </td>
                                                <td>  <button type="button" class="btn btn-icon  btn-info btn-xs " data-toggle="modal" data-target="#add-maintenace"> <i class="ri-pencil-fill"></i> </button>
                                                    <button type="button" class="btn btn-icon  btn-danger btn-xs "> <i class="ri-delete-bin-6-line"></i> </button> </td>
                                            </tr>
                                            <tr>
                                                <td> 1533 </td>
                                                <td>Name1</td>
                                               
                                                <td> <img src="images/icon-pdf.png" height="30">
                                                    <img src="images/icon-xls.png" height="30">
                                                    <img src="images/icon-pdf.png" height="30"></td>
                                                <td> 11/01/2021 </td>
                                                <td> James Potter </td>
                                                <td>  <button type="button" class="btn btn-icon  btn-info btn-xs " data-toggle="modal" data-target="#add-maintenace"> <i class="ri-pencil-fill"></i> </button>
                                                    <button type="button" class="btn btn-icon  btn-danger btn-xs "> <i class="ri-delete-bin-6-line"></i> </button> </td>
                                            </tr>
                                            <tr>
                                                <td> 1533 </td>
                                                <td>Name1</td>
                                               
                                                <td> <img src="images/icon-pdf.png" height="30">
                                                    <img src="images/icon-xls.png" height="30">
                                                    <img src="images/icon-pdf.png" height="30"></td>
                                                <td> 11/01/2021 </td>
                                                <td> James Potter </td>
                                                <td>  <button type="button" class="btn btn-icon  btn-info btn-xs " data-toggle="modal" data-target="#add-maintenace"> <i class="ri-pencil-fill"></i> </button>
                                                    <button type="button" class="btn btn-icon  btn-danger btn-xs "> <i class="ri-delete-bin-6-line"></i> </button> </td>
                                            </tr>
                                            <tr>
                                                <td> 1533 </td>
                                                <td>Name1</td>
                                               
                                                <td> <img src="images/icon-pdf.png" height="30">
                                                    <img src="images/icon-xls.png" height="30">
                                                    <img src="images/icon-pdf.png" height="30"></td>
                                                <td> 11/01/2021 </td>
                                                <td> James Potter </td>
                                                <td>  <button type="button" class="btn btn-icon  btn-info btn-xs " data-toggle="modal" data-target="#add-maintenace"> <i class="ri-pencil-fill"></i> </button>
                                                    <button type="button" class="btn btn-icon  btn-danger btn-xs "> <i class="ri-delete-bin-6-line"></i> </button> </td>
                                            </tr>
                                            <tr>
                                                <td> 1533 </td>
                                                <td>Name1</td>
                                               
                                                <td> <img src="images/icon-pdf.png" height="30">
                                                    <img src="images/icon-xls.png" height="30">
                                                    <img src="images/icon-pdf.png" height="30"></td>
                                                <td> 11/01/2021 </td>
                                                <td> James Potter </td>
                                                <td>  <button type="button" class="btn btn-icon  btn-info btn-xs " data-toggle="modal" data-target="#add-maintenace"> <i class="ri-pencil-fill"></i> </button>
                                                    <button type="button" class="btn btn-icon  btn-danger btn-xs "> <i class="ri-delete-bin-6-line"></i> </button> </td>
                                            </tr>
                                            <tr>
                                                <td> 1533 </td>
                                                <td>Name1</td>
                                               
                                                <td> <img src="images/icon-pdf.png" height="30">
                                                    <img src="images/icon-xls.png" height="30">
                                                    <img src="images/icon-pdf.png" height="30"></td>
                                                <td> 11/01/2021 </td>
                                                <td> James Potter </td>
                                                <td>  <button type="button" class="btn btn-icon  btn-info btn-xs " data-toggle="modal" data-target="#add-maintenace"> <i class="ri-pencil-fill"></i> </button>
                                                    <button type="button" class="btn btn-icon  btn-danger btn-xs "> <i class="ri-delete-bin-6-line"></i> </button> </td>
                                            </tr>
                                            <tr>
                                                <td> 1533 </td>
                                                <td>Name1</td>
                                               
                                                <td> <img src="images/icon-pdf.png" height="30">
                                                    <img src="images/icon-xls.png" height="30">
                                                    <img src="images/icon-pdf.png" height="30"></td>
                                                <td> 11/01/2021 </td>
                                                <td> James Potter </td>
                                                <td>  <button type="button" class="btn btn-icon  btn-info btn-xs " data-toggle="modal" data-target="#add-maintenace"> <i class="ri-pencil-fill"></i> </button>
                                                    <button type="button" class="btn btn-icon  btn-danger btn-xs "> <i class="ri-delete-bin-6-line"></i> </button> </td>
                                            </tr>
                                            <tr>
                                                <td> 1533 </td>
                                                <td>Name1</td>
                                               
                                                <td> <img src="images/icon-pdf.png" height="30">
                                                    <img src="images/icon-xls.png" height="30">
                                                    <img src="images/icon-pdf.png" height="30"></td>
                                                <td> 11/01/2021 </td>
                                                <td> James Potter </td>
                                                <td>  <button type="button" class="btn btn-icon  btn-info btn-xs " data-toggle="modal" data-target="#add-maintenace"> <i class="ri-pencil-fill"></i> </button>
                                                    <button type="button" class="btn btn-icon  btn-danger btn-xs "> <i class="ri-delete-bin-6-line"></i> </button> </td>
                                            </tr>
                                            <tr>
                                                <td> 1533 </td>
                                                <td>Name1</td>
                                               
                                                <td> <img src="images/icon-pdf.png" height="30">
                                                    <img src="images/icon-xls.png" height="30">
                                                    <img src="images/icon-pdf.png" height="30"></td>
                                                <td> 11/01/2021 </td>
                                                <td> James Potter </td>
                                                <td>  <button type="button" class="btn btn-icon  btn-info btn-xs " data-toggle="modal" data-target="#add-maintenace"> <i class="ri-pencil-fill"></i> </button>
                                                    <button type="button" class="btn btn-icon  btn-danger btn-xs "> <i class="ri-delete-bin-6-line"></i> </button> </td>
                                            </tr>
                                            <tr>
                                                <td> 1533 </td>
                                                <td>Name1</td>
                                               
                                                <td> <img src="images/icon-pdf.png" height="30">
                                                    <img src="images/icon-xls.png" height="30">
                                                    <img src="images/icon-pdf.png" height="30"></td>
                                                <td> 11/01/2021 </td>
                                                <td> James Potter </td>
                                                <td>  <button type="button" class="btn btn-icon  btn-info btn-xs " data-toggle="modal" data-target="#add-maintenace"> <i class="ri-pencil-fill"></i> </button>
                                                    <button type="button" class="btn btn-icon  btn-danger btn-xs "> <i class="ri-delete-bin-6-line"></i> </button> </td>
                                            </tr>
                                            <tr>
                                                <td> 1533 </td>
                                                <td>Name1</td>
                                               
                                                <td> <img src="images/icon-pdf.png" height="30">
                                                    <img src="images/icon-xls.png" height="30">
                                                    <img src="images/icon-pdf.png" height="30"></td>
                                                <td> 11/01/2021 </td>
                                                <td> James Potter </td>
                                                <td>  <button type="button" class="btn btn-icon  btn-info btn-xs " data-toggle="modal" data-target="#add-maintenace"> <i class="ri-pencil-fill"></i> </button>
                                                    <button type="button" class="btn btn-icon  btn-danger btn-xs "> <i class="ri-delete-bin-6-line"></i> </button> </td>
                                            </tr>
                                            



                                        </tbody>
                                    </table>
                                    
<!-- <script>
    $(document).ready(function () {
        var table = $('#ppp').DataTable({
            'lengthChange': false,
            "searching": false,
            'responsive': true,
            'pageLength': 15,
            // scrollY: 250,
            paging: true,
            dom: 'Bfrtip',
            buttons: [{
                text: 'PDF',
                extend: 'pdf',
                className: 'btn btn-outline btn-default btn-sm1',
            }, {
                text: 'XLS',
                extend: 'excel',
                className: 'btn btn-outline btn-default btn-sm1',
            }],
            "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false,
            }],

        });

    });
</script> -->
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





<div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="https://www.gstatic.com/images/branding/product/1x/translate_24dp.png" width="20" height="20" alt="Google Translate"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Original text</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Contribute a better translation</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div><svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg><div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div><iframe frameborder="0" class="goog-te-menu-frame skiptranslate" title="Language Translate Widget" style="visibility: visible; box-sizing: content-box; width: 1046px; height: 263px; display: none;"></iframe></body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>