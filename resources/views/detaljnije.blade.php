@extends('layouts.app')

@section('content')
<script>
    const podaci = <?php echo json_encode($proizvodi, JSON_UNESCAPED_UNICODE); ?>;
    document.addEventListener('DOMContentLoaded', ()=>{
      proizvod.prikazi(proizvod.nadji_ID());
      document.querySelector('#korpa').innerHTML = `Korpa: ${formatiranje.format(korpa.ukupanIznos())} din`;
    });

</script>  
    </header>
	<div class="container-fluid">
        <div id="proizvodi"></div>
    </div>
@endsection