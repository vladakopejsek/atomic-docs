/* js/table-items.js */
import { BaseComponent } from "./BaseComponent";
import { CatalogItemInterface } from "../interfaces/CatalogItemInterface";
import { OrderInterface } from "../interfaces/OrderInterface";
import * as $ from "jquery";

/**
 * Komponenta Table.
 * Komunikuje s API pomocí AJAX requestů.
 * Na základě přijatých dat poté vykresluje data do tabulky.
 * Může být umístěna samostatně nebo uvnitř jiné komponenty, která může například spravovat různé zdroje dat.
 */
export class Table extends BaseComponent {
	private _list = this.componentChildren[this.getClassByKeyword("list")];

	private _header: Element = this.componentChildren[
		this.getClassByKeyword("header")
	];

	private _cols: Array<string>;

	private _hasControls: boolean;

	private _urlEdit: string;

	private _urlDelete: string;

	constructor(
		table: Element,
		selectors: Array<string>,
		hasControls: boolean,
		cols?: Array<string>,
		urlEdit?: string,
		urlDelete?: string
	) {
		super(table, selectors);

		this._cols = cols;

		this._hasControls = hasControls;

		this._urlEdit = urlEdit;

		this._urlDelete = urlDelete;
	}

	// Načítání a obnovování dat
	public refreshData(url: string, map: Function, parameters?: any) {
		this.getData(
			url,
			(data: any, urlCallback: string) => {
				this.clearTable();
				let items = map(data, urlCallback);

				if (items.length > 0) {
					$(this._list).removeClass("table-items__list--empty");
					let rowsCount: number;

					if (this._hasControls) {
						rowsCount = 15;
					} else {
						rowsCount = 10;
					}

					for (let i = 0; i < rowsCount; i++) {
						let dataObject: CatalogItemInterface = items[i];

						let row;

						row = this.createTableRow(dataObject);

						this.appendTableRow(row);
					}
				} else if (this.isTableEmpty()) {
					$(this._list).addClass("table-items__list--empty");
				}
			},
			parameters
		);
	}

	// Vytvoří řádek tabulky na základě vstupních dat
	public createTableRow(
		dataObject: CatalogItemInterface | OrderInterface
	): Element {
		let tr = this.createEmptyRow("table-items__item");

		let itemId;

		if (dataObject === undefined) {
			$(tr).addClass("table-items__item--empty");
			tr.innerHTML = "&nbsp;";
			return tr;
		}

		// Zkontroluje jestli je manuálně určeno pořadí sloupců tabulky
		if (this._cols === undefined) {
			for (let key in dataObject) {
				if (dataObject.hasOwnProperty(key)) {
					let cell = this.createTableCell(dataObject[key].toString());
					tr.appendChild(cell);
				}
			}
		} else {
			for (let i = 0; i < this._cols.length; i++) {
				const key = this._cols[i];
				let cell;

				if (dataObject !== null) {
					if (dataObject[key] === null) {
						cell = this.createTableCell("0");
					} else {
						itemId = dataObject["id"];
						cell = this.createTableCell(dataObject[key].toString());
					}
				} else {
					// Vytvoří prázdnou buňku
					cell = this.createTableCell("");
				}

				tr.appendChild(cell);
			}
		}

		// Provede se pouze pokud má tabulka nějaké možnosti ovládání
		if (this._hasControls) {
			let checkbox: any = this._header.firstElementChild.cloneNode(true);
			let controls: any = this._header.lastElementChild.cloneNode(true);

			let editItem = controls.querySelector(".table-items__edit");
			editItem.setAttribute("href", `${this._urlEdit}/${itemId}`);

			let deleteItem = controls.querySelector(".table-items__delete");
			deleteItem.setAttribute("href", `${this._urlDelete}/${itemId}`);

			tr.prepend(checkbox);
			tr.append(controls);
		}

		return tr;
	}

	private createEmptyRow(styleClass: string) {
		let tr = document.createElement("tr");
		tr.setAttribute("class", styleClass);

		return tr;
	}

	// Vytvoří buňku tabulky
	public createTableCell(cellContent: string): Element {
		let cell = document.createElement("td");
		cell.setAttribute("title", cellContent);
		cell.innerHTML = cellContent;

		return cell;
	}

	// Vytvoří řádek tabulky
	public appendTableRow(row: Element) {
		this._list.append(row);
	}

	// Vymaže obsah tabulky
	public clearTable(): void {
		this._list.innerHTML = "";
	}

	private getTableItems(): Array<Element> {
		return this._list.children;
	}

	private isTableEmpty() {
		if (this.getTableItems().length > 0) {
			return false;
		} else return true;
	}
}
