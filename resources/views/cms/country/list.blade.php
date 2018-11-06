<div class='container'>
    <h3>Country List</h3>
    @foreach ($countries as $country)
        <p>Country: {{ $country->country_name_sc }}</p>
    @endforeach
    
    <p>Country: {{App::environment()}}</p>
</div>