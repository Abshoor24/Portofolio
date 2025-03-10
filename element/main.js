
// SKILL-CARD


document.querySelectorAll(".skill-card").forEach((card) => {
    card.addEventListener("mouseenter", () =>  {
        card.style.transform = "scale(1.1)";
        card.style.transition = "transform 0.3s ease-in-out";
        });
    
    card.addEventListener("mouseleave", () => {
        card.style.transform = "scale (1)";
    });
});


