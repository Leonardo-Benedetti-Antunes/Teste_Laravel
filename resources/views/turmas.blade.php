<x-layout>
    <x-slot:heading>
        Turmas
    </x-slot:heading>

    <ul>
        @foreach ($turmas as $turmas)
            <li>
                <a href = "/turmas/{{ $turmas['id']}}">
                    <strong> {{$turmas["turma"] }}:</strong> {{$turmas["sala"]}} 
                </a>
            </li>
        @endforeach
    </ul>
    
</x-layout>