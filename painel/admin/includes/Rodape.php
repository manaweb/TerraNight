 <!-- LIMPAR --> <div style="clear: both"></div>
                
 </div>
 
 
 
<!-- RODAPE --> 
            <p id="footer">
			&copy; <?=date("Y");?> - Man&aacute; WEB <a href="http://www.manaweb.com.br"target="_blank"> Todos os direitos reservados.<br>
Powered By Man&aacute; WEB</a><br>
			</p>
<!-- RODAPE-->      
     
</div>
		

		
<!-- IMPORTANTES --> 

		<script type="text/javascript" src="http://dwpe.googlecode.com/svn/trunk/_shared/EnhanceJS/enhance.js"></script>	
   		<script type='text/javascript' src='http://dwpe.googlecode.com/svn/trunk/charting/js/excanvas.js'></script>
        <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js'></script>
        <script src="../ckeditor/ckeditor.js"></script>
        <script src="../ckeditor/config.js"></script>
        <script src="../ckeditor/adapters/jquery.js"></script>
        <script type='text/javascript' src='../js/jquery.fancybox-1.3.4.pack.js'></script>
        <script type='application/javascript' src='../js/fullcalendar.min.js'></script>
        <script type='text/javascript' src='../js/visualize.jQuery.js'></script>
        <script type='application/javascript' src='../js/functions.js'></script>
        <script type="text/javascript" src="../datepicker/jquery.datetimepicker.js"></script>
        <script>
            var config = CKEDITOR.config;
            CKEDITOR.config.extraPlugins = 'toolbar';
            CKEDITOR.disableAutoInline = true;
            CKEDITOR.replace('jqte',{
                toolbar: null,
                toolbarGroups: null
            });
            $(function() {
                $('input[type=data]').click(function(e) {
                    e.preventDefault();
                    abrirCalendario('', 'frmDados', this, 'date');
                });
            });
        </script>
</body>
</html>