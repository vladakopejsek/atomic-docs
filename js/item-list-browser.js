/* js/item-list-browser.js */
import { BaseComponent } from "./BaseComponent";
import { Table } from "./Table";
import { UrlHelper } from "../utility/UrlHelper";

export class ItemListBrowser extends BaseComponent {
	private listingArrowBack: any = this.componentChildren[
		this.getClassByKeyword("back")
	];

	private listingArrowForward: any = this.componentChildren[
		this.getClassByKeyword("forward")
	];

	private currentPageElement: any = this.componentChildren[
		this.getClassByKeyword("current")
	];

	private pagesTotalElement: any = this.componentChildren[
		this.getClassByKeyword("total")
	];

	private addItem: any = this.componentChildren[
		this.getClassByKeyword("add-item")
	];

	// URL helper
	private _uh = new UrlHelper();

	private _pageBefore: number;

	private _pageCurrent: number;

	private _pageNext: number;

	private _table: Table;

	private _url: string;

	private _urlAddItem: string;

	constructor(
		ilb: Element,
		selectors: Array<string>,
		table: Table,
		url?: string,
		urlAddItem?: string
	) {
		super(ilb, selectors);

		this._table = table;

		this._url = url;

		this._pageCurrent;

		this._urlAddItem = urlAddItem;

		this.setAddItemUrl(url, urlAddItem);

		window.onpopstate = () => {
			this.list(this._pageBefore);
		};

		this.listingArrowBack.addEventListener("click", (e: any) => {
			e.preventDefault();
			this.list(this._pageBefore);
		});

		this.listingArrowForward.addEventListener("click", (e: any) => {
			e.preventDefault();
			this.list(this._pageNext);
		});

		this.list();
	}

	public list(page: number = 1): void {
		this._table.refreshData(
			this._url,
			(data: any, urlCallback: string) => {
				this._uh.setUrl(urlCallback);

				this._pageCurrent = data.data.current;

				this._pageBefore = data.data.before;

				this._pageNext = data.data.next;

				this.currentPageElement.innerHTML = data.data.current;

				this.pagesTotalElement.innerHTML = data.data.total_pages;

				return data.data.items;
			},
			{ page }
		);
	}

	set url(url: string) {
		this.setAddItemUrl(url, this._urlAddItem);
		this._url = url;
	}

	get url(): string {
		return this._url;
	}

	private setAddItemUrl(urlBase: string, urlAdd: string): void {
		this.addItem.setAttribute("href", `${urlBase}/${urlAdd}`);
	}
}
