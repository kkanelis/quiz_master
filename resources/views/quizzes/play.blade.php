<x-layout>
    @section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">
            Quiz
            @if($topic) (Temats: {{ ucfirst($topic) }}) @endif
            @if($difficulty) - Grūtība: {{ ucfirst($difficulty) }} @endif
        </h1>

        @forelse($questions as $question)
            <div class="mb-6 border p-4 rounded shadow">
                <p class="font-semibold">{{ $question->question }}</p>
                <ul class="mt-2 space-y-2">
                    @foreach(json_decode($question->options) as $option)
                        <li>
                            <label class="flex items-center">
                                <input type="radio" 
                                       name="question_{{ $question->id }}" 
                                       value="{{ $option }}" 
                                       class="mr-2">
                                {{ $option }}
                            </label>
                        </li>
                    @endforeach
                </ul>
            </div>
        @empty
            <p class="text-gray-500">Nav atrasts neviens jautājums ar šiem filtriem.</p>
        @endforelse
    </div>
    @endsection
</x-layout>
