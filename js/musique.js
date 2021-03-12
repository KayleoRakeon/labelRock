window.addEventListener("scroll", () => {
    let musique = document.querySelector(".musique");
    musique.classList.toggle("onScroll", window.scrollY > 0);

    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
        musique.classList.toggle("onScroll");
    }
});