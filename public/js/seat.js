document.querySelectorAll('.seat').forEach(seat => {
    seat.addEventListener('click', () => {
      seat.classList.toggle('selected');
    });
  });
  
  document.getElementById('bookButton').addEventListener('click', () => {
    const selectedSeats = document.querySelectorAll('.seat.selected');
    const selectedSeatsCount = selectedSeats.length;
    if (selectedSeatsCount === 0) {
      alert('Please select at least one seat.');
    } else if (selectedSeatsCount > 5) {
      alert('You can only book up to 5 seats.');
    } else {
      const seatNumbers = Array.from(selectedSeats).map(seat => seat.id.replace('seat', ''));
      alert(`You have booked seats: ${seatNumbers.join(', ')}`);
    }
  });