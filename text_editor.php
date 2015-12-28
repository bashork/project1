<!DOCTYPE html>
<html>
  <head>
    <title>Quill Pretty Editor Demo</title>
    <link rel="stylesheet" type="text/css" href="quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="quill/examples/styles/advanced.css">
    <meta charset="utf-8">
  </head>
  <body>
    <div id="content-container">
      <div class="advanced-wrapper">
        <div class="toolbar-container">
          <span class= 'ql-format-group'>
          <select title="Font" class="ql-font">
            <option value="sans-serif" selected>Sans Serif</option>
            <option value="Georgia, serif">Serif</option>
            <option value="Monaco, 'Courier New', monospace">Monospace</option>
          </select>
          <select title="Size" class="ql-size">
            <option value="10px">Small</option>
            <option value="13px" selected>Normal</option>
            <option value="18px">Large</option>
            <option value="32px">Huge</option>
          </select>
        </span>
          <select title="Text Alignment" class="ql-align">
            <option value="left" selected>Left</option>
            <option value="center">Center</option>
            <option value="right">Right</option>
            <option value="justify">Justify</option>
          </select>
          <span class = 'ql-format-group'></span>
          <span title="Bold" class="ql-format-button ql-bold"></span>
          <span class="ql-format-separator"></span>
          <span title="Italic" class="ql-format-button ql-italic"></span>
          <span class="ql-format-separator"></span>
          <span title="Underline" class="ql-format-button ql-underline"></span>


        </div>
        <div class="editor-container"></div>
      </div>
 
          
          <span class="ql-format-group">
            <span title="Bold" class="ql-format-button ql-bold"></span><span class="ql-format-separator"></span><span title="Italic" class="ql-format-button ql-italic">
          </span><span class="ql-format-separator"></span><span title="Underline" class="ql-format-button ql-underline"></span></span>
          <span class="ql-format-group">
           
            </select><span class="ql-format-separator"></span>
            <select title="Text Alignment" class="ql-align">
              <option value="left" selected></option>
              <option value="center"></option>
              <option value="right"></option>
              <option value="justify"></option>
            </select></span><span class="ql-format-group"><span title="Link" class="ql-format-button ql-link"></span><span class="ql-format-separator"></span><span title="Image" class="ql-format-button ql-image"></span><span class="ql-format-separator"></span><span title="List" class="ql-format-button ql-list"></span></span></div>
        <div class="editor-container"></div>
      </div>
    </div>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.js"></script>
    <script type="text/javascript" src="quill/quill.js"></script>
    <script type="text/javascript" src="quill/examples/scripts/advanced.js"></script>
  </body>
</html>