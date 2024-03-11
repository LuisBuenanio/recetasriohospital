<div class="form-group">
    {{-- <head>
        <img src="{{ asset('img/logos/logo.png') }}" alt="Tu Imagen">
    </head> --}}
    <div id="content-container">
        <header>
            <div id="result">             
            <span id="numberContainer">N° </span> {{$formulario008->id}} <span id="numbers"></span>
          </div>  
          {!! Form::hidden('users_id', auth()->user()->id) !!}
        </header>
      </div>
</div>

<table border="1" cellspacing="-5" cellpadding="0" width="100%">
    <thead>
      <tr>
        <th style="font-size: 10px">INSTITUCIÓN DEL SISTEMA</th>
        <th style="font-size: 10px">UNIDAD OPERATIVA</th>
        <th style="font-size: 10px">CÓDIGO</th>
        <th style="font-size: 10px">LOCALIZACIÓN</th>
        <th style="font-size: 10px">NÚMERO HISTORIA CLÍNICA</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td style="font-size: 10px"><input type="text" id="institucion" name="institucion" value="RIOHOSPITAL" disabled /></td>
        <td style="font-size: 10px"><input type="text" id="unidad_operativa" name="unidad_operativa" value="PRIVADO" disabled /></td>
        <td style="font-size: 10px"><input type="text" id="codigo" name="codigo" value="{{ $formulario008->codigo }}" /></td>
        <td style="font-size: 10px">
          <label for="provincia">PROVINCIA:</label>
          <input type="text" id="provincia" name="provincia" value="CHIMBORAZO" disabled />

          <label for="canton">CANTÓN:</label>
          <input type="text" id="canton" name="canton" value="RIOBAMBA" disabled />

          <label for="parroquia">PARROQUIA:</label>
          <input type="text" id="parroquia" name="parroquia" value="LIZARZABURU" disabled />
        </td>
        <td style="font-size: 10px"><input type="text" id="historia_clinica" name="historia_clinica" value="{{ $formulario008->historia_clinica }}"/></td>
      </tr>
    </tbody>
  </table>