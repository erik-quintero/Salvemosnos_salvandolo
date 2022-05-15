var inputs = document.getElementsByClassName('formulario__input');
for (var i = 0; i < inputs.length; i++) {
   inputs[i].addEventListener('keyup'), function() {
      if (this.value.length >= 1) {
         this.nextElementSibling.classList.add('fijar');
      } else {
         this.nextElementSibling.classList.remove('fijar');
      }
   }
}

function randomize(listaRetos) {
  return listaRetos[Math.floor(Math.random() * listaRetos.length)];
}

let listaRetos = ['Recoger basura que esta dentro del agua', 'Recoger basura que esta en la arena', 'Evitar el uso de plasticos cerca del agua', 'Tomarse selfie recogiendo basura', 'Toma un video o foto de la parte de playa que has limpiado']
console.log(randomize(listaRetos));
