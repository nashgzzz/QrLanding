@extends('layouts.app')

@section('title', 'Registro QR')

@section('content')

<section class="qr-wrapper" 
style="min-height: 100vh; display:flex; justify-content:center; align-items:center; background:#eef2f5;">


    <div class="qr-card" style="
        background:white;
        padding:35px;
        border-radius:22px;
        max-width:900px;
        width:95%;
        box-shadow:0 6px 28px rgba(0,0,0,0.08);
        display:flex;
        gap:35px;
        flex-wrap:wrap;
    ">
    
        <div style="flex:1; min-width:320px;">
            
            <h1 style="font-size:34px; font-weight:900; margin-bottom:8px; color:#000;">
                BSB<span style="color:#1a73e8;">SPA</span>
            </h1>
            <p style="color:#555; margin-bottom:25px; font-size:15px; line-height:1.4;">
                Bienvenido 👋<br>
                Registra tus datos para continuar y recibir asistencia.
            </p>
            <form method="POST" action="{{ route('registro.qr') }}" style="text-align:left;">
                @csrf
                <label style="font-weight:600;">RUT</label>
                <input type="text" name="rut" placeholder="11.111.111-1" required
                    style="width:100%; padding:12px; margin-bottom:16px; border-radius:12px; border:1px solid #ccc;">

                <label style="font-weight:600;">Nombre</label>
                <input type="text" name="nombre" placeholder="Tu nombre" required
                    style="width:100%; padding:12px; margin-bottom:16px; border-radius:12px; border:1px solid #ccc;">

                     <label style="font-weight:600;">Telefono</label>
                <input type="text" name="telefono" placeholder="+56912345678" required
                    style="width:100%; padding:12px; margin-bottom:16px; border-radius:12px; border:1px solid #ccc;">

                <label style="font-weight:600;">Correo</label>
                <input type="email" name="correo" placeholder="correo@ejemplo.cl" required
                    style="width:100%; padding:12px; margin-bottom:24px; border-radius:12px; border:1px solid #ccc;">

                <button type="submit"
                    style="width:100%; background:#1a73e8; color:white; padding:14px; border:none; border-radius:12px; font-size:17px; font-weight:700; cursor:pointer;">
                    Enviar datos
                </button>
            </form>

        </div>

        {{-- COLUMNA DERECHA -> SLIDER --}}
        <div style="
            flex:1;
            min-width:280px;
            background:#f9fafc;
            border-radius:18px;
            padding:25px 30px;
            border:1px solid #e2e8f0;
            position:relative;
            overflow:hidden;
        ">

            <div id="slider" style="position:relative; width:100%; height:100%;">

                {{-- SLIDE 1 --}}
                <div class="slide active" style="
                    position:absolute; inset:0;
                    display:flex; flex-direction:column; align-items:center; justify-content:center;
                    text-align:center; padding:20px; opacity:1; transition:opacity .4s;
                ">
                    <i class="fa-solid fa-qrcode" style="font-size:55px; color:#1a73e8; margin-bottom:15px;"></i>
                    <h3 style="font-size:22px; font-weight:800; margin-bottom:12px;">Escaneaste el QR</h3>
                    <p style="color:#555; font-size:15px;">Gracias por registrarte. Solo necesitamos algunos datos.</p>
                </div>

                {{-- SLIDE 2 --}}
                <div class="slide" style="
                    position:absolute; inset:0;
                    display:flex; flex-direction:column; align-items:center; justify-content:center;
                    text-align:center; padding:20px; opacity:0; transition:opacity .4s;
                ">
                    <i class="fa-solid fa-shield-halved" style="font-size:55px; color:#1a73e8; margin-bottom:15px;"></i>
                    <h3 style="font-size:22px; font-weight:800; margin-bottom:12px;">Tus datos están seguros</h3>
                    <p style="color:#555; font-size:15px;">Solo se usarán para control interno, nunca compartidos.</p>
                </div>

                {{-- SLIDE 3 --}}
                <div class="slide" style="
                    position:absolute; inset:0;
                    display:flex; flex-direction:column; align-items:center; justify-content:center;
                    text-align:center; padding:20px; opacity:0; transition:opacity .4s;
                ">
                    <i class="fa-solid fa-envelope-open-text" style="font-size:55px; color:#1a73e8; margin-bottom:15px;"></i>
                    <h3 style="font-size:22px; font-weight:800; margin-bottom:12px;">¿Necesitas ayuda?</h3>
                    <p style="color:#555; font-size:15px;">Escríbenos a ventasbsb@bsbbsb.cl</p>
                </div>

            </div>

        </div>

    </div>

</section>


{{-- SCRIPT PARA SLIDER --}}
<script>
    let index = 0;
    const slides = document.querySelectorAll('.slide');

    setInterval(() => {
        slides[index].style.opacity = 0;
        slides[index].classList.remove('active');

        index = (index + 1) % slides.length;

        slides[index].style.opacity = 1;
        slides[index].classList.add('active');
    }, 3000);
</script>

@endsection
