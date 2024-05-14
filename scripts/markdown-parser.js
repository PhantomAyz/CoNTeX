// Function to escape special characters to their HTML entities
const escapeSpecialChars = function(str) {
    const charMap = {
        '<': '&lt;',
        '>': '&gt;',
        '&': '&amp;',
        '©': '&copy;',
        '®': '&reg;',
        '¥': '&yen;',
        '£': '&pound;',
        '¢': '&cent;',
        '"': '&quot;',
        "'": '&#39;'
    };

    return str.replace(/[<>&©®¥£¢"'']/g, function(match) {
        return charMap[match];
    });
};

// Regular expressions for Markdown elements
const codeBlockRegex = /((\n\t)(.*))+/g;
const inlineCodeRegex = /(`)(.*?)\1/g;
const imageRegex = /!\[([^\[]+)\]\(([^\)]+)\)/g;
const linkRegex = /\[([^\[]+)\]\(([^\)]+)\)/g;
const headingRegex = /\n(#+\s*)(.*)/g;
const boldItalicsRegex = /(\*{1,2})(.*?)\1/g;
const strikethroughRegex = /(\~\~)(.*?)\1/g;
const blockquoteRegex = /\n(&gt;|\>)(.*)/g;
const horizontalRuleRegex = /\n((\-{3,})|(={3,}))/g;
const unorderedListRegex = /(\n\s*(\-|\+)\s.*)+/g;
const orderedListRegex = /(\n\s*([0-9]+\.)\s.*)+/g;
const paragraphRegex = /(?:^|\n)([^\n]+)(?=\n|$)/g;
const checkboxRegex = /-\s*\[\s*(|x|X)\s*\]\s*(.*?)(?=\n|$)/g;

// LaTeX specific regular expressions
const inlineMathRegex = /\$(.*?)\$/g;
const blockMathRegex = /\$\$\n?([\s\S]*?)\n?\$\$/g;

// Replacer functions for Markdown
const codeBlockReplacer = function(fullMatch) {
    return '\n<pre>' + fullMatch + '</pre>';
}

const inlineCodeReplacer = function(fullMatch, tagStart, tagContents) {
    return '<code>' + tagContents + '</code>';
}

const imageReplacer = function(fullMatch, tagTitle, tagURL) {
    return '<img src="' + tagURL + '" alt="' + tagTitle + '" />';
}

const linkReplacer = function(fullMatch, tagTitle, tagURL) {
    return '<a href="' + tagURL + '">' + tagTitle + '</a>';
}

const headingReplacer = function(fullMatch, tagStart, tagContents) {
    return '\n<h' + tagStart.trim().length + '>' + tagContents + '</h' + tagStart.trim().length + '>';
}

const boldItalicsReplacer = function(fullMatch, tagStart, tagContents) {
    return '<' + ((tagStart.trim().length == 1) ? ('em') : ('strong')) + '>' + tagContents + '</' + ((tagStart.trim().length == 1) ? ('em') : ('strong')) + '>';
}

const strikethroughReplacer = function(fullMatch, tagStart, tagContents) {
    return '<del>' + tagContents + '</del>';
}

const blockquoteReplacer = function(fullMatch, tagStart, tagContents) {
    return '\n<blockquote>' + tagContents + '</blockquote>';
}

const horizontalRuleReplacer = function(fullMatch) {
    return '\n<hr />';
}

const unorderedListReplacer = function(fullMatch) {
    let items = '';
    fullMatch.trim().split('\n').forEach((item, index) => {
        if (index === 0) {
            items += '<ul>';
        }
        items += '<li>' + item.substring(2) + '</li>';
    });
    items += '</ul>';
    return items;
}

const orderedListReplacer = function(fullMatch) {
    let items = '';
    fullMatch.trim().split('\n').forEach((item, index) => {
        if (index === 0) {
            items += '<ol>';
        }
        items += '<li>' + item.substring(item.indexOf('.') + 2) + '</li>';
    });
    items += '</ol>';
    return items;
}

const paragraphReplacer = function(fullMatch, tagContents) {
    return '<p>' + tagContents.trim() + '</p>';
}

const checkboxReplacer = function(fullMatch, tagStart, tagContents) {
    const isChecked = tagStart.trim().toLowerCase() === 'x';
    return '<input type="checkbox" disabled' + (isChecked ? ' checked' : '') + ' /> ' + tagContents;
}

// LaTeX replacer functions
const inlineMathReplacer = function(fullMatch, formula) {
    const protocol = location.protocol === "https:" ? "https:" : "http:";
    const url = protocol + '//i.upmath.me/svg/' + encodeURIComponent('$$' + formula + '$$'); // Pass extended double dollar signs to upmath service
    return '<img src="' + url + '" alt="' + formula + '" />';
}

const blockMathReplacer = function(fullMatch, formula) {
    const protocol = location.protocol === "https:" ? "https:" : "http:";
    const url = protocol + '//i.upmath.me/svg/' + encodeURIComponent(formula.trim());
    return '<div style="text-align:center;"><img src="' + url + '" alt="' + formula.trim() + '" /></div>';
}

// Function to replace regex in a string
const replaceRegex = function(regex, replacement) {
    return function(str) {
        return str.replace(regex, replacement);
    }
}

// Rules for Markdown parsing
const replaceCodeBlocks = replaceRegex(codeBlockRegex, codeBlockReplacer);
const replaceInlineCodes = replaceRegex(inlineCodeRegex, inlineCodeReplacer);
const replaceImages = replaceRegex(imageRegex, imageReplacer);
const replaceLinks = replaceRegex(linkRegex, linkReplacer);
const replaceHeadings = replaceRegex(headingRegex, headingReplacer);
const replaceBoldItalics = replaceRegex(boldItalicsRegex, boldItalicsReplacer);
const replaceStrikethrough = replaceRegex(strikethroughRegex, strikethroughReplacer);
const replaceBlockquotes = replaceRegex(blockquoteRegex, blockquoteReplacer);
const replaceHorizontalRules = replaceRegex(horizontalRuleRegex, horizontalRuleReplacer);
const replaceUnorderedLists = replaceRegex(unorderedListRegex, unorderedListReplacer);
const replaceOrderedLists = replaceRegex(orderedListRegex, orderedListReplacer);
const replaceParagraphs = replaceRegex(paragraphRegex, paragraphReplacer);
const replaceCheckboxes = replaceRegex(checkboxRegex, checkboxReplacer);

// LaTeX replacement rules
const replaceInlineMath = replaceRegex(inlineMathRegex, inlineMathReplacer);
const replaceBlockMath = replaceRegex(blockMathRegex, blockMathReplacer);

// Fix for tab-indexed code blocks
const codeBlockFixRegex = /\n(<pre>)((\n|.)*)(<\/pre>)/g;
const codeBlockFixer = function(fullMatch, tagStart, tagContents, lastMatch, tagEnd) {
    let lines = '';
    tagContents.split('\n').forEach(line => { lines += line.substring(1) + '\n'; });
    return tagStart + lines + tagEnd;
}

const fixCodeBlocks = replaceRegex(codeBlockFixRegex, codeBlockFixer);

// Replacement rule order function for Markdown
const replaceMarkdown = function(str) {
    return replaceParagraphs(
        replaceOrderedLists(
        replaceUnorderedLists(
        replaceCheckboxes(
        replaceHorizontalRules(
        replaceBlockquotes(
        replaceStrikethrough(
        replaceBoldItalics(
        replaceHeadings(
        replaceLinks(
        replaceImages(
        replaceInlineMath(
        replaceBlockMath(
        replaceInlineCodes(
        replaceCodeBlocks(str))
    )))))))))))));
}

// Parser for Markdown
const parseMarkdown = function(str) {
    return fixCodeBlocks(replaceMarkdown(escapeSpecialChars(str))).trim();
}
