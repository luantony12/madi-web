<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <style>
    body { font-family: Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 0; }
    .wrapper { max-width: 600px; margin: 32px auto; background: #ffffff; border-radius: 8px; overflow: hidden; }
    .header { background: #22467a; padding: 32px; text-align: center; }
    .header h1 { color: #C9A84C; font-size: 28px; margin: 0; letter-spacing: 2px; }
    .header p { color: #8FAFD4; font-size: 13px; margin: 8px 0 0; }
    .body { padding: 32px; }
    .field { margin-bottom: 20px; border-bottom: 1px solid #f0f0f0; padding-bottom: 20px; }
    .field:last-child { border-bottom: none; margin-bottom: 0; }
    .field label { display: block; font-size: 11px; letter-spacing: 2px; text-transform: uppercase; color: #888; margin-bottom: 6px; }
    .field p { font-size: 15px; color: #222; margin: 0; }
    .badge { display: inline-block; background: #22467a; color: #C9A84C; padding: 4px 12px; border-radius: 4px; font-size: 12px; font-weight: bold; letter-spacing: 1px; }
    .footer { background: #f9f9f9; padding: 20px 32px; text-align: center; font-size: 12px; color: #aaa; border-top: 1px solid #eee; }
    .message-box { background: #f9f9f9; border-left: 3px solid #C9A84C; padding: 16px; border-radius: 0 4px 4px 0; font-size: 15px; color: #333; line-height: 1.7; }
  </style>
</head>
<body>
  <div class="wrapper">
    <div class="header">
      <h1>MADI CONSTRUCTORA</h1>
      <p>Nueva solicitud de proyecto recibida</p>
    </div>

    <div class="body">
      <div class="field">
        <label>Cliente</label>
        <p>{{ $data['name'] }}</p>
      </div>
      
      {{-- NUEVO --}}
      <div class="field">
        <label>DNI</label>
        <p>{{ $data['dni'] }}</p>
      </div>


      <div class="field">
        <label>Correo electrónico</label>
        <p><a href="mailto:{{ $data['email'] }}" style="color:#22467a;">{{ $data['email'] }}</a></p>
      </div>

      @if(!empty($data['phone']))
      <div class="field">
        <label>Teléfono</label>
        <p>{{ $data['phone'] }}</p>
      </div>
      @endif

      @if(!empty($data['type']))
      <div class="field">
        <label>Tipo de proyecto</label>
        <p><span class="badge">{{ $data['type'] }}</span></p>
      </div>
      @endif

      @if(!empty($data['budget']))
      <div class="field">
        <label>Presupuesto estimado</label>
        <p>{{ $data['budget'] }}</p>
      </div>
      @endif

      <div class="field">
        <label>Descripción del proyecto</label>
        <div class="message-box">{{ $data['message'] }}</div>
      </div>
    </div>

    <div class="footer">
      Este correo fue generado automáticamente desde el formulario de <strong>madi.solutions</strong><br>
      {{ now()->format('d/m/Y H:i') }} — Cusco, Perú
    </div>
  </div>
</body>
</html>