/* js/card-chart.js */
import { Card } from "./Card";
import { Chart } from "chart.js";
import * as $ from "jquery";

/**
 * CardChart component which inherits from Card class.
 * Used for creating card component with a custom chart in it.
 */
export class CardChart extends Card {
	private chartCanvas: any = this.componentChildren[
		this.getClassByKeyword("canvas")
	];
	private titleNumber: Element = this.componentChildren[
		this.getClassByKeyword("title-number")
	];
	private tabBarDay: Element = this.componentChildren[
		this.getClassByKeyword("day")
	];
	private tabBarWeek: Element = this.componentChildren[
		this.getClassByKeyword("week")
	];
	private tabBarMonth: Element = this.componentChildren[
		this.getClassByKeyword("month")
	];
	private tabBarYear: Element = this.componentChildren[
		this.getClassByKeyword("year")
	];
	private tabBarLinks = [
		this.tabBarDay,
		this.tabBarWeek,
		this.tabBarMonth,
		this.tabBarYear
	];
	public chart: Chart;

	/**
	 * Constructor method
	 * @param chartCard The root element of card where we want to render a chart
	 * @param chartCardSelectors Array of class selectors that we want to find inside chartCard element and work with them
	 * @param labels Input labels for chart render
	 * @param data Input data for chart render
	 */
	constructor(
		chartCard: Element,
		chartCardSelectors: Array<string>,
		type: string,
		label: string
	) {
		super(chartCard, chartCardSelectors);

		this.chart = this.drawChart(
			<CanvasRenderingContext2D>this.chartCanvas.getContext("2d"),
			type,
			label
		);

		this.registerTabBarLinkClick(this.tabBarDay, "day");
		this.registerTabBarLinkClick(this.tabBarWeek, "week");
		this.registerTabBarLinkClick(this.tabBarMonth, "month");
		this.registerTabBarLinkClick(this.tabBarYear, "year");

		this.loadData("year");
	}

	public loadData(period: string) {
		this.getData(
			// period může být day, week, month, year, nechal jsem ti to na year, protože ten graf vypadá krásně c:
			`admin/api/salary-data?period=${period}`,
			(data: any) => {
				let items = data.data.items;
				this.chart.data.labels = [];
				for (let i = 0; i < items.length; i++) {
					this.chart.data.labels[i] = items[i].label.toString() + ".";
				}
				this.chart.data.datasets[0].data = items.map((x: any) =>
					x.salary.toString()
				);
				this.titleNumber.innerHTML =
					data.data.total_salary.toLocaleString("cs") + " Kč";
				this.chart.update();
			}
		);
	}

	/**
	 * Renders a chart
	 * @param context Canvas rendering context
	 * @param labels Chart labels
	 * @param data Chart data
	 */
	private drawChart(
		context: CanvasRenderingContext2D,
		type: string,
		label: string
	): Chart {
		let cardColor = window
			.getComputedStyle(this.cardHeader)
			.getPropertyValue("background-color");

		let chart = new Chart(context, {
			type,
			data: {
				labels: null,
				datasets: [
					{
						label,
						data: null,
						backgroundColor: cardColor
					}
				]
			},
			options: {
				scales: {
					yAxes: [
						{
							ticks: {
								beginAtZero: true
							}
						}
					]
				},
				elements: {
					line: {
						tension: 0
					},
					point: {
						radius: 2
					}
				},
				responsive: true,
				maintainAspectRatio: false
			}
		});

		return chart;
	}

	private registerTabBarLinkClick(el: Element, period: string) {
		el.addEventListener("click", (e: any) => {
			e.preventDefault();
			$(this.tabBarLinks).removeClass("tab-bar__link--selected");
			$(e.target).addClass("tab-bar__link--selected");
			this.loadData(period);
		});
	}
}
