const express = require('express');

const app = express();

app.get('/', (req, res) => {
  res.send('Hola desde mi app con node js -233e3');
});

app.listen(8000, () => console.log('Escuchando en el puerto 8000'));
