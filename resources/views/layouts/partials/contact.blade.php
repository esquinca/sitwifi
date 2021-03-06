<section id="contact" class="section-padding wow fadeInUp delay-05s">
  <div class="container">
    <div class="row">

      <div class="col-md-12 text-center white">
        <h2 class="service-title pad-bt15">{{ trans('text.title_contacto')}}</h2>
        <p class="sub-title pad-bt15">{{ trans('text.content_contacto')}}</p>
        <hr class="bottom-line white-bg">
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
  				<div class="contact-map">
            <iframe class="map" src="https://www.google.com/maps/d/u/2/embed?mid=1TbCHkhIi0xbp92AQmrzcf5hm5DM" width="540" height="500"></iframe>
  				</div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="contact-form"> 
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
                {{ csrf_field() }}
                <div class="col-md-6 padding-right-zero">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Ingrese su nombre." data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres" />
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="col-md-6 padding-right-zero">
                    <div class="form-group">
                        <input type="text" class="form-control" name="empresa" id="empresa" placeholder="Nombre de la Empresa." data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres" />
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="col-md-6 padding-right-zero">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico." data-rule="email" data-msg="Por favor ingrese un correo valido." />
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="col-md-6 padding-right-zero">
                    <div class="form-group">
                        <input type="number" class="form-control" name="subject" id="telefono" placeholder="Teléfono." data-rule="minlen:10" data-msg="Por favor ingrese al menos 10 caracteres." />
                        <div class="validation"></div>
                    </div>
                </div>

                <div class="col-md-12 padding-right-zero">
                  <div class="form-group">
                    <select  name="producto" id="producto" class="form-control" data-rule="required:true" data-msg="Por favor seleccione un elemento.">
                      <option value="">Selecciona un producto</option>
                      <option value="Wifi Administrado">Wifi Administrado</option>
                      <option value="Venta  de infraestructura WiFi">Venta  de infraestructura WiFi</option>
                      <option value="Publicidad con WifiMedia<">Publicidad con WifiMedia.</option>
                      <option value="Otros">Otros</option>
                    </select>
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-md-12 padding-right-zero">
                  <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escriba su mensaje." placeholder="Su mensaje."></textarea>
                        <div class="validation"></div>
                    </div>
                  <button type="submit" class="btn btn-primary btn-submit">Enviar</button>
                </div>
            </form>
          </div>

      </div>
    </div>
  </div>
</section>
