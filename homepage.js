
    const columns = document.querySelectorAll('.slider-column');
let slideIndex = 0;

function slideColumns() {
    slideIndex++;
    columns.forEach(column => {
        column.style.transform = `translateX(-${slideIndex * 100}%)`;
    });
    
    // Reset index if it reaches the end of columns
    if (slideIndex >= columns.length) {
        slideIndex = 0;
    }
}

// Slide every 3 seconds
setInterval(slideColumns, 3000);
