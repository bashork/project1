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

      <div class="basic-wrapper">

        <div class="toolbar-container">

          <select title="Font" class="ql-font">
            <option value="sans-serif" selected>Sans Serif</option>
            <option value="Georgia, serif">Serif</option>
            <option value="Monaco, 'Courier New', monospace">Monospace</option>
          </select>

          <select title="Size" class="ql-size">
            <option value="12px">Väike(12px)</option>
            <option value="14px">Tavaline(14px)</option>
            <option value="18px">Suur(18px)</option>
            <option value="24px">SUUR(24px)</option>
          </select>
          <select title="Text Alignment" class="ql-align">
            <option value="left" selected>Left</option>
            <option value="center">Center</option>
            <option value="right">Right</option>
            <option value="justify">Justify</option>
          </select>
          <button title="Bold" class="ql-bold">Bold</button>
          <button title="Italic" class="ql-italic">Italic</button>
          <button title="Underline" class="ql-underline">Under</button>
          <button title="List" class="ql-list">List</button>
        </div>
        <div class="editor-container"></div>
      </div>
      
      </div>
    </div>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.js"></script>
    <script type="text/javascript" src="quill/quill.js"></script>
    <script type="text/javascript" src="quill/examples/scripts/advanced.js"></script>
  </body>
</html>