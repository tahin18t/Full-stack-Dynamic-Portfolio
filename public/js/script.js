document.addEventListener("DOMContentLoaded", () => {


    const links = document.querySelectorAll('.nav-links a');
    const sections = [...document.querySelectorAll('main section, header#home')];

    const navObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                links.forEach(a =>
                    a.classList.toggle('active', a.getAttribute('href') === '#' + entry.target.id)
                );
            }
        });
    }, { rootMargin: '-40% 0px -55% 0px', threshold: 0 });

    sections.forEach(s => navObserver.observe(s));




    const skillItems = document.querySelectorAll(".skill-item");

    gsap.set(skillItems, { opacity: 0, y: 40 });

    const skillObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                gsap.to(skillItems, {
                    opacity: 1,
                    y: 0,
                    duration: 0.8,
                    stagger: 0.15,
                    ease: "power3.out"
                });
                skillObserver.unobserve(entry.target); // stop re-triggering animation
            }
        });
    }, { threshold: 0.4 });

    const skillSection = document.querySelector("#skills");
    if (skillSection) skillObserver.observe(skillSection);

});
