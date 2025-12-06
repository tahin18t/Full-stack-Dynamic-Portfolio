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


// document.addEventListener("DOMContentLoaded", () => {

//     const path = document.getElementById("string-path");
//     const svg = path.parentElement;

//     const drawLine = (offset = 0) => {
//         const width = svg.clientWidth;
//         const cx = width / 2;
//         const cy = 100 + offset; // middle control point Y
//         const ex = width;
//         const ey = 100;

//         const d = `M 0 100 Q ${cx} ${cy} ${ex} ${ey}`;
//         let finald = d;
//         path.setAttribute("d", d);
//     };

//     let string = document.getElementById("string");
//     string.addEventListener("mousemove", (dets) => {
//         p = `M 0 100 Q ${dets.clientX} ${dets.clientY} ${string.clientWidth} 100`;

//         gsap.to("#string-path", {
//             duration: 0.5,
//             attr: { d: p },
//             ease: "power3.out"
//         });
//     });

//     string.addEventListener("mouseleave", () => {
//         gdap.to("string", {
//             duration: 1.5,
//             attr: { d: finald},
//             ease: "elastic.out(1, 0.3)"
//         });
//     });

// });

