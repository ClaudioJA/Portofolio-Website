import './bootstrap';

console.log("Hello");

document.addEventListener('DOMContentLoaded', function() {
    
    function scrollToSection(sectionId) {
        const section = document.getElementById(sectionId);
        if (section) {
            section.scrollIntoView({ behavior: 'smooth' });
        }
    }

    const aboutButton = document.getElementById('aboutBtn');
    const skillButton = document.getElementById('skillBtn');
    const projectButton = document.getElementById('projectBtn');
    const contactButton = document.getElementById('contactBtn');

    aboutButton.addEventListener('click', function() {
        scrollToSection('aboutLabel');
    });

    skillButton.addEventListener('click', function() {
        scrollToSection('skillLabel');
    });

    projectButton.addEventListener('click', function() {
        scrollToSection('projectLabel');
    });

    contactButton.addEventListener('click', function() {
        scrollToSection('contactLabel');
    });
});