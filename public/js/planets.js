document.addEventListener('DOMContentLoaded', () => {
	const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const deleteButtons = document.querySelectorAll('.delete-btn');

    deleteButtons.forEach(button => {
        button.addEventListener('click', async (event) => {
            const planetId = event.target.dataset.id;
            const apiUrl = event.target.dataset.url;
            if (!confirm(`Are you sure you want to delete the planet with ID ${planetId}? This action cannot be undone.`)) {
                return;
            }
            try {
                const response = await fetch(apiUrl, {
                    method: 'DELETE',
                    headers: {
                        'Accept': 'application/json',
						'X-CSRF-TOKEN': csrfToken
                    }
                });
                if (response.status === 204) {
                    const cardToRemove = document.getElementById(`planet-card-${planetId}`);
                    if (cardToRemove) {
                        cardToRemove.remove();
                    }
                    alert('The planet has been successfully written off.');
                } else {
                    const errorData = await response.json();
                    alert(`Error: ${errorData.message || 'Unable to delete planet.'}`);
                }
            } catch (error) {
                console.error('Error sending request:', error);
                alert('A network error has occurred. Please try again.');
            }
        });
    });
});
