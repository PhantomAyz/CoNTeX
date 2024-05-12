// Get elements
const sourceText = document.getElementById("source-text");
const renderText = document.getElementById("render-text");

// Bind scrolling of source text to preview
sourceText.addEventListener("scroll", function(event) {
    renderText.scrollTop = sourceText.scrollTop;
});

renderText.addEventListener("scroll", function(event) {
    sourceText.scrollTop = renderText.scrollTop;
});
