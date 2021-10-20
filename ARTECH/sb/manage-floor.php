
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
                <li><a href="javascript:void(0)"> Manage Floor </a> </li>

            </ol>
        </div>

      
<div class="row card-group-row  ">

                <div class="col-lg-4  card-group-row__col ">
                    <div class="panel panel-default card round shadow  ">
                        <!-- <div class="panel-heading margin-bottom-0">
                            <h3 class="panel-title font-weight-600 bg-teal-8001 white1 ">Choose Parameters</h3>
                            <div class="panel-actions">
                                <a></a>
                            </div>
                        </div> -->
                        <div class="panel-body padding-15">
                            <div class="form-group margin-bottom-10">
                                <a href="" class="btn btn-success btn-block bg-blue-800 bg-theme btn-round" data-toggle="modal" data-target="#add-asset"> <i class="ri-add-circle-fill"></i> New Floor</a>
                            </div>
                            <div class="modal fade" id="add-asset" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">×</button>
                                            <h4 class="modal-title">Add New Floor</h4>
                                        </div>
                                        <div class="modal-body">

                                            <div class="nav-tabs-horizontal">
                                                <!-- <ul class="nav nav-tabs  nav-tabs-line1 font-weight-600" data-plugin="nav-tabs" role="tablist">
                                                                <li class="active" role="presentation"><a data-toggle="tab" href="#new" role="tab">New
                                                                    </a></li>
                                                                <li role="presentation"><a data-toggle="tab" href="#bulk" role="tab">Bulk Upload</a></li>
                                                            </ul> -->
                                                <div class="tab-content ">
                                                    <div class="tab-pane active " id="new" role="tabpanel">

                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                            <div class="col-lg-6">
                                                    <div class="form-group margin-bottom-10">
                                                        <label>Building</label>
                                                        <div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle bs-placeholder btn-select" data-toggle="dropdown" role="button" title="Select Building">
														<span class="filter-option pull-left">Select Building</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button>
														<div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox">
														<li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false">
														<span class="text">JS HQ</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2">
														<a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">JS HQ</span>
														<span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3">
														<a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Building 3</span>
														<span class="glyphicon glyphicon-ok check-mark"></span></a></li>
														<li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false">
														<span class="text">Building 4</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div>
														
														</div>
                                                    </div>
                                                </div>
                                                                
                                                                <div class="col-lg-6">
                                                                    <div class="form-group margin-bottom-10">
                                                                        <label> Floors</label>
                                                                        <input type="text" class="form-control" value="" placeholder="Enter Floor">
                                                                    </div>
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




                            <!-- <div class="form-group margin-bottom-10">
                                <fieldset class="form-fieldset">
                                    <legend>Filter</legend>
                                    <div class="form-group margin-bottom-10">
                                        <select class="form-control selectpicker" title="Select Type" data-size="5" data-style="btn-select">
                                            <option>Type1</option>
                                            <option>Type2</option>                                         
                                        </select>
                                    </div>
                                </fieldset>
                            </div> -->
                            <div class="form-group margin-bottom-10">
                                <fieldset class="form-fieldset">
                                    <legend>Search</legend>
                                    <div class="form-group margin-bottom-10">
                                        <div class="btn-group bootstrap-select form-control">
										<button type="button" class="btn dropdown-toggle bs-placeholder btn-select" data-toggle="dropdown" role="button" title="Choose Building">
										<span class="filter-option pull-left">Choose Building</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button>
										<div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox"><li data-original-index="1">
										<a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">JS HQ</span>
										<span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2">
										<a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">JS HQ</span>
										<span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div>
							
										</div>
                                    </div>
                                    <div class="form-group margin-bottom-10">
                                        <div class="btn-group bootstrap-select form-control">
										<button type="button" class="btn dropdown-toggle bs-placeholder btn-select" data-toggle="dropdown" role="button" title="Choose Floor">
										<span class="filter-option pull-left">Choose Floor</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button>
										<div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox"><li data-original-index="1">
										<a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Floor 1</span>
										<span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2">
										<a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false">
										
										<span class="text">Floor 2</span>
										<span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div>
										</div>
                                    </div>
                                    <div class="form-group margin-bottom-10">
                                        <div class="input-search">
                                            <i class="input-search-icon ri-search-line"></i>
                                            <input type="text" class="form-control" name="" placeholder="Search...">
                                            <button type="button" class="input-search-close icon " data-toggle="popover" data-original-title="" data-trigger="hover" data-container="body" data-placement="top" data-html="true" id="help2"><i class="ri-information-line"></i></button>
                                            <div id="popover-content-help2" class="hide">
                                                Some help information goes here
                                            </div>

                                        </div>
                                    </div>


                                    <div class="form-group margin-bottom-0 text-center">
                                        <a href="" class="btn btn-success btn-round bg-blue-800 btn-block1"> <i class=" ri-search-line "></i> Search</a>
                                        <a href=" " class="btn btn-default btn-round "> <i class="ri-refresh-line "></i>
                                            Clear
                                        </a>
                                    </div>


                                </fieldset>
                            </div>



                            <hr>
                            <div class="form-group margin-bottom-0">
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









                        </div>
                    </div>
                </div>

                <div class="col-lg-8  card-group-row__col ">
                    <div class="width-full">



                        <div class="panel panel-default card round shadow  ">
                            <div class="panel-heading margin-bottom-0">
                                <h3 class="panel-title font-weight-600 bg-theme1 white1 "> List
                                    <a data-toggle="popover" class="  font-weight-200 margin-left-10 grey-400" data-original-title="" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="help1">
                                        <i class="ri-information-line"></i>
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
                                <div class="input-search" style="max-width:30%;margin-bottom:10px">
                                    <i class="input-search-icon ri-search-line"></i>
                                    <input type="text" class="form-control" name="" placeholder="Search...">
                                    <button type="button" class="input-search-close icon " data-toggle="popover" data-original-title="" data-trigger="hover" data-container="body" data-placement="top" data-html="true" id="help2"><i class="ri-information-line"></i></button>
                                    <div id="popover-content-help2" class="hide">
                                        Some help information goes here
                                    </div>
                                </div>


                                <div class="table-responsive   vscroll" style="height: auto;">
                                    <div id="ppp_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer" style="width: 100%;"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 975px; padding-right: 0px;"><table class="table nowrap margin-bottom-0 table-bordered  table-striped theme-table1  bg-white  table-condensed  text-wrap dataTable no-footer" role="grid" style="margin-left: 0px; width: 975px;"><thead>
                                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="ppp" rowspan="1" colspan="1" style="width: 43px;" aria-sort="ascending" aria-label="  Id : activate to sort column descending">  Id </th><th class="sorting" tabindex="0" aria-controls="ppp" rowspan="1" colspan="1" style="width: 350px;" aria-label=" Building Name: activate to sort column ascending"> Building Name</th><th class="sorting" tabindex="0" aria-controls="ppp" rowspan="1" colspan="1" style="width: 107px;" aria-label=" Floor: activate to sort column ascending"> Floor</th><th class="sorting" tabindex="0" aria-controls="ppp" rowspan="1" colspan="1" style="width: 325px;" aria-label=" Address: activate to sort column ascending"> Address</th><th class="sorting" tabindex="0" aria-controls="ppp" rowspan="1" colspan="1" style="width: 146px;" aria-label=" Action: activate to sort column ascending"> Action</th></tr>
                                          
                                            
                                        </thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; max-height: 250px; height: 250px; width: 100%;"><table class="table nowrap margin-bottom-0 table-bordered  table-striped theme-table1  bg-white  table-condensed  text-wrap dataTable no-footer dtr-inline" id="ppp" role="grid" aria-describedby="ppp_info" style="width: 100%;"><thead>
                                            <tr role="row" style="height: 0px;"><th class="sorting_asc" aria-controls="ppp" rowspan="1" colspan="1" style="width: 43px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-sort="ascending" aria-label="  Id : activate to sort column descending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">  Id </div></th><th class="sorting" aria-controls="ppp" rowspan="1" colspan="1" style="width: 350px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label=" Building Name: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"> Building Name</div></th><th class="sorting" aria-controls="ppp" rowspan="1" colspan="1" style="width: 107px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label=" Floor: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"> Floor</div></th><th class="sorting" aria-controls="ppp" rowspan="1" colspan="1" style="width: 325px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label=" Address: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"> Address</div></th><th class="sorting" aria-controls="ppp" rowspan="1" colspan="1" style="width: 146px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label=" Action: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"> Action</div></th></tr>
                                          
                                            
                                        </thead>
                                        
                                        <tbody>
                                         
                                            
                                            
                                            
                                            
                                            
                                            
                                           
                                           

                                        <tr role="row" class="odd">
                                                <td class="sorting_1 dtr-control"> 1 </td>
                                                <td> <div class="media" style="max-width: 130px;">
                                                        <div class="media-left padding-right-10">
                                                            <img src="images/building.jpg" class="img-bordered" style="height:30px">
                                                        </div>
                                                        <div class="media-body">
                                                            <a href="building-details.php" class="font-weight-600">JS HQ</a>
                                                            
                                                        </div>
                                                    </div></td>
                                                <td>1</td>
                                                <td>Jabel Sifah Oman</td>
                                               
                                                <td>


                                                   <a type="button" href="#add-asset" class="btn btn-icon  btn-info btn-xs " data-toggle="modal" data-target="#add-asset"> <i class="ri-pencil-fill"></i> </a>
                                                        <a type="button" href="#delete-popup" class="btn btn-icon  btn-danger btn-xs " data-toggle="modal" data-target="#delete-popup"> <i class="ri-delete-bin-6-line"></i> </a>
                                                     
                                                </td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1 dtr-control"> 2 </td>
                                                <td> <div class="media" style="max-width: 130px;">
                                                        <div class="media-left padding-right-10">
                                                            <img src="images/building.jpg" class="img-bordered" style="height:30px">
                                                        </div>
                                                        <div class="media-body">
                                                            <a href="building-details.php" class="font-weight-600">JS HQ</a>
                                                            
                                                        </div>
                                                    </div></td>
                                                <td>1</td>
                                                <td>Jabel Sifah Oman</td>
                                               
                                                <td>


                                                   <a type="button" href="#add-asset" class="btn btn-icon  btn-info btn-xs " data-toggle="modal" data-target="#add-asset"> <i class="ri-pencil-fill"></i> </a>
                                                        <a type="button" href="#delete-popup" class="btn btn-icon  btn-danger btn-xs " data-toggle="modal" data-target="#delete-popup"> <i class="ri-delete-bin-6-line"></i> </a>
                                                     
                                                </td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1 dtr-control"> 3 </td>
                                                <td> <div class="media" style="max-width: 130px;">
                                                        <div class="media-left padding-right-10">
                                                            <img src="images/building.jpg" class="img-bordered" style="height:30px">
                                                        </div>
                                                        <div class="media-body">
                                                            <a href="building-details.php" class="font-weight-600">JS HQ</a>
                                                            
                                                        </div>
                                                    </div></td>
                                                <td>1</td>
                                                <td>Jabel Sifah Oman</td>
                                               
                                                <td>


                                                   <a type="button" href="#add-asset" class="btn btn-icon  btn-info btn-xs " data-toggle="modal" data-target="#add-asset"> <i class="ri-pencil-fill"></i> </a>
                                                        <a type="button" href="#delete-popup" class="btn btn-icon  btn-danger btn-xs " data-toggle="modal" data-target="#delete-popup"> <i class="ri-delete-bin-6-line"></i> </a>
                                                     
                                                </td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1 dtr-control"> 3 </td>
                                                <td> <div class="media" style="max-width: 130px;">
                                                        <div class="media-left padding-right-10">
                                                            <img src="images/building.jpg" class="img-bordered" style="height:30px">
                                                        </div>
                                                        <div class="media-body">
                                                            <a href="building-details.php" class="font-weight-600">JS HQ</a>
                                                            
                                                        </div>
                                                    </div></td>
                                                <td>1</td>
                                                <td>Jabel Sifah Oman</td>
                                               
                                                <td>


                                                   <a type="button" href="#add-asset" class="btn btn-icon  btn-info btn-xs " data-toggle="modal" data-target="#add-asset"> <i class="ri-pencil-fill"></i> </a>
                                                        <a type="button" href="#delete-popup" class="btn btn-icon  btn-danger btn-xs " data-toggle="modal" data-target="#delete-popup"> <i class="ri-delete-bin-6-line"></i> </a>
                                                     
                                                </td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1 dtr-control"> 4 </td>
                                                <td> <div class="media" style="max-width: 130px;">
                                                        <div class="media-left padding-right-10">
                                                            <img src="images/building.jpg" class="img-bordered" style="height:30px">
                                                        </div>
                                                        <div class="media-body">
                                                            <a href="building-details.php" class="font-weight-600">JS HQ</a>
                                                            
                                                        </div>
                                                    </div></td>
                                                <td>1</td>
                                                <td>Jabel Sifah Oman</td>
                                               
                                                <td>


                                                   <a type="button" href="#add-asset" class="btn btn-icon  btn-info btn-xs " data-toggle="modal" data-target="#add-asset"> <i class="ri-pencil-fill"></i> </a>
                                                        <a type="button" href="#delete-popup" class="btn btn-icon  btn-danger btn-xs " data-toggle="modal" data-target="#delete-popup"> <i class="ri-delete-bin-6-line"></i> </a>
                                                     
                                                </td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1 dtr-control"> 6 </td>
                                                <td> <div class="media" style="max-width: 130px;">
                                                        <div class="media-left padding-right-10">
                                                            <img src="images/building.jpg" class="img-bordered" style="height:30px">
                                                        </div>
                                                        <div class="media-body">
                                                            <a href="building-details.php" class="font-weight-600">JS HQ</a>
                                                            
                                                        </div>
                                                    </div></td>
                                                <td>1</td>
                                                <td>Jabel Sifah Oman</td>
                                               
                                                <td>


                                                   <a type="button" href="#add-asset" class="btn btn-icon  btn-info btn-xs " data-toggle="modal" data-target="#add-asset"> <i class="ri-pencil-fill"></i> </a>
                                                        <a type="button" href="#delete-popup" class="btn btn-icon  btn-danger btn-xs " data-toggle="modal" data-target="#delete-popup"> <i class="ri-delete-bin-6-line"></i> </a>
                                                     
                                                </td>
                                            </tr></tbody>
                                    </table></div></div></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="ppp_info" role="status" aria-live="polite">Showing 1 to 6 of 6 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="ppp_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="ppp_previous"><a href="#" aria-controls="ppp" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="ppp" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="ppp_next"><a href="#" aria-controls="ppp" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>

                                    
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