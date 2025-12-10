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

        {{-- COLUMNA IZQUIERDA -> FORM --}}
        <div style="flex:1; min-width:320px;">

            <h1 style="font-size:34px; font-weight:900; margin-bottom:8px; color:#000;">
                BSB<span style="color:#1a73e8;">SPA</span>
            </h1>

            <p style="color:#555; margin-bottom:25px; font-size:15px; line-height:1.4;">
                Bienvenido 👋<br>
                Completa tus datos para continuar.
            </p>

            <form method="POST" style="text-align:left;">
                @csrf

                <label style="font-weight:600;">RUT</label>
                <input type="text" name="rut" placeholder="11.111.111-1" required
                    style="width:100%; padding:12px; margin-bottom:16px; border-radius:12px; border:1px solid #ccc;">

                <label style="font-weight:600;">Nombre</label>
                <input type="text" name="nombre" placeholder="Tu nombre" required
                    style="width:100%; padding:12px; margin-bottom:16px; border-radius:12px; border:1px solid #ccc;">

                <label style="font-weight:600;">Correo</label>
                <input type="email" name="correo" placeholder="correo@ejemplo.cl" required
                    style="width:100%; padding:12px; margin-bottom:24px; border-radius:12px; border:1px solid #ccc;">

                <button type="submit"
                    style="width:100%; background:#1a73e8; color:white; padding:14px; border:none; border-radius:12px; font-size:17px; font-weight:700; cursor:pointer;">
                    Enviar datos ✔
                </button>
            </form>

        </div>

        {{-- COLUMNA DERECHA -> INFO --}}
        <div style="
            flex:1;
            min-width:280px;
            background:#f9fafc;
            border-radius:18px;
            padding:25px 30px;
            border:1px solid #e2e8f0;
            text-align:center;
        ">

            <div style="
                font-size:55px;
                margin-bottom:15px;
                color:#1a73e8;
            ">
                <i class="fa-solid fa-circle-info"></i>
            </div>

            <h3 style="font-size:22px; font-weight:800; margin-bottom:12px;">Información Importante</h3>

            <p style="color:#555; font-size:15px; line-height:1.5; margin-bottom:20px;">
                Tu información será utilizada únicamente para fines internos.
                No compartimos tus datos con terceros.
            </p>

            <div style="width:100%; height:1px; background:#ddd; margin:20px 0;"></div>

            <p style="font-size:14px; color:#666; line-height:1.4;">
                Si tienes dudas o necesitas asistencia, puedes escribirnos al:<br>
                <strong style="color:#1a73e8;">soporte@bsbspa.cl</strong>
            </p>
        </div>

    </div>

</section>

@endsection
