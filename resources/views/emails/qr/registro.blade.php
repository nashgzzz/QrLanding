<x-mail::message>
<div style="
    border: 1px solid #e5e7eb;
    border-radius: 12px;
    padding: 26px;
    background: #ffffff;
    font-family: Arial, Helvetica, sans-serif;
">
  
  <h1 style="font-size: 24px; color: #111827; margin-bottom: 18px;">
      ¡Gracias por registrar tus datos! 🙌
  </h1>

  <p style="font-size: 15px; color: #374151; line-height: 1.6;">
      Hemos recibido la información correctamente.  
      Aquí tienes un resumen de lo que ingresaste:
  </p>

  <div style="
      margin-top: 20px; 
      margin-bottom: 20px; 
      padding: 16px; 
      background:#f9fafb;
      border-radius:10px;
      border:1px solid #e5e7eb;
  ">
      <p style="font-size: 15px; margin:4px 0;"><strong>RUT:</strong> {{ $data['rut'] }}</p>
      <p style="font-size: 15px; margin:4px 0;"><strong>Nombre:</strong> {{ $data['nombre'] }}</p>
      <p style="font-size: 15px; margin:4px 0;"><strong>Telefono:</strong> {{ $data['telefono'] }}</p>
      <p style="font-size: 15px; margin:4px 0;"><strong>Correo:</strong> {{ $data['correo'] }}</p>
  </div>

  <p style="font-size: 15px; color: #374151; line-height: 1.6;">
      Nos pondremos en contacto si necesitamos más información.  
      ¡Gracias por confiar en nosotros!
  </p>

  <p style="font-size: 14px; color: #6b7280; line-height: 1.6; margin-top: 20px;">
      Saludos,<br>
      <strong>BSBSPA</strong>
  </p>

</div>
</x-mail::message>
