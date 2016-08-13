<div class="container-fluid" id="footer">
    <div class="row">
        <ul id="footerList">
            <li><a href="http://www.facebook.com/taidoido/" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/facebook.svg" alt="Facebook"></a></li>
            <li><a href="http://www.instagram.com/tai_doido/" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/instagram.svg" alt="Instagram"></a></li>
            <?php /*<li><a href="#" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/soundcloud.svg" alt="Soudcloud"></a></li>
            <li><a href="#" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/android.svg" alt="Google Play"></a></li>*/ ?>
            <p>contato@taidoido.com.br</p>
        </ul>
        <div id="bits">
            <a href="http://8bits.cc" target="_blank">
                <img src="<?php bloginfo('template_directory');?>/images/bits.svg" alt=" Estúdio 8bits">
            </a>
        </div>
    </div>
</div>

<!-- JAVASCRIPT -->
<script src="<?php bloginfo('template_directory');?>/js/jquery-2.2.0.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/bootstrap.min.js"></script>

<!-- MODAL CONTATO -->
<div class="modal fade" id="contato" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Como podemos ajudar?</h3>
            </div>
            
            <div class="modal-body">
                <?php include "contato.php"; ?>
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" name="nome" class="form-control" placeholder="Nome" required>
                    </div>
                    
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    
                    <div class="form-group">
                        <input type="tel" name="fone" class="form-control" placeholder="Telefone">
                    </div>
                    
                    <div class="form-group">
                        <textarea name="msg" class="form-control" rows="4" placeholder="Mensagem" required></textarea>
                    </div>
                        
                    <button type="submit" class="btn btn-default" name="enviar">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>