// Function to parse Markdown text to HTML
function parseMarkdown() {
    // Get the Markdown text from textarea
    var markdownText = document.getElementById('source-text').value;
    
    // Convert Markdown to HTML
    var html = markdownToHtml(markdownText);
    
    // Display the HTML in the preview div
    document.getElementById('render-text').innerHTML = html;
}

// Function to convert Markdown to HTML
function markdownToHtml(markdownText) {
    // Replace Markdown syntax with HTML tags
    return markdownText
        .replace(/###### (.*?)\n/g, '<h6>$1</h6>') // Heading 6
        .replace(/##### (.*?)\n/g, '<h5>$1</h5>') // Heading 5
        .replace(/#### (.*?)\n/g, '<h4>$1</h4>') // Heading 4
        .replace(/### (.*?)\n/g, '<h3>$1</h3>') // Heading 3
        .replace(/## (.*?)\n/g, '<h2>$1</h2>') // Heading 2
        .replace(/# (.*?)\n/g, '<h1>$1</h1>') // Heading 1
        .replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>') // Bold
        .replace(/\*(.*?)\*/g, '<em>$1</em>') // Italic
        .replace(/~~(.*?)~~/g, '<s>$1</s>') // Strikethrough
        .replace(/__(.*?)__/g, '<u>$1</u>') // Underline
        .replace(/---/g, '<hr><br>') // Horizontal rule
        .replace(/\d\. (.*?)\n/g, '<ol><li>$1</li></ol>') // Ordered list
        .replace(/- (.*)\n/g, '<li>$1</li>') // Unordered list
        .replace(/\n/g, '<br>') // Line break
        .replace(/> (.*?)\n/g, '<blockquote>$1</blockquote>') // Blockquote
        .replace(/!\[(.*?)\]\((.*?)\)/g, '<img src="$2" alt="$1" width="100%">') // Image
        .replace(/\[([^\[]+)\]\(([^\)]+)\)/g, '<a href="$2">$1</a>'); // Link
}

// Render Markdown content on page load
parseMarkdown();

// Render Markdown content on textarea input
document.getElementById('source-text').addEventListener('input', parseMarkdown);
