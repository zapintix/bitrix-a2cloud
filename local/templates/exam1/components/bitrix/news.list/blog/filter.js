document.addEventListener("DOMContentLoaded", () => {
    const select = document.getElementById("blog-select");
    if (select) {
        select.addEventListener("change", function () {
            const sort = this.value;
            console.log(sort)

            const container = document.getElementById('blog-cards-container');

            fetch(window.location.pathname + '?ajax=Y&sort=' + sort)
                .then(response => response.text())
                .then(html => {
                    container.innerHTML = html;
                })
                .catch(err => console.error('Ошибка загрузки карточек:', err));

        });
    } else {
        console.log("❌ select не найден!");
    }
});