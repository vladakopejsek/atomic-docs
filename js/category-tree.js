/* js/category-tree.js */
import { BaseComponent } from "./BaseComponent";
import { ItemListBrowser } from "./ItemListBrowser";

export class CategoryTree extends BaseComponent {
	private _ilb: ItemListBrowser;

	private _url: string;

	private branches: any = this.component.querySelectorAll(
		".category-tree__branch"
	);

	constructor(
		element: Element,
		selectors: Array<string>,
		ilb: ItemListBrowser,
		url: string,
		categoryInitial: number
	) {
		super(element, selectors);

		ilb.url = `${url}${categoryInitial.toString()}`;

		this._url = url;

		this._ilb = ilb;

		for (let i = 0; i < this.branches.length; i++) {
			let branch = this.branches[i];

			// ID aktuální kategorie
			let categoryId = Number(branch.getAttribute("data-id"));

			// Otevření kategorie
			const categoryName = branch.querySelector(
				".category-tree__category-name"
			);

			categoryName.addEventListener("click", (e: any) => {
				e.preventDefault();
				this.changeCategory(categoryId);
			});
		}
	}

	private changeCategory(catId: number) {
		this._ilb.url = `${this._url}${catId.toString()}`;
		this._ilb.list();
	}

	get ilb(): ItemListBrowser {
		return this._ilb;
	}
}
