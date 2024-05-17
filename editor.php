<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>CoNTeX: Collaborative Note-taking in Markdown & LaTeX</title>
    <link rel="icon" href="./images/white-logo.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/fonts.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/preview.css" rel="stylesheet">
  </head>
  <body>
    <!-- Navigation bar -->
    <nav class="navbar">
      <div class="navbar-tools">
        <button id="folder-button" class="nb-btn" type="button">
          <img id="folder-icon" class="nb-tl-svg" src="images/folder-solid.svg" alt="folder">
        </button>
        <button id="undo-button" class="nb-btn" type="button">
          <img class="nb-tl-svg" src="images/rotate-left-solid.svg" alt="undo">
        </button>
        <button id="redo-button" class="nb-btn" type="button">
          <img class="nb-tl-svg" src="images/rotate-right-solid.svg" alt="redo">
        </button>
      </div>

      <div class="navbar-logo">
        <a class="navbar-logo-link" href="#">
          <!-- <img id="navbar-logo-img" src="./images/white-logo.svg" alt="CoNTeX"> -->
        </a>   
      </div>

      <div class="navbar-account">
        <a class="navbar-account-name" href="#">User</a>   
        <div class="navbar-acc-sp">
          <a class="nagvbar-account-picture" href="#">
            <img class="navbar-profile" src="./images/account.png" alt="image">
          </a>   
        </div>
      </div>
    </nav>
    
    <!-- Editor and previewer for LaTeX and Markdown -->
    <div class="main">
      <div class="half-width" id="main-editor">
        <!-- Get default mesage on screen -->
        <?php
        $file_path = "./README.md";

        if (file_exists($file_path)) {
            $file_contents = file_get_contents($file_path);
        }
        ?>
        <!-- Display textarea with file contents when no edits are done -->
        <textarea id="source-text" placeholder="Enter your text here"><?php 
          echo htmlspecialchars($file_contents); 
        ?></textarea>
      </div>

      <pre id="main-preview" class="half-width"><code id="render-text"></code></pre>
    </div>

    <script src="./scripts/parser.js"></script>
    <script src="./scripts/editor.js"></script>
  </body>
</html>
