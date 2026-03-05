<div>
<h3>welcome to the job page</h3>
@foreach ($jobs as $job)
    <div style="background-color: lightblue">
        <h4>{{ $job['title'] }}</h4>
        <p><strong>Company:</strong> {{ $job['company'] }}</p>
        <p><strong>Location:</strong> {{ $job['location'] }}</p>
        <p><strong>Description:</strong> {{ $job['description'] }}</p>
    </div>
@endforeach
</div>
