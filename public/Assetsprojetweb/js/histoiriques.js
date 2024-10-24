// Sample orders data (replace this with dynamic data from a backend or database)
const orders = [
    { id: '00001', plats: 'Pizza, Pâtes', date: '2024-10-24' },
    { id: '00002', plats: 'Sushi', date: '2024-10-22' },
    { id: '00003', plats: 'Burger, Frites', date: '2024-10-20' },
    { id: '00004', plats: 'Salade, Soupe', date: '2024-10-18' }
];

// Function to populate the orders table dynamically
function populateOrderTable() {
    const tableBody = document.querySelector('table tbody');
    
    // Clear the table body before populating new data
    tableBody.innerHTML = '';

    orders.forEach(order => {
        const row = document.createElement('tr');
        
        const idCell = document.createElement('td');
        idCell.textContent = order.id;

        const platsCell = document.createElement('td');
        platsCell.textContent = order.plats;

        const dateCell = document.createElement('td');
        dateCell.textContent = order.date;

        // Append cells to the row
        row.appendChild(idCell);
        row.appendChild(platsCell);
        row.appendChild(dateCell);

        // Append the row to the table body
        tableBody.appendChild(row);
    });
}

// Function to handle claim button click event
function handleClaimButtonClick() {
    alert('Réclamation envoyée ! Nous vous contacterons bientôt.');
}

// Add event listener for the "Faire une réclamation" button
document.querySelector('.claim-button').addEventListener('click', handleClaimButtonClick);

// Call the function to populate the table when the page loads
window.onload = populateOrderTable;
