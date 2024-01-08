document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.book-btn');
    const bookingConfirmation = document.getElementById('bookingConfirmation');
    const bookingDetails = document.getElementById('bookingDetails');

    buttons.forEach(button => {
        button.addEventListener('click', function() {
            const name = this.getAttribute('data-name');
            const price = this.getAttribute('data-price');
            const details = `You booked: ${name} for ${price}`;

            bookingDetails.textContent = details;
            bookingConfirmation.style.display = 'block';
        });
    });

    const closeBtn = document.querySelector('.close');
    closeBtn.addEventListener('click', function() {
        bookingConfirmation.style.display = 'none';
    });
});
