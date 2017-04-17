<section class="section section_padding findus">
<div class=" container">
	<div class="row">
		<div class="col-md-12">
		    <h3 class="find-title">как нас найти</h3>
		</div>
	</div>
</div>
<div class="find-map">
    <div id="YMapsID" style="width:100%;height:100%">
        <script type="text/javascript">
                        // Создает обработчик события window.onLoad
                        YMaps.jQuery(function () {
                            // Создает экземпляр карты и привязывает его к созданному контейнеру
                            var map = new YMaps.Map(YMaps.jQuery("#YMapsID")[0]);

                            // Устанавливает начальные параметры отображения карты: центр карты и коэффициент масштабирования
                            map.setCenter(new YMaps.GeoPoint(82.938620, 55.038351), 15);

                                var w = 64;
                                var h = w/2;
                                var s = new YMaps.Style();
                                s.iconStyle = new YMaps.IconStyle();
                                s.iconStyle.href = "img/pint.png";
                                s.iconStyle.size = new YMaps.Point(w, w);
                                s.iconStyle.offset = new YMaps.Point(-h, -w);
                                var placemark = new YMaps.Placemark(map.getCenter(), {style: s});
                                placemark.name = "Центр деревянного строительства";
                                placemark.description = "Мы находимся на ул. Фрунзе 228, оф. 23";
                                map.addOverlay(placemark);
                        })
        </script>
    </div>
</div>
</section>
