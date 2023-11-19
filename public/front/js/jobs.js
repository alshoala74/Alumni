const searchIcon = document.querySelector('.search-icon');
const searchInput = document.querySelector('[data-search]');
const cards = document.querySelectorAll('.item');

searchIcon.addEventListener('click', function() {
    searchInput.classList.toggle('show');
    searchInput.focus();
  });
  
  searchInput.addEventListener('keyup', function() {
    const searchValue = this.value.toLowerCase();
  
    cards.forEach(function(card) {
      const header = card.querySelector('[degree]').textContent.toLowerCase();

  
      if (header.includes(searchValue)) {
        card.style.display = 'block';
      } else {
        card.style.display = 'none';
      }
    });
  });
