document.addEventListener('DOMContentLoaded', () => {
    const rounds = document.querySelectorAll('.combat-round');
    let delay = 0;

    rounds.forEach(round => {
        setTimeout(() => {
            round.classList.add('active');
        }, delay);
        delay += 1000;  // Increase delay for each round
    });
});
