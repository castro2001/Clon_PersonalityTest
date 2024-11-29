document.addEventListener('DOMContentLoaded', () => {
    const items = [
        document.getElementById('item-1'),
        document.getElementById('item-2'),
        document.getElementById('item-3'),
        document.getElementById('item-4'),
        document.getElementById('item-5')
    ];
    
    let progressBar = document.getElementById('progress-bar');
    let progressValue = document.getElementById('radial-progress-value');
    let progressText = document.getElementById('radial-progress-text');
    let currentItem = 0;
    let progressPercentage = 0;

    progressBar.classList.add('indeterminate');
    // Inicia la animación indeterminate
    
    function updateProgress() {
        if (currentItem < items.length) {
            items[currentItem].classList.add('text-white');    
            items[currentItem].querySelector('svg').classList.remove('bg-gray-200');
            progressPercentage += 20; 
            
            // Actualiza el progreso radial
            progressValue.style = `--value:${progressPercentage}; --size:12.2rem;--thickness:12px`;
            progressText.innerText = `${progressPercentage}%`;
            currentItem++;
        }

        // Si llega al último ítem, elimina la animación indeterminate
        if (currentItem === items.length) {
            // Detiene la animación indeterminate
            progressBar.classList.remove('indeterminate');
            
            setTimeout(() => {
                //alert("¡Carga completa!");
                // Aquí puedes redirigir a otra página si lo deseas
                 window.location.href="http://lading.atwebpages.com/preview-test";
            }, 500); // Espera un poco antes de mostrar el alert
        }
    }

    // Simula el proceso de carga
    setInterval(updateProgress, 500); // cada 1 segundo
});
// {4+uJ@y)=SQf~