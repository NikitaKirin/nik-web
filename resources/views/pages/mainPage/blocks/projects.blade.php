<section class="mb-[60px] sm:mb-[80px] lg:mb-[120px]">
    <h2 class="block-title"># Реализованные проекты</h2>
    <div class="flex justify-between flex-wrap gap-[15px] lg:px-[15px]">
        @foreach($projects as $project)
            <x-project-card :$project :$loop/>
        @endforeach
    </div>
</section>