let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    const slides = document.getElementsByClassName("slide");
    const dots = document.getElementsByClassName("dot");
    
    // Oculta todos os slides e remove a classe 'active' dos pontos
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        dots[i].classList.remove("active");
    }
    
    // Avança para o próximo slide
    slideIndex++;
    
    // Retorna ao primeiro slide se chegou ao final
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }    
    
    // Exibe o slide atual e destaca o ponto correspondente
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].classList.add("active");
    
    // Chama a função showSlides() novamente após 7 segundos
    setTimeout(showSlides, 5000);
}
