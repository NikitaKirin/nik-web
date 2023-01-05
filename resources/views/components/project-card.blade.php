<div class="w-full bg-bg-card p-[15px] shadow-lg hover:shadow-2xl sm:w-[48%] lg:w-[380px]">
    <div>
        <img src="{{ asset("images/youngeek-card.jpg") }}" width="350" height="180" class="block mb-[15px]">
        <h4 class="text-[20px] font-[600] mb-[15px]">Youngeek</h4>
        <div class="text-[16px] leading-[21px] mb-[15px]">
            <p class="mb-[10px]">Образовательная платформа для дошкольников</p>
            <p class="mb-[10px]"><b>Стек технологий:</b> Laravel, PostgreSQL, React</p>
            <p class="mb-[10px]">#Продакшн</p>
        </div>
        <div class="flex justify-between">
            <x-button/>
            <x-button/>
        </div>
    </div>
</div>

<div class="pop-up" id="pop-up-first">
    <div class="pop-up-container">
        <div class="pop-up-body">
            <img src="{{ asset('images/youngeek-card.jpg') }}" class="block mx-auto w-[500px] mb-[15px]">
            <h4 class="text-[30px] font-semibold">Youngeek</h4>
            <div class="text-[16px]">
                <p>Проект представляет собой образовательную платформу, в которой реализуется несколько ролей
                    пользователей.
                    Основной функционал платформы заключается в том, что пользователь с ролью владелец курса сможет с
                    помощью системой загружать отдельные фрагменты неких уроков и заданий в определенной предметной
                    области
                    в виде фрагментов медиадокументов, и потом собирать их в урок с помощью пошагового конструктора.</p>
            </div>
            <div class="absolute top-[15px] right-[15px] text-[30px] cursor-pointer" id="close-first">&#10006;</div>
        </div>
    </div>
</div>