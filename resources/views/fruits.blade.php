@foreach ($fruits as $fruit)
    <div>
        <p>Name: {{$fruit->name}}</p>
        <p>Price: {{$fruit->price}}</p>
    </div>
    <hr />
@endforeach