<x-layout pagetitle="Jobs">
  <x-slot:heading>
   Jobs list
  </x-slot:heading>


<ul>
@foreach ($jobs as $job)
    
  <li>
    <a href="/jobs/{{ $job['id'] }}">
    <strong>{{ $job['title'] }}:</strong> {{ $job['salary'] }} per year
    </a>
  </li>
  
@endforeach
</ul>

</x-layout>