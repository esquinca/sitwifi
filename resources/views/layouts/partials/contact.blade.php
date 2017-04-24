<section id="contact" class="section-padding wow fadeInUp delay-05s">
  <div class="container">
    <div class="row">

      <div class="col-md-12 text-center white">
        <h2 class="service-title pad-bt15">{{ trans('text.title_contacto')}}</h2>
        <p class="sub-title pad-bt15">{{ trans('text.content_contacto')}}</p>
        <hr class="bottom-line white-bg">
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="contact-map-wrapper">
  				<div class="contact-map">
            <iframe class="map" src="https://www.google.com/maps/d/u/2/embed?mid=1TbCHkhIi0xbp92AQmrzcf5hm5DM" width="540" height="500"></iframe>
  					<!--<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.6971250195966!2d-99.16860888464319!3d19.425488045940845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff360b580971%3A0xfc481683f0009da6!2sCalle+Hamburgo+159%2C+Ju%C3%A1rez%2C+06600+Col+Ju%C3%A1rez%2C+D.F.!5e0!3m2!1ses!2smx!4v1444662260202"  frameborder="0" style="border:0" allowfullscreen></iframe>-->
  				</div>
  			</div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="contact-form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
                <div class="col-md-6 padding-right-zero">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Ingrese su nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="col-md-6 padding-right-zero">
                    <div class="form-group">
                        <input type="text" class="form-control" name="empresa" id="empresa" placeholder="Nombre de la Empresa" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="col-md-6 padding-right-zero">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Ingrese el correo electronico" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="col-md-6 padding-right-zero">
                    <div class="form-group">
                        <input type="number" class="form-control" name="subject" id="telefono" placeholder="telefono" data-rule="minlen:10" data-msg="Please enter at least 10 chars" />
                        <div class="validation"></div>
                    </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <select  name="producto" id="producto" class="form-control" data-rule="required:true" data-msg="Please choose a element">
                      <option value="">Selecciona un producto</option>
                      <option value="Wifi Administrado">Wifi Administrado</option>
                      <option value="Venta  de infraestructura WiFi">Venta  de infraestructura WiFi</option>
                      <option value="Publicidad con WifiMedia<">Publicidad con WifiMedia</option>
                      <option value="Otros">Otros</option>
                    </select>
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validation"></div>
                    </div>
                  <button type="submit" class="btn btn-primary btn-submit">SEND NOW</button>
                </div>
            </form>
        </div>
      </div>

    </div>
  </div>
</section>
