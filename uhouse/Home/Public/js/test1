//通用方法 将搜索地址化为经纬度 进而增加点标记或者进行导航

//次数定义地图
var map = new AMap.Map("container", {
	resizeEnable: true,
	zoomEnable: true,
	zoom: 11
});

//在这里实现地址名转换为经纬度 d为某个地址信息 如"上海财经大学"
function geocoder() {
	var geocoder = new AMap.Geocoder({
		city: "上海市",
		radius: 1000
	});
	geocoder.getLocation(d, function(status, result) {
		if (status === 'complete' && result.info === 'OK') {
			var lng = result.geocodes[0].location.getLng();//经度
			var lat = result.geocodes[0].location.getLat();//纬度
			return result.geocodes[0].location;//返回经纬度
		}
	});
}

//在这里实现点标记的增添 d为经纬度
function addMarker(d) {
	var marker = new AMap.Marker({
		map: map,
		position: [d.getLng(), d.getLat()]
	})
};
for (var i = 0; i < geocode.length; i++) {
	addMarker(geocode[i]);
}

//公交模块 导航
var transOptions = {
	map: map,
	city: "上海市",
	panel: "panel",
	policy: AMap.TransferPolicy.LEAST_TIME
};
var transfer = new AMap.Transfer(transOptions);
transfer.search(origin, destination);//其中origin和destina都是LngLat对象 通过输入实现 此处略

//公交模块 到达圈
var arrivalRange = new AMap.ArrivalRange();
function addPolygon() {
	x = d.getLng();//经度
	y = d.getLat();//纬度
	t = t;//时间 通过输入实现 此处略
	v = v;//交通方式 通过输入实现 此处略
	addMarker(d);
}
//还有若干代码 从略

//步行模块 导航
var walking = new AMap.Walking({
	map: map,
	panel: "panel"
});
walking.search(origin, destination);//其中origin和destina都是LngLat对象 通过输入实现 此处略

//骑行模块 导航
var riding = new AMap.Riding({
	map: map,
	panel: "panel"
});
riding.search(origin, destination);//其中origin和destina都是LngLat对象 通过输入实现 此处略

//驾车模块 导航
var driving = new AMap.Driving({
	map: map,
	panel: "panel"
});
driving.search(origin, destination);//其中origin和destina都是LngLat对象 通过输入实现 此处略
