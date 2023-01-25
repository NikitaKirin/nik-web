<div class="w-full bg-bg-card p-[15px] shadow-lg hover:shadow-2xl sm:w-[48%] lg:w-[380px]">
    <div class="flex flex-col h-[100%]">
        <img src="{{ $project->fon->url() }}" width="350" class="block mb-[15px]">
        <h4 class="text-[20px] font-[600] mb-[15px] leading-[25px]">{{ $project->title }}</h4>
        <div class="text-[16px] leading-[21px] mb-[15px]">
            <p class="mb-[10px]">{{ $project->annotation }}</p>
            <p class="mb-[10px]"><b>Стек технологий: </b>{{ $project->technologies }}</p>
            @if($project->tags)
                @foreach($project->tags as $tag)
                    <p class="mb-[10px]">{{ '#' . $tag->value }}</p>
                @endforeach
            @endif
        </div>
        <div class="flex justify-between mt-auto">
            <x-button class="button-pop-up bg-[#3884F8]" id="{{$loop->index}}">Подробнее</x-button>
            @if($project->demo_link)
                <x-button class="bg-black bg-[#BA38F8]" href="{{ $project->demo_link }}" target="_blank">Демо</x-button>
            @endif
        </div>

    </div>
</div>

<div class="pop-up" id="pop-up-{{$loop->index}}">
    <div class="pop-up-container">
        <div class="pop-up-body w-[90%] h-[90%] m-auto overflow-auto relative rounded-[10px] bg-white p-[15px] lg:p-[25px] lg:w-[900px]">
            <img src="{{ $project->fon->url() }}" class="block mx-auto w-[200px] mb-[15px] md:w-[400px] lg:w-[500px]">
            <h1 class="text-[20px] font-semibold mb-[15px] lg:text-[25px]">{{ $project->title }}</h1>
            <div class="lg:text-[20px]">
                {!! $project->description !!}
            </div>
            <div class="absolute top-[15px] right-[15px] text-[30px] cursor-pointer" id="close-first">&#10006;</div>
        </div>
    </div>
</div>