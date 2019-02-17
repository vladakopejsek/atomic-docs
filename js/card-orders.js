/* js/card-orders.js */
import { Card } from "./Card";
import { Table } from "./Table";

export class CardOrders extends Card {
	public _table: Table;

	constructor(
		ordersCard: Element,
		ordersCardSelectors: Array<string>,
		table: Table
	) {
		super(ordersCard, ordersCardSelectors);

		this._table = table;

		this.onRefresh();
	}

	public onRefresh = () => {
		this._table.refreshData("admin/api/orders", (data: any) => {
			return data.data.map((x: any) => {
				return {
					number: x.number,
					name: x.name,
					date: x.date,
					price: x.price
				}
			});
		});
	};
}
