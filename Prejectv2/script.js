document.addEventListener('DOMContentLoaded', function() {
    // Base URL of the Cat Facts API
    const apiUrl = 'https://cat-fact.herokuapp.com';
  
    // Function to fetch random cat fact from the API
    function fetchRandomCatFact() {
      fetch(`${apiUrl}/facts/random`)
        .then(response => response.json())
        .then(data => {
          const factContainer = document.getElementById('factContainer');
          const factElement = document.createElement('p');
          factElement.textContent = data.text;
          factContainer.appendChild(factElement);
        })
        .catch(error => console.error('Error fetching random cat fact:', error));
    }
  
    // Function to fetch multiple cat facts from the API
    function fetchMultipleCatFacts() {
      fetch(`${apiUrl}/facts/random?amount=5`)
        .then(response => response.json())
        .then(data => {
          const factContainer = document.getElementById('factContainer');
          factContainer.innerHTML = ''; // Clear existing facts
          data.forEach(fact => {
            const factElement = document.createElement('p');
            factElement.textContent = fact.text;
            factContainer.appendChild(factElement);
          });
        })
        .catch(error => console.error('Error fetching multiple cat facts:', error));
    }
  
    // Event listener for the "Get Random Cat Fact" button
    const randomFactBtn = document.getElementById('randomFactBtn');
    if (randomFactBtn) {
      randomFactBtn.addEventListener('click', fetchRandomCatFact);
    }
  
    // Event listener for the "Get Multiple Cat Facts" button
    const multipleFactsBtn = document.getElementById('multipleFactsBtn');
    if (multipleFactsBtn) {
      multipleFactsBtn.addEventListener('click', fetchMultipleCatFacts);
    }
  });
  