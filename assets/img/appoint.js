// Add form submission handling using JavaScript for further data processing
form.addEventListener('submit', (event) => {
  event.preventDefault(); // Prevent the default form submission behavior
  
  // Perform additional processing or validation here
  
  // Submit the form programmatically
  const formData = new FormData(form);
  fetch('process_form.php', {
    method: 'POST',
    body: formData
  })
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.text();
  })
  .then(data => {
    // Handle the response from the server
    console.log(data); // Log the response for debugging
    // You can display a success message or redirect the user to another page here
    alert('Form submitted successfully');
    window.location.href = 'success.php'; // Redirect to success page
  })
  .catch(error => {
    console.error('There was a problem with your fetch operation:', error);
    // Display an error message to the user
    alert('There was a problem submitting the form. Please try again later.');
  });
});
