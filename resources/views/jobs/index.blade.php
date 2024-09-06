<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

            <x-forms.form action="/search">
                <x-forms.input name="q" placeholder="Web developer..." :label="false"></x-forms.input>
            </x-forms.form>
        </section>
        <section>
            <x-section-heading class="pt-10">Features Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach

            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-4">
                @foreach($tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-3 space-y-6 ">
                @foreach($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>

        </section>
    </div>
</x-layout>
