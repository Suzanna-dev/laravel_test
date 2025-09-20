<x-layout pagetitle="Jobs">
  
  <x-slot:heading>
    Job details View
  </x-slot:heading>

  <h1><strong>{{ $job['title'] }}</strong></h1>
  <p>This job pays {{ $job['salary'] }} per year</p>

</x-layout>