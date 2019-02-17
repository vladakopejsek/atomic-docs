/* js/card-stats.js */
import { Card } from "./Card";

export class CardStats extends Card {
	private orders: Element = this.componentChildren[
		this.getClassByKeyword("orders")
	];

	private turnover: Element = this.componentChildren[
		this.getClassByKeyword("turnover")
	];

	private visitors: Element = this.componentChildren[
		this.getClassByKeyword("visitors")
	];

	private trend: Element = this.componentChildren[
		this.getClassByKeyword("trend")
	];

	private _urls: Array<string>;

	constructor(card: Element, selectors: Array<string>) {
		super(card, selectors);
	}

	public onRefresh(): void {
		this.getData("admin/api/order-amount", (data: any) => {
			this.orders.innerHTML = data.data.toLocaleString("cs");
		});

		this.getData("admin/api/salary", (data: any) => {
			this.turnover.innerHTML = `${data.data.toLocaleString("cs")} Kč`;
		});

		this.getData("admin/api/customer-amount", (data: any) => {
			this.visitors.innerHTML = data.data.toLocaleString("cs");
		});

		this.getData("admin/demo-number", (data: any) => {
			this.trend.innerHTML = data.data.toLocaleString("cs");
		});
	}
}
