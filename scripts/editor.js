document.addEventListener('DOMContentLoaded', function() {
    var sourceText = document.getElementById('source-text');
    var mainPreview = document.getElementById('main-preview');

    // Function to synchronize scrolling
    function syncScroll(event) {
        var target = event.target;
        if (target.id === 'source-text') {
            mainPreview.scrollTop = target.scrollTop;
        } else {
            sourceText.scrollTop = target.scrollTop;
        }
    }

    // Add scroll event listeners
    sourceText.addEventListener('scroll', syncScroll);
    mainPreview.addEventListener('scroll', syncScroll);
});
