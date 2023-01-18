 <!-- ***** Reservation Us Area Starts ***** -->
 <section class="section" id="reservation">
     <div class="container">
         <div class="row">
             <div class="col-lg-6 align-self-center">
                 <div class="left-text-content">
                     <div class="section-heading">
                         <h6>Contact Us</h6>
                         <h2>Here You Can Make A Reservation Or Just walkin to our cafe</h2>
                     </div>
                     <p>Donec pretium est orci, non vulputate arcu hendrerit a. Fusce a eleifend riqsie, namei
                         sollicitudin urna diam, sed commodo purus porta ut.</p>
                     <div class="row">
                         <div class="col-lg-6">
                             <div class="phone">
                                 <i class="fa fa-phone"></i>
                                 <h4>Phone Numbers</h4>
                                 <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
                             </div>
                         </div>
                         <div class="col-lg-6">
                             <div class="message">
                                 <i class="fa fa-envelope"></i>
                                 <h4>Emails</h4>
                                 <span><a href="#">hello@company.com</a><br><a
                                         href="#">info@company.com</a></span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-6">
                 <div class="contact-form">
                     <form id="contact" action="{{ url('reserva') }}" method="post">
                         @csrf
                         <div class="row">
                             <div class="col-lg-12">
                                 <h4>Table Reservation</h4>
                             </div>
                             <div class="col-lg-6 col-sm-12">
                                <span style="color: red; font-weight:bold;">
                                    @error('name')
                                         {{ $message }}
                                     @enderror
                                 </span>
                                 <fieldset>
                                     <input name="name" type="text" id="name" placeholder="Your Name*" value="{{ old('name') }}">
                                 </fieldset>

                             </div>

                             <div class="col-lg-6 col-sm-12">
                                <span style="color: red; font-weight:bold;">
                                    @error('email')
                                         {{ $message }}
                                     @enderror
                                 </span>
                                 <fieldset>
                                     <input name="email" type="text" id="email"
                                         placeholder="Your Email Address" value="{{ old('email') }}">
                                 </fieldset>
                             </div>
                             <div class="col-lg-6 col-sm-12">
                                <span style="color: red; font-weight:bold;">
                                    @error('phone')
                                         {{ $message }}
                                     @enderror
                                 </span>
                                 <fieldset>
                                     <input name="phone" type="number" id="phone" placeholder="Phone Number*" value="{{ old('phone') }}">
                                 </fieldset>
                             </div>
                             <div class="col-md-6 col-sm-12">
                                <span style="color: red; font-weight:bold;">
                                    @error('guest')
                                         {{ $message }}
                                     @enderror
                                 </span>
                                 <fieldset>
                                     <input name="guest" type="number" id="phone"
                                         placeholder=" Number of gestes" value="{{ old('guest') }}">
                                 </fieldset>
                             </div>
                             <div class="col-lg-6">
                                <span style="color: red; font-weight:bold;">
                                    @error('date')
                                         {{ $message }}
                                     @enderror
                                 </span>
                                 <div id="filterDate2">
                                     <div class="input-group date" data-date-format="dd/mm/yyyy">
                                         <input name="date" type="text" class="form-control"
                                             placeholder="dd/mm/yyyy" value="{{ old('date') }}">
                                         <div class="input-group-addon">
                                             <span class="glyphicon glyphicon-th"></span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-6 col-sm-12">
                                <span style="color: red; font-weight:bold;">
                                    @error('time')
                                         {{ $message }}
                                     @enderror
                                 </span>
                                 <fieldset>
                                     <input name="time" type="time" class="form-control" placeholder="time" value="{{ old('time') }}">
                                 </fieldset>
                             </div>
                             <div class="col-lg-12">
                                <span style="color: red; font-weight:bold;">
                                    @error('message')
                                         {{ $message }}
                                     @enderror
                                 </span>
                                 <fieldset>
                                     <textarea name="message" rows="6" id="message" placeholder="Message" value="{{ old('message') }}"></textarea>
                                 </fieldset>
                             </div>
                             <div class="col-lg-12">
                                 <fieldset>
                                     <button type="submit" id="form-submit" class="main-button-icon">Make A
                                         Reservation</button>
                                 </fieldset>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- ***** Reservation Area Ends ***** -->
