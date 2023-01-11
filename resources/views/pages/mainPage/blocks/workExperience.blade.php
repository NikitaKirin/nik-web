<section class="mb-[60px] sm:mb-[80px] xl:mb-[120px]" id="works">
    <h2 class="block-title"># Опыт работы</h2>
    @foreach($workExperiences as $workExperience)
        <x-work-card :$workExperience/>
    @endforeach
</section>