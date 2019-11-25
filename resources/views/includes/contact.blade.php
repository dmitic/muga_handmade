<!-- third section start--> 
<div id="contact">
    <div class="contact-flex">
      <div class="contact-cell">      
        <h6 class="bottom-line">Kontaktirajte nas</h6>         
        <!-- <p>Miloš Mitrović PR Muga</p> -->
        <p><i class="fa fa-home" aria-hidden="true"></i> Neka adresa 45</p>
        <p><i class="fa fa-map-marker" aria-hidden="true"></i> Jakovo - Beograd</p>
        <p><a href="mailto:milos.mit@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> milos.mit@gmail.com</a></p>
        <p><a href="tel:+38164123456" class="phone"><i class="fa fa-phone-square" aria-hidden="true"></i> +38164 123-456</a></p>
        <p><a href="https://www.facebook.com/pages/category/Clothing--Brand-/MUGA-Handmade-617489761939014/" target="_blank"> <i class="fa fa-facebook-square" aria-hidden="true"></i> MUGA handmade - facebook</a></p>
        <p><a href="https://www.instagram.com/muga_handmade/?hl=en" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> MUGA handmade -  instagram</a></p>
      </div>
      
     <div class="contact-cell">
      <form method="post" action="{{url('send')}}">
        @csrf
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <a href="#!" class="close" data-dismiss="alert"><i class="fa fa-times-circle"></i></a>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          @if ($message = Session::get('poslat'))
            <div class="alert alert-success">
                <a href="#!" class="close" data-dismiss="alert"><i class="fa fa-times-circle"></i></a>
              {{ $message }}
            </div>
          @endif
          <div class="form-group">
            <label for="">E-mail adresa</label>
          <input type="email" name="mail" class="form-control" id="" placeholder="ime@primer.com" value="{{ old('mail') }}">
          </div>
          <div class="form-group">
            <label for="">Ime</label>
            <input type="text" name="ime" class="form-control" placeholder="Ime" value="{{ old('ime') }}">
          </div>
          <div class="form-group">
            <label for="">Prezime</label>
            <input type="text" name="prezime" class="form-control" placeholder="Prezime"  value="{{ old('prezime') }}">
          </div>
          <div class="form-group">
            <label for="">Tekst poruke</label>
            <textarea name="poruka" class="form-control" id="" rows="3">{{ old('poruka') }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary">Pošaljite poruku</button>
        </form>
        
    </div>
    </div>
   </div>
  </div>
<!-- third section end--> 