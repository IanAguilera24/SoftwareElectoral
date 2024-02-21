// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}

const data = [
    { value: 23, label: 'Partido 1' },
    { value: 32, label: 'Partido 2' },
    { value: 17, label: 'Partido 3' },
    { value: 28, label: 'Partido 4' },
  ];
  
// Paleta de colores predefinida
const colorPalette = ['#574AE2', '#222A68', '#654597', '#AB81CDF'];

// Función para crear el histograma
function drawHistogram() {
    const histogramDiv = document.getElementById('histogram');
    const numBars = data.length;
    histogramDiv.style.setProperty('--num-bars', numBars); // Establecer la variable CSS
  
    // Limpiar el contenido previo
    histogramDiv.innerHTML = '';
  
    // Calcular la altura máxima del histograma
    const maxHeight = Math.max(...data.map(item => item.value));
  
    // Crear las barras del histograma
    data.forEach((item, index) => {
      const barHeight = (item.value / maxHeight) * 100; // Convertir el valor a porcentaje
      const bar = document.createElement('div');
      bar.className = 'bar';
      bar.style.height = `${barHeight}%`;
      bar.style.left = `calc(${index * (100 / numBars)}% + 5px)`; // Posicionar la barra horizontalmente
      bar.style.backgroundColor = colorPalette[index % colorPalette.length]; // Asignar un color de la paleta
  
      // Agregar el porcentaje dentro de la barra
      const percentageText = document.createElement('div');
      percentageText.className = 'bar-percentage';
      percentageText.textContent = `${item.value}%`;
      bar.appendChild(percentageText);
  
      const label = document.createElement('div');
      label.className = 'bar-label';
      label.textContent = item.label;
      bar.appendChild(label);
      histogramDiv.appendChild(bar);
    });
  }
  
  // Dibujar el histograma cuando la página esté completamente cargada
  document.addEventListener('DOMContentLoaded', drawHistogram);
