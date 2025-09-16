<x-layout>

@section('content')
<div class="container mx-auto p-6">

    <h1 class="text-2xl font-bold mb-4">Dashboard</h1>

    <div class="mb-6">
        <h2 class="text-xl font-semibold">Izvēlies quiz tematu un grūtību</h2>
        <form action="{{ route('quizzes.play') }}" method="GET" class="mt-2">
            <div class="flex gap-4 items-center">
                <div>
                    <label for="topic" class="block font-medium">Temats:</label>
                    <select name="topic" id="topic" class="border rounded p-1">
                        <option value="">Visi</option>
                        <option value="math">Matemātika</option>
                        <option value="geography">Ģeogrāfija</option>
                        
                    </select>
                </div>

                <div>
                    <label for="difficulty" class="block font-medium">Grūtība:</label>
                    <select name="difficulty" id="difficulty" class="border rounded p-1">
                        <option value="">Visas</option>
                        <option value="easy">Viegls</option>
                        <option value="medium">Vidējs</option>
                        <option value="hard">Grūts</option>
                    </select>
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-1 rounded hover:bg-blue-600">
                    Play
                </button>
            </div>
        </form>
    </div>

    <div>
        <h2 class="text-xl font-semibold mb-2">Visi Quiz</h2>
        <ul class="space-y-2">
            @foreach($quizzes as $quiz)
                <li class="border p-2 rounded shadow hover:bg-gray-100">
                    <a href="{{ route('quizzes.play') }}?quiz_id={{ $quiz->id }}" class="font-medium text-blue-600">
                        {{ $quiz->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

</div>
</x-layout>
