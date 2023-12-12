@extends('layout.layout')
<script>
window.onclick = function(event) {
  if (event.target.className === 'modal') {
    event.target.style.display = 'none';
  }
};

const forms = document.querySelectorAll('#form')
       
        for (const form of forms) {
            const decisionInput = form.querySelector("#dec")
            const submitButtons = form.querySelectorAll("#sub")

            for (const button of submitButtons) {
                button.addEventListener('click', () => {
                    decisionInput.value = button.value;
                })
            }
        }
</script>
@section('content')
<div>
    Welcome, {{ session('name') }}!
</div>
<button class="btn3" onclick="document.getElementById('id03').style.display='block'">Search for Patients</button>
<div id="id03" class="modal">
    <div class="modal-content">
        <span class="close" onclick="document.getElementById('id03').style.display='none'">&times;</span>
        <iframe src="{{ route('Homwefind.patientsearch') }}" width="100%" height="50%"></iframe>
    </div>
</div>
@endsection