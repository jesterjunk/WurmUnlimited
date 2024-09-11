document.addEventListener("DOMContentLoaded", () => {
    fetch('recipes.min.json')
        .then(response => response.json())
        .then(data => {
            fetch('recipes.schema.min.json')
                .then(response => response.json())
                .then(schema => {
                    validateAndDisplay(data, schema);
                });
        });
});

function validateAndDisplay(data, schema) {
    const container = document.getElementById('container');

    data.forEach(item => {
        const card = document.createElement('div');
        card.className = 'card';

        const validKeys = Object.keys(schema.items.properties);
        validKeys.forEach(key => {
            if (item.hasOwnProperty(key)) {
                const element = document.createElement('p');
                element.innerHTML = `<strong>${key}:</strong> ${JSON.stringify(item[key], null, 2)}`;
                card.appendChild(element);
            }
        });

        container.appendChild(card);
    });
}
