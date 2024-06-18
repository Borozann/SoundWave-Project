<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>.card {
  position: relative;
  width: 11.875em;
  height: 16.5em;
  box-shadow: 0px 1px 13px rgba(0,0,0,0.1);
  cursor: pointer;
  transition: all 120ms;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #fff;
  padding: 0.5em;
  padding-bottom: 3.4em;
}

.card::after {
  content: "Add to Cart";
  padding-top: 1.25em;
  padding-left: 1.25em;
  position: absolute;
  left: 0;
  transform: translateY(0PX); /* Ajustado para corrigir o problema do bug no hover */
  background: #00AC7C;
  color: #fff;
  height: 2.5em;
  width: 90%;
  transition: all 80ms;
  font-weight: 600;
  text-transform: uppercase;
  visibility: hidden;
}


.card .title {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 0.9em;
  position: absolute;
  left: 0.625em;
  bottom: 1.875em;
  font-weight: 400;
  color: #000;
}

.card .price {
  font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
  font-size: 0.9em;
  position: absolute;
  left: 0.625em;
  bottom: 0.625em;
  color: #000;
}

.card:hover::after {
  bottom: 0;
  visibility: visible;
}

.card:active {
  transform: scale(0.98);
}

.card:active::after {
  content: "Added !";
  height: 3.125em;
}

.text {
  max-width: 55px;
}

.image {
  background: rgb(241, 241, 241);
  width: 100%;
  height: 100%;
  display: grid;
  place-items: center;
}</style>
<div class="card">
<div class="image"><span class="text">This is a chair.</span></div>
  <span class="title">Cool Chair</span>
  <span class="price">$100</span>
</div>
</body>
</html>