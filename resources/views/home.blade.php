<x-layout>
    <section class="flex flex-col md:flex-row justify-center items-center h-[calc(100vh-4rem)] gap-4 px-9 py-10 bg-gray-50">
        <div class="flex flex-col flex-1">
            <p class="bg-orange-400 rounded-md px-2 w-fit">HIGH PERFORMANCE FACILITY</p>
            <h1 class="text-[6vw] font-bold leading-[6vw]">YOUR ARENA <br><span class="text-[#0052FF]">UNLEASHED</span></h1>
            <p class="text-gray-500">Experience sports at the highest level. Pro-grade flooring, stadium lighting, and real-time booking for the elite athlete in you.</p>
        </div>
        <div class="flex-1 flex justify-start md:justify-end items-center h-[65%] md:h-full w-full md:w-auto">
            <div class="flex h-full w-full relative md:w-[80%]">
                <img src="{{ asset('header_pic.png') }}" alt="Description" class="rounded-xl object-cover absolute w-full h-full">
                <div class="w-full h-full flex flex-col justify-end p-9">
                    <div class="relative">
                        <h2 class="text-white font-bold text-[1.3rem]">THE KINETIC HUB</h2>
                        <p class="text-gray-400">Premium Futsal</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>