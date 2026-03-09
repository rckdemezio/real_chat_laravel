<div class="w-full overflow-hidden ">
    <div class="border-b flex flex-col overflow-y-scroll grow h-full">

        {{-- header --}}
        <header class="w-full sticky inset-x-0 flex pb-[5px] pt-[5px] top-0 z-10 bg-gray-900 border-b">

            <div class="flex w-full items-center px-2 gap-2 md:gap-5">

                <a class="shrink-0 lg:hidden" href="#">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                    </svg>


                </a>

                {{-- avatar --}}
                <div class="shrink-0">
                    <x-avatar class="h-9 w-9 lg:w-11 lg:h-11" />
                </div>

                <h6 class="font-bold truncate"> {{ fake()->name }} </h6>

            </div>

        </header>
        {{-- body --}}
        <main
            class="flex flex-col gap-3 p-2.5 overflow-y-auto flex-grow overscroll-contain overflow-x-hidden w-full my-auto">

            <div @class(['max-w-[85%] md:max-w-[78%] flex w-auto gap-2 relative mt-2'])>

                {{-- avatar --}}
                <div @class(['shrink-0'])>

                    <x-avatar />
                </div>

                {{-- message body --}}

                <div @class([
                    'flex flex-wrap text-[15px] rounded-xl p-2.5 flex flex-cols text-white bg-[#f6f6f8fb]',

                    'rounded-bl-none border border-gray-400/40' => false,
                    'rounded-br-none bg-blue-500/80 text-white' => true,
                ])>

                    <p class="whitespace-normal truncate text-sm md:text-base tracking-wide lg:tracking-normal">
                        Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Magnam fuga mollitia animi minima officia nobis
                        doloremque error dolore, autem ducimus pariatur dolor corrupti consequatur voluptatem veniam
                        unde
                        veritatis quaerat nulla.
                    </p>

                    <div class="ml-auto flex gap-2">
                        <p @class(['text-xs', 'text-gray-400' => false, 'text-white' => true])>

                            4:25 am

                        </p>

                        {{-- status da mensagem: lida | não lida --}}

                        <div>
                            {{-- Double double --}}
                            <span @class(['text-gray-400'])>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                                    <path
                                        d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0" />
                                    <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708" />
                                </svg>
                            </span>

                            {{-- single ticks --}}
                            {{-- <span @class(['text-gray-400'])>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check2" viewBox="0 0 16 16">
                                <path
                                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                            </svg>
                        </span> --}}

                        </div>

                    </div>


                </div>



            </div>

        </main>

        {{-- envio de mensagens --}}
        <footer class="shrink-0 z-10 bg-slate-700 inset-x-0">

            <div class="p-2 border-t">

                <form method="post">
                    @csrf
                    <input type="hidden" autocomplete="false" style="display: none">

                    <div class="grid grid-cols-12">
                        <input type="text" autocomplete="off" autofocus placeholder="digite a mensagem aqui."
                            maxlength="1700"
                            class="col-span-10 bg-gray-600 border-0 outline-0 focus:border-0 focus:ring-0 hover:ring-0 rounded-lg focus:outline-none">

                        <button type="submit" class="col-span-2">Enviar</button>

                    </div>

                </form>

                @error('body')
                    <p> {{ $message }} </p>
                @enderror

            </div>

        </footer>
    </div>

</div>
