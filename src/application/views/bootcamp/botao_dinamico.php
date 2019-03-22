<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Botao Dinamico</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootcamp/botao-dinamico/botao-dinamico.css" />
</head>
<body>
<section class="button-creator">
  <form action="" id="controles">
    <label for="texto">Texto</label>
    <input type="text" id="texto" name="texto">
    <label for="color">Cor</label>
    <input type="color" id="color" name="color">
    <label for="backgroundColor">Cor de fundo</label>
    <input type="color" id="backgroundColor" name="backgroundColor">
    <label for="height">Height</label>
    <input type="range" id="height" name="height" min="0" max="200">
    <label for="width">Width</label>
    <input type="range" id="width" name="width" min="0" max="600">
    <label for="border">Borda</label>
    <input type="text" id="border" name="border">
    <label for="borderRadius">Border Radius</label>
    <input type="range" id="borderRadius" name="borderRadius" min="0" max="20">
    <select name="fontFamily" id="fontFamily">
      <option value="Arial">Arial</option>
      <option value="Georgia">Georgia</option>
      <option value="monospace">Monospace</option>
    </select>
    <label for="fontSize">font-size</label>
    <input type="number" id="fontSize" name="fontSize">
  </form>
  <section class="resultado">
    <button class="btn">Clique</button>
    <pre>
      <code class="css">
      </code>
    </pre>
  </section>
</section>
<script>
const btn = document.querySelector('.btn');
</script>
  <script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>
  <script type="module" src="<?php echo base_url();?>assets/js/bootcamp/botao-dinamico/botao-dinamico.js"></script>
</body>
</html>