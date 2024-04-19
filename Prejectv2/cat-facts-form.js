document.addEventListener('DOMContentLoaded', function() {
  const catFactsForm = document.getElementById('catFactsForm');

  catFactsForm.addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting normally

    // Get form data
    const formData = new FormData(catFactsForm);
    const fact = formData.get('fact');
    const author = formData.get('author');

    // Create a new cat fact object
    const newFact = {
      text: fact,
      type: 'cat',
      user: author
    };

    // Send a POST request to the Cat Facts API to insert the new fact
    fetch('https://cat-fact.herokuapp.com/facts')
    .then(response => response.json())
    .then(data => {
      console.log('New cat fact added:', data);
      alert('Cat fact added successfully!');
      // Optionally, you can redirect the user to another page after successful submission
      // window.location.href = 'thank-you.html';
      catFactsForm.reset();
    })
    .catch(error => {
      console.error('Error adding cat fact:', error);
      alert('Failed to add cat fact. Please try again.');
    });
  });
});
