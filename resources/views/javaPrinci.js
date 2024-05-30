document.addEventListener('DOMContentLoaded', () => {
    const locationSection = document.getElementById('location');

    const revealOnScroll = () => {
        const rect = locationSection.getBoundingClientRect();
        const windowHeight = window.innerHeight || document.documentElement.clientHeight;

        if (rect.top <= windowHeight - 100) {
            locationSection.classList.add('visible');
            window.removeEventListener('scroll', revealOnScroll);
        }
    };

    window.addEventListener('scroll', revealOnScroll);
});
