<!-- components/components/form-default.php -->
<form action="" method="post" class="form-default">
    <div class="text-field text-field--separated form-default__text-field">
        <input type="text" name="url" id="url" class="text-field__input">
        <label class="text-field__label" for="url">URL</label>
    </div>
    <div class="text-field text-field--separated form-default__text-field">
        <input type="text" name="title" id="title" class="text-field__input">
        <label class="text-field__label" for="title">Nadpis</label>
    </div>
    <div class="text-field text-field--separated form-default__text-field">
        <select class="text-field__input">
            <option value="" disabled="" selected=""></option>
            <option value="grains">
                Bread, Cereal, Rice, and Pasta
            </option>
            <option value="vegetables">
                Vegetables
            </option>
            <option value="fruit">
                Fruit
            </option>
        </select>
        <label class="text-field__label">Skrýt</label>
    </div>
    <div class="text-field text-field--separated form-default__text-field">
        <input type="datetime" name="datePublish" id="datePublish" class="text-field__input">
        <label class="text-field__label" for="datePublish">Datum zveřejnění</label>
    </div>
    <div class="[ mdc-checkbox ] [ form-default__text-field form-default__text-field--check ]" for="checkbox">
        <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox" name="checkbox">
        <div class="mdc-checkbox__background">
            <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
            </svg>
            <div class="mdc-checkbox__mixedmark"></div>
        </div>
        <label class="form-default__label" for="checkbox">Zveřejnit později</label>
    </div>
    <div class="text-field text-field--separated form-default__text-field form-default__text-field--textarea">
        <textarea name="note" id="note" class="text-field__input text-field__input--textarea"></textarea>
        <label class="text-field__label" for="note">Poznámka</label>
    </div>
    <div class="text-field text-field--separated form-default__text-field">
        <select class="text-field__input">
            <option value="" disabled="" selected=""></option>
            <option value="grains">
                Bread, Cereal, Rice, and Pasta
            </option>
            <option value="vegetables">
                Vegetables
            </option>
            <option value="fruit">
                Fruit
            </option>
        </select>
        <label class="text-field__label">Koupitelné</label>
    </div>
    <div class="text-field text-field--separated form-default__text-field">
        <select class="text-field__input">
            <option value="" disabled="" selected=""></option>
            <option value="grains">
                Bread, Cereal, Rice, and Pasta
            </option>
            <option value="vegetables">
                Vegetables
            </option>
            <option value="fruit">
                Fruit
            </option>
        </select>
        <label class="text-field__label">Doporučené</label>
    </div>
    <div class="text-field text-field--separated form-default__text-field">
        <input type="text" name="ean" id="ean" class="text-field__input">
        <label class="text-field__label" for="ean">EAN</label>
    </div>
    <div class="text-field text-field--separated form-default__text-field">
        <input type="text" name="code" id="code" class="text-field__input">
        <label class="text-field__label" for="code">Kód</label>
    </div> <input type="hidden" name="formName" value="adminRecordsItemsAdd">
    <input type="submit" name="submit" value="Potvrdit" class="button button--rounded button--blue">
</form> 