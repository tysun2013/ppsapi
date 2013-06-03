<input type="button" id="pps_upload" value="上传视频" class="btn">
<script src="http://api.open.pps.tv/js/jquery.min.js"></script>
<script src="http://api.open.pps.tv/js/chajian/dialog.js" type='text/javascript'></script>
<link href="http://api.open.pps.tv/css/dialog.css" rel="stylesheet" type="text/css"/>
<script>
var jq = jQuery.noConflict();
jq(document).ready(function(){
jq("#pps_upload").click(function(){
window.top.art.dialog({
id : 'pps',
iframe : 'http://api.open.pps.tv/index.php?source=out_url&site_type=ge',
title : '上传到PPS网络电视',
width : '470',
height : '330',
lock : true});
void(0);
});
});
</script>