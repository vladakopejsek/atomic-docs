/* js/dropdown.js */
import * as $ from "jquery";
import { BaseComponent } from "./BaseComponent";

export class Dropdown extends BaseComponent {
	private dropdownWrapper: Element;
	private dropdownAnchor: Element = this.componentChildren[
		this.getClassByKeyword("anchor")
	];
	private dropdownContent: Element = this.componentChildren[
		this.getClassByKeyword("content")
	];

	constructor(
		dropdownWrapper: Element,
		dropdownChildrenSelectors: Array<string>,
		dropdownOpenClass: string
	) {
		super(dropdownWrapper, dropdownChildrenSelectors);

		this.dropdownWrapper = dropdownWrapper;
		this.dropdownAnchor.addEventListener("click", e =>
			this.dropdownOpen(dropdownOpenClass, 150, e)
		);

		if ($(this.dropdownAnchor).hasClass("nav-global__link--active")) {
			this.dropdownOpen(dropdownOpenClass, 150);
		}
	}

	private dropdownOpen(openClass: string, delay: number, e?: any): void {
		if (e !== undefined) e.preventDefault();
		$(this.dropdownWrapper).toggleClass(openClass);
		$(this.dropdownContent).slideToggle(delay);
	}
}
