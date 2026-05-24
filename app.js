function CustomAlert(){
    this.render = function(){
        // Capturamos los dos elementos
        let popUpBox = document.getElementById('popUpBox');
        let popUpOverlay = document.getElementById('popUpOverlay');
        
        // ¡REGLA DE ORO!: Hay que encender AMBOS para que se vea en pantalla
        popUpOverlay.style.display = "block";
        popUpBox.style.display = "block";
        
        // Inyectamos el botón de regreso dentro de la caja
        document.getElementById('closeModal').innerHTML = '<a href="index.php"><button type="button" style="padding: 10px 20px; background: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;">¡Sí quiero!</button></a>';
    }

    this.ok = function(){
        document.getElementById('popUpBox').style.display = "none";
        document.getElementById('popUpOverlay').style.display = "none";
    }
}