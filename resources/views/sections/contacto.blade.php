<section id="contacto">
  <div class="section-header">
    <div class="section-tag">Hablemos</div>
    <h2 class="section-title">INICIE SU<br>PROYECTO</h2>
    <div class="gold-line"></div>
  </div>

  <div class="contact-grid">
    {{-- Info --}}
    <div class="contact-info">
      <h3>¿Listo para construir?</h3>
      <p>Contáctenos hoy y uno de nuestros especialistas lo atenderá en menos de 24 horas para coordinar una visita técnica sin costo.</p>

      <div class="contact-details">
        <div class="contact-item">
          <div class="contact-icon"><i class="bi bi-geo-alt"></i></div>
          <div>
            <h5>Oficina Central</h5>
            <p>Av. Francisco Palao A-12, San Sebastián <br>Cusco, Perú</p>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-icon"><i class="bi bi-telephone"></i></div>
          <div>
            <h5>Teléfono</h5>
            <p>+51 992-920-588<br>+51 986-060-819</p>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-icon"><i class="bi bi-envelope"></i></div>
          <div>
            <h5>Email</h5>
            <p>proyectos@madi.solutions<br>contacto@madi.solutions</p>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-icon"><i class="bi bi-clock"></i></div>
          <div>
            <h5>Horario de Atención</h5>
            <p>Lunes a Viernes: 8am – 6pm<br>Sábados: 9am – 1pm</p>
          </div>
        </div>
      </div>
    </div>

    {{-- Formulario --}}
    <div>

      {{-- Mensaje de éxito --}}
      @if(session('success'))
        <div class="alert-success">
          <i class="bi bi-check-circle"></i> {{ session('success') }}
        </div>
      @endif

      {{-- Errores de validación --}}
      @if($errors->any())
        <div class="alert-error">
          <ul>
            @foreach($errors->all() as $error)
              <li><i class="bi bi-exclamation-circle"></i> {{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
        @csrf

        <div class="form-row">
          <div class="form-group">
            <label for="name">Nombre Completo</label>
            <input type="text" id="name" name="name"
                   value="{{ old('name') }}"
                   placeholder="Hernesto Pérez"
                   autocomplete="name"
                   class="{{ $errors->has('name') ? 'input-error' : '' }}">
          </div>
          <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" name="email"
                   value="{{ old('email') }}"
                   placeholder="hernesto@gmail.com"
                   autocomplete="email"
                   class="{{ $errors->has('email') ? 'input-error' : '' }}">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="phone">Teléfono</label>
            <input type="tel" id="phone" name="phone"
                   value="{{ old('phone') }}"
                   placeholder="+51 999 888 777"
                   autocomplete="tel">
          </div>
          <div class="form-group">
            <label for="type">Tipo de Proyecto</label>
            <select id="type" name="type" autocomplete="off">
              <option value="">Seleccionar...</option>
              @foreach(['Construcción Residencial','Edificio Comercial','Obra Industrial','Remodelación','Otro'] as $opt)
                <option value="{{ $opt }}" {{ old('type') === $opt ? 'selected' : '' }}>{{ $opt }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="budget">Presupuesto Estimado</label>
          <select id="budget" name="budget" autocomplete="off">
            <option value="">Seleccionar rango...</option>
            @foreach(['Menos de $50,000','$50,000 – $200,000','$200,000 – $1,000,000','Más de $1,000,000'] as $b)
              <option value="{{ $b }}" {{ old('budget') === $b ? 'selected' : '' }}>{{ $b }}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="message">Descripción del Proyecto</label>
          <textarea id="message" name="message"
                    autocomplete="off"
                    placeholder="Cuéntenos sobre su proyecto: ubicación, dimensiones, requerimientos especiales..."
                    class="{{ $errors->has('message') ? 'input-error' : '' }}">{{ old('message') }}</textarea>
        </div>

        <button type="submit" class="btn-primary-gold">
          Enviar Solicitud <i class="bi bi-arrow-right"></i>
        </button>
      </form>
    </div>
  </div>
</section>
