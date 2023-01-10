<section class="border-b-2 pb-[15px] mb-[20px] lg:pb-[30px] lg:mb-[40px]">
    <div class="w-full mb-[15px] lg:mb-[30px]">
        <p class="text-[16px] opacity-50 xl:text-[20px]">{{ $workExperience->start_date . ' – ' . $workExperience->end_date}}</p>
        <h4 class="text-[18px] font-regular xl:text-[22px]">{{ $workExperience->company_name }}</h4>
    </div>
    <div class="flex flex-col gap-[10px] lg:flex-row xl:items-center">
        <h3 class="text-[18px] font-semibold border-l-2 pl-[10px] lg:border-r-2 lg:mr-[30px] lg:border-l-0 lg:text-[24px] xl:w-[560px] xl:pr-[50px]">
            {{ $workExperience->position }}
        </h3>
        <p class="lg:text-[20px] xl:w-[600px]">
            {{ $workExperience->description }}
        </p>
    </div>
</section>
