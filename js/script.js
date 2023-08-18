const resultsContainer = document.getElementById('results');

fetch('https://random-data-api.com/api/v2/users?size=100')
    .then(response => response.json())
    .then(data => {
        data.forEach(user => {
            const userDiv = document.createElement('div');
            userDiv.className = 'user';
            userDiv.innerHTML = `
                <p><strong>Name:</strong> ${user.first_name} ${user.last_name}</p>
                <p><strong>Email:</strong> ${user.email}</p>
                <p><strong>Phone:</strong> ${user.phone_number}</p>
            `;
            resultsContainer.appendChild(userDiv);
        });
    })
    .catch(error => {
        console.error('Error fetching data:', error);
    });
