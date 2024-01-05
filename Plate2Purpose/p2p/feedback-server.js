document.getElementById('DishForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const dishes = document.getElementById('Dishes').value.split(',');
    const DishRating = document.getElementById('DishRating');

    DishRating.innerHTML = '';

    dishes.forEach(dish => {
        const row = document.createElement('div');
        row.classList.add('Dish-row');

        const name = document.createElement('span');
        name.classList.add('Dish-name');
        name.textContent = dish.trim();

        const rating = document.createElement('select');
        rating.classList.add('Dish-rating');

        for (let i = 1; i <= 5; i++) {
            const option = document.createElement('option');
            option.value = i;
            option.textContent = i;
            rating.appendChild(option);
        }

        row.appendChild(name);
        row.appendChild(rating);
        DishRating.appendChild(row);
    });
});