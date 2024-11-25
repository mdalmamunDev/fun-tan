<section>
    @php
        $questions = [
            [
                'name' => 'What is FunTan?',
                'ans' => 'items',
            ],
            [
                'name' => 'How much does FunTan cost?',
                'ans' => 'items',
            ],
            [
                'name' => 'Where can I watch?',
                'ans' => 'items',
            ],
            [
                'name' => 'How do I cancel?',
                'ans' => 'items',
            ],
            [
                'name' => 'What can I watch on FunTan?',
                'ans' => 'items',
            ],
            [
                'name' => 'Is FunTan good for kids?',
                'ans' => 'items',
            ],
        ];
    @endphp

    <h2 class="text-2xl font-semibold mb-4">Frequently Asked Questions</h2>

    <div class="bg-gray-700 p-4 md:p-8 rounded-md place-items-center">
        @foreach($questions as $question)
            <div class="collapse collapse-arrow max-w-3xl bg-gray-900 rounded-md mb-2 p-1 md:p-3 px-2 md:px-5" onclick="toggleCollapse(this)">
                <input type="checkbox" class="collapse-checkbox hidden" />
                <div class="collapse-title text-lg font-medium">{{ $question['name'] }}</div>
                <div class="collapse-content text-sm text-gray-400">
                    {!! $question['ans'] !!}
                </div>
            </div>
        @endforeach
    </div>
</section>