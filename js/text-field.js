/* js/text-field.js */
import { BaseComponent } from "./BaseComponent";
import * as $ from "jquery";
import MaterialDateTimePicker from "material-datetime-picker";

export class TextField extends BaseComponent {
	private input: HTMLInputElement = this.componentChildren[
		this.getClassByKeyword("input")
	];
	private picker: MaterialDateTimePicker = new MaterialDateTimePicker().on(
		"submit",
		(val: any) => {
			this.input.value = val.format("DD/MM/YYYY");
		}
	);
	private readonly activeClass: string = "text-field--active";

	constructor(textField: Element, textFieldChildSelectors: Array<string>) {
		super(textField, textFieldChildSelectors);

		// Event bindings
		this.input.addEventListener("focus", () => this.onFocus());
		this.input.addEventListener("blur", () => this.onBlur());

		// For inital check on page load
		this.onBlur();
	}

	private onFocus() {
		if (this.input.getAttribute("type") === "datetime") this.picker.open();

		$(this.component).addClass(this.activeClass);
	}

	private onBlur() {
		if (this.isInputEmpty()) {
			$(this.component).removeClass(this.activeClass);
		} else $(this.component).addClass(this.activeClass);
	}

	private isInputEmpty(): boolean {
		if (this.getInputValue() !== "") {
			return false;
		} else return true;
	}

	private getInputValue(): string {
		return this.input.value;
	}
}
