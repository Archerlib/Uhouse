//基本页面的实现
var map = new AMap.Map('container', {
    resizeEnable: true,
    zoom: 10,
    city: 310000
})
//加入工具条和比例尺
AMap.plugin(['AMap.ToolBar', 'AMap.Scale'],
    function() {
        map.addControl(new AMap.ToolBar());
        map.addControl(new AMap.Scale());
})
//定点搜索功能的实现
function geocoder() {
    var geocoder = new AMap.Geocoder({
        radius: 1000
    });
    var str = document.getElementById('search-text').value;
    geocoder.getLocation(str, function(status, result) {
        if (status === 'complete' && result.info === 'OK') {
            geocoder_CallBack(result);
        }
    });
}
function addMarker(i, d) {
    var marker = new AMap.Marker({
        map: map,
        position: [d.location.getLng(), d.location.getLat()]
    });
    var infoWindow = new AMap.InfoWindow({
        content: d.formattedAddress,
        offset: { x: 0, y: -30 }
    });
    marker.on("mouseover", function(e) {
        infoWindow.open(map, marker.getPosition());
    });
}
function geocoder_CallBack(data) {
    var geocode = data.geocodes;
    for (var i = 0; i < geocode.length; i++) {
        addMarker(i, geocode[i]);
    }
    map.setFitView();
}