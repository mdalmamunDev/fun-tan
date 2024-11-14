<section>
    @php
        $questions = [
            [
                'name' => 'What is Netflix?',
                'ans' => '<p>Netflix is a streaming service that offers a wide variety of award-winning TV shows, movies, anime, documentaries, and more on thousands of internet-connected devices.</p><p class="mt-2">You can watch as much as you want, whenever you want without a single commercial – all for one low monthly price. There\'s always something new to discover and new TV shows and movies are added every week!</p>',
            ],
            [
                'name' => 'How much does Netflix cost?',
                'ans' => '<p>Netflix has various subscription plans available. Please visit their website to see the latest pricing options.</p><p class="mt-2">You can watch as much as you want, whenever you want without a single commercial – all for one low monthly price. There\'s always something new to discover and new TV shows and movies are added every week!</p>',
            ],
            [
                'name' => 'Where can I watch?',
                'ans' => '<p>You can watch Netflix on any internet-connected device that offers the Netflix app, including smart TVs, game consoles, streaming media players, smartphones, and tablets.</p><p class="mt-2">You can watch as much as you want, whenever you want without a single commercial – all for one low monthly price. There\'s always something new to discover and new TV shows and movies are added every week!</p>',
            ],
            [
                'name' => 'How do I cancel?',
                'ans' => '<p>You can cancel your Netflix account anytime through your account settings.</p><p class="mt-2">You can watch as much as you want, whenever you want without a single commercial – all for one low monthly price. There\'s always something new to discover and new TV shows and movies are added every week!</p>',
            ],
            [
                'name' => 'What can I watch on Netflix?',
                'ans' => '<p>Netflix has an extensive library of feature films, documentaries, TV shows, anime, award-winning Netflix originals, and more.</p><p class="mt-2">You can watch as much as you want, whenever you want without a single commercial – all for one low monthly price. There\'s always something new to discover and new TV shows and movies are added every week!</p>',
            ],
            [
                'name' => 'Is Netflix good for kids?',
                'ans' => '<p>Netflix has a dedicated section for kids with parental controls to ensure age-appropriate content.</p><p class="mt-2">You can watch as much as you want, whenever you want without a single commercial – all for one low monthly price. There\'s always something new to discover and new TV shows and movies are added every week!</p>',
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