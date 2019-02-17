/* js/card.js */
import { BaseComponent } from "./BaseComponent";

export class Card extends BaseComponent {
	protected cardHeader: any = this.componentChildren[
		this.getClassByKeyword("header")
	];
	protected refreshButton = this.componentChildren[
		this.getClassByKeyword("refresh")
	];

	private _url: string;

	constructor(card: Element, cardSelectors: Array<string>, url?: string) {
		super(card, cardSelectors);

		this._url = url;

		this.refreshButton.addEventListener("click", () => {
			this.onRefresh();
		});

		this.onRefresh();
	}

	protected onRefresh(): void {}
}
