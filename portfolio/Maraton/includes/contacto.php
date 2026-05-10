<section class="contacto" id="contacto">
    
    <!-- Uso de grid -->
    <div class="wrapper contacto_block  grid_l_33-66">
        <h2 class="cell_l_x_2">CONTACTO</h2>   
        <div class="contacto_text">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo doloribus voluptatem cum labore quas quam cupiditate quis, ab veritatis rem, inventore dolor ex, aliquam rerum.</p>
            <p>Possimus mollitia architecto doloribus distinctio pariatur, veniam dicta repellat voluptates. Vitae natus, modi sed unde est provident. Sapiente harum, vero. Cum, quidem voluptates possimus officia.</p>
        </div>
    
        <form action="" method="POST" class="contacto_form grid_m_50-50">
           
            <label for="asunto">Elige el asunto</label>
            <select name="asunto" id="asunto">
                <option value="">Elige un motivo de contacto</option>
                <option value="duda">Duda respecto al horario</option>
                <option value="saludo">Solamente quiero saludar</option>
                <option value="patrocinio">Mi objetivo es patrocinar</option></select>
                
            <label for="nombre">Nombre </label>
            <input name="nombre" type="text" id="nombre" placeholder="Nombre" required>
            
            <label for="mail">Email </label>
            <input type="email" name="mail" id="mail" placeholder="Email@..." required>
            
            <label for="comentario">Mensaje</label>
            <textarea type="textarea" name="comentario" id="comentario" placeholder="Escribe tu mensaje aqui..." required></textarea>
            
            <!-- Usamos modaal para la politica de privacidad -->
            <div class="contacto_rgpd">
            <input type="checkbox" name="terminos" value="Terminos y Condiciones"> 
               <span>He leido y acepto la <a href="texto_rgpd.php" class="modal_ajaxpino" >Política de privacidad</a></span>
                
                    
                    <label class="rgpd" for="rgpd"> </label>
                
            </div>
            
            
           <button type="submit" id="enviar" class="boton_form cell_l_x_2">Enviar formulario</button>
        </form>
        
    </div>
       
       
</section>
       