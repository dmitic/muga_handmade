@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <script>
      document.addEventListener('DOMContentLoaded', ()=>{
            korpa.napraviTabelu();
        });
    </script>
    <div class="container">
      <div id="proizvodi"></div>
      @if (Auth::check())
      <div id="selekt" class="col-mb-3">
        Dužina gazišta:
          <script>
            const duzine = ["20", "20.5", "21", "21.5", "22", "22.5", "23", "23.5", "24", "24.5", "25", "25.5", "26", "26.5", "27", "27.5", "28", "28.5", "29", "29.5", "30", "30.5", "31", "31.5", "32", "32.5", "33", "33.5", "34", "34.5", "35"];
            const selectList = document.createElement("select");
                  selectList.id = "gaziste";
                  selectList.name = "gaziste";
                  selectList.style ="width: 100px;"
                  document.querySelector("#selekt").appendChild(selectList);

                  duzine.forEach((duzina, ind) => {
                      const option = document.createElement("option");
                      option.id ="duzGaz";
                      option.value = duzine[ind];
                      option.text = duzine[ind] + " cm";
                      selectList.appendChild(option);
                  });
          </script>
          <span id="tuts" class="col-mb-3">
              <a href="#" class="badge badge-light" target="_blank">Uputstvo za merenje unutrašnje dužine gazišta</a>
              {{-- <a href="#" class="btn btn-link" target="_blank">Uputstvo za merenje unutrašnje dužine gazišta</a> --}}
            </span>
      </div>
      
        <p>Napomena:</p>
        <textarea name="napomena" id="napomena" class="txtAreaKorpa"></textarea>  
      @endif
</div>
@endsection