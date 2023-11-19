const searchIcon = document.querySelector('.search-icon');
const searchInput = document.querySelector('[data-search]');
const cards = document.querySelectorAll('.user-cards');

searchIcon.addEventListener('click', function() {
  searchInput.classList.toggle('show');
  searchInput.focus();
});

searchInput.addEventListener('keyup', function() {
  const searchValue = this.value.toLowerCase();

  cards.forEach(function(card) {
    const header = card.querySelector('[data-header]').textContent.toLowerCase();
    const body = card.querySelector('[data-body]').textContent.toLowerCase();
    const body2 = card.querySelector('[data-body2]').textContent.toLowerCase();

    if (header.includes(searchValue) || body.includes(searchValue)|| body2.includes(searchValue)) {
      card.style.display = 'block';
    } else {
      card.style.display = 'none';
    }
  });
});