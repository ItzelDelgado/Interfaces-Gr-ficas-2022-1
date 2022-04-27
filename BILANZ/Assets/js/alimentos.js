const cards = document.querySelectorAll(".card");
const fullscreenContainer = document.querySelector(".fullscreen-container");
const fullscreenElement = fullscreenContainer.querySelector(".fullscreen-element");
const overlay = fullscreenContainer.querySelector(".overlay");

const originalPosition = {
    top: 0,
    left: 0,
}
      
cards.forEach((card) => {
    card.addEventListener("click", () => {
        const clonedElement = card.cloneNode(true);

        originalPosition.top = card.getBoundingClientRect().top;
        originalPosition.left = card.getBoundingClientRect().left;
        
        fullscreenElement.classList.add("no-transition");
        setElementPosition(fullscreenElement, originalPosition);
        
        fullscreenElement.appendChild(clonedElement);
        fullscreenContainer.classList.add("is-open");
        
        setTimeout(() => {
            fullscreenElement.classList.remove("no-transition");
            moveToCenter(fullscreenElement);
        }, 300)
    });
});

overlay.addEventListener("click", () => {
    setElementPosition(fullscreenElement, originalPosition);
    
    setTimeout(() => {
        fullscreenContainer.classList.remove("is-open");
        fullscreenElement.innerHTML = "";
        
        resetElementPosition(fullscreenElement);
    }, 500)
    
});

function setElementPosition(element, position) {
    element.style.top = `${position.top}px`;
    element.style.left = `${position.left}px`;   
}

function resetElementPosition(element) {
    element.style.top = "";
    element.style.left = "";
}

function moveToCenter(element) {
    const offset = {
        top: (fullscreenContainer.getBoundingClientRect().height / 2) - (element.getBoundingClientRect().height / 2),
        left: (fullscreenContainer.getBoundingClientRect().width / 2) - (element.getBoundingClientRect().width / 2),
    };
    
    setElementPosition(fullscreenElement, offset);
}