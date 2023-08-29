const searchBox = document.getElementById('search-box');
const resultsContainer = document.getElementById('autocomplete-results');

const data = ['Paracetamol', 'pan-40', 'Rantac', 'Cetirizine', 'Abacavir', 'Ampicilline', 'Atenolol', 'Calcium', 'Cafaclor'];

searchBox.addEventListener('input', () => {
  const query = searchBox.value.toLowerCase();
  const filteredData = data.filter(item => item.toLowerCase().includes(query));

  displayResults(filteredData);
});

function displayResults(results) {
  resultsContainer.innerHTML = '';

  results.forEach(result => {
    const resultItem = document.createElement('div');
    resultItem.textContent = result;
    resultItem.addEventListener('click', () => {
      searchBox.value = result;
      resultsContainer.innerHTML = '';
    });
    resultsContainer.appendChild(resultItem);
  });
}