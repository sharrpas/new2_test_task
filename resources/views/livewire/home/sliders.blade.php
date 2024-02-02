<div class="flex flex-col relative justify-end pb-20 ">
    {{--  dot  --}}
    <div style="background-image: url({{asset('storage/images/Dots.png')}});"
         class="absolute -z-10 h-[320px] w-[100%] -left-[240px] top-[300px]">
    </div>
    {{--    arrow right--}}
    <div class="absolute -right-[100px]  h-[100px] w-[100px] top-[100px]">
        <img src="{{asset('storage/images/ArrowRight.png')}}" alt=""/>
    </div>
    {{--1--}}
    <div wire:click="activeSlider({{0}})" class="p-5 rounded-2xl border-dashed border-red-800    {{$SliderActive == 0 ?    'absolute top-[200px] left-[200px] z-10 transition duration-1000': 'opacity-40 hover:opacity-60 my-[40px]' }} select-none cursor-pointer "
         style="border-image: url({{asset('storage/images/Border.png')}})27 / 35px;"

    >
        <div
            class="{{$SliderActive == 0  ?  'bg-gradient-to-r to-[#626FF2] from-[#3347B0]': 'bg-[#F5F6FF]' }} h-[298px] w-[389px] rounded-xl p-5 flex flex-col justify-between ">

            <div class="flex justify-between">
                <div class="flex">
                    <img src="{{asset('storage/images/profile.png')}}" alt="" class="">
                    <div class="flex flex-col mr-3">
                        <h4 class="{{$SliderActive == 0  ?  'text-amber-50 text-amber-50 text-2xl font-bold': 'text-blue-600' }} font-bold text-2xl">گیلدا صدری</h4>
                        <h6 class="text-amber-500 text-base">زبان-انگلیسی</h6>
                        <div class="flex ">
                            <h6 class="text-sm ml-1 text">(۹۸نظر)</h6>
                            <h5 class="text-base ml-1">4.6</h5>
                            <img src="{{asset('storage/images/star.png')}}" alt="" class="">
                        </div>
                    </div>
                </div>
                <div>
                    <img src="{{asset('storage/images/Flags-3.png')}}" alt="" class="">
                </div>
            </div>

            <div class="">
                <h6 class="{{$SliderActive == 0  ?  'text-amber-50': 'text-[#333]' }}">من متوجه پیشرفت قابل توجهی در نحوه یادگیری زبان انگلیسی شده ام. من حتی
                    قبلاً
                    چند
                    مصاحبه به زبان انگلیسی داشته ام، چیزی که چند ماه پیش امکان پذیر نبود اما الان به راحتی مسلط
                    هستم
                    به
                    زبان
                    انگلیسی و قطعا در ادامه برای سطح بالا تر خود پیشرفت خواهم کرد....</h6>
            </div>

            <div class="flex justify-end ">
                <button
                    class="bg-gradient-to-r from-[#626FF2] to-[#3347B0] hover:bg-blue-700 text-white font-light py-2 px-4 rounded-[8px] mt-[13px]">
                    مشاهده کلاس ها
                    &nbsp;
                    &leftarrow;
                </button>
            </div>


        </div>
    </div>
    {{--2--}}
    <div wire:click="activeSlider({{1}})" class="p-5 rounded-2xl border-dashed border-red-800   {{$SliderActive == 1 ?     'absolute top-[200px] left-[200px] z-10 transition duration-1000': 'opacity-40 hover:opacity-60 my-[40px]' }} select-none cursor-pointer"
         style="border-image: url({{asset('storage/images/Border.png')}})27 / 35px;">
        <div
            class="{{$SliderActive == 1 ?  'bg-gradient-to-r to-[#626FF2] from-[#3347B0]': 'bg-[#F5F6FF]' }} h-[298px] w-[389px] rounded-xl p-5 flex flex-col justify-between ">

            <div class="flex justify-between">
                <div class="flex">
                    <img src="{{asset('storage/images/profile.png')}}" alt="" class="">
                    <div class="flex flex-col mr-3">
                        <h4 class="{{$SliderActive == 1 ?  'text-amber-50 text-amber-50 text-2xl font-bold': 'text-blue-600' }}">گیلدا صدری</h4>
                        <h6 class="text-amber-500 text-base">زبان-انگلیسی</h6>
                        <div class="flex ">
                            <h6 class="text-sm ml-1">(۹۸نظر)</h6>
                            <h5 class="text-base ml-1">4.6</h5>
                            <img src="{{asset('storage/images/star.png')}}" alt="" class="">
                        </div>
                    </div>
                </div>
                <div>
                    <img src="{{asset('storage/images/Flags.png')}}" alt="" class="">
                </div>
            </div>

            <div class="">
                <h6 class="{{$SliderActive == 1 ?  'text-amber-50': 'text-[#333]' }} text-base">من متوجه پیشرفت قابل توجهی در نحوه یادگیری زبان انگلیسی شده
                    ام. من حتی
                    قبلاً
                    چند
                    مصاحبه به زبان انگلیسی داشته ام، چیزی که چند ماه پیش امکان پذیر نبود اما الان به راحتی مسلط
                    هستم
                    به
                    زبان
                    انگلیسی و قطعا در ادامه برای سطح بالا تر خود پیشرفت خواهم کرد....</h6>
            </div>

            <div class="flex justify-end ">
                <button
                    class="bg-gradient-to-r from-[#626FF2] to-[#3347B0] hover:bg-blue-700 text-white font-light py-2 px-4 rounded-[8px] mt-[13px]">
                    مشاهده کلاس ها
                    &nbsp;
                    &leftarrow;
                </button>
            </div>


        </div>
    </div>
    {{--3--}}
    <div wire:click="activeSlider({{2}})" class="p-5 rounded-2xl border-dashed border-red-800    {{$SliderActive == 2 ?  'absolute top-[200px] left-[200px] z-10 transition duration-1000': 'opacity-40 hover:opacity-60 my-[40px]' }} select-none cursor-pointer"
         style="border-image: url({{asset('storage/images/Border.png')}})27 / 35px;">
        <div
            class="{{$SliderActive == 2 ?  'bg-gradient-to-r to-[#626FF2] from-[#3347B0]': 'bg-[#F5F6FF]' }} h-[298px] w-[389px] rounded-xl p-5 flex flex-col justify-between ">

            <div class="flex justify-between">
                <div class="flex">
                    <img src="{{asset('storage/images/profile.png')}}" alt="" class="">
                    <div class="flex flex-col mr-3">
                        <h4 class="{{$SliderActive == 2 ?  'text-amber-50 text-2xl font-bold': 'text-blue-600' }}">گیلدا صدری</h4>
                        <h6 class="text-amber-500 text-base">زبان-انگلیسی</h6>
                        <div class="flex ">
                            <h6 class="text-sm ml-1">(۹۸نظر)</h6>
                            <h5 class="text-base ml-1">4.6</h5>
                            <img src="{{asset('storage/images/star.png')}}" alt="" class="">
                        </div>
                    </div>
                </div>
                <div>
                    <img src="{{asset('storage/images/Flags-2.png')}}" alt="" class="">
                </div>
            </div>

            <div class="">
                <h6 class="{{$SliderActive == 2 ?  'text-amber-50': 'text-[#333]' }}">من متوجه پیشرفت قابل توجهی در نحوه یادگیری زبان انگلیسی شده ام. من حتی
                    قبلاً
                    چند
                    مصاحبه به زبان انگلیسی داشته ام، چیزی که چند ماه پیش امکان پذیر نبود اما الان به راحتی مسلط
                    هستم
                    به
                    زبان
                    انگلیسی و قطعا در ادامه برای سطح بالا تر خود پیشرفت خواهم کرد....</h6>
            </div>

            <div class="flex justify-end ">
                <button
                    class="bg-gradient-to-r from-[#626FF2] to-[#3347B0] hover:bg-blue-700 text-white font-light py-2 px-4 rounded-[8px] mt-[13px]">
                    مشاهده کلاس ها
                    &nbsp;
                    &leftarrow;
                </button>
            </div>


        </div>
    </div>

    {{--arrow left--}}
    <div class="absolute -right-[100px]  h-[100px] w-[100px] bottom-[220px]">
        <img src="{{asset('storage/images/ArrowLeft.png')}}" alt=""/>
    </div>
</div>
