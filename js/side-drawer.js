/* js/side-drawer.js */
import { BaseComponent } from "./BaseComponent";
import * as $ from "jquery";

export class SideDrawer extends BaseComponent {
	private _sideDrawer: HTMLElement;

	constructor(
		sideDrawer: HTMLElement,
		selectors: Array<string>,
		toggleOpen: Element
	) {
		super(sideDrawer, selectors);

		this._sideDrawer = sideDrawer;

		toggleOpen.addEventListener("click", () => {
			$(this._sideDrawer).toggleClass("side-drawer--visible");
		});
	}
}
