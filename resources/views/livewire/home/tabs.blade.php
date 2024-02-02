<div class="relative flex justify-center mx-auto ">

    <div style="background-image: url({{asset('storage/images/Dots.png')}});"
         class="absolute -z-10 h-[320px] w-[704px] mt-[202px] right-0">
    </div>

    <div class=" w-[691px]">
        <div class="flex justify-center pt-[112px] pb-2 gap-[24px] w-full select-none">

            <div
                wire:click="activeTab({{0}})"
                class="{{ $TabActive == 0 ? ' -top-[30px]' : 'top-0' }} relative transition-all duration-500  bg-gradient-to-r from-orange-400 to-orange-500 w-[215px] p-5 rounded-xl flex flex-col items-start justify-between cursor-pointer shadow-2xl shadow-orange-300">
                <img src="{{asset('storage/images/Languages-3.png')}}" alt="">
                <h4 class="text-white">آموزش برنامه نویسی</h4>
                <div class="bg-amber-50 bg-opacity-40 h-[1px] w-full m-1"></div>
            </div>

            <div
                wire:click="activeTab({{1}})"
                class="{{ $TabActive == 1 ? ' -top-[30px]' : 'top-0' }} relative transition-all duration-500 bg-gradient-to-r from-blue-400 to-blue-500 w-[215px] p-5 rounded-xl flex flex-col items-start justify-between cursor-pointer shadow-2xl shadow-blue-300">
                <img src="{{asset('storage/images/Languages-2.png')}}" alt="">
                <h4 class="text-white">مشاوره</h4>
                <div class="bg-amber-50 bg-opacity-40 h-[1px] w-full m-1"></div>
            </div>

            <div
                wire:click="activeTab({{2}})"
                class="{{ $TabActive == 2 ? '-top-[30px]' : 'top-0' }} relative transition-all duration-500 bg-gradient-to-r to-[#F55787] from-[#FE89B5] w-[215px] p-5 rounded-xl flex flex-col items-start justify-between cursor-pointer shadow-2xl shadow-[#FE89B5]">
                <img src="{{asset('storage/images/Languages.png')}}" alt="">
                <h4 class="text-white m-1">آموزش زبان</h4>
                <div class="bg-amber-50 bg-opacity-40 h-[1px] w-full m-1"></div>
            </div>

        </div>
        <div class="flex mt-[41px] bg-[#F5F6FF] rounded-xl pl-32 py-5 flex-wrap w-full">
            <div class="flex flex-col pr-5">
                <a href="#" class="pb-[10px] hover:text-purple-600 select-none">زبان انگلیسی</a>
                <a href="#" class="pb-[10px] hover:text-purple-600 select-none">زبان عربی</a>
                <a href="#" class="pb-[10px] hover:text-purple-600 select-none">زبان المانی</a>
                <a href="#" class="pb-[10px] hover:text-purple-600 select-none">زبان ایتالیایی</a>
            </div>
            <div class=" flex flex-col pr-16">
                <a href="#" class="pb-[10px] hover:text-purple-600 select-none">زبان کره ای</a>
                <a href="#" class="pb-[10px] hover:text-purple-600 select-none">زبان چینی</a>
                <a href="#" class="pb-[10px] hover:text-purple-600 select-none">زبان فرانسه</a>
                <a href="#" class="pb-[10px] hover:text-purple-600 select-none">زبان ایتالیایی</a>
            </div>
            <div class="flex flex-col pr-16">
                <a href="#" class="pb-[10px] hover:text-purple-600 select-none">زبان کره ای</a>
                <a href="#" class="pb-[10px] hover:text-purple-600 select-none">زبان چینی</a>
                <a href="#" class="pb-[10px] hover:text-purple-600 select-none">زبان فرانسه</a>
                <a href="#" class="pb-[10px] hover:text-purple-600 select-none">زبان اسپانیایی</a>
            </div>

        </div>
    </div>
</div>
