<section id="contact" class="section contact-section reveal">
    <div class="container contact-grid">
        <div class="contact-form-wrap">
            <p class="eyebrow"><span></span> Get in touch</p><h2>Let’s plan something <em>special.</em></h2><p class="contact-lead">Tell us what you have in mind and a member of our team will get back to you shortly.</p>
            @if (session('success'))<div class="flash flash-success" role="status">{{ session('success') }}</div>@endif
            @if ($errors->any())<div class="flash flash-error" role="alert">Please check the details below and try again.</div>@endif
            <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
                @csrf
                <div class="honeypot" aria-hidden="true"><label>Website<input name="website" tabindex="-1" autocomplete="off"></label></div>
                <div class="form-row"><label>Name<input type="text" name="name" value="{{ old('name') }}" required placeholder="Your full name"></label><label>Email<input type="email" name="email" value="{{ old('email') }}" required placeholder="you@example.com"></label></div>
                <div class="form-row"><label>Phone number<input type="tel" name="phone" value="{{ old('phone') }}" required placeholder="0800 000 0000"></label><label>What can we help with?<select name="service" required><option value="" disabled {{ old('service') ? '' : 'selected' }}>Select a service</option>@foreach (['Hajj and Umrah Visas','Flight Ticketing','Hotel Reservations','All Visa Categories','Travel Consultancy','General Contracts'] as $service)<option value="{{ $service }}" @selected(old('service') === $service)>{{ $service }}</option>@endforeach</select></label></div>
                <label>Tell us about your plans<textarea name="message" rows="4" required placeholder="A few details about your trip...">{{ old('message') }}</textarea></label>
                <button class="button button-navy" type="submit">Send enquiry <span aria-hidden="true">↗</span></button>
            </form>
        </div>
        <aside class="address-card"><div class="address-card-heading"><span class="mini-mark">A</span><span>Find us in Kano</span></div><div class="map-art" aria-label="Stylised map showing Ammarco Travels in Kano"><span class="map-pin">⌖</span><i></i><b></b><small>KANO</small></div><div class="address-details"><p>No. 8 Audu Bako Way<br>Baba Plaza, Kano, Nigeria</p><a href="tel:+2348062544020">0806 254 4020</a><a href="tel:+2349080907070">0908 090 7070</a><a href="tel:+2349039169986">0903 916 9986</a><a href="mailto:ammarcotravels@gmail.com">ammarcotravels@gmail.com</a></div></aside>
    </div>
</section>
