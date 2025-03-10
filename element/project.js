// PROJECT-CARD
document.querySelectorAll(".project-card").forEach((card) => {
    card.addEventListener("mouseenter", () => {
        card.style.transform = "scaleX(1.05)"; // Membesar ke samping
        card.style.transition = "transform 0.3s ease-in-out";
    });

    card.addEventListener("mouseleave", () => {
        card.style.transform = "scaleX(1)"; // Kembali ke ukuran normal
    });
});
