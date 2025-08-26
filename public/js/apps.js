var getIncoTermsPieChart = function (buyerRisk, sellerRisk) {

	am4core.ready(function() {
		let buyerRiskObj = {};
		let sellerRiskObj = {};
		if(buyerRisk != 0) {
			buyerRiskObj = {
				owner: "Buyer Risk",
				risk: buyerRisk
			}
		}
		if(sellerRisk != 0) {
			sellerRiskObj = {
				owner: "Seller Risk",
				risk: sellerRisk
			}
		}

		// Themes begin
		am4core.useTheme(am4themes_animated);
		if(chart) {
			chart.destroy();
		}
		var chart = am4core.create("chartdiv", am4charts.PieChart3D);
		// chart.hiddenState.properties.opacity = 50; // this creates initial fade-in
		
		chart.legend = new am4charts.Legend();
		
		chart.data = [
			buyerRiskObj,
			sellerRiskObj
		];
		
		chart.innerRadius = 100;
		// chart.hiddenState.properties.innerRadius = am4core.percent(0);
		// chart.hiddenState.properties.radius = am4core.percent(100);

		var pieSeries = chart.series.push(new am4charts.PieSeries3D());
		pieSeries.dataFields.value = "risk";
		pieSeries.dataFields.category = "owner";
		pieSeries.colors.list = ["#1F407D", "#f89d13"].map(function(color) {
			return new am4core.color(color);
		});
		// Disable ticks and labels
		pieSeries.alignLabels = false;
		pieSeries.ticks.template.disabled = true;
		pieSeries.hiddenState.properties.endAngle = -90;
	});

}