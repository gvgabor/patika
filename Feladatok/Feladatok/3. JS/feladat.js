var F = {
    /**
     * Feladat: A táblázatban zölddel (uk-text-success class) emeljük ki a 100 000 forintnál
     * nagyobb tételeket, pirossal (uk-text-danger CSS class) pedig a 30 000 forint alattiakat.
     * A feladathoz jQuery használható.
     */
    kiemel: function () {
        const table = document.querySelector(`table.uk-table`).querySelector(`tbody`);
        [...table.querySelectorAll(`tr`)].forEach(item => {
            const osszeg = parseInt(item.querySelector(`td.osszeg`).innerText);

            if (osszeg > 100000 && item.classList.contains("uk-text-success") === false) {
                item.classList.add("uk-text-success");
            }

            if (osszeg < 30000 && item.classList.contains("uk-text-danger") === false) {
                item.classList.add("uk-text-danger");
            }

        })
    }
}