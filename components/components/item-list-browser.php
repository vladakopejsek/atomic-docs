<!-- components/components/item-list-browser.php -->
<ul class="item-list-browser   ">
    <li class="item-list-browser__bar">
        <form action="/skycms/admin/katalog" method="get" class="item-list-browser__search-form">
            <select name="searchBy" id="searchOptions" class="item-list-browser__input item-list-browser__input--select">
                <option value="all">Vše</option>
            </select>
            <input type="text" name="searchFor" class="item-list-browser__input item-list-browser__input--search">
            <button class="[ item-list-browser__input item-list-browser__input--submit ] [ background-image ]" type="submit">&nbsp;</button>
        </form>
        <div class="item-list-browser__products-controls">
            <a href="javascript:void(0);" class="[ item-list-browser__add-item ] [ link ] [ background-image ]">Přidat
                položku</a>
        </div>
    </li>
    <li class="item-list-browser__items">
        <div class="item-list-browser__spinner-wrapper">
            <table class="table-items item-list-browser__table">
                <colgroup>
                    <col width="5%" class="table-items__col--checkbox">

                    <col width="10%" class="table-items__col">
                    <col width="10%" class="table-items__col">
                    <col width="30%" class="table-items__col">
                    <col width="10%" class="table-items__col">
                    <col width="12.5%" class="table-items__col">
                    <col width="12.5%" class="table-items__col">

                    <col width="10%" class="table-items__col--controls">
                </colgroup>
                <thead class="table-items__header">
                    <tr class="table-items__item--header">
                        <th scope="col" class="table-items__icon-cell">
                            <div class="[ mdc-checkbox ] [ table-items__checkbox ]" for="">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="" name="">
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                                <label class="form-default__label" for=""></label>
                            </div>
                        </th>

                        <th scope="col" class="table-items__data-cell">ID</th>
                        <th scope="col" class="table-items__data-cell">Kód</th>
                        <th scope="col" class="table-items__data-cell">Název</th>
                        <th scope="col" class="table-items__data-cell">Skladem</th>
                        <th scope="col" class="table-items__data-cell">Cena bez DPH</th>
                        <th scope="col" class="table-items__data-cell">Cena s DPH</th>

                        <th scope="col" class="table-items__icon-cell">
                            <div class="table-items__icon-wrapper table-items__icon-wrapper--controls">
                                <a href="javascript:void(0);" class="[ table-items__edit table-items__icon ] [ background-image ]">&nbsp;</a>
                                <a href="javascript:void(0);" class="[ table-items__delete table-items__icon ] [ background-image ]">&nbsp;</a>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody class="table-items__list">
                    <tr class="table-items__item">
                        <th scope="col" class="table-items__icon-cell">
                            <div class="[ mdc-checkbox ] [ table-items__checkbox ]" for="">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="" name="">
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                                <label class="form-default__label" for=""></label>
                            </div>
                        </th>
                        <td title="87">87</td>
                        <td title="pok">pok</td>
                        <td title="Atera Giro Speed">Atera Giro Speed</td>
                        <td title="1">1</td>
                        <td title="9.00">9.00</td>
                        <td title="10.35">10.35</td>
                        <th scope="col" class="table-items__icon-cell">
                            <div class="table-items__icon-wrapper table-items__icon-wrapper--controls">
                                <a href="javascript:void(0);" class="[ table-items__edit table-items__icon ] [ background-image ]">&nbsp;</a>
                                <a href="javascript:void(0);" class="[ table-items__delete table-items__icon ] [ background-image ]">&nbsp;</a>
                            </div>
                        </th>
                    </tr>
                    <tr class="table-items__item">
                        <th scope="col" class="table-items__icon-cell">
                            <div class="[ mdc-checkbox ] [ table-items__checkbox ]" for="">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="" name="">
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                                <label class="form-default__label" for=""></label>
                            </div>
                        </th>
                        <td title="91">91</td>
                        <td title="HV0600">HV0600</td>
                        <td title="Hakr Speed HV 0600">Hakr Speed HV 0600</td>
                        <td title="0">0</td>
                        <td title="2.00">2.00</td>
                        <td title="2.42">2.42</td>
                        <th scope="col" class="table-items__icon-cell">
                            <div class="table-items__icon-wrapper table-items__icon-wrapper--controls">
                                <a href="javascript:void(0);" class="[ table-items__edit table-items__icon ] [ background-image ]">&nbsp;</a>
                                <a href="javascript:void(0);" class="[ table-items__delete table-items__icon ] [ background-image ]">&nbsp;</a>
                            </div>
                        </th>
                    </tr>
                    <tr class="table-items__item">
                        <th scope="col" class="table-items__icon-cell">
                            <div class="[ mdc-checkbox ] [ table-items__checkbox ]" for="">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="" name="">
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                                <label class="form-default__label" for=""></label>
                            </div>
                        </th>
                        <td title="94">94</td>
                        <td title="HV0901">HV0901</td>
                        <td title="Hakr Cyklo PRO ALU Profi zamykatelný - HV 0901">Hakr Cyklo PRO ALU Profi zamykatelný
                            - HV 0901</td>
                        <td title="0">0</td>
                        <td title="669.42">669.42</td>
                        <td title="810.00">810.00</td>
                        <th scope="col" class="table-items__icon-cell">
                            <div class="table-items__icon-wrapper table-items__icon-wrapper--controls">
                                <a href="javascript:void(0);" class="[ table-items__edit table-items__icon ] [ background-image ]">&nbsp;</a>
                                <a href="javascript:void(0);" class="[ table-items__delete table-items__icon ] [ background-image ]">&nbsp;</a>
                            </div>
                        </th>
                    </tr>
                    <tr class="table-items__item">
                        <th scope="col" class="table-items__icon-cell">
                            <div class="[ mdc-checkbox ] [ table-items__checkbox ]" for="">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="" name="">
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                                <label class="form-default__label" for=""></label>
                            </div>
                        </th>
                        <td title="101">101</td>
                        <td title="NEU-2570">NEU-2570</td>
                        <td title="Neumann 2570">Neumann 2570</td>
                        <td title="0">0</td>
                        <td title="2123.97">2123.97</td>
                        <td title="2570.00">2570.00</td>
                        <th scope="col" class="table-items__icon-cell">
                            <div class="table-items__icon-wrapper table-items__icon-wrapper--controls">
                                <a href="javascript:void(0);" class="[ table-items__edit table-items__icon ] [ background-image ]">&nbsp;</a>
                                <a href="javascript:void(0);" class="[ table-items__delete table-items__icon ] [ background-image ]">&nbsp;</a>
                            </div>
                        </th>
                    </tr>
                    <tr class="table-items__item">
                        <th scope="col" class="table-items__icon-cell">
                            <div class="[ mdc-checkbox ] [ table-items__checkbox ]" for="">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="" name="">
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                                <label class="form-default__label" for=""></label>
                            </div>
                        </th>
                        <td title="102">102</td>
                        <td title="NEU-2590">NEU-2590</td>
                        <td title="Neumann 2590">Neumann 2590</td>
                        <td title="0">0</td>
                        <td title="2140.49">2140.49</td>
                        <td title="2589.99">2589.99</td>
                        <th scope="col" class="table-items__icon-cell">
                            <div class="table-items__icon-wrapper table-items__icon-wrapper--controls">
                                <a href="javascript:void(0);" class="[ table-items__edit table-items__icon ] [ background-image ]">&nbsp;</a>
                                <a href="javascript:void(0);" class="[ table-items__delete table-items__icon ] [ background-image ]">&nbsp;</a>
                            </div>
                        </th>
                    </tr>
                    <tr class="table-items__item">
                        <th scope="col" class="table-items__icon-cell">
                            <div class="[ mdc-checkbox ] [ table-items__checkbox ]" for="">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="" name="">
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                                <label class="form-default__label" for=""></label>
                            </div>
                        </th>
                        <td title="103">103</td>
                        <td title="NEU-2790">NEU-2790</td>
                        <td title="Neumann 2790">Neumann 2790</td>
                        <td title="0">0</td>
                        <td title="2305.79">2305.79</td>
                        <td title="2790.01">2790.01</td>
                        <th scope="col" class="table-items__icon-cell">
                            <div class="table-items__icon-wrapper table-items__icon-wrapper--controls">
                                <a href="javascript:void(0);" class="[ table-items__edit table-items__icon ] [ background-image ]">&nbsp;</a>
                                <a href="javascript:void(0);" class="[ table-items__delete table-items__icon ] [ background-image ]">&nbsp;</a>
                            </div>
                        </th>
                    </tr>
                    <tr class="table-items__item">
                        <th scope="col" class="table-items__icon-cell">
                            <div class="[ mdc-checkbox ] [ table-items__checkbox ]" for="">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="" name="">
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                                <label class="form-default__label" for=""></label>
                            </div>
                        </th>
                        <td title="104">104</td>
                        <td title="NEU-2359">NEU-2359</td>
                        <td title="Neumann 2359">Neumann 2359</td>
                        <td title="0">0</td>
                        <td title="1949.58">1949.58</td>
                        <td title="2358.99">2358.99</td>
                        <th scope="col" class="table-items__icon-cell">
                            <div class="table-items__icon-wrapper table-items__icon-wrapper--controls">
                                <a href="javascript:void(0);" class="[ table-items__edit table-items__icon ] [ background-image ]">&nbsp;</a>
                                <a href="javascript:void(0);" class="[ table-items__delete table-items__icon ] [ background-image ]">&nbsp;</a>
                            </div>
                        </th>
                    </tr>
                    <tr class="table-items__item">
                        <th scope="col" class="table-items__icon-cell">
                            <div class="[ mdc-checkbox ] [ table-items__checkbox ]" for="">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="" name="">
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                                <label class="form-default__label" for=""></label>
                            </div>
                        </th>
                        <td title="105">105</td>
                        <td title="NEU-3590">NEU-3590</td>
                        <td title="Neumann 3590">Neumann 3590</td>
                        <td title="0">0</td>
                        <td title="2966.95">2966.95</td>
                        <td title="3590.01">3590.01</td>
                        <th scope="col" class="table-items__icon-cell">
                            <div class="table-items__icon-wrapper table-items__icon-wrapper--controls">
                                <a href="javascript:void(0);" class="[ table-items__edit table-items__icon ] [ background-image ]">&nbsp;</a>
                                <a href="javascript:void(0);" class="[ table-items__delete table-items__icon ] [ background-image ]">&nbsp;</a>
                            </div>
                        </th>
                    </tr>
                    <tr class="table-items__item">
                        <th scope="col" class="table-items__icon-cell">
                            <div class="[ mdc-checkbox ] [ table-items__checkbox ]" for="">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="" name="">
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                                <label class="form-default__label" for=""></label>
                            </div>
                        </th>
                        <td title="106">106</td>
                        <td title="NEU-3725">NEU-3725</td>
                        <td title="Neumann 3725">Neumann 3725</td>
                        <td title="0">0</td>
                        <td title="3078.52">3078.52</td>
                        <td title="3725.01">3725.01</td>
                        <th scope="col" class="table-items__icon-cell">
                            <div class="table-items__icon-wrapper table-items__icon-wrapper--controls">
                                <a href="javascript:void(0);" class="[ table-items__edit table-items__icon ] [ background-image ]">&nbsp;</a>
                                <a href="javascript:void(0);" class="[ table-items__delete table-items__icon ] [ background-image ]">&nbsp;</a>
                            </div>
                        </th>
                    </tr>
                    <tr class="table-items__item">
                        <th scope="col" class="table-items__icon-cell">
                            <div class="[ mdc-checkbox ] [ table-items__checkbox ]" for="">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="" name="">
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                                <label class="form-default__label" for=""></label>
                            </div>
                        </th>
                        <td title="107">107</td>
                        <td title="NEU-3870">NEU-3870</td>
                        <td title="Neumann 3870">Neumann 3870</td>
                        <td title="0">0</td>
                        <td title="3198.35">3198.35</td>
                        <td title="3870.00">3870.00</td>
                        <th scope="col" class="table-items__icon-cell">
                            <div class="table-items__icon-wrapper table-items__icon-wrapper--controls">
                                <a href="javascript:void(0);" class="[ table-items__edit table-items__icon ] [ background-image ]">&nbsp;</a>
                                <a href="javascript:void(0);" class="[ table-items__delete table-items__icon ] [ background-image ]">&nbsp;</a>
                            </div>
                        </th>
                    </tr>
                    <tr class="table-items__item">
                        <th scope="col" class="table-items__icon-cell">
                            <div class="[ mdc-checkbox ] [ table-items__checkbox ]" for="">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="" name="">
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                                <label class="form-default__label" for=""></label>
                            </div>
                        </th>
                        <td title="108">108</td>
                        <td title="NEU-4170">NEU-4170</td>
                        <td title="Neumann 4170">Neumann 4170</td>
                        <td title="0">0</td>
                        <td title="3446.28">3446.28</td>
                        <td title="4170.00">4170.00</td>
                        <th scope="col" class="table-items__icon-cell">
                            <div class="table-items__icon-wrapper table-items__icon-wrapper--controls">
                                <a href="javascript:void(0);" class="[ table-items__edit table-items__icon ] [ background-image ]">&nbsp;</a>
                                <a href="javascript:void(0);" class="[ table-items__delete table-items__icon ] [ background-image ]">&nbsp;</a>
                            </div>
                        </th>
                    </tr>
                    <tr class="table-items__item">
                        <th scope="col" class="table-items__icon-cell">
                            <div class="[ mdc-checkbox ] [ table-items__checkbox ]" for="">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="" name="">
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                                <label class="form-default__label" for=""></label>
                            </div>
                        </th>
                        <td title="109">109</td>
                        <td title="NEU-4470">NEU-4470</td>
                        <td title="Neumann 4470">Neumann 4470</td>
                        <td title="0">0</td>
                        <td title="3694.21">3694.21</td>
                        <td title="4469.99">4469.99</td>
                        <th scope="col" class="table-items__icon-cell">
                            <div class="table-items__icon-wrapper table-items__icon-wrapper--controls">
                                <a href="javascript:void(0);" class="[ table-items__edit table-items__icon ] [ background-image ]">&nbsp;</a>
                                <a href="javascript:void(0);" class="[ table-items__delete table-items__icon ] [ background-image ]">&nbsp;</a>
                            </div>
                        </th>
                    </tr>
                    <tr class="table-items__item">
                        <th scope="col" class="table-items__icon-cell">
                            <div class="[ mdc-checkbox ] [ table-items__checkbox ]" for="">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="" name="">
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                                <label class="form-default__label" for=""></label>
                            </div>
                        </th>
                        <td title="110">110</td>
                        <td title="NAA5515">NAA5515</td>
                        <td title="Neumann ALU Škoda Octavia II">Neumann ALU Škoda Octavia II</td>
                        <td title="0">0</td>
                        <td title="2636.36">2636.36</td>
                        <td title="3190.00">3190.00</td>
                        <th scope="col" class="table-items__icon-cell">
                            <div class="table-items__icon-wrapper table-items__icon-wrapper--controls">
                                <a href="javascript:void(0);" class="[ table-items__edit table-items__icon ] [ background-image ]">&nbsp;</a>
                                <a href="javascript:void(0);" class="[ table-items__delete table-items__icon ] [ background-image ]">&nbsp;</a>
                            </div>
                        </th>
                    </tr>
                    <tr class="table-items__item">
                        <th scope="col" class="table-items__icon-cell">
                            <div class="[ mdc-checkbox ] [ table-items__checkbox ]" for="">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="" name="">
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                                <label class="form-default__label" for=""></label>
                            </div>
                        </th>
                        <td title="111">111</td>
                        <td title="NAA1037">NAA1037</td>
                        <td title="Neumann ALU Ford Focus II Turnier s T-drážkou">Neumann ALU Ford Focus II Turnier s
                            T-drážkou</td>
                        <td title="0">0</td>
                        <td title="2719.01">2719.01</td>
                        <td title="3290.00">3290.00</td>
                        <th scope="col" class="table-items__icon-cell">
                            <div class="table-items__icon-wrapper table-items__icon-wrapper--controls">
                                <a href="javascript:void(0);" class="[ table-items__edit table-items__icon ] [ background-image ]">&nbsp;</a>
                                <a href="javascript:void(0);" class="[ table-items__delete table-items__icon ] [ background-image ]">&nbsp;</a>
                            </div>
                        </th>
                    </tr>
                    <tr class="table-items__item">
                        <th scope="col" class="table-items__icon-cell">
                            <div class="[ mdc-checkbox ] [ table-items__checkbox ]" for="">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="" name="">
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                                <label class="form-default__label" for=""></label>
                            </div>
                        </th>
                        <td title="112">112</td>
                        <td title="NEU-AL-3690">NEU-AL-3690</td>
                        <td title="Neumann ALU 3690,-">Neumann ALU 3690,-</td>
                        <td title="0">0</td>
                        <td title="3049.59">3049.59</td>
                        <td title="3690.00">3690.00</td>
                        <th scope="col" class="table-items__icon-cell">
                            <div class="table-items__icon-wrapper table-items__icon-wrapper--controls">
                                <a href="javascript:void(0);" class="[ table-items__edit table-items__icon ] [ background-image ]">&nbsp;</a>
                                <a href="javascript:void(0);" class="[ table-items__delete table-items__icon ] [ background-image ]">&nbsp;</a>
                            </div>
                        </th>
                    </tr>
                </tbody>
            </table> <svg class="item-list-browser__spinner" width="66px" height="66px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                <circle class="item-list-browser__spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33"
                    cy="33" r="30"></circle>
            </svg>
        </div>
    </li>
    <li class="item-list-browser__bar item-list-browser__bar--listing">
        <a href="javascript:void(0);" class="item-list-browser__listing-arrow item-list-browser__listing-arrow--back background-image">&nbsp;</a>
        <p>
            Stránka <span class="item-list-browser__current-page">1</span> z <span class="item-list-browser__pages-total">3586</span>
        </p>
        <a href="javascript:void(0);" class="item-list-browser__listing-arrow item-list-browser__listing-arrow--forward background-image">&nbsp;</a>
    </li>
</ul>