<section>
    @php
        $questions = [
            [
                'name' => 'What is FunTan?',
                'ans' => 'FunTan is an online streaming platform that provides users access to a vast library of movies, TV shows, documentaries, and exclusive FunTan Originals. It caters to a global audience with content across various genres, ensuring there’s something for everyone.',
            ],
            [
                'name' => 'How much does FunTan cost?',
                'ans' => 'FunTan offers flexible pricing plans. The standard plan costs $9.99 per month, which provides unlimited access to all content. They also offer a discounted annual plan at $99.99, saving you two months\' cost. New users can enjoy a 7-day free trial before committing to a subscription.',
            ],
            [
                'name' => 'Where can I watch?',
                'ans' => 'You can stream FunTan on multiple devices, including smartphones (iOS and Android), tablets, smart TVs (like Roku, Apple TV, and Amazon Fire TV), gaming consoles (such as PlayStation and Xbox), and web browsers on computers. Simply download the FunTan app or visit the FunTan website to get started.',
            ],
            [
                'name' => 'How do I cancel?',
                'ans' => 'Canceling your FunTan subscription is simple and hassle-free. Log in to your FunTan account, navigate to the "Account Settings" page, and click on "Manage Subscription." From there, select "Cancel Subscription" and follow the on-screen instructions. You can cancel anytime without any cancellation fees.',
            ],
            [
                'name' => 'What can I watch on FunTan?',
                'ans' => 'FunTan boasts an extensive library of entertainment, including blockbuster movies, hit TV series, critically acclaimed documentaries, stand-up comedy specials, and FunTan Originals. The platform updates its catalog regularly with new releases and trending titles to keep viewers engaged.',
            ],
            [
                'name' => 'Is FunTan good for kids?',
                'ans' => 'Absolutely! FunTan features a dedicated Kids’ Mode, which includes a carefully curated selection of age-appropriate shows, educational programs, and animated movies. Parents can set up profiles for their children with parental controls to ensure a safe and family-friendly viewing experience.',
            ],
        ];

    @endphp

    <h2 class="text-2xl font-semibold mb-4">Frequently Asked Questions</h2>

    <div class="bg-red-50 dark:bg-gray-700 p-4 md:p-8 rounded-md place-items-center">
        @foreach($questions as $question)
            <div class="collapse collapse-arrow max-w-3xl bg-red-100 dark:bg-gray-900 rounded-md mb-2 p-1 md:p-3 px-2 md:px-5" onclick="toggleCollapse(this)">
                <input type="checkbox" class="collapse-checkbox hidden" />
                <div class="collapse-title text-lg font-medium">{{ $question['name'] }}</div>
                <div class="collapse-content text-sm text-gray-600 dark:text-gray-400">
                    {!! $question['ans'] !!}
                </div>
            </div>
        @endforeach
    </div>
</section>