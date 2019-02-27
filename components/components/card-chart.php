<!-- components/components/card-chart.php -->
<div class="[ card card-chart card--teal ] [ grid-item--colspan7 grid-item--rowspan2 grid-item--col1 grid-item--row1 grid-item ]">
	<header class="card__header">
		<h3 class="[ card__title ] [ card-chart__title ]">Obraty</h3>
		<a href="#" class="[ card__refresh-button ] [ background-image ] [ link link--icon ]">&nbsp;</a>
	</header>
	<div class="[ card__body ] [ card-chart__body ]">
		<ul class="[ tab-bar ] [ card-chart__tab-bar ]">
			<li class="tab-bar__item">
				<a href="#" class="[ tab-bar__link ] [ card-chart__tab-bar-link card-chart__tab-bar-link--day ] [ link ]">1 den</a>
			</li>
			<li class="tab-bar__item">
				<a href="#" class="[ tab-bar__link ] [ card-chart__tab-bar-link card-chart__tab-bar-link--week ] [ link ]">1 týden</a>
			</li>
			<li class="tab-bar__item">
				<a href="#" class="[ tab-bar__link ] [ card-chart__tab-bar-link card-chart__tab-bar-link--month ] [ link ]">1 měsíc</a>
			</li>
			<li class="tab-bar__item">
				<a href="#" class="[ tab-bar__link tab-bar__link--selected ] [ card-chart__tab-bar-link card-chart__tab-bar-link--year ] [ link ]">1 rok</a>
			</li>
		</ul>
		<div class="card-chart__values">
			<p class="[ card__title-number ] [ card-chart__title-number ]">18&nbsp;872&nbsp;573,69 Kč</p>
			<div class="[ card__growth ] [ card-chart__growth ]">
				XXX%
			</div>
		</div>
		<div class="card-chart__chart-wrapper"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
			<canvas class="card__canvas chartjs-render-monitor" id="chart1" width="613" height="272" style="display: block; width: 613px; height: 272px;"></canvas>
		</div>
	</div>
</div>