<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>CoNTeX: Collaborative Note-taking in Markdown & LaTeX</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <!-- Navigation bar -->
    <div class="navbar">
      <a class="navbar-logo" href="#">CoNTeX</a>   
      <div class="navbar-collapse">
        <ul class="navbar-nav">
          <li class="navbar-item">
            <a class="navbar-link" href="#">Vault</a>
          </li>
          <li class="navbar-item">
            <a class="navbar-link" href="#">About</a>
          </li>
        </ul>
      <div class="navbar-account">
        <a class="navbar-account-name" href="#">User</a>   
        <a class="navbar-account-picture" href="#">
          <img class="navbar-profile" src="./images/account.png" alt="image">
        </a>   
      </div>
      </div>
    </div>
    
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
      <div class="half-width" id="main-preview">
        <div id="render-text">
          
        </div>
      </div>
    </div>

    <!-- JavaScript for rendering Markdown content -->
    <script src="./scripts/markdown-parser.js"></script>
  </body>
</html>
